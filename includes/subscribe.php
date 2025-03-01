<?php
/**
 * Newsletter Subscription Handler
 * Author: Vermi-Farm Team
 * Version: 1.0
 */

// Start session
session_start();

// Include functions
require_once 'functions.php';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || !is_csrf_valid($_POST['csrf_token'])) {
        die('Invalid request');
    }
    
    // Validate email
    if (!isset($_POST['email']) || !is_valid_email($_POST['email'])) {
        $_SESSION['subscribe_error'] = 'Please enter a valid email address.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    
    // Sanitize email
    $email = sanitize_input($_POST['email']);
    
    // Subscribe to newsletter
    if (subscribe_to_newsletter($email)) {
        $_SESSION['subscribe_success'] = 'Thank you for subscribing to our newsletter!';
    } else {
        $_SESSION['subscribe_error'] = 'An error occurred. Please try again later.';
    }
    
    // Redirect back
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    // Not a POST request
    header('Location: /');
    exit;
}

