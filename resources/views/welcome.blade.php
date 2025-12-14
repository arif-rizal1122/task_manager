<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">

        <section class="min-h-screen w-full flex items-center justify-center dark:bg-gray-900">
    <div class="w-full max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-prose text-center">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
                Understand user flow and
                <strong class="text-indigo-600"> increase </strong>
                conversions
            </h1>

            <p class="mt-4 text-base text-gray-700 sm:text-lg dark:text-gray-200">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi.
            </p>

            @if (Route::has('login'))
            <div class="mt-6 flex justify-center gap-4">

                @auth
                    <a class="rounded bg-indigo-600 px-6 py-3 font-medium text-white hover:bg-indigo-700" href="{{ url('/dashboard') }}">
                    Dashboard
                    </a>
                @else    
                    <a class="rounded bg-indigo-600 px-6 py-3 font-medium text-white hover:bg-indigo-700" href="{{ route('login') }}">
                    Login
                    </a>
                
                @if (Route::has('register'))
                    
                <a class="rounded border border-gray-300 px-6 py-3 font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800" href="{{ route('register') }}">
                    Register
                </a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </div>
</section>



        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
