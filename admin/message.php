<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
        <div class="ml-64 p-6 w-full">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4"><br></h1>
                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <form>
                        <div class="flex flex-wrap justify-between mb-4">
            <button class="bg-red-500 text-white px-4 py-2 rounded mb-2 sm:mb-0">Compose</button>
            <div class="flex flex-wrap space-x-2">
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    Inbox
                </a>
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    Sent
                </a>
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    Important
                </a>
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    starred
                </a>
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    Draft
                </a>
                <a href="your-link-here" class="bg-gray-300 text-black px-4 py-2 rounded mb-2 sm:mb-0 inline-block">
                    Trash
                </a>
            </div>
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">To:</label>
                <input type="text" class="w-full px-4 py-2 border rounded" />
            </div>
            <div>
                <label class="block text-gray-700">Subject:</label>
                <input type="text" class="w-full px-4 py-2 border rounded" />
            </div>
            <div>
                <label class="block text-gray-700">Paragraph</label>
                <div class="border rounded p-2">
                    <div id="toolbar">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-list" value="bullet"></button>
                        <button class="ql-list" value="ordered"></button>
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-table"></button>
                        <button class="ql-undo"></button>
                        <button class="ql-redo"></button>
                    </div>
                    <div id="editor" class="h-32"></div>
                </div>
            </div>
            <div class="flex flex-wrap space-x-2">
                <button type="submit" class="bg-[#008080] text-white px-4 py-2 rounded">Send </button>
                <button type="submit" class="bg-[red] text-white px-4 py-2 rounded">Discard </button>
                <button type="submit" class="bg-[Gray] text-white px-4 py-2 rounded">Draft </button>
            </div>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: '#toolbar'
            }
        });
    </script>
</body>
</html>
