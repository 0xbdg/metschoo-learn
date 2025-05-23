<x-layout.admin title="Teacher Management">
<div class="p-6">
    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
      <h1 class="text-3xl font-bold">Teacher Management</h1>
      <button class="mt-4 md:mt-0 flex items-center gap-2 bg-white border border-blue-500 text-blue-600 px-5 py-2 rounded-lg hover:bg-blue-50 transition">
        <i class="fas fa-plus"></i>
        Add Teacher
      </button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg border border-gray-200">
      <table class="min-w-full bg-white text-sm">
        <thead class="bg-gray-100 text-xs uppercase text-gray-600">
          <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">Name</th>
            <th class="px-6 py-3 text-left">Email</th>
            <th class="px-6 py-3 text-left">Role</th>
            <th class="px-6 py-3 text-left">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <!-- Example row -->
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4 font-medium">Jane Doe</td>
            <td class="px-6 py-4">jane@example.com</td>
            <td class="px-6 py-4">Admin</td>
            <td class="px-6 py-4">
              <div class="flex gap-2">
                <button class="flex items-center px-3 py-1 border border-green-500 text-green-600 bg-white hover:bg-green-50 text-xs rounded-lg transition">
                  <i class="fas fa-edit mr-1"></i> Edit
                </button>
                <button class="flex items-center px-3 py-1 border border-red-500 text-red-600 bg-white hover:bg-red-50 text-xs rounded-lg transition">
                  <i class="fas fa-trash-alt mr-1"></i> Delete
                </button>
              </div>
            </td>
          </tr>
          <!-- Repeat rows as needed -->
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-6">
      <p class="text-sm text-gray-600">Showing 1 to 10 of 50 entries</p>
      <nav class="inline-flex -space-x-px text-sm rounded-md shadow-sm" aria-label="Pagination">
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 rounded-l-md">Previous</a>
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 text-blue-600 font-medium hover:bg-blue-50">1</a>
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 hover:bg-gray-100">2</a>
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 hover:bg-gray-100">3</a>
        <span class="px-3 py-1 bg-white border border-gray-300 text-gray-500">...</span>
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 hover:bg-gray-100">5</a>
        <a href="#" class="px-3 py-1 bg-white border border-gray-300 hover:bg-gray-100 rounded-r-md">Next</a>
      </nav>
    </div>
  </div>
</div>
</x-layout.admin> 
