<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activities</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .activities {
      padding: 60px 15px;
      text-align: center;
    }

    .activities h1 {
      font-size: 2.5rem;
      color: #17252a;
      margin-bottom: 20px;
    }

    .activities p {
      color: #3aafa9;
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .trip-card {
      background-color: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .trip-card:hover {
      transform: translateY(-10px);
    }

    .trip-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .trip-card-body {
      padding: 20px;
    }

    .trip-card-title {
      font-size: 1.5rem;
      color: #17252a;
      margin-bottom: 10px;
    }

    .trip-card-text {
      color: #555;
      font-size: 1rem;
      margin-bottom: 15px;
    }

    .trip-card a {
      color: #3aafa9;
      text-decoration: none;
      font-weight: bold;
    }

    .trip-card a:hover {
      text-decoration: underline;
    }

    .hero {
    background: url('manaslu.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
    padding: 80px 20px;
    }
    .hero h1 {
        font-size: 3.5rem;
        font-weight: bold;
    }
    .hero p {
        font-size: 1.5rem;
    }
  </style>
</head>
<body>
    <?php
    include("nav.php");
    ?>

    <header class="hero">
      <h1>Activities</h1>
  </header>

  <div class="activities">
    <h1>Explore by Activities</h1>
    <p>Discover the best travel experiences tailored to your interests.</p>
    <div class="container">
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="trekking.jpg" alt="Nature Friendly Trip">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Trekking </h3>
              <p class="trip-card-text">Experience the beauty of untouched trails, majestic mountains, and serene.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="culture.jpg" alt="Cultural Trip">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Tour</h3>
              <p class="trip-card-text">Immerse yourself in the rich history and traditions of diverse cultures of Nepal.</p>
              <a href="activities">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="rafting.jpg" alt="Budget Travel">
            <div class="trip-card-body">
              <h3 class="trip-card-title"> Rafting</h3>
              <p class="trip-card-text">Feel the thrill of conquering roaring rivers surrounded by stunning natural scenery.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    include("footer.php");
    ?>
</body>
</html>
