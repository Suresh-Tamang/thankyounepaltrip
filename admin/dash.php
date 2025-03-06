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
        <div class="flex-1 flex flex-col ml-64">
            <main class="flex-1 p-6 mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-blue-500 text-white p-4 rounded shadow flex items-center">
                        <i class="fas fa-comments fa-2x"></i>
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">26</h2>
                            <p>New Comments!</p>
                        </div>
                    </div>
                    <div class="bg-green-500 text-white p-4 rounded shadow flex items-center">
                        <i class="fas fa-tasks fa-2x"></i>
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">12</h2>
                            <p>New Tasks!</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">
                    <div class="lg:col-span-2 bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-bold mb-4">Area Chart Example</h2>
                        <img alt="Area chart example" class="w-full" src="https://storage.googleapis.com/a1aa/image/ysvIGKU5xjouDdZ1JgtBj-n_G9zUPdCJdnrYlDGmREI.jpg"/>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-bold mb-4">Notifications Panel</h2>
                        <ul>
                            <li class="flex items-center mb-2 text-gray-700">
                                <i class="fas fa-comment fa-fw text-gray-500"></i>
                                <span class="ml-2">New Comment</span>
                                <span class="ml-auto text-gray-500 text-sm">4 minutes ago</span>
                            </li>
                            <li class="flex items-center mb-2 text-gray-700">
                                <i class="fas fa-user-plus fa-fw text-gray-500"></i>
                                <span class="ml-2">3 New Followers</span>
                                <span class="ml-auto text-gray-500 text-sm">12 minutes ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
