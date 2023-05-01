<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="">
        <div class="relative flex justify-center items-center   bg-gray-700">
              
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-700">Dashboard</a>
                    @else
                    <a href="" class="font-semibold text-gray-100  dark:text-gray-400  focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-700">Blog</a>
                        <a href="{{ route('login') }}" class=" ml-4 font-semibold text-gray-100  focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-700">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-100 focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-700">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div>
            @yield('content');
        </div>
        <div>@include('footer')</div>
    </body>

            