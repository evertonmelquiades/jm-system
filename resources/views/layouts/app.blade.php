<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/39e8e2e03b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('css/app.css') }}"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 font-sans antialiased">

    <nav class="bg-white shadow w-full">
        @include('layouts.navigation')
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-base-300 fixed bottom-0 w-full text-base-content p-4">
        <aside class="text-center">
            <p>Copyright © 2024 - All right reserved by JM Automation</p>
        </aside>
    </footer>

</body>

</html>
