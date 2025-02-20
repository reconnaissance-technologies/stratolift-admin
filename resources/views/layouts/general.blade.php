<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('dist/images/stratolift-favicon.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Styles for overlay effect */
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            z-index: 30; /* Below the sidebar but above the main content */
            display: none; /* Hidden by default */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Navigation -->
        @include('components.navigation')

        <main class="flex-1 overflow-y-auto md:ml-64">
            <!-- Top Bar -->
            @include('components.top-bar')

            <div class="p-6">
                @yield('content')
            </div>
        </main>

        @include('components.right-sidebar')
    </div>

    <div id="overlay">
        <button id="close-menu" class="absolute top-4 right-4 z-50 text-white hover:text-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggleMenu = document.getElementById("menu-toggle");
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");
            const closeMenu = document.getElementById("close-menu");
            const searchToggle = document.getElementById('search-toggle');
            const searchInput = document.getElementById('search-input');

            toggleMenu.addEventListener("click", () => {
                overlay.style.display = 'block';
                sidebar.classList.remove('-translate-x-full');
                toggleMenu.style.display = 'none'; // Hide the hamburger
            });

            closeMenu.addEventListener("click", () => {
                overlay.style.display = 'none';
                sidebar.classList.add('-translate-x-full');
                toggleMenu.style.display = 'block'; // Show the hamburger
            });

            searchToggle.addEventListener('click', () => {
                searchInput.classList.toggle('hidden');
                searchInput.focus(); // Focus on the input when it's shown
            });
        });
    </script>

</body>
</html>