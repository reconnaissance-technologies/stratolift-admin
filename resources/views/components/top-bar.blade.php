            <div class="flex justify-between items-center mb-5">
                <!-- Search Bar -->
                <div class="relative w-2/3">
                    <input type="text" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="Search Tasks">
                </div>

                <!-- Notification and Profile Dropdown -->
                <div class="flex items-center space-x-4 relative">
                    <!-- Notification Icon -->
                    <span class="relative cursor-pointer text-2xl">🔔</span>

                    <!-- Profile Section -->
                    <div class="relative">
                        <div id="profile-toggle"
                            class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded-lg transition">
                            <img src="https://lockyerdoctors.com.au/wp-content/uploads/2023/06/Male_Dr.jpg" alt="User Avatar"
                                class="h-10 w-10 rounded-full shadow">
                            <span class="font-medium text-gray-700">James Adamu</span>
                            <svg id="dropdown-arrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Dropdown Menu -->
                        <div id="profile-dropdown"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-20 border border-gray-100 hidden opacity-0 transition-opacity duration-300">
                            <a href="/profile"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">👤 Account Management</a>
                            <a href="/logout"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">🚪 Logout</a>
                        </div>
                    </div>
                </div>
            </div>