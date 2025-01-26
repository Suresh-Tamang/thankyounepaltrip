<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Document</title>
  <style>
    #carouselExampleCaptions {
      height: 400px;
    }

    #carouselExampleCaptions .carousel-inner {
      height: 100%;
    }

    #carouselExampleCaptions .carousel-item img {
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="demo.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block" style="color: black">
            <h5>Beautifuul</h5>
            <p>Home</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="demo.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block" style="color: black">
            <h5>Second slide label</h5>
            <p>Destination</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="demo.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block" style="color: black">
            <h5>Jungle</h5>
            <p>trekking</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="trip-main-container">
    <div class="left-content">
      <div class="trip-facts">

        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
          <div class="flex justify-between items-start">
            <div>
              <h1 class="text-2xl font-bold mb-2">Fantastic Maldives Tour Package</h1>
              <div class="flex items-center mb-2">
                <div class="flex text-yellow-500">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <a href="#" class="text-teal-500 ml-2">1 Review</a>
              </div>
            </div>
            <div class="bg-teal-500 text-white p-2 rounded-lg text-center">
              <div class="text-2xl font-bold">11</div>
              <div class="text-sm">Days</div>
            </div>
          </div>
          <div class="bg-gray-100 p-4 rounded-lg mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-center">
              <i class="fas fa-bus text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Transportation</div>
                <div class="text-sm">Bus, Airlines</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-hotel text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Accomodation</div>
                <div class="text-sm">3 Stars Hotels</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-mountain text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Maximum Altitude</div>
                <div class="text-sm">5,416 metres</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-plane-departure text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Departure from</div>
                <div class="text-sm">Kathmandu</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-calendar-alt text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Best season</div>
                <div class="text-sm">Feb, Mar, Apr & May</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-hiking text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Tour type</div>
                <div class="text-sm">Eco-Tour, Hiking</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-utensils text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Meals</div>
                <div class="text-sm">All meals during the trek</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-language text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Language</div>
                <div class="text-sm">English, Spanish, French, Chinese</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-dumbbell text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Fitness level</div>
                <div class="text-sm">Easy to Moderate</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-users text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Group Size</div>
                <div class="text-sm">2-15</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-child text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Minimum Age</div>
                <div class="text-sm">12</div>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-user-alt text-teal-500 mr-2"></i>
              <div>
                <div class="text-sm text-gray-500">Maximum Age</div>
                <div class="text-sm">65</div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full bg-white shadow-md">
          <div class="container mx-auto">
            <ul class="flex justify-start space-x-8 py-4">
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(0)">Overview</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(1)">Itinerary</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(2)">Cost</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(3)">FAQs</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(4)">Map</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
              <li class="relative">
                <a href="#" class="text-gray-700 hover:text-gray-900" onclick="setActiveMenuItem(5)">Review</a>
                <div class="absolute left-0 right-0 h-1 bg-teal-500 mt-1" style="display: none;"></div>
              </li>
            </ul>
          </div>
        </div>

        <script>
          // Function to set the active menu item
          function setActiveMenuItem(activeIndex) {
            const menuItems = document.querySelectorAll('ul li');
            menuItems.forEach((item, index) => {
              const underline = item.querySelector('div');
              if (index === activeIndex) {
                underline.style.display = 'block';
              } else {
                underline.style.display = 'none';
              }
            });
          }

          // Example: Set the first menu item (Overview) as active by default
          setActiveMenuItem();
        </script>
      </div>
    </div>
    <div class="right-content"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>