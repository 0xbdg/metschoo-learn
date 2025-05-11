<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "app" }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="fixed top-0 left-0 right-0 bg-white border-b border-gray-200 shadow-sm h-12 flex items-center px-4 md:hidden z-40">
        <h1 class="text-lg font-semibold text-gray-800">{{ $title }}</h1>
    </div>

    <div class="min-h-screen pt-16 md:pt-20 md:pb-16">
        <div class="p-6">
            {{ $slot }}
        </div>
    
      <!-- Responsive Navbar -->
      <div class="fixed bottom-0 md:top-0 md:bottom-auto left-0 right-0 bg-white border-t md:border-t-0 md:border-b border-gray-200 shadow-md z-50">
        <div class="flex justify-between items-center h-16 px-4 md:px-8">
          
          <!-- Logo (shown only on desktop) -->
          <div class="hidden md:block">
            <a href="#" class="text-xl font-bold text-blue-600">
              <i class="fas fa-leaf mr-2"></i>MyApp
            </a>
          </div>
    
          <!-- Nav Links -->
          <div class="flex justify-around flex-1 md:justify-end space-x-8">
            <!-- Home -->
            <a href="#" class="flex flex-col items-center text-gray-500 hover:text-blue-500">
              <i class="fas fa-home text-xl"></i>
              <span class="hidden md:inline text-sm">Home</span>
            </a>
    
            <!-- Search -->
            <a href="#" class="flex flex-col items-center text-gray-500 hover:text-blue-500">
              <i class="fas fa-calendar-days text-xl"></i>
              <span class="hidden md:inline text-sm">Calender</span>
            </a>
    
            <!-- Notifications -->
            <a href="#" class="flex flex-col items-center text-gray-500 hover:text-blue-500">
              <i class="fas fa-bell text-xl"></i>
              <span class="hidden md:inline text-sm">Alerts</span>
            </a>

            <!-- Add -->
            <a href="#" class="flex flex-col items-center text-gray-500 hover:text-blue-500">
              <i class="fas fa-gear text-xl"></i>
              <span class="hidden md:inline text-sm">Settings</span>
            </a>
          </div>
        </div>
    </div>
</body>
</html>