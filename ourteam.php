<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team</title>
  <style>
    /* Custom Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }
    .our-team {
      padding: 60px 0;
    }
    .card {
      border: none;
      transition: transform 0.3s;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .card-img-top {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin: 20px auto;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card-text {
      color: #666;
    }
    .hero {
    background: url('ourteam.jpg') no-repeat center center/cover;
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
      <h1>Our Teams</h1>
  </header>


  <!-- Our Team Section -->
  <section class="our-team">
    <div class="container">
      <div class="row">
        <!-- Team Member 1 -->
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member 1">
            <div class="card-body">
              <h5 class="card-title">John Doe</h5>
              <p class="card-text">Travel Expert</p>
              <p class="card-text">John has been exploring the world for over 10 years and loves sharing his adventures.</p>
            </div>
          </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member 2">
            <div class="card-body">
              <h5 class="card-title">Jane Smith</h5>
              <p class="card-text">Adventure Guide</p>
              <p class="card-text">Jane specializes in trekking and outdoor adventures, ensuring you have the best experience.</p>
            </div>
          </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <img src="#" class="card-img-top" alt="Team Member 3">
            <div class="card-body">
              <h5 class="card-title">Mike Johnson</h5>
              <p class="card-text">Cultural Explorer</p>
              <p class="card-text">Mike is passionate about discovering local cultures and traditions around the globe.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    include("footer.php");
    ?>

</body>
</html>