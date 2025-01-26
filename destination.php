<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destination</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .trip-types {
      padding: 60px 15px;
      text-align: center;
    }

    .trip-types h1 {
      font-size: 2.5rem;
      color: #17252a;
      margin-bottom: 20px;
    }

    .trip-types p {
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
    background: url('desti.jpg') no-repeat center center/cover;
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
      <h1>Destination</h1>
  </header>

  <div class="trip-types">
    <h1>Explore by  Destination</h1>
    <p>Discover the best travel experiences tailored to your interests.</p>
    <div class="container">
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="budget.jpg" alt="Nature Friendly Trip">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Kathmandu</h3>
              <p class="trip-card-text">Explore ancient temples, bustling markets, and affordable stays in Nepal’s vibrant capital without breaking the bank.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="pokhara.jpg" alt="Cultural Trip">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Pokhara</h3>
              <p class="trip-card-text">Enjoy serene lakes, mountain views, and budget-friendly homestays in this peaceful lakeside city.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="lumbini.jpg" alt="Budget Travel">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Lumbini</h3>
              <p class="trip-card-text">Discover Buddha’s birthplace, tranquil monasteries, and low-cost accommodations in this spiritual haven.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <!-- card 4 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="chitwan.jpg" alt="Budget Travel">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Chitwan</h3>
              <p class="trip-card-text">Spot wildlife, enjoy jungle safaris, and experience Tharu culture on a budget in this national park.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <!-- card 5 -->
        <div class="col-md-4">
          <div class="trip-card">
            <img src="mustang.jpg" alt="Budget Travel">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Mustang</h3>
              <p class="trip-card-text">Trek through rugged landscapes and ancient caves with affordable teahouses in this hidden gem.</p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="trip-card">
            <img src="solukhumbu.jpg" alt="Budget Travel">
            <div class="trip-card-body">
              <h3 class="trip-card-title">Solukhumbu</h3>
              <p class="trip-card-text">Trek to Everest trails, stay in budget teahouses, and soak in epic mountain views without overspending.</p>
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
