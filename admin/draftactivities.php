<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    
                    // Close all dropdowns
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        if (menu !== this.nextElementSibling) {
                            menu.classList.add('hidden');
                        }
                    });

                    // Toggle current dropdown
                    const dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('hidden');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function (event) {
                if (!event.target.closest('.dropdown-toggle')) {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                }
            });
        });
    </script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-white w-64 shadow-lg fixed h-full overflow-y-auto">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold">THANKYOUNEPALTRIP</h1>
            </div>
            
            <nav class="p-4">
                <ul>
                    <li class="mb-2">
                        <a class="flex items-center text-gray-700 hover:text-blue-500" href="dash">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center justify-between text-gray-700 hover:text-blue-500 dropdown-toggle" href="#">
                            <span><i class="fa-solid fa-user-plus"></i> Users</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="ml-6 mt-2 hidden">
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="createuser">Create User</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="listuser">User List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center justify-between text-gray-700 hover:text-blue-500 dropdown-toggle" href="#">
                            <span><i class="fa-solid fa-bookmark"></i> Booking</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="ml-6 mt-2 hidden">
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="allbooking">All</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="createbooking">Create</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="approvebooking">Approved</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="pendingbooking">Pending</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="cancelbooking">Cancelled</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center justify-between text-gray-700 hover:text-blue-500 dropdown-toggle" href="#">
                            <span><i class="fa-solid fa-globe"></i> Activities</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="ml-6 mt-2 hidden">
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="allactivities">All</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="createactivities">Create</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="activeactivities">Active</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="draftactivities">Draft</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="expireactivities">Expire</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center justify-between text-gray-700 hover:text-blue-500 dropdown-toggle" href="#">
                            <span><i class="fa-solid fa-user"></i> Profile</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="ml-6 mt-2 hidden">
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="profileview">View Profile</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="profileedit">Edit profile</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-gray-700 hover:text-blue-500" href="password">Change Password</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </aside>
        <!-- Navbar -->
        <div class="fixed top-0 left-64 w-[calc(100%-16rem)] bg-white shadow-md p-4 flex justify-between items-center z-10">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
            <div class="flex space-x-4">
                <a href="message" class="text-gray-600 hover:text-blue-500" aria-label="Messages">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="task" class="text-gray-600 hover:text-blue-500" aria-label="Tasks">
                    <i class="fas fa-tasks"></i>
                </a>
                <a href="notification" class="text-gray-600 hover:text-blue-500" aria-label="Notifications">
                    <i class="fas fa-bell"></i>
                </a>
                <a href="profileview" class="text-gray-600 hover:text-blue-500" aria-label="Profile">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>

        <!-- main section -->
        <div class="ml-64 p-6 w-[84%] mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4"><br></h1>
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h2 class="text-xl font-semibold mb-4">Draft Activities</h2>
                    <form>
                         <!-- Search Bar -->
                        <div class="mt-4 mb-6">
                            <input type="text" id="searchInput" placeholder="Search users..." class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>

                        <!-- User Table -->
                        <div class="bg-white p-6 rounded-lg shadow-lg overflow-x-auto">
                            <table class="min-w-full" id="userTable">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Activity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">LOcation</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr>
                                        <td class="px-6 py-4">Trekking</td>
                                        <td class="px-6 py-4">Everest Base Camp</td>
                                        <td class="px-6 py-4">Solukhumbu</td>
                                        <td class="px-6 py-4"><span class="px-2 py-1 text-sm bg-gray-100 text-green-800 rounded-full">Draft</span></td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-500 hover:text-blue-700">Edit</button>
                                            <button class="text-red-500 hover:text-red-700 ml-2 delete-btn">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
