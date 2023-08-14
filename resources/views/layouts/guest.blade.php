<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Individual Ideas') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="container items-center justify-center">
        <div class="min-h-screen flex flex-col lg:flex-row justify-center items-center" style="background-image: url('/images/login-bg.png'); background-size: cover; background-position: center;">
            <div class="sidebar-guest mr-20">
                <a href="/" class="flex flex-col items-center">
                    <x-application-logo class="fill-current text-gray-500 mb-4" />
                    <h3 class="text-center text-uppercase text-white" style="letter-spacing: 2px; margin-top: -50px">“Nurturing Brilliance, Unleashing Potential: </h3>
                    <h3 class="text-center text-uppercase text-white" style="letter-spacing: 2px;"> Individual ideas!”</h3>
                </a>
            </div>
        
            <div class="min-h-screen flex flex-col lg:justify-center items-center pt-6 sm:pt-0">
                <div class="w-full sm:max-w-xl mt-6 px-8 py-10" style="background-color: rgba(255, 255, 255, 0.1); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
                    {{ $slot }}
                </div>
            </div>
        </div>
        
        

    </body>
</html>
