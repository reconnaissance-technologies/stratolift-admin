            <div class="bg-white p-4 shadow-md flex justify-between items-center">
                <div class="flex-grow">
                    <input type="text" id="search-input" placeholder="Search Tasks" class="border rounded px-3 py-2 w-1/2 hidden md:block">
                </div>
                <button id="search-toggle" class="md:hidden text-gray-800 hover:text-gray-600 ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
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
                            
                            <svg id="dropdown-arrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Dropdown Menu -->
                        <div id="profile-dropdown"
                            class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg py-2 z-20 border border-gray-100 hidden opacity-0 transition-opacity duration-300">
                            <span class="font-medium text-gray-700 flex justify-center">James Adamu</span>
                            <hr>
                            <a href="/profile"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">👤 Account Management</a>
                            <a href="/logout"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">🚪 Logout</a>
                        </div>
                    </div>
                </div>
            </div>

           