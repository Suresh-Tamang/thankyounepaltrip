<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
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
      
      .navbar.fixed-top {
        top: 40px;
      }

      .top-header {
        transition: transform 0.3s ease-in-out;
      }

      .top-header-hidden {
        transform: translateY(-100%);
      }

      .navbar.fixed-top.show-navbar {
        top: 0;
      }

      .dropdown-menu .dropdown-menu {
        margin-left: 1rem;
      }

      .main-content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .main-content.shift {
            margin-left: 0;
        }

        .dashboard-header {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .dashboard-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .dashboard-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-width: 2px;
        }

        .dashboard-card i {
            font-size: 24px;
        }

        .dashboard-card .card-info {
            text-align: right;
        }

        .dashboard-card .card-info h3 {
            margin: 0;
            font-size: 18px;
        }

        .dashboard-card .card-info p {
            margin: 0;
            font-size: 14px;
            color: #888;
        }

        .listings {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .listing {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
            min-width: 150px;
        }

        .listing i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .listing h3 {
            margin: 0;
            font-size: 24px;
        }

        .listing p {
            margin: 0;
            font-size: 14px;
            color: #888;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }

            .dashboard-cards, .listings {
                flex-direction: column;
            }

            .dashboard-card, .listing {
                flex: 1;
                min-width: auto;
            }
        }
  </style>
</head>
<body>
  <!-- Top Header -->
  <div class="top-header bg-teal text-white py-1 fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
      <div>Admin panel</div>
      <div class="icons">
        <a href="mailto:your-email@example.com" class="text-white">
            <i class="bi bi-envelope" style="font-size: 24px;"></i>
        </a>
        <a href="#" class="text-white">
            <i class="bi bi-bell" style="font-size: 24px;"></i>
        </a>
        <a href="#" class="text-white">
            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
        </a>
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
          <li class="nav-item"><a class="nav-link" href="dashboard">Dashboard</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="destinationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
            <ul class="dropdown-menu" aria-labelledby="destinationDropdown">
              <li><a class="dropdown-item" href="#">Create</a></li>
              <li><a class="dropdown-item" href="#">View</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="activitiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Listing</a>
            <ul class="dropdown-menu" aria-labelledby="activitiesDropdown">
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Hotel Listing</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Create</a></li>
                      <li><a class="dropdown-item" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Expired</a></li>
                    </ul>
                </li>

                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Tour Listing</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Create</a></li>
                      <li><a class="dropdown-item" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Expired</a></li>
                    </ul>
                </li>

                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Vehicle Listing</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Create</a></li>
                      <li><a class="dropdown-item" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Expired</a></li>
                    </ul>
                </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="tripTypesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Booking</a>
            <ul class="dropdown-menu" aria-labelledby="tripTypesDropdown">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><a class="dropdown-item" href="#">Approve</a></li>
              <li><a class="dropdown-item" href="#">Pending</a></li>
              <li><a class="dropdown-item" href="#">Cancelled</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destination</a>
            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
              <li><a class="dropdown-item" href="#"> Create</a></li>
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><a class="dropdown-item" href="#">Active</a></li>
              <li><a class="dropdown-item" href="#">Expired</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="contactus">Profile</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main-content">
    <div class="dashboard-cards">
      <div class="dashboard-card" style="background-color: #007bff;">
        <i class="fas fa-envelope"></i>
        <div class="card-info">
          <h3>10 New Messages</h3>
        </div>
      </div>
      <div class="dashboard-card" style="background-color: #28a745;">
        <i class="fas fa-bookmark"></i>
        <div class="card-info">
          <h3>6 New Bookmarks</h3>
        </div>
      </div>
      <div class="dashboard-card" style="background-color: #dc3545;">
        <i class="fas fa-star"></i>
        <div class="card-info">
          <h3>10 New Reviews</h3>
        </div>
      </div>
      <div class="dashboard-card" style="background-color: #ffc107;">
        <i class="fas fa-address-book"></i>
        <div class="card-info">
          <h3>10 New Bookings</h3>
        </div>
      </div>
    </div>
    <div class="listings">
      <div class="listing">
        <i class="fas fa-hotel" style="color: #dc3545;"></i>
        <h3>10</h3>
        <p>New Hotel Listings</p>
      </div>
      <div class="listing">
        <i class="fas fa-torii-gate" style="color: #ffc107;"></i>
        <h3>26</h3>
        <p>New Tour Listings</p>
      </div>
      <div class="listing">
        <i class="fas fa-anchor" style="color: #007bff;"></i>
        <h3>16</h3>
        <p>New Cruise Listings</p>
      </div>
      <div class="listing">
        <i class="fas fa-car" style="color: #ffc107;"></i>
        <h3>22</h3>
        <p>New Car Listings</p>
      </div>
      <div class="listing">
        <i class="fas fa-plane" style="color: #dc3545;"></i>
        <h3>12</h3>
        <p>New Flight Listings</p>
      </div>
    </div>
  </div>
  <?php
  include("bar.php");
  ?>


  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // JavaScript to handle nested dropdown toggle
    document.querySelectorAll('.dropdown-submenu').forEach(function (submenu) {
      submenu.addEventListener('click', function (e) {
        const submenuDropdown = submenu.querySelector('.dropdown-menu');
        if (submenuDropdown) {
          submenuDropdown.classList.toggle('show');
        }
        e.stopPropagation();
      });
    });

    // JavaScript to hide top header on scroll
    const topHeader = document.querySelector('.top-header');
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
