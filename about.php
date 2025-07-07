<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "MediCare Health Portal - About Us - " . date('Y'); ?></title>
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
            padding: 4rem 0;
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

        .about-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .about-content h2 {
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .about-content p {
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .mission-card, .vision-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border-left: 4px solid #4facfe;
        }

        .mission-card h3, .vision-card h3 {
            color: #2d3748;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .mission-card p, .vision-card p {
            color: #4a5568;
            font-size: 1rem;
        }

        .values-section {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            margin-bottom: 3rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .values-section h2 {
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            text-align: center;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .value-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-left: 4px solid #4facfe;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .value-card:hover {
            transform: translateY(-5px);
        }

        .value-card .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .value-card h3 {
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .value-card p {
            color: #4a5568;
            font-size: 0.9rem;
        }

        .team-section {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            margin-bottom: 3rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .team-section h2 {
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-card .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            margin: 0 auto 1rem auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .team-card h3 {
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .team-card .role {
            color: #4facfe;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .team-card p {
            color: #4a5568;
            font-size: 0.9rem;
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

            .mission-vision {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .team-grid {
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
            <h1>About MediCare Health</h1>
            <p>Dedicated to providing exceptional healthcare services with compassion and innovation</p>
            <p><strong>Serving the community since <?php echo date('Y') - 10; ?></strong></p>
        </section>

        <section class="about-content">
            <h2>Our Story</h2>
            <p>MediCare Health Portal was founded with a simple yet powerful vision: to make quality healthcare accessible to everyone through innovative digital solutions. What started as a small clinic has grown into a comprehensive healthcare system that serves thousands of patients across the region.</p>
            
            <p>Our commitment to excellence drives us to continuously improve our services, embrace new technologies, and maintain the highest standards of patient care. We believe that healthcare should be personal, accessible, and centered around the needs of our patients and their families.</p>
            
            <p>Today, we are proud to offer a full range of medical services, from routine check-ups to specialized treatments, all delivered with the same level of care and attention that has been our hallmark for over a decade.</p>
        </section>

        <div class="mission-vision">
            <div class="mission-card">
                <h3>🎯 Our Mission</h3>
                <p>To provide comprehensive, compassionate healthcare services that improve the quality of life for our patients and communities. We are committed to delivering exceptional medical care through innovative technology, skilled professionals, and a patient-centered approach.</p>
            </div>
            
            <div class="vision-card">
                <h3>🌟 Our Vision</h3>
                <p>To be the leading healthcare provider in our region, recognized for our excellence in patient care, medical innovation, and community service. We envision a future where quality healthcare is accessible to all, supported by cutting-edge technology and compassionate care.</p>
            </div>
        </div>

        <section class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="icon">💙</div>
                    <h3>Compassion</h3>
                    <p>We treat every patient with empathy, understanding, and genuine care for their wellbeing.</p>
                </div>
                
                <div class="value-card">
                    <div class="icon">🔬</div>
                    <h3>Excellence</h3>
                    <p>We strive for the highest standards in medical care, continuous learning, and service delivery.</p>
                </div>
                
                <div class="value-card">
                    <div class="icon">🤝</div>
                    <h3>Integrity</h3>
                    <p>We maintain the highest ethical standards in all our interactions and medical practices.</p>
                </div>
                
                <div class="value-card">
                    <div class="icon">🚀</div>
                    <h3>Innovation</h3>
                    <p>We embrace new technologies and methods to improve patient outcomes and experiences.</p>
                </div>
                
                <div class="value-card">
                    <div class="icon">👥</div>
                    <h3>Teamwork</h3>
                    <p>We believe in collaborative care that brings together diverse expertise for better results.</p>
                </div>
                
                <div class="value-card">
                    <div class="icon">🌍</div>
                    <h3>Community</h3>
                    <p>We are committed to serving and improving the health of our local communities.</p>
                </div>
            </div>
        </section>

        <section class="team-section">
            <h2>Meet Our Leadership Team</h2>
            <div class="team-grid">
                <div class="team-card">
                    <div class="avatar">👨‍⚕️</div>
                    <h3>Dr. Michael Johnson</h3>
                    <div class="role">Chief Medical Officer</div>
                    <p>With over 20 years of experience in internal medicine, Dr. Johnson leads our medical team with expertise and compassion.</p>
                </div>
                
                <div class="team-card">
                    <div class="avatar">👩‍⚕️</div>
                    <h3>Dr. Sarah Williams</h3>
                    <div class="role">Director of Operations</div>
                    <p>Dr. Williams oversees our daily operations and ensures the highest quality of patient care across all departments.</p>
                </div>
                
                <div class="team-card">
                    <div class="avatar">👨‍💼</div>
                    <h3>James Rodriguez</h3>
                    <div class="role">Chief Technology Officer</div>
                    <p>Leading our digital transformation, James ensures our technology systems provide seamless patient experiences.</p>
                </div>
                
                <div class="team-card">
                    <div class="avatar">👩‍💼</div>
                    <h3>Lisa Chen</h3>
                    <div class="role">Patient Relations Manager</div>
                    <p>Lisa ensures that every patient receives personalized attention and support throughout their healthcare journey.</p>
                </div>
            </div>
        </section>
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