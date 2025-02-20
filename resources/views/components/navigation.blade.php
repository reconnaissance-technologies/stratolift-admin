        <button id="menu-toggle" class="md:hidden fixed top-4 left-4 z-50 text-gray-800 hover:text-gray-600 focus:outline-none bg-white p-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <aside id="sidebar" class="w-64 bg-white p-5 border-r transition-transform duration-300 -translate-x-full md:translate-x-0 md:block fixed top-0 left-0 h-full z-40 overflow-y-auto">
            <div class="mb-5">
                <img src="{{ asset('dist/images/stratolift-logo.webp') }}" alt="StratoLift" class="h-12 mx-auto">
            </div>
            <nav>
                <ul class="space-y-2">
                    <li class="bg-red-500 text-white p-3 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/dashboard-square-02.svg') }}" alt="Dashboard Icon"></span> 
                        Dashboard
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-alert-triangle.svg') }}" alt="SOS Icon"></span> 
                        SOS
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-ticket.svg') }}" alt="Ticket Icon"></span> 
                        Service Tickets (23)
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-current-location.svg') }}" alt="Location Icon"></span> 
                        Geo-Locator</li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/user-multiple.svg') }}" alt="Users Icon"></span> 
                        Technician
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-clock.svg') }}" alt="Ticket Icon"></span> 
                        Clock-In System
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-tools.png') }}" alt="Tools Icon"></span> 
                        Maintenance Schedule
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-report-analytics.svg') }}" alt="Report Icon"></span> 
                        Reports
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/tabler-icon-box.svg') }}" alt="Box Icon"></span> 
                        Inventory
                    </li>
                    <li class="p-3 hover:bg-gray-200 rounded-md flex items-center">
                        <span class="mr-2"><img class="w-6" src="{{ asset('dist/images/icons/settings-03.svg') }}" alt="Setting Icon"></span> 
                        Settings
                    </li>
                </ul>
            </nav>
        </aside>

       