<x-layout.admin title="Dashboard">
                    <!-- Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500">Total Users</p>
                                    <h3 class="text-2xl font-bold">1,254</h3>
                                </div>
                                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <p class="text-sm text-green-500 mt-2"><i class="fas fa-arrow-up mr-1"></i> 12% from last month</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500">Today's Attendance</p>
                                    <h3 class="text-2xl font-bold">87%</h3>
                                </div>
                                <div class="p-3 rounded-full bg-green-100 text-green-600">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                            <p class="text-sm text-red-500 mt-2"><i class="fas fa-arrow-down mr-1"></i> 3% from yesterday</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500">Active Courses</p>
                                    <h3 class="text-2xl font-bold">24</h3>
                                </div>
                                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                    <i class="fas fa-book"></i>
                                </div>
                            </div>
                            <p class="text-sm text-green-500 mt-2"><i class="fas fa-arrow-up mr-1"></i> 2 new this week</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500">Pending Requests</p>
                                    <h3 class="text-2xl font-bold">5</h3>
                                </div>
                                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-2"><i class="fas fa-circle mr-1"></i> Needs attention</p>
                        </div>
                    </div>

                    <!-- Recent Activity and Stats -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Recent Activity -->
                        <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-lg font-semibold">Recent Activity</h2>
                                <a href="#" class="text-sm text-blue-500">View All</a>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-medium">John Doe</p>
                                        <p class="text-sm text-gray-600">Added new course "Advanced Mathematics"</p>
                                        <p class="text-xs text-gray-400">2 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-medium">Jane Smith</p>
                                        <p class="text-sm text-gray-600">Marked attendance for Class 10-A</p>
                                        <p class="text-xs text-gray-400">5 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-medium">Robert Johnson</p>
                                        <p class="text-sm text-gray-600">Updated student records</p>
                                        <p class="text-xs text-gray-400">Yesterday</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h2 class="text-lg font-semibold mb-4">Quick Stats</h2>
                            <div class="space-y-4">
                                <div>
                                    <p class="text-gray-500">Total Admins</p>
                                    <h3 class="text-xl font-bold">8</h3>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 25%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-500">Total Teachers</p>
                                    <h3 class="text-xl font-bold">42</h3>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-500">Total Students</p>
                                    <h3 class="text-xl font-bold">1,204</h3>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</x-layout.admin>