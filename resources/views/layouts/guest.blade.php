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
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-50 via-blue-100 to-indigo-100 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-blue-300/10 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2"></div>
            
            <div class="mb-8 relative z-10">
                <a href="/" class="flex flex-col items-center justify-center group">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-3xl shadow-2xl transform group-hover:scale-105 transition duration-300">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="mt-5 text-center">
                        <h1 class="text-3xl font-black text-blue-900">e-OSIS 2024</h1>
                        <p class="text-sm text-blue-700 font-bold mt-1">Sistem Pemilihan Elektronik</p>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-10 py-12 bg-white shadow-2xl overflow-hidden sm:rounded-3xl border-4 border-blue-600/20 relative z-10">
                <div class="absolute top-0 left-0 w-full h-3 bg-gradient-to-r from-blue-600 to-blue-800 rounded-t-3xl"></div>
                {{ $slot }}
            </div>
            
            <div class="mt-8 text-center text-sm text-blue-900 relative z-10">
                <p class="font-bold">&copy; 2025 e-OSIS System. Hak cipta dilindungi.</p>
                <p class="text-xs mt-1 text-blue-700">SMA Negeri 1 - Komisi Pemilihan Umum OSIS</p>
            </div>
        </div>
    </body>
</html>
