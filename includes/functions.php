<?php
/**
 * Vermi-Farm Initiative Functions
 * Author: Vermi-Farm Team
 * Version: 1.0
 */

// Security functions
/**
 * Set security headers for HTTP responses
 */
function set_security_headers() {
    // Restrict framing to prevent clickjacking
    header("X-Frame-Options: DENY");
    
    // Prevent MIME type sniffing
    header("X-Content-Type-Options: nosniff");
    
    // Basic Content Security Policy (CSP)
    header("Content-Security-Policy: default-src 'self'");
    
    // Block XSS attacks (for older browsers)
    header("X-XSS-Protection: 1; mode=block");
    
    // Force HTTPS (if applicable)
    // header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
}
/**
 * Sanitize user input
 * @param string $data
 * @return string
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Validate email address
 * @param string $email
 * @return bool
 */
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Check if CSRF token is valid
 * @param string $token
 * @return bool
 */
function is_csrf_valid($token) {
    if (!isset($_SESSION['csrf_token']) || !isset($token)) {
        return false;
    }
    
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Generate a random string
 * @param int $length
 * @return string
 */
function generate_random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Database functions (if needed)

/**
 * Connect to database
 * @return PDO
 */
function db_connect() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=vermi_farm;charset=utf8mb4', 'username', 'password');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    } catch (PDOException $e) {
        error_log('Database connection error: ' . $e->getMessage());
        return null;
    }
}

/**
 * Execute a prepared statement
 * @param PDO $db
 * @param string $sql
 * @param array $params
 * @return PDOStatement|false
 */
function db_query($db, $sql, $params = []) {
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        error_log('Database query error: ' . $e->getMessage());
        return false;
    }
}

// Newsletter subscription function

/**
 * Subscribe email to newsletter
 * @param string $email
 * @return bool
 */
function subscribe_to_newsletter($email) {
    if (!is_valid_email($email)) {
        return false;
    }
    
    $db = db_connect();
    if (!$db) {
        return false;
    }
    
    // Check if email already exists
    $stmt = db_query($db, "SELECT id FROM subscribers WHERE email = ?", [$email]);
    if ($stmt && $stmt->rowCount() > 0) {
        return true; // Already subscribed
    }
    
    // Add new subscriber
    $result = db_query(
        $db,
        "INSERT INTO subscribers (email, created_at) VALUES (?, NOW())",
        [$email]
    );
    
    return $result !== false;
}

