<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Users List</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    /* Hide additional columns on smaller screens */
    @media (max-width: 768px) {
      .hidden-on-mobile {
        display: none;
      }
      .expand-button {
        display: inline-block;
      }
    }

    .expand-button {
      display: none;
      cursor: pointer;
      color: #4F46E5; /* Tailwind's indigo-600 */
    }
  </style>
  <script>
    // Function to fetch data from the backend
    async function fetchData() {
      try {
        const response = await fetch('/api/users'); // Replace with your backend API endpoint
        if (!response.ok) {
          throw new Error('Failed to fetch data');
        }
        const data = await response.json();
        populateTable(data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    }

    // Function to populate the table with data
    function populateTable(data) {
      const tbody = document.querySelector('tbody');
      tbody.innerHTML = ''; // Clear existing rows

      data.forEach((user, index) => {
        const row = `
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left">${user.id}</td>
            <td class="py-3 px-6 text-left">${user.firstName}</td>
            <td class="py-3 px-6 text-left">${user.lastName}</td>
            <td class="py-3 px-6 text-left hidden-on-mobile">${user.username}</td>
            <td class="py-3 px-6 text-left hidden-on-mobile">${user.email}</td>
            <td class="py-3 px-6 text-left hidden-on-mobile">${user.phone}</td>
            <td class="py-3 px-6 text-left hidden-on-mobile">
              <span class="${getStatusClass(user.status)} py-1 px-3 rounded-full text-xs">
                ${user.status}
              </span>
            </td>
            <td class="py-3 px-6 text-left hidden-on-mobile">
              <div class="flex item-center justify-center">
                <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </td>
            <td class="py-3 px-6 text-left">
              <span class="expand-button" onclick="toggleDetails(this)">+</span>
            </td>
          </tr>
        `;
        tbody.insertAdjacentHTML('beforeend', row);
      });
    }

    // Helper function to get status class based on status
    function getStatusClass(status) {
      switch (status.toLowerCase()) {
        case 'active':
          return 'bg-green-200 text-green-600';
        case 'expired':
          return 'bg-red-200 text-red-600';
        case 'draft':
          return 'bg-yellow-200 text-yellow-600';
        case 'featured':
          return 'bg-orange-200 text-orange-600';
        default:
          return 'bg-gray-200 text-gray-600';
      }
    }

    // Function to toggle additional details on smaller screens
    function toggleDetails(button) {
      const row = button.closest('tr');
      const hiddenColumns = row.querySelectorAll('.hidden-on-mobile');

      hiddenColumns.forEach((column) => {
        if (column.style.display === 'none' || column.style.display === '') {
          column.style.display = 'table-cell';
          button.textContent = '-';
        } else {
          column.style.display = 'none';
          button.textContent = '+';
        }
      });
    }

    // Fetch data when the page loads
    document.addEventListener('DOMContentLoaded', fetchData);
  </script>
</head>
<body class="bg-gray-200 p-4">
  <div class="container mx-auto bg-white p-4 rounded shadow">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-bold">Users</h1>
      <div class="flex items-center space-x-2">
        <div class="flex space-x-2">
          <button class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
            <i class="fas fa-print"></i> <span class="hidden sm:inline">Print</span>
          </button>
          <button class="bg-red-500 text-white p-2 rounded hover:bg-red-600">
            <i class="fas fa-file-pdf"></i> <span class="hidden sm:inline">PDF</span>
          </button>
          <button class="bg-green-500 text-white p-2 rounded hover:bg-green-600">
            <i class="fas fa-file-excel"></i> <span class="hidden sm:inline">Excel</span>
          </button>
        </div>
      </div>
    </div>
    <div class="flex justify-between items-center mb-4">
      <div>
        <label class="mr-2" for="entries">Show</label>
        <select class="border rounded p-1" id="entries">
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
        </select>
        <span class="ml-2">entries</span>
      </div>
      <div class="flex items-center">
        <label class="mr-2" for="search">Search:</label>
        <input class="border rounded p-1" id="search" type="text" />
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white">
        <thead>
          <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">#</th>
            <th class="py-3 px-6 text-left">First Name</th>
            <th class="py-3 px-6 text-left">Last Name</th>
            <th class="py-3 px-6 text-left hidden-on-mobile">User Name</th>
            <th class="py-3 px-6 text-left hidden-on-mobile">Email</th>
            <th class="py-3 px-6 text-left hidden-on-mobile">Phone #</th>
            <th class="py-3 px-6 text-left hidden-on-mobile">Status</th>
            <th class="py-3 px-6 text-left hidden-on-mobile">Action</th>
            <th class="py-3 px-6 text-left"></th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
          <!-- Rows will be populated dynamically -->
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>