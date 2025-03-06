<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - Travel Monster</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        .profile-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .stats-card {
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .stats-card h3 {
            font-size: 1.25rem;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function () {
                    const dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('hidden');
                });
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

        <!-- Main Content -->
        <div class="w-3/4 p-6 ml-64"><br><br>
            <!-- Profile Section -->
            <div class="profile-card mb-6">
                <img src="https://via.placeholder.com/150" alt="Admin Avatar">
                <h2 class="text-2xl font-semibold mt-4">John Doe</h2>
                <p class="text-gray-500">Admin</p>
                <div class="flex justify-center mt-4">
                    <button class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 mx-2">Edit Profile</button>
                    <button class="bg-red-500 text-white p-2 rounded hover:bg-red-600 mx-2">Change Password</button>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-3 gap-6">
                <div class="stats-card">
                    <h3>Total Users</h3>
                    <p class="text-2xl font-bold">1,245</p>
                </div>
                <div class="stats-card">
                    <h3>Active Users</h3>
                    <p class="text-2xl font-bold">1,120</p>
                </div>
                <div class="stats-card">
                    <h3>Pending Requests</h3>
                    <p class="text-2xl font-bold">52</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
