<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div>
    <!-- Navbar -->
    <nav class="bg-green-500">
      <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex items-center">
          <!-- Navbar Toggler -->
          <button id="sidebarToggle" class="text-white focus:outline-none ml-2 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <a href="dash.html" class="text-2xl font-bold font-sans tracking-tighter text-white">Admin Dashboard</a>
        </div>
        <div class="flex items-center space-x-6 mr-2">
          <a href="#" class="font-semibold text-lg text-white">About</a>
          <a href="#" class="font-semibold text-lg text-white">Contact</a>
          <div class="relative">
            <button id="profileToggle" class="focus:outline-none">
              <img src="https://static.vecteezy.com/system/resources/previews/019/194/935/non_2x/global-admin-icon-color-outline-vector.jpg" alt="Admin Profile" class="w-10 h-10 rounded-full border-2 border-white">
            </button>
            <!-- Dropdown Menu -->
            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
              <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
              <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
              <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar" class="bg-gray-800 text-white w-56 space-y-6 py-7 px-2 fixed h-full transform -translate-x-full transition-transform duration-300 ease-in-out">
      <nav>
        <div>
          <button id="usersToggle" class="w-full text-left block py-2.5 px-4 rounded hover:bg-gray-700 flex justify-between items-center">
            Users
            <svg id="usersArrow" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="usersDropdown" class="hidden pl-4 mt-2">
            <a href="createUser.html" data-page="createUser.html" class="block py-2 px-4 rounded hover:bg-gray-700">Create User</a>
            <a href="manageUser.html" data-page="manageUser.html" class="block py-2 px-4 rounded hover:bg-gray-700">List of Users</a>
          </div>
        </div>
        <div>
          <button id="bookingsToggle" class="w-full text-left block py-2.5 px-4 rounded hover:bg-gray-700 flex justify-between items-center">
            Bookings
            <svg id="bookingsArrow" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="bookingsDropdown" class="hidden pl-4 mt-2">
            <a href="viewBooking.html" data-page="viewBooking.html" class="block py-2 px-4 rounded hover:bg-gray-700">All</a>
            <a href="approved.html" data-page="approved.html" class="block py-2 px-4 rounded hover:bg-gray-700">Approved</a>
            <a href="pending.html" data-page="pending.html" class="block py-2 px-4 rounded hover:bg-gray-700">Pending</a>
            <a href="cancelled.html" data-page="cancelled.html" class="block py-2 px-4 rounded hover:bg-gray-700">Cancelled</a>
          </div>
        </div>
        <div>
          <button id="listingsToggle" class="w-full text-left block py-2.5 px-4 rounded hover:bg-gray-700 flex justify-between items-center">
            Activities
            <svg id="listingsArrow" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="listingsDropdown" class="hidden pl-4 mt-2">
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">All Activities</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Create</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Active</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Drafts</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Expired</a>
          </div>
        </div>
        <div>
          <button id="profilesToggle" class="w-full text-left block py-2.5 px-4 rounded hover:bg-gray-700 flex justify-between items-center">
            Profile
            <svg id="profilesArrow" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="profilesDropdown" class="hidden pl-4 mt-2">
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">View Profiles</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Edit Profiles</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Change Password</a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Main Content -->
    <div id="mainContent" class="ml-0 transition-all duration-300 ease-in-out">
      <div class="p-6" style="height: 800px; width: 900px; border: 1px solid black;">
      <body class="bg-gray-200">
    <div class="max-w-7xl mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tour Listing</h1>
            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-4">Add Details</h2>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700">Title:</label>
                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                        <div>
                            <label class="block text-gray-700">District:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>Kathmandu</option>
                                <option>Lalitpur</option>
                                <option>Bhaktapur</option>
                                <option>Kaski</option>
                                <option>Lumbini</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">City:</label>
                            <input type="text" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                        <div>
                            <label class="block text-gray-700">Vehicles:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>Bus</option>
                                <option>Flight</option>
                                <option>Helicopter</option>
                                <option>Car</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Duration:</label>
                            <select class="w-full border border-gray-300 rounded-lg p-2">
                                <option>Choose...</option>
                                <option>1 Day</option>
                                <option>3 Day</option>
                                <option>7 Day</option>
                                <option>15 Day</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700">Price:</label>
                            <input type="Number" class="w-full border border-gray-300 rounded-lg p-2">
                        </div>
                    </div>
                    <div id="dropzone" class="dropzone mb-4">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                        <p class="text-gray-700">Drop files here or click to upload.</p>
                        <p>upload picture here</p>
                        <input type="file" id="fileInput" class="hidden" accept="image/*">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Embed Map</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-2 h-24"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Tour Details</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-2 h-24"></textarea>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Submit</button>
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');

        dropzone.addEventListener('click', () => fileInput.click());

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dragover');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('dragover');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            const validFiles = Array.from(files).filter(file => file.type.startsWith('image/'));
            if (validFiles.length > 0) {
                alert(`${validFiles.length} image(s) selected.`);
            } else {
                alert('Please upload only image files.');
            }
        }
    </script>
    </div>
  </div>

  <script>
     document.addEventListener('DOMContentLoaded', function () {
      const sidebar = document.getElementById('sidebar');
      const sidebarToggle = document.getElementById('sidebarToggle');
      const content = document.getElementById('mainContent');

      sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        content.classList.toggle('ml-64');
      });

      // JavaScript to toggle the profile dropdown
      const profileToggle = document.getElementById('profileToggle');
      const profileDropdown = document.getElementById('profileDropdown');

      profileToggle.addEventListener('click', () => {
        profileDropdown.classList.toggle('hidden');
      });

      // Close dropdown when clicking outside
      document.addEventListener('click', (event) => {
        if (!profileToggle.contains(event.target) && !profileDropdown.contains(event.target)) {
          profileDropdown.classList.add('hidden');
        }
      });

      const usersToggle = document.getElementById('usersToggle');
      const usersDropdown = document.getElementById('usersDropdown');
      const usersArrow = document.getElementById('usersArrow');

      usersToggle.addEventListener('click', () => {
        usersDropdown.classList.toggle('hidden');
        usersArrow.classList.toggle('rotate-180'); // Rotate the arrow
      });

      const bookingsToggle = document.getElementById('bookingsToggle');
      const bookingsDropdown = document.getElementById('bookingsDropdown');
      const bookingsArrow = document.getElementById('bookingsArrow');

      bookingsToggle.addEventListener('click', () => {
        bookingsDropdown.classList.toggle('hidden');
        bookingsArrow.classList.toggle('rotate-180'); // Rotate the arrow
      });

      const listingsToggle = document.getElementById('listingsToggle');
      const listingsDropdown = document.getElementById('listingsDropdown');
      const listingsArrow = document.getElementById('listingsArrow');

      listingsToggle.addEventListener('click', () => {
        listingsDropdown.classList.toggle('hidden');
        listingsArrow.classList.toggle('rotate-180'); // Rotate the arrow
      });

      const profilesToggle = document.getElementById('profilesToggle');
      const profilesDropdown = document.getElementById('profilesDropdown');
      const profilesArrow = document.getElementById('profilesArrow');

      profilesToggle.addEventListener('click', () => {
        profilesDropdown.classList.toggle('hidden');
        profilesArrow.classList.toggle('rotate-180'); // Rotate the arrow
      });

         // Load Content Dynamically
      const loadContent = async (page) => {
        const response = await fetch(page);
        const html = await response.text();
        content.innerHTML = html;

        // Initialize scripts for the loaded content
        if (page === 'manageUser.html','viewBooking.html','approved.html','pending.html','cancelled.html') {
          initializeSearch();
        }
        };

            // Add Event Listeners to Sidebar Links
       const sidebarLinks = document.querySelectorAll('#sidebar a[data-page]');
        sidebarLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          const page = link.getAttribute('data-page');
          loadContent(page);
          history.pushState(null, null, page); // Update URL
        });
      });


      // Handle Browser Back/Forward
      window.addEventListener('popstate', () => {
        const page = window.location.pathname.split('/').pop() || 'admin/dash.html';
        loadContent(page);
      });

      const initializeSearch = () => {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('tbody tr');

        if (searchInput && tableRows.length > 0) {
          searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase();

            tableRows.forEach(row => {
              const rowText = row.textContent.toLowerCase();
              if (rowText.includes(searchTerm)) {
                row.style.display = '';
              } else {
                row.style.display = 'none';
              }
            });
          });
        } else {
          console.error("Search elements not found!");
        }
      };
      
      document.getElementById('mainContent').addEventListener('click', (e) => {
        const button = e.target.closest('[data-page]');
        if (button) {
          e.preventDefault();
          const page = button.getAttribute('data-page');
          loadContent(page); // Load the page dynamically
          history.pushState(null, null, page); // Update URL
        }
       });

    });
  </script>
</body>
</html>