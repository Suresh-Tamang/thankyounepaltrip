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
            document.addEventListener('click', function (event) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (!menu.parentElement.contains(event.target)) {
                        menu.classList.add('hidden');
                    }
                });
            });

            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', function (event) {
                    event.stopPropagation();
                    const dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('hidden');
                });
            });
        });
    </script>
    <script>
        function validateForm(event) {
            event.preventDefault();
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const userName = document.getElementById('userName').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const repeatPassword = document.getElementById('repeatPassword').value;
            const phone = document.getElementById('phone').value.trim();
            const dob = document.getElementById('dob').value;

            if (!firstName || !lastName || !userName || !email || !password || !repeatPassword || !phone || !dob) {
                alert('All fields are required.');
                return false;
            }

            if (password !== repeatPassword) {
                alert('Passwords do not match.');
                return false;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phone)) {
                alert('Please enter a valid 10-digit phone number.');
                return false;
            }

            alert('User created successfully!');
            return true;
        }
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
        <div class="ml-64 p-6 w-full">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4"><br></h1>
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h2 class="text-xl font-semibold mb-4">Create Users</h2>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" onsubmit="return validateForm(event)">
                    <div>
                        <label class="block text-gray-700">First Name:</label>
                        <input type="text" id="firstName" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Last Name:</label>
                        <input type="text" id="lastName" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">User Name:</label>
                        <input type="text" id="userName" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Email:</label>
                        <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Password:</label>
                        <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Repeat Password:</label>
                        <input type="password" id="repeatPassword" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Phone #:</label>
                        <input type="text" id="phone" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Date Of Birth:</label>
                        <input type="date" id="dob" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="md:col-span-2 flex justify-end space-x-4">
                        <button type="submit" class="bg-[#008080] text-white px-4 py-2 rounded">Create </button>
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
