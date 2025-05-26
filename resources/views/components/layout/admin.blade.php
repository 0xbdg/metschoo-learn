<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "app"}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar (Mobile) -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 lg:hidden" id="sidebarBackdrop"></div>
        <div class="fixed inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition duration-200 ease-in-out z-50 w-64 bg-gray-800 text-white" id="mobileSidebar">
            <div class="flex items-center justify-between p-4 border-b border-gray-700">
                <h1 class="text-xl font-semibold">Admin Dashboard</h1>
                <button class="lg:hidden" id="closeSidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="p-4">
                <div class="space-y-2">
                    <a href="{{ route("dashboard") }}" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <!-- Users Dropdown -->
                    <div class="relative">
                        <button class="flex items-center justify-between w-full p-2 rounded hover:bg-gray-700 users-dropdown-btn">
                            <div class="flex items-center">
                                <i class="fas fa-users mr-3"></i>
                                <span>Users</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="hidden mt-1 ml-8 users-dropdown-content">
                            <a href="{{ route("superuser_management") }}" class="block p-2 rounded hover:bg-gray-700">Admin</a>
                            <a href="{{ route("student_management") }}" class="block p-2 rounded hover:bg-gray-700">Siswa</a>
                            <a href="{{ route("teacher_management") }}" class="block p-2 rounded hover:bg-gray-700">Guru</a>
                        </div>
                    </div>
                    
                    <a href="#" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-calendar-check mr-3"></i>
                        <span>Attendance</span>
                    </a>
                    <a href="#" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-book mr-3"></i>
                        <span>Courses</span>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center">
                        <button class="lg:hidden mr-4" id="openSidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-1 rounded-full hover:bg-gray-200">
                                <i class="fas fa-bell"></i>
                            </button>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                        </div>
                        <div class="relative">
                            <button class="flex items-center space-x-2 focus:outline-none" id="userMenuButton">
                                <img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full">
                                <span class="hidden md:inline">Admin</span>
                                <i class="fas fa-chevron-down text-xs hidden md:inline"></i>
                            </button>
                            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" id="userMenu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
              <div class="container mx-auto">
                {{ $slot }}
              </div>
            </main>
        </div>
    </div>
  </body>
</html>