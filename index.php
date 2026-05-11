<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS – The Last POS You'll Ever Need</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- (Epic 1) NavigationBar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <i class="fas fa-cash-register"></i> QUICK<span>POS</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
            <a href="#contact" class="btn btn-primary nav-cta">Get Started</a>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <main id="main-content">
        <!-- (Epic 2) Hero Section -->
        <section class="hero" id="hero">
            <div class="container hero-container">
                <div class="hero-content">
                    <h1>The Last POS System <br><span>You'll Ever Need</span></h1>
                    <p>Streamline your sales, manage inventory, and grow your business with the most intuitive POS software on the market.</p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Get Started for Free</a>
                        <a href="#features" class="btn-link">See how it works <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="images/hero-mockup.png" alt="QuickPOS Dashboard">
                    </div>
                </div>
            </div>
        </section>

        <!-- (Epic 3) Features Section -->
        <section class="features" id="features">
            <div class="container">
                <div class="section-header">
                    <h2>Powerful tools for your business</h2>
                    <p>Everything you need to manage your business efficiently in one place.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fas fa-bolt"></i></div>
                        <h3>Fast Checkout</h3>
                        <p>Process transactions in seconds with our optimized interface.</p>
                    </div>
                    <div class="feature-card">
                        <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                        <h3>Real-time Analytics</h3>
                        <p>Beautiful dashboards to help you make smarter business decisions.</p>
                    </div>
                    <div class="feature-card">
                        <div class="icon-box"><i class="fas fa-boxes"></i></div>
                        <h3>Inventory Control</h3>
                        <p>Automated stock tracking and reorder alerts across all locations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- (Epic 4) Pricing Section -->
        <section class="pricing" id="pricing">
            <div class="container">
                <div class="section-header">
                    <h2>Simple Pricing for any scale</h2>
                    <p>Choose the plan that fits your business needs perfectly.</p>
                </div>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <h3>Basic</h3>
                        <div class="price">$29<span>/mo</span></div>
                        <ul>
                            <li><i class="fas fa-check"></i> 1 Register</li>
                            <li><i class="fas fa-check"></i> Standard Reports</li>
                            <li><i class="fas fa-check"></i> 5:00-18:00 Support</li>
                        </ul>
                        <a href="#contact" class="btn btn-outline">Get Started</a>
                    </div>
                    <div class="pricing-card featured">
                        <div class="badge">Most Popular</div>
                        <h3>Pro</h3>
                        <div class="price">$79<span>/mo</span></div>
                        <ul>
                            <li><i class="fas fa-check"></i> 5 Registers</li>
                            <li><i class="fas fa-check"></i> Advanced Analytics</li>
                            <li><i class="fas fa-check"></i> 24/7 Priority Support</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="pricing-card">
                        <h3>Enterprise</h3>
                        <div class="price">$199<span>/mo</span></div>
                        <ul>
                            <li><i class="fas fa-check"></i> Unlimited Registers</li>
                            <li><i class="fas fa-check"></i> Custom Integrations</li>
                            <li><i class="fas fa-check"></i> Dedicated Manager</li>
                        </ul>
                        <a href="#contact" class="btn btn-outline">Contact Sales</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- (Epic 5) Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header">
                <h2>Ready to get started?</h2>
                <p>Send us a message and our team will be in touch shortly.</p>
            </div>
            <div class="contact-box">
                <form action="process_contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="Tell us about your business..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>








        <!-- (Epic 6) Footer Section -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="#" class="logo" style="color:#fff">
                    <i class="fas fa-cash-register"></i> Quick<span>POS</span>
                </a>
                <p>The modern point of sale solution for retail, restaurants, and hospitality businesses.</p>
            </div>
            <div class="footer-links">
                <h4>Product</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#contact">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 QuickPOS Software. All rights reserved.</p>
        </div>
    </footer>



    <!-- JS Scripts -->
    <script>
        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        
        if (hamburger) {
            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                
                // Fallback for non-CSS toggle logic
                if (navLinks.classList.contains('active')) {
                    navLinks.style.display = 'flex';
                    navLinks.style.flexDirection = 'column';
                    navLinks.style.position = 'absolute';
                    navLinks.style.top = '70px';
                    navLinks.style.left = '0';
                    navLinks.style.width = '100%';
                    navLinks.style.background = '#fff';
                    navLinks.style.padding = '20px';
                    navLinks.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                } else {
                    navLinks.style.display = 'none';
                }
            });
        }

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
