<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
      .bg-teal {
        background-color: #008080;
      }
      
      .text-white {
        color: #fff !important;
      }
      
      .navbar {
        min-height: 80px;
        transition: top 0.3s ease-in-out;
      }
      
      .navbar-brand span {
        font-weight: bold;
        color: #008080;
      }
      
      .nav-link {
        color: #008080 !important;
      }
      
      .nav-link:hover {
        text-decoration: underline;
      }
      
      .dropdown-menu {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      
      body {
        padding-top: 160px; /* Adjust this value if needed */
      }
      
      .fixed-top {
        z-index: 1030; 
      }
      
      /* Add this to ensure the navbar is below the top header */
      .navbar.fixed-top {
        top: 40px; /* Adjust this value to match the height of the top header */
      }

      .top-header {
        transition: transform 0.3s ease-in-out;
      }

      /* Hide the top header when scrolling down */
      .top-header-hidden {
        transform: translateY(-100%);
      }

      /* Adjust navbar when top header is hidden */
      .navbar.fixed-top.show-navbar {
        top: 0;
      }
  </style>
</head>
<body>
  <!-- Top Header -->
  <div class="bg-teal text-white py-2 fixed-top top-header" id="topHeader">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
      </div>
      <div class="d-flex align-items-center">
        <span class="me-3"><i class="bi bi-telephone"></i> 01 2345 65486</span>
        <span><i class="bi bi-envelope"></i> contact@yourdomain.com</span>
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        <span>NepalTrip</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="destinationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destination</a>
            <ul class="dropdown-menu" aria-labelledby="destinationDropdown">
              <li><a class="dropdown-item" href="#">Kathmandu</a></li>
              <li><a class="dropdown-item" href="#">Pokhara</a></li>
              <li><a class="dropdown-item" href="destination">More</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="activitiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Activities</a>
            <ul class="dropdown-menu" aria-labelledby="activitiesDropdown">
              <li><a class="dropdown-item" href="#">Trekking</a></li>
              <li><a class="dropdown-item" href="#">Tour </a></li>
              <li><a class="dropdown-item" href="activity">More</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="tripTypesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trip Types</a>
            <ul class="dropdown-menu" aria-labelledby="tripTypesDropdown">
              <li><a class="dropdown-item" href="#">Nature Friendly</a></li>
              <li><a class="dropdown-item" href="#">Cultural</a></li>
              <li><a class="dropdown-item" href="triptype">More</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
              <li><a class="dropdown-item" href="aboutus">About Us</a></li>
              <li><a class="dropdown-item" href="#">Our Team</a></li>
              <li><a class="dropdown-item" href="#">FAQ'S</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="contactus">Contact</a></li>
        </ul>
        <div class="d-flex">
          <a href="login" class="nav-link">Login</a>|
          <a href="signup" class="nav-link">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

  <script>
    // JavaScript to hide top header on scroll
    const topHeader = document.getElementById('topHeader');
    const mainNavbar = document.getElementById('mainNavbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

      if (currentScroll > lastScrollTop) {
        // Scrolling down
        topHeader.classList.add('top-header-hidden');
        mainNavbar.classList.add('show-navbar');
      } else {
        // Scrolling up
        topHeader.classList.remove('top-header-hidden');
        mainNavbar.classList.remove('show-navbar');
      }

      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
  </script>
</body>
</html>
