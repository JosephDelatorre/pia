<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Health Portal - Your Complete Healthcare Guide</title>
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
        }

        /* Enhanced Header Styles */
        header {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 4px 32px rgba(0, 0, 0, 0.1);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(30px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
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
            text-shadow: 0 2px 8px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }

        .logo::before {
            content: "🏥";
            margin-right: 0.5rem;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: translateY(-2px);
            text-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }

        .logo:hover::before {
            transform: rotate(10deg) scale(1.1);
        }

        .navbar {
            display: flex;
            list-style: none;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 0.5rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .navbar li a {
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar li a:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            color: #fff;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .navbar li a.active {
            background: linear-gradient(135deg, rgba(255,255,255,0.3), rgba(255,255,255,0.1));
            color: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            font-weight: 600;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(90deg);
        }

        /* Main Content Styles */
        main {
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
            margin-bottom: 2rem;
        }

        .search-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 3rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .search-box {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
        }

        .section-title {
            font-size: 2.5rem;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .health-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border-left: 4px solid #4facfe;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .health-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .health-card h3 {
            color: #2d3748;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .health-card p {
            color: #4a5568;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .health-card ul {
            color: #4a5568;
            margin-left: 1.5rem;
        }

        .health-card li {
            margin-bottom: 0.5rem;
        }

        .medicine-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .medicine-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .medicine-card h3 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .medicine-card .dosage {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin: 0.5rem 0;
            font-size: 0.9rem;
        }

        .emergency-section {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            color: white;
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .emergency-section h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .emergency-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .emergency-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .emergency-card h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .close {
            position: absolute;
            right: 1rem;
            top: 1rem;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #333;
        }

        .footer {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            color: white;
            padding: 3rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 3rem;
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
                gap: 0.5rem;
                padding: 0.3rem;
            }

            .navbar li a {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .mobile-menu-btn {
                display: block;
            }
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
    <!-- Enhanced Header Section -->
    <?php include 'header.php'; ?>


    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <h1>Welcome to MediCare Health Portal</h1>
            <p>Your comprehensive digital healthcare companion for modern medical solutions</p>
        </section>

        <!-- Search Section -->
        <section class="search-container">
            <input type="text" class="search-box" id="searchBox" placeholder="Search health topics, medicines, symptoms...">
        </section>

        <!-- Health Topics Section -->
        <section id="health-topics">
            <h2 class="section-title">Health Issue</h2>
            <div class="content-grid" id="healthTopics">
                <div class="health-card" data-topic="heart-health">
                    <h3>❤️ Heart Health</h3>
                    <p>Learn about cardiovascular health, heart disease prevention, and maintaining a healthy heart through lifestyle choices.</p>
                    <ul>
                        <li>High blood pressure management</li>
                        <li>Cholesterol control</li>
                        <li>Heart-healthy diet</li>
                        <li>Exercise recommendations</li>
                    </ul>
                </div>

                <div class="health-card" data-topic="diabetes">
                    <h3>🩺 Diabetes Management</h3>
                    <p>Comprehensive guide to understanding, managing, and living with diabetes effectively.</p>
                    <ul>
                        <li>Blood sugar monitoring</li>
                        <li>Type 1 vs Type 2 diabetes</li>
                        <li>Insulin management</li>
                        <li>Diabetic diet planning</li>
                    </ul>
                </div>

                <div class="health-card" data-topic="mental-health">
                    <h3>🧠 Mental Health</h3>
                    <p>Understanding mental wellness, stress management, and maintaining emotional balance.</p>
                    <ul>
                        <li>Anxiety and depression</li>
                        <li>Stress reduction techniques</li>
                        <li>Mindfulness and meditation</li>
                        <li>Sleep hygiene</li>
                    </ul>
                </div>

                <div class="health-card" data-topic="nutrition">
                    <h3>🥗 Nutrition & Diet</h3>
                    <p>Essential nutrition guidelines for optimal health and wellness.</p>
                    <ul>
                        <li>Balanced diet principles</li>
                        <li>Vitamin and mineral needs</li>
                        <li>Weight management</li>
                        <li>Healthy cooking tips</li>
                    </ul>
                </div>

                <div class="health-card" data-topic="exercise">
                    <h3>🏃‍♂️ Exercise & Fitness</h3>
                    <p>Physical activity guidelines and exercise recommendations for all age groups.</p>
                    <ul>
                        <li>Cardio vs strength training</li>
                        <li>Exercise safety tips</li>
                        <li>Workout routines</li>
                        <li>Injury prevention</li>
                    </ul>
                </div>

                <div class="health-card" data-topic="women-health">
                    <h3>👩‍⚕️ Women's Health</h3>
                    <p>Specialized health information for women's unique healthcare needs.</p>
                    <ul>
                        <li>Reproductive health</li>
                        <li>Pregnancy and childbirth</li>
                        <li>Menopause management</li>
                        <li>Breast health</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Medicines Section -->
        <section id="medicines">
            <h2 class="section-title">Common Medicines</h2>
            <div class="content-grid" id="medicineGrid">
                <div class="medicine-card" data-medicine="acetaminophen">
                    <h3>💊 Acetaminophen (Tylenol)</h3>
                    <p>Pain reliever and fever reducer</p>
                    <div class="dosage">Adults: 325-650mg every 4-6 hours</div>
                    <p><strong>Uses:</strong> Headache, muscle aches, fever, minor pain</p>
                    <p><strong>Precautions:</strong> Don't exceed 3000mg per day</p>
                </div>

                <div class="medicine-card" data-medicine="ibuprofen">
                    <h3>💊 Ibuprofen (Advil)</h3>
                    <p>Anti-inflammatory pain reliever</p>
                    <div class="dosage">Adults: 200-400mg every 6-8 hours</div>
                    <p><strong>Uses:</strong> Pain, inflammation, fever</p>
                    <p><strong>Precautions:</strong> Take with food, limit alcohol</p>
                </div>

                <div class="medicine-card" data-medicine="aspirin">
                    <h3>💊 Aspirin</h3>
                    <p>Pain reliever and blood thinner</p>
                    <div class="dosage">Adults: 81-325mg daily for heart health</div>
                    <p><strong>Uses:</strong> Pain, heart attack prevention</p>
                    <p><strong>Precautions:</strong> Consult doctor for daily use</p>
                </div>

                <div class="medicine-card" data-medicine="antihistamine">
                    <h3>💊 Antihistamines</h3>
                    <p>Allergy relief medication</p>
                    <div class="dosage">Varies by specific medication</div>
                    <p><strong>Uses:</strong> Allergies, hay fever, hives</p>
                    <p><strong>Precautions:</strong> May cause drowsiness</p>
                </div>

                <div class="medicine-card" data-medicine="antacid">
                    <h3>💊 Antacids</h3>
                    <p>Stomach acid neutralizer</p>
                    <div class="dosage">As needed after meals</div>
                    <p><strong>Uses:</strong> Heartburn, indigestion</p>
                    <p><strong>Precautions:</strong> Don't exceed recommended dose</p>
                </div>

                <div class="medicine-card" data-medicine="cough-syrup">
                    <h3>💊 Cough Syrup</h3>
                    <p>Cough suppressant and expectorant</p>
                    <div class="dosage">Adults: 15-30ml every 4 hours</div>
                    <p><strong>Uses:</strong> Dry cough, chest congestion</p>
                    <p><strong>Precautions:</strong> Check for drug interactions</p>
                </div>
            </div>
        </section>

        <!-- Emergency Section -->
        <section id="emergency" class="emergency-section">
            <h2>🚨 Emergency Information</h2>
            <div class="emergency-grid">
                <div class="emergency-card">
                    <h3>Heart Attack Symptoms</h3>
                    <ul>
                        <li>Chest pain or discomfort</li>
                        <li>Shortness of breath</li>
                        <li>Nausea or lightheadedness</li>
                        <li>Pain in arms, back, neck, or jaw</li>
                    </ul>
                </div>

                <div class="emergency-card">
                    <h3>Stroke Warning Signs</h3>
                    <ul>
                        <li>Sudden numbness or weakness</li>
                        <li>Confusion or trouble speaking</li>
                        <li>Vision problems</li>
                        <li>Severe headache</li>
                    </ul>
                </div>

                <div class="emergency-card">
                    <h3>Allergic Reaction</h3>
                    <ul>
                        <li>Difficulty breathing</li>
                        <li>Swelling of face, lips, tongue</li>
                        <li>Rapid pulse</li>
                        <li>Dizziness or fainting</li>
                    </ul>
                </div>

                <div class="emergency-card">
                    <h3>Emergency Numbers</h3>
                    <ul>
                        <li><strong>Emergency:</strong> 911</li>
                        <li><strong>Poison Control:</strong> 1-800-222-1222</li>
                        <li><strong>Crisis Hotline:</strong> 988</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal for detailed information -->
    <div id="infoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>About MediCare</h3>
                <p>Your trusted digital healthcare companion providing comprehensive medical information and resources.</p>
                <p><strong>Disclaimer:</strong> This information is for educational purposes only. Always consult healthcare professionals for medical advice.</p>
            </div>
            
            <div class="footer-section">
                <h3>Health Resources</h3>
                <a href="#">Health Articles</a>
                <a href="#">Medicine Database</a>
                <a href="#">Symptom Checker</a>
                <a href="#">Find a Doctor</a>
            </div>
            
            <div class="footer-section">
                <h3>Emergency Contacts</h3>
                <p><strong>Emergency:</strong> 911</p>
                <p><strong>Poison Control:</strong> 1-800-222-1222</p>
                <p><strong>Crisis Hotline:</strong> 988</p>
                <p><strong>Telehealth:</strong> 1-800-MEDICARE</p>
            </div>
            
            <div class="footer-section">
                <h3>Contact MediCare</h3>
                <p>Email: info@medicarehealth.com</p>
                <p>Phone: +1 (555) 123-CARE</p>
                <p>Address: 123 Medical Center Dr, Health City</p>
                <p>Hours: 24/7 Online Support</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 MediCare Health Portal. All rights reserved. | For educational purposes only - Not medical advice</p>
        </div>
    </footer>

    <script>
        // Enhanced JavaScript for interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('header');
            const navbar = document.getElementById('navbar');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const navLinks = document.querySelectorAll('.navbar a');
            const searchBox = document.getElementById('searchBox');
            const healthCards = document.querySelectorAll('.health-card');
            const medicineCards = document.querySelectorAll('.medicine-card');
            const modal = document.getElementById('infoModal');
            const modalContent = document.getElementById('modalContent');
            const closeBtn = document.querySelector('.close');

            // Health topic detailed information
            const healthTopicDetails = {
                'heart-health': {
                    title: '❤️ Heart Health - Complete Guide',
                    content: `
                        <h3>Understanding Heart Health</h3>
                        <p>Your heart is a vital organ that pumps blood throughout your body. Maintaining heart health is crucial for overall well-being.</p>
                        
                        <h4>Risk Factors:</h4>
                        <ul>
                            <li>High blood pressure</li>
                            <li>High cholesterol</li>
                            <li>Smoking</li>
                            <li>Diabetes</li>
                            <li>Obesity</li>
                            <li>Family history</li>
                        </ul>
                        
                        <h4>Prevention Tips:</h4>
                        <ul>
                            <li>Exercise regularly (150 minutes/week)</li>
                            <li>Eat a heart-healthy diet</li>
                            <li>Maintain healthy weight</li>
                            <li>Don't smoke</li>
                            <li>Limit alcohol consumption</li>
                            <li>Manage stress</li>
                        </ul>
                        
                        <h4>Heart-Healthy Foods:</h4>
                        <ul>
                            <li>Fatty fish (salmon, mackerel)</li>
                            <li>Leafy greens</li>
                            <li>Whole grains</li>
                            <li>Berries</li>
                            <li>Nuts and seeds</li>
                            <li>Avocados</li>
                        </ul>
                    `
                },
                'diabetes': {
                    title: '🩺 Diabetes Management Guide',
                    content: `
                        <h3>Understanding Diabetes</h3>
                        <p>Diabetes is a condition where your body cannot properly use and store glucose (blood sugar).</p>
                        
                        <h4>Types of Diabetes:</h4>
                        <ul>
                            <li><strong>Type 1:</strong> Body doesn't produce insulin</li>
                            <li><strong>Type 2:</strong> Body doesn't use insulin properly</li>
                            <li><strong>Gestational:</strong> Develops during pregnancy</li>
                        </ul>
                        
                        <h4>Management Strategies:</h4>
                        <ul>
                            <li>Monitor blood sugar regularly</li>
                            <li>Take medications as prescribed</li>
                            <li>Follow a balanced diet</li>
                            <li>Exercise regularly</li>
                            <li>Maintain healthy weight</li>
                        </ul>
                        
                        <h4>Warning Signs:</h4>
                        <ul>
                            <li>Frequent urination</li>
                            <li>Excessive thirst</li>
                            <li>Unexplained weight loss</li>
                            <li>Fatigue</li>
                            <li>Blurred vision</li>
                        </ul>
                    `
                },
                'mental-health': {
                    title: '🧠 Mental Health & Wellness',
                    content: `
                        <h3>Mental Health Awareness</h3>
                        <p>Mental health is just as important as physical health. It affects how we think, feel, and act.</p>
                        
                        <h4>Common Mental Health Conditions:</h4>
                        <ul>
                            <li>Depression</li>
                            <li>Anxiety disorders</li>
                            <li>Bipolar disorder</li>
                            <li>PTSD</li>
                            <li>Eating disorders</li>
                        </ul>
                        
                        <h4>Stress Management Techniques:</h4>
                        <ul>
                            <li>Deep breathing exercises</li>
                            <li>Meditation and mindfulness</li>
                            <li>Regular exercise</li>
                            <li>Adequate sleep</li>
                            <li>Social support</li>
                            <li>Professional counseling</li>
                        </ul>