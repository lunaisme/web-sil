<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-0 sm:pt-0 bg-no-repeat bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1495202337139-e865ed70fcd4?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"><div>
                <a href="/">
                    <x-kemenkes-logo class="h-40 fill-current text-gray-500" />
                </a>
            </div>
            <h1 class="text-3xl font-bold">SISTEM INFORMASI LABORATORIUM</h1>
            <h1 class="text-3xl font-bold">RSUD SENOPATI</h1>

            <div class="w-full sm:max-w-md mt-4 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
