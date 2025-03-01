<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Vermi-Farm Initiative'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Empowering farmers through sustainable agriculture practices and financial inclusion for a climate-resilient future.'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <style>
        @font-face {
            font-family: 'Glacial Indifference';
            src: url('assets/fonts/GlacialIndifference-Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Glacial Indifference';
            src: url('assets/fonts/GlacialIndifference-Bold.woff2') format('woff2');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }
    </style>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>11248, Tom Mboya Street, Nairobi - Kenya</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>info@vermi-farm.org</span>
                </div>
            </div>
            <div class="social-links">
                <span class="follow-text">Follow us:</span>
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!--header-->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <span class="logo-text"><span class="logo-vermi">Vermi-Farm</span> Initiative</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="index.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/index.php') ? 'active' : ''; ?>">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/about.php') ? 'active' : ''; ?>">About Us</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/services.php') ? 'active' : ''; ?>">Services</a></li>
                    <li class="nav-item"><a href="programs.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/programs.php') ? 'active' : ''; ?>">Programs</a></li>
                    <li class="nav-item"><a href="impact.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/impact.php') ? 'active' : ''; ?>">Impact</a></li>
                    <li class="nav-item"><a href="get-involved.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/get-involved.php') ? 'active' : ''; ?>">Get Involved</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="donate.php" class="donate-btn">
                    Donate Now
                    <i class="fas fa-arrow-right"></i>
                </a>
                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="container">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-item"><a href="index.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/index.php') ? 'active' : ''; ?>">Home</a></li>
                <li class="mobile-nav-item mobile-dropdown">
                    <a href="about.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/about.php') ? 'active' : ''; ?>">About Us</a>
                    <span class="dropdown-toggle"><i class="fas fa-chevron-down"></i></span>
                    <ul class="mobile-dropdown-menu">
                        <li><a href="about.php#mission">Our Mission</a></li>
                        <li><a href="about.php#team">Our Team</a></li>
                        <li><a href="about.php#history">Our History</a></li>
                    </ul>
                </li>
                <li class="mobile-nav-item mobile-dropdown">
                    <a href="services.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/services.php') ? 'active' : ''; ?>">Services</a>
                    <span class="dropdown-toggle"><i class="fas fa-chevron-down"></i></span>
                    <ul class="mobile-dropdown-menu">
                        <li><a href="services.php#training">Training & Workshops</a></li>
                        <li><a href="services.php#recycling">Recycling Food Waste</a></li>
                        <li><a href="services.php#consulting">Consulting</a></li>
                    </ul>
                </li>
                <li class="mobile-nav-item mobile-dropdown">
                    <a href="programs.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/programs.php') ? 'active' : ''; ?>">Programs</a>
                    <span class="dropdown-toggle"><i class="fas fa-chevron-down"></i></span>
                    <ul class="mobile-dropdown-menu">
                        <li><a href="programs.php#digishamba">DigiShamba</a></li>
                        <li><a href="programs.php#adapt-finance">Adapt Finance</a></li>
                        <li><a href="programs.php#wallet">Vermi-Farm Wallet</a></li>
                    </ul>
                </li>
                <li class="mobile-nav-item"><a href="impact.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/impact.php') ? 'active' : ''; ?>">Impact</a></li>
                <li class="mobile-nav-item"><a href="get-involved.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/get-involved.php') ? 'active' : ''; ?>">Get Involved</a></li>
                <li class="mobile-nav-item"><a href="contact.php" class="mobile-nav-link <?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                <li class="mobile-nav-item">
                    <a href="donate.php" class="btn btn-primary mobile-donate">
                        Donate Now
                        <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

