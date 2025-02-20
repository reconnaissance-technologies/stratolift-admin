<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('dist/images/stratolift-favicon.png') }}" type="image/png">
    <!-- Alternative formats -->
    <!-- <link rel="icon" href="path/to/your/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="path/to/your/favicon.svg" type="image/svg+xml"> -->


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Navigation Sidebar -->
        @include('components.navigation')
        
        <!-- Main Content -->
        @yield('content')

        <!-- Right Sidebar -->
        @include('components.right-sidebar')
    </div>
</body>
</html>
