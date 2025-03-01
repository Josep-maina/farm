<footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <!-- Footer About -->
                <div class="footer-about">
                    <h3>Vermi-Farm Initiative</h3>
                    <p>Empowering farmers through sustainable agriculture practices and financial inclusion for a climate-resilient future.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="programs.php">Programs</a></li>
                        <li><a href="impact.php">Impact</a></li>
                        <li><a href="get-involved.php">Get Involved</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-contact">
                    <h3>Contact Information</h3>
                    <address>
                        <p>11248, Tom Mboya Street</p>
                        <p>Nairobi, Kenya</p>
                        <p><a href="mailto:info@vermi-farm.org">info@vermi-farm.org</a></p>
                        <p><a href="tel:+254700000000">+254 700 000 000</a></p>
                    </address>
                </div>
                
                <!-- Newsletter -->
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates on our programs and impact.</p>
                    <form class="newsletter-form" method="post" action="includes/subscribe.php">
                        <?php
                        // CSRF Protection
                        $csrf_token = bin2hex(random_bytes(32));
                        $_SESSION['csrf_token'] = $csrf_token;
                        ?>
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your email" required>
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Vermi-Farm Initiative. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>

