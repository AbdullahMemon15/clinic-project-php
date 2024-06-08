<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Westwood Clinic</title>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title">Westwood Clinic</div>
        <button class="navbar-toggle" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="registration.php" target="_self">Registration</a></li>
                <li><a href="walk.php" target="_self">Clinic</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Westwood Clinic</h1>
            <p>Your health is our priority. Experience compassionate and comprehensive care from our dedicated team of healthcare professionals.</p>
            <a href="#contact" class="cta-button">Contact Us</a>
        </div>
    </header>

    <main>
        <section class="services-section">
            <h2>Our Services</h2>
            <div class="services-container">
                <div class="service">
                    <h3>General Check-ups</h3>
                    <p>Routine exams to keep you healthy and detect potential issues early.</p>
                </div>
                <div class="service">
                    <h3>Pediatric Care</h3>
                    <p>Comprehensive healthcare services for children from newborns to adolescents.</p>
                </div>
                <div class="service">
                    <h3>Women's Health</h3>
                    <p>Specialized care focusing on women's health and wellness.</p>
                </div>
                <div class="service">
                    <h3>Chronic Disease Management</h3>
                    <p>Personalized care plans for managing chronic conditions effectively.</p>
                </div>
                <div class="service">
                    <h3>Vaccinations</h3>
                    <p>Stay protected with our comprehensive vaccination services.</p>
                </div>
                <div class="service">
                    <h3>Lab Testing</h3>
                    <p>Convenient and accurate lab testing services for all your health needs.</p>
                </div>
            </div>
        </section>

        <section class="doctors-section">
            <h2>Meet Our Doctors</h2>
            <div class="doctors-container">
                <div class="doctor">
                    <img src="images/carlene.jpg" alt="Dr. Carlene">
                    <h3>Dr. Carlene</h3>
                    <p>Specializes in preventive care and wellness with over 20 years of experience.</p>
                </div>
                <div class="doctor">
                    <img src="images/jack.jpg" alt="Dr. Jack">
                    <h3>Dr. Jack</h3>
                    <p>Expert in internal medicine with a focus on chronic disease management.</p>
                </div>
                <div class="doctor">
                    <img src="https://images.pexels.com/photos/4173251/pexels-photo-4173251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Dr. Ashley">
                    <h3>Dr. Ashley</h3>
                    <p>Board-certified pediatrician providing comprehensive care for children.</p>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to schedule an appointment, please feel free to contact us.</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> info@westwoodclinic.com</p>
            <p><strong>Address:</strong> 123 Health Street, Coquitlam, BC, Canada</p>
        </section>
    </main>

    <footer class="footer">
        <p>Copyright &copy; 2024 Westwood Clinic</p>
        <p>Last Updated on <script>document.write(document.lastModified);</script></p>
    </footer>
</body>

</html>