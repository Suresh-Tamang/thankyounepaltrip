<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard with Bar Graph</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    /* Your previous CSS styles */
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

    /* Add styles for the chart container */
    .chart-container {
      width: 100%;
      max-width: 600px;
      margin: 30px auto;
    }
  </style>
</head>
<body>
  <!-- Your previous HTML content (Navbar, top header, etc.) -->

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="dashboard-cards">
      <!-- Your dashboard cards go here -->
    </div>
    
    <!-- Bar Graph for Bookings -->
    <div class="chart-container">
      <canvas id="bookingChart"></canvas>
    </div>
  </div>

  <script>
    // JavaScript to handle the bar graph (Booking Chart)
    const ctx = document.getElementById('bookingChart').getContext('2d');
    const bookingChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example months
        datasets: [{
          label: 'Bookings',
          data: [10, 15, 8, 20, 25, 30], // Example booking data
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
