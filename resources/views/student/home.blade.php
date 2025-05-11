<x-layout.student title="Beranda">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
        <!-- Card 1 -->
        <div class="relative rounded-lg border border-gray-300 overflow-hidden shadow-sm bg-white">
          <div class="relative bg-gradient-to-r from-green-600 to-green-500 p-4 rounded-t-lg">
            <div>
              <h3 class="text-white text-lg font-normal">XI PPLG</h3>
              <p class="text-green-200 text-xs font-semibold uppercase">SEMESTER 1</p>
              <p class="text-green-100 text-xs font-light">Vile Size &amp; Co</p>
            </div>
            <div class="absolute top-4 right-4 text-white cursor-pointer" data-menu-id="menu1" onclick="toggleMenu('menu1')">
              <i class="fas fa-ellipsis-v"></i>
            </div>
            <!-- Dropdown Menu -->
            <div id="menu1" class="hidden absolute top-12 right-4 bg-white border border-gray-300 rounded shadow-md z-10">
              <ul class="text-sm text-gray-700">
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Edit</li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Delete</li>
              </ul>
            </div>
            <img alt="Portrait" class="absolute -bottom-8 right-4 w-16 h-16 rounded-full border border-white object-cover object-center"
              src="https://storage.googleapis.com/a1aa/image/b329732d-3252-4c8d-775a-db91a3a184d7.jpg" />
          </div>
          <div class="border-t border-gray-300 h-20 sm:h-24 md:h-28"></div>
          <div class="flex justify-end gap-4 p-3 border-t border-gray-300">
            <button aria-label="Camera" class="text-black text-lg"><i class="fas fa-camera"></i></button>
            <button aria-label="Folder" class="text-black text-lg"><i class="fas fa-folder"></i></button>
          </div>
        </div>
    
        <!-- Card 2 -->
        <div class="relative rounded-lg border border-gray-300 overflow-hidden shadow-sm bg-white">
          <div class="relative bg-gradient-to-r from-purple-600 to-purple-400 p-4 rounded-t-lg">
            <div>
              <h3 class="text-white text-lg font-normal">XII PPLG</h3>
              <p class="text-purple-200 text-xs font-semibold uppercase">SEMESTER 2</p>
              <p class="text-purple-100 text-xs font-light">Violet Tech Group</p>
            </div>
            <div class="absolute top-4 right-4 text-white cursor-pointer" data-menu-id="menu2" onclick="toggleMenu('menu2')">
              <i class="fas fa-ellipsis-v"></i>
            </div>
            <!-- Dropdown Menu -->
            <div id="menu2" class="hidden absolute top-12 right-4 bg-white border border-gray-300 rounded shadow-md z-10">
              <ul class="text-sm text-gray-700">
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Edit</li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Delete</li>
              </ul>
            </div>
            <img alt="Portrait" class="absolute -bottom-8 right-4 w-16 h-16 rounded-full border border-white object-cover object-center"
              src="https://storage.googleapis.com/a1aa/image/2071ddd4-28fc-47ba-bfa5-7aa9196a9dcf.jpg" />
          </div>
          <div class="border-t border-gray-300 h-20 sm:h-24 md:h-28"></div>
          <div class="flex justify-end gap-4 p-3 border-t border-gray-300">
            <button aria-label="Camera" class="text-black text-lg"><i class="fas fa-camera"></i></button>
            <button aria-label="Folder" class="text-black text-lg"><i class="fas fa-folder"></i></button>
          </div>
        </div>
    
        <!-- Card 3 -->
        <div class="relative rounded-lg border border-gray-300 overflow-hidden shadow-sm bg-white">
          <div class="relative bg-gradient-to-r from-purple-600 to-purple-400 p-4 rounded-t-lg">
            <div>
              <h3 class="text-white text-lg font-normal">XII PPLG</h3>
              <p class="text-purple-200 text-xs font-semibold uppercase">SEMESTER 2</p>
              <p class="text-purple-100 text-xs font-light">Violet Tech Group</p>
            </div>
            <div class="absolute top-4 right-4 text-white cursor-pointer" data-menu-id="menu3" onclick="toggleMenu('menu3')">
              <i class="fas fa-ellipsis-v"></i>
            </div>
            <!-- Dropdown Menu -->
            <div id="menu3" class="hidden absolute top-12 right-4 bg-white border border-gray-300 rounded shadow-md z-10">
              <ul class="text-sm text-gray-700">
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Edit</li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Delete</li>
              </ul>
            </div>
            <img alt="Portrait" class="absolute -bottom-8 right-4 w-16 h-16 rounded-full border border-white object-cover object-center"
              src="https://storage.googleapis.com/a1aa/image/2071ddd4-28fc-47ba-bfa5-7aa9196a9dcf.jpg" />
          </div>
          <div class="border-t border-gray-300 h-20 sm:h-24 md:h-28"></div>
          <div class="flex justify-end gap-4 p-3 border-t border-gray-300">
            <button aria-label="Camera" class="text-black text-lg"><i class="fas fa-camera"></i></button>
            <button aria-label="Folder" class="text-black text-lg"><i class="fas fa-folder"></i></button>
          </div>
        </div>
    </div>
</x-layout.student>