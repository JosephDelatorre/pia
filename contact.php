<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "MediCare Health Portal - Contact Us - " . date('Y'); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .logo::before {
            content: "🏥";
            margin-right: 0.5rem;
        }

        /* Navigation Styles */
        .navbar {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .navbar li a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .navbar li a.active {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .navbar li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s;
        }

        .navbar li a:hover::before {
            left: 100%;
        }

        .navbar li a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Main Content Styles */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .hero-section {
            text-align: center;
            padding: 3rem 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            margin-bottom: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hero-section h1 {
            font-size: 3rem;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .hero-section p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1rem;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .contact-form h2,
        .contact-info h2 {
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2d3748;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 172, 254, 0.3);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(79, 172, 254, 0.05);
            border-radius: 10px;
            border-left: 4px solid #4facfe;
        }

        .contact-item .icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #4facfe;
        }

        .contact-item .details h3 {
            color: #2d3748;
            margin-bottom: 0.25rem;
        }

        .contact-item .details p {
            color: #4a5568;
            margin: 0;
        }

        .office-hours {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .office-hours h2 {
            color: #4a5568;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .hours-card {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #4facfe;
            text-align: center;
        }

        .hours-card h3 {
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .hours-card p {
            color: #4a5568;
        }

        .emergency-notice {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(255, 107, 107, 0.2);
        }

        .emergency-notice h3 {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        /* Footer Styles */
        footer {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            color: white;
            padding: 2rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #fff;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: white;
            text-decoration: underline;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }

            .navbar {
                flex-wrap: wrap;
                gap: 1rem;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hours-grid {
                grid-template-columns: 1fr;
            }
            @media (max-width: 480px) {
            .navbar {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 1rem;
                margin: 0 1rem;
                border-radius: 15px;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .navbar.active {
                display: flex;
            }

            .navbar li a {
                width: 100%;
                text-align: center;
                padding: 1rem;
            }

            .modal-content {
                width: 95%;
                margin: 2% auto;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <?php include 'header.php'; ?>


    <!-- Main Content -->
    <main>
        <section class="hero-section">
            <h1>Contact MediCare Health</h1>
            <p>We're here to help with all your healthcare needs</p>
            <p><strong>Available 24/7 for your convenience</strong></p>
        </section>

        <div class="emergency-notice">
            <h3>🚨 Medical Emergency?</h3>
            <p>For immediate medical assistance, please call 911 or visit your nearest emergency room.</p>
        </div>

        <div class="contact-container">
            <div class="contact-form">
                <h2>Send us a Message</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="inquiry_type">Type of Inquiry</label>
                        <select id="inquiry_type" name="inquiry_type">
                            <option value="">Select inquiry type...</option>
                            <option value="appointment">Appointment Request</option>
                            <option value="medical">Medical Question</option>
                            <option value="billing">Billing Inquiry</option>
                            <option value="insurance">Insurance Information</option>
                            <option value="prescription">Prescription Refill</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" placeholder="Please describe your inquiry or question..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<div style='background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-top: 1rem;'>";
                    echo "<strong>Thank you for your message!</strong><br>";
                    echo "We have received your inquiry and will respond within 24 hours.";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="contact-info">
                <h2>Get in Touch</h2>
                
                <div class="contact-item">
                    <div class="icon">📍</div>
                    <div class="details">
                        <h3>Address</h3>
                        <p>123 Medical Center Drive<br>Health City, HC 12345</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="icon">📞</div>
                    <div class="details">
                        <h3>Phone</h3>
                        <p>Main: +1 (555) 123-CARE<br>Emergency: 911</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="icon">📧</div>
                    <div class="details">
                        <h3>Email</h3>
                        <p>info@medicarehealth.com<br>appointments@medicarehealth.com</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="icon">🌐</div>
                    <div class="details">
                        <h3>Patient Portal</h3>
                        <p>Access your medical records<br>portal.medicarehealth.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="office-hours">
            <h2>Office Hours</h2>
            <div class="hours-grid">
                <div class="hours-card">
                    <h3>Monday - Friday</h3>
                    <p>8:00 AM - 6:00 PM</p>
                </div>
                <div class="hours-card">
                    <h3>Saturday</h3>
                    <p>9:00 AM - 4:00 PM</p>
                </div>
                <div class="hours-card">
                    <h3>Sunday</h3>
                    <p>Emergency Only</p>
                </div>
                <div class="hours-card">
                    <h3>Holidays</h3>
                    <p>Emergency Only</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About MediCare</h3>
                <p>This is a healthcare portal created for educational purposes. It demonstrates modern medical technology integration with web development.</p>
            </div>
            
            <div class="footer-section">
                <h3>Medical Resources</h3>
                <a href="https://www.who.int/" target="_blank">World Health Organization</a>
                <a href="https://www.cdc.gov/" target="_blank">Centers for Disease Control</a>
                <a href="https://www.nih.gov/" target="_blank">National Institutes of Health</a>
            </div>
            
            <div class="footer-section">
                <h3>Health Information</h3>
                <a href="https://www.mayoclinic.org/" target="_blank">Mayo Clinic</a>
                <a href="https://www.webmd.com/" target="_blank">WebMD</a>
                <a href="https://www.healthline.com/" target="_blank">Healthline</a>
            </div>
            
            <div class="footer-section">
                <h3>Contact MediCare</h3>
                <p>Email: info@medicarehealth.com</p>
                <p>Phone: +1 (555) 123-CARE</p>
                <p>Address: 123 Medical Center Dr, Health City</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> MediCare Health Portal. All rights reserved. | Generated on <?php echo date('F j, Y'); ?></p>
        </div>
    </footer>
</body>
</html>