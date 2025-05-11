<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "App" }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex overflow-x-hidden">
  <!-- Sidebar -->
  <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-30 w-64 bg-indigo-700 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out overflow-y-auto">
    <div class="p-6 font-bold text-2xl border-b border-indigo-600">Metschoo Learn</div>
    <nav class="mt-6 flex flex-col space-y-2 px-4">
     <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-600 transition">Dashboard</a>
     <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-600 transition">Siswa</a>
     <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-600 transition">Guru</a>
     <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-600 transition">Absensi</a>
     <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-600 transition">Materi</a>
    </nav>
  </aside>

  <div id="overlay" class="fixed inset-0  bg-opacity-30 z-20 hidden md:hidden"></div>

  <!-- Main content -->
  <div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-64 transition-all duration-300 ease-in-out">
    <!-- Header -->
    <header class="flex items-center justify-between bg-white shadow-md p-4 sticky top-0 z-10">
      <button id="btnToggleSidebar" aria-label="Toggle sidebar" class="md:hidden text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <h1 class="text-xl font-semibold text-gray-800">{{ $title }}</h1>
      
      <!-- Profile dropdown -->
      <div class="relative" id="profileDropdownContainer">
        <button
          id="btnProfileDropdown"
          aria-haspopup="true"
          aria-expanded="false"
          aria-label="Open user menu"
          class="flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 rounded"
          type="button"
        >
          <img src="https://i.pravatar.cc/40" alt="User avatar" class="w-9 h-9 rounded-full border-2 border-indigo-600" />
          <span class="text-gray-800 font-medium hidden sm:block">John Doe</span>
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
            <path d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div
          id="profileDropdown"
          class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-20"
          role="menu"
          aria-orientation="vertical"
          aria-labelledby="btnProfileDropdown"
        >
          <div class="py-1">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100" role="menuitem">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-100" role="menuitem">Settings</a>
            <hr class="border-t my-1 border-gray-200" />
            <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-100" role="menuitem">Sign out</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Content -->
    <main class="flex-1 p-6 overflow-auto">
      {{ $slot }}
    </main>
  </div>
</body>
</html>