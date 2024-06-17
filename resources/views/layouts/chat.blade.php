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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #02B9F3; /* Color de fondo celeste */
        }
        .bg-celeste {
            background-color: #02B9F3; /* Color de fondo celeste */
        }
        .volver-btn {
            position: absolute;
            top: 16px;
            left: 16px;
            z-index: 50; /* Asegurarse de que el botón esté encima de otros elementos */
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #0ea5e9; /* Color de texto cian */
            transition: color 0.2s;
        }
        .volver-btn:hover {
            color: #2563eb; /* Color de texto al pasar el ratón */
        }
    </style>

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom CSS stack -->
    @stack('css')

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased bg-celeste">
    <div class="h-12 bg-cartas"></div>

    <a href="{{ url()->previous() }}" class="volver-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span>Volver</span>
    </a>

    <div class="absolute left-0 top-8 w-screen">
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Custom JS stack -->
    @stack('js')

    <!-- Modals stack -->
    @stack('modals')
</body>
</html>
