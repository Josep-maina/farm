<?php
// Start session for secure session management
session_start();

// Security headers
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:;");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

// Include database connection if needed
// include_once 'includes/db_connect.php';

// Include functions
include_once 'includes/functions.php';

include_once 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider">
            <!-- Slide 1 -->
            <div class="hero-slide active" style="background-image: url('assets/images/slide1.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1>Vermi-Farm DigiShamba</h1>
                    <p>Digital solutions for sustainable farming</p>
                    <a href="programs.php#digishamba" class="btn btn-accent">Learn More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="hero-slide" style="background-image: url('assets/images/slide2.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1>Vermi-Farm Adapt Finance Program</h1>
                    <p>Financial inclusion for climate resilience</p>
                    <a href="programs.php#adapt-finance" class="btn btn-accent">Discover Program <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="hero-slide" style="background-image: url('assets/images/slide3.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1>Vermi-Farm Wallet</h1>
                    <p>Secure financial transactions for farmers</p>
                    <a href="programs.php#wallet" class="btn btn-accent">Get Started <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="hero-slide" style="background-image: url('assets/images/slide4.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1>Organic Fertilizers</h1>
                    <p>Sustainable solutions for soil health</p>
                    <a href="services.php#fertilizers" class="btn btn-accent">Explore Products <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Slide 5 -->
            <div class="hero-slide" style="background-image: url('assets/images/slide5.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1>Village Champions</h1>
                    <p>Empowering young farmers for a sustainable future</p>
                    <a href="programs.php#champions" class="btn btn-accent">Join the Movement <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Slider Controls -->
            <div class="slider-controls">
                <button class="slider-arrow prev-slide"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <span class="slider-dot active" data-slide="0"></span>
                    <span class="slider-dot" data-slide="1"></span>
                    <span class="slider-dot" data-slide="2"></span>
                    <span class="slider-dot" data-slide="3"></span>
                    <span class="slider-dot" data-slide="4"></span>
                </div>
                <button class="slider-arrow next-slide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Vermi-Farm Initiative</h2>
                    <p>Vermi-Farm Initiative is dedicated to empowering farmers through sustainable agriculture practices and financial inclusion. We believe in creating resilient farming communities that can thrive in the face of climate change while ensuring food security.</p>
                    <p>Our approach combines traditional farming wisdom with innovative technologies, creating a sustainable ecosystem that benefits farmers, communities, and the environment.</p>
                    
                    <div class="impact-stats">
                        <div class="stat-item">
                            <span class="stat-number">10,000+</span>
                            <p class="stat-label">Farmers Reached</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">25+</span>
                            <p class="stat-label">Communities Served</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <p class="stat-label">Years of Experience</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30+</span>
                            <p class="stat-label">Partner Organizations</p>
                        </div>
                    </div>
                    
                    <a href="about.php" class="text-link">Learn more about our mission <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <div class="pillars-carousel">
                    <h3>Our Key Pillars</h3>
                    
                    <div class="pillars-container">
                        <div class="pillar-slide active">
                            <div class="pillar-icon">🌱</div>
                            <h4>Sustainability</h4>
                            <p>Promoting sustainable farming practices that preserve natural resources for future generations.</p>
                        </div>
                        
                        <div class="pillar-slide">
                            <div class="pillar-icon">💡</div>
                            <h4>Innovation</h4>
                            <p>Leveraging technology and innovative approaches to transform agricultural practices.</p>
                        </div>
                        
                        <div class="pillar-slide">
                            <div class="pillar-icon">🤝</div>
                            <h4>Inclusion</h4>
                            <p>Ensuring financial and social inclusion for all farmers, regardless of their background.</p>
                        </div>
                        
                        <div class="pillar-slide">
                            <div class="pillar-icon">🌍</div>
                            <h4>Climate Resilience</h4>
                            <p>Building farming systems that can withstand and adapt to changing climate conditions.</p>
                        </div>
                        
                        <div class="pillar-slide">
                            <div class="pillar-icon">♻️</div>
                            <h4>Climate Adaptation & Mitigation</h4>
                            <p>Implementing strategies to reduce carbon footprint and adapt to climate change.</p>
                        </div>
                    </div>
                    
                    <div class="pillar-controls">
                        <button class="pillar-arrow prev-pillar"><i class="fas fa-chevron-left"></i></button>
                        <div class="pillar-dots">
                            <span class="pillar-dot active" data-pillar="0"></span>
                            <span class="pillar-dot" data-pillar="1"></span>
                            <span class="pillar-dot" data-pillar="2"></span>
                            <span class="pillar-dot" data-pillar="3"></span>
                            <span class="pillar-dot" data-pillar="4"></span>
                        </div>
                        <button class="pillar-arrow next-pillar"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>We provide a range of services designed to promote sustainable farming practices, financial inclusion, and climate resilience for farming communities.</p>
            </div>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Training & Workshops</h3>
                    <p>Comprehensive training programs on sustainable farming techniques, vermiculture, and organic fertilizer production.</p>
                    <a href="services.php#training" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>Recycling Food Waste</h3>
                    <p>Turn food waste into valuable resources through our innovative recycling programs and vermiculture systems.</p>
                    <a href="services.php#recycling" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Engagement</h3>
                    <p>Building stronger, more resilient communities through collaborative agricultural initiatives and knowledge sharing.</p>
                    <a href="services.php#community" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Organic Fertilizer Production</h3>
                    <p>High-quality, sustainable organic fertilizers that improve soil health and crop yields without harmful chemicals.</p>
                    <a href="services.php#fertilizer" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Climate-Smart Agriculture</h3>
                    <p>Innovative farming techniques that adapt to climate change while reducing environmental impact.</p>
                    <a href="services.php#climate-smart" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Sustainable Farming Systems</h3>
                    <p>Comprehensive farming systems designed for long-term sustainability and improved livelihoods.</p>
                    <a href="services.php#sustainable-systems" class="text-link">Learn more <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>What Our Community Says</h2>
                <p>Hear from the farmers and community members who have experienced the impact of our work.</p>
            </div>
            
            <div class="testimonials-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonial-slide active">
                    <div class="testimonial-content">
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial1.jpg" alt="Sarah Kimani">
                        </div>
                        <p class="testimonial-quote">"Vermi-Farm has transformed my farming practices. The training on organic fertilizers has increased my yields while reducing costs. My family now has food security and a sustainable income."</p>
                        <div class="testimonial-author">
                            <h4>Sarah Kimani</h4>
                            <p>Smallholder Farmer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial2.jpg" alt="John Mwangi">
                        </div>
                        <p class="testimonial-quote">"The impact of Vermi-Farm in our community has been remarkable. Their holistic approach to sustainable farming and financial inclusion has empowered our farmers and strengthened our local economy."</p>
                        <div class="testimonial-author">
                            <h4>John Mwangi</h4>
                            <p>Community Leader</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial3.jpg" alt="Grace Ochieng">
                        </div>
                        <p class="testimonial-quote">"As a young farmer, I've benefited greatly from Vermi-Farm's DigiShamba program. The digital tools and financial services have made farming more accessible and profitable for me."</p>
                        <div class="testimonial-author">
                            <h4>Grace Ochieng</h4>
                            <p>Youth Farmer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial4.jpg" alt="David Njoroge">
                        </div>
                        <p class="testimonial-quote">"I've worked with many agricultural initiatives, but Vermi-Farm stands out for its commitment to sustainability and community empowerment. Their approach is truly transformative."</p>
                        <div class="testimonial-author">
                            <h4>David Njoroge</h4>
                            <p>Agricultural Extension Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-controls">
                <button class="testimonial-arrow prev-testimonial"><i class="fas fa-chevron-left"></i></button>
                <div class="testimonial-dots">
                    <span class="testimonial-dot active" data-testimonial="0"></span>
                    <span class="testimonial-dot" data-testimonial="1"></span>
                    <span class="testimonial-dot" data-testimonial="2"></span>
                    <span class="testimonial-dot" data-testimonial="3"></span>
                </div>
                <button class="testimonial-arrow next-testimonial"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

<?php
include_once 'includes/footer.php';
?>

