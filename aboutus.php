<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    <style>
        .container {
    max-width: 1200px;
  }
        .hero {
            background: url('Bhoudanath-Stupa.webp') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 90px 20px;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .icon-box {
            text-align: center;
            margin-bottom: 20px;
        }
        .icon-box i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Nav section -->
        <?php 
        include ("nav.php");
        ?>

    <!-- Hero Section -->
    <header class="hero">
        <h1>Welcome</h1>
        <p>Your trusted partner for unforgettable journeys around the globe.</p>
    </header>

    <!-- About Us Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="Historical-Places-in-Nepal.jpg" alt="About Us" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>At TravelMonster, we are passionate about crafting extraordinary travel experiences. Whether you're seeking a peaceful retreat, a thrilling adventure, or a deep dive into cultural wonders, we are here to make it happen. Our team of travel experts ensures every journey is tailored to your preferences, offering personalized itineraries, insider tips, and unparalleled service.</p>
                <p>We believe that travel is not just about visiting new places; it's about creating memories that last a lifetime. Join us to explore the world like never before!</p>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Values</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                        <h5>Global Reach</h5>
                        <p>We offer destinations across continents, ensuring a global travel experience for everyone.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-heart"></i>
                        <h5>Customer Focus</h5>
                        <p>Our travelers are at the heart of everything we do, and your satisfaction is our priority.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-umbrella-beach"></i>
                        <h5>Unmatched Experiences</h5>
                        <p>From exotic escapes to local adventures, we curate experiences that are truly unique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-5" style="background-color: #008080; color: white;">
        <h3>Ready to start your journey?</h3>
        <p>Contact us today to plan your dream vacation!</p>
        <a href="contactus.php" class="btn btn-light btn-lg">Get in Touch</a>
    </section>

    <!-- Footer -->
        <?php
        include("footer.php");
        ?>

</body>
</html>
