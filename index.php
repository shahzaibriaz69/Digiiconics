<?php
$message_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_appointment'])) {
    $name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $details = htmlspecialchars($_POST['project_details']);


    if (!empty($name) && !empty($email)) {
        $message_status = "<div class='alert-success'>Shukriya $name! Aapka appointment request receive ho gaya hai.</div>";
    } else {
        $message_status = "<div class='alert-danger'>Baraye meherbani saari fields sahi se fill karen.</div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiiconics - Digital Marketing Agency</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header class="hero-section">
        <nav class="navbar">
            <div class="logo">Digii<span>conics</span></div>
            <ul class="nav-links">
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">Why Us</a></li>
                <li><a href="#workflow">Workflow</a></li>
                <li><a href="#faq">FAQs</a></li>
                <li><a href="#appointment" class="btn-sm">Book Now</a></li>
            </ul>
        </nav>

        <div class="hero-content">
            <h1>Digiiconics is the Best <span>Digital Marketing Agency</span></h1>
            <p>Digiiconics helps businesses grow in the digital world through result-driven marketing, modern web
                solutions, and powerful app development. We focus on creating impactful digital experiences that
                generate leads, boost visibility, and accelerate business growth.</p>
            <div class="hero-btns">
                <a href="#appointment" class="btn btn-gold">Get Started Today</a>
                <a href="#services" class="btn btn-outline">Explore Our Services</a>
            </div>
        </div>
    </header>

    <section class="stats-section">
        <h2 class="section-title">Our Success in Numbers</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <h3>5+ Years</h3>
                <p>Digital Expertise - Delivering impactful digital solutions and marketing strategies.</p>
            </div>
            <div class="stat-card">
                <h3>300+</h3>
                <p>Projects Delivered - Successful campaigns, websites, and applications.</p>
            </div>
            <div class="stat-card">
                <h3>150+</h3>
                <p>Happy Clients - Trusted by startups and growing businesses worldwide.</p>
            </div>
        </div>

    </section>

    <section id="about" class="about-section">
        <div class="about-content">
            <h2>Why Digiiconics is Your <span>Digital Growth Partner</span></h2>
            <p>We are more than a service provider. We are your growth engine in the digital world. From strategy to
                execution, we help brands scale with performance-driven solutions.</p>
            <a href="#appointment" class="btn btn-gold">Learn More About Us</a>
        </div>
    </section>

    <section id="services" class="services-section">
        <h2 class="section-title">What We Offer</h2>
        <p class="section-subtitle">We provide complete digital solutions designed to grow your business, increase
            visibility, and maximize ROI.</p>

        <div class="services-grid">
            <div class="service-card">
                <i class="fa-solid fa-bullhorn"></i>
                <h3>Digital Marketing</h3>
                <p>We help brands grow online with SEO, PPC advertising, content marketing, email campaigns, and
                    conversion-focused strategies.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-code"></i>
                <h3>Web Development</h3>
                <p>We build fast, responsive, and modern websites including business sites, e-commerce stores, and
                    custom web platforms tailored to your needs.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <h3>App Development</h3>
                <p>We create user-friendly mobile applications for Android and iOS that deliver smooth performance and
                    great user experience.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
                <h3>SEO Services</h3>
                <p>We improve your website ranking on search engines through on-page, off-page, and technical SEO
                    strategies that drive organic traffic.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-palette"></i>
                <h3>Branding Services</h3>
                <p>We help businesses build strong brand identities through logo design, visual identity systems, and
                    creative direction.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-share-nodes"></i>
                <h3>Social Media Marketing</h3>
                <p>We manage and grow your social presence with engaging content, paid campaigns, and audience-targeted
                    strategies.</p>
            </div>
        </div>
    </section>

    <section id="workflow" class="workflow-section">
        <div class="workflow-container">

            <div class="workflow-left">
                <h2>We Fix Your Entire <span>Digital Growth System</span></h2>
                <p>We build complete revenue systems that flawlessly connect strategy, design, development, and
                    optimization automation algorithms.</p>
            </div>

            <div class="workflow-center">
                <div class="process-node">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Discover</span>
                </div>

                <div class="pulse-arrow"><i class="fa-solid fa-arrow-down"></i></div>

                <div class="process-node">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Plan</span>
                </div>

                <div class="pulse-arrow"><i class="fa-solid fa-arrow-down"></i></div>

                <div class="process-node">
                    <i class="fa-solid fa-laptop-code"></i>
                    <span>Execute</span>
                </div>

                <div class="pulse-arrow"><i class="fa-solid fa-arrow-down"></i></div>

                <div class="process-node highlight-node">
                    <i class="fa-solid fa-rocket"></i>
                    <span>Deliver Now</span>
                </div>
            </div>

            <div class="workflow-right">
                <div class="system-card">
                    <h4>Discover & Analyze</h4>
                    <p>Understanding your business goals, target audience, and current market positioning with absolute
                        clarity.</p>
                </div>
                <div class="system-card">
                    <h4>Tailored Blueprint</h4>
                    <p>Creating a detailed, conversion-focused digital strategy designed specifically for scaling your
                        brand.</p>
                </div>
                <div class="system-card">
                    <h4>Precision Execution</h4>
                    <p>Implementing high-performance campaigns, modern web structures, and solutions with surgical
                        precision.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="appointment" class="appointment-section">
        <div class="appointment-container">
            <div class="appointment-info">
                <h2>Book an Appointment</h2>
                <p>Schedule a one-on-one consultation with our digital experts to discuss your project and growth goals.
                </p>
                <p class="tagline">Where marketing meets performance. Helping brands grow smarter, faster and stronger.
                </p>
            </div>
            <div class="appointment-form">
                <?php echo $message_status; ?>
                <form action="index.php#appointment" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" required placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" required placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                        <label>Choose a Service</label>
                        <input type="hidden" name="service" id="selected-service" value="Digital Marketing" required>

                        <div class="custom-select-wrapper">
                            <div class="custom-select-trigger">
                                <span>Select One</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="custom-options">
                                <span class="custom-option selected" data-value="Digital Marketing">Digital
                                    Marketing</span>
                                <span class="custom-option" data-value="Web Development">Web Development</span>
                                <span class="custom-option" data-value="App Development">App Development</span>
                                <span class="custom-option" data-value="Social Media Marketing">Social Media
                                    Marketing</span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>

    <script src="script.js"></script>

</body>

</html>