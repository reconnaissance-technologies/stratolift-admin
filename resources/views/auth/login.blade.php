<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login | StratoLift - The #1 Lift Installation Expert</title>

        <link rel="icon" href="{{ asset('dist/images/stratolift-favicon.png') }}" type="image/png">
        <!-- Alternative formats -->
        <!-- <link rel="icon" href="path/to/your/favicon.ico" type="image/x-icon"> -->
        <!-- <link rel="icon" href="path/to/your/favicon.svg" type="image/svg+xml"> -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#F6F6F6]">
        <div class="h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 transition-colors">
            <div class="container mx-auto px-6 md:px-10">
                <div class="grid grid-cols-1 md:grid-cols-2 h-full items-center">
                    <!-- BEGIN: Brand -->
                    <div class="flex justify-center items-center px-6 md:px-16">
                        <img class="w-4/5 md:w-full" src="{{ asset('dist/images/stratolift-logo.webp') }}" alt="StratoLift Logo">
                    </div>
                    <!-- END: Brand -->
                    <!-- BEGIN: Login Form -->
                    <div class="flex justify-center px-6 md:px-16 xl:my-0 xl:h-auto xl:py-0">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md transition-colors">
                            @session('status')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ $value }}
                                </div>
                            @endsession
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4">
                                    <input placeholder="Email" type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="email"  class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-gray-600 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x block min-w-full px-4 py-3 xl:min-w-[350px]">
                                </div>
                                <div class="mb-4">
                                    <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Password" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-gray-600 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]">
                                </div>
                                <div class="intro-x mt-4 mb-10 flex text-xs text-gray-600 dark:text-slate-500 sm:text-sm">
                                    <div class="mr-auto flex items-center">
                                        <input data-tw-merge="" type="checkbox" id="remember_me" name="remember" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 mr-2 border" id="remember-me">
                                        <label class="cursor-pointer select-none" for="remember-me">
                                            Remember me
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    @endif
                                </div>
                                <button type="submit" class="w-full bg-primary text-white py-2 rounded-md hover:bg-red-600 transition">
                                    Login
                                </button>
                            </form>
                            @if ($errors->any())
                                <div>
                                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- END: Login Form -->
                </div>
            </div>
        </div>
    </body>
</html>