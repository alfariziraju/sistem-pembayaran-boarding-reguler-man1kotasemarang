<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-300">
    <div class="min-h-screen flex flex-col items-center justify-between">
        <!-- Header -->
        <header class="w-full max-w-5xl px-6 py-6 flex items-center justify-between border-b border-gray-300 dark:border-gray-700">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">My Laravel App</h1>
            @if (Route::has('login'))
                <nav class="flex gap-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Main Content -->
        <main class="flex-grow w-full max-w-4xl px-6 py-10 text-center">
            <p class="text-xl font-semibold text-gray-800 dark:text-gray-100">Sistem Informasi Pembayaran Boarding dan Reguler MAN 1 Kota Semarang</p>
        </main>

        <!-- Footer -->
        <footer class="w-full max-w-5xl px-6 py-6 border-t border-gray-300 dark:border-gray-700 text-center text-sm">
            <p class="text-gray-500 dark:text-gray-400">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </footer>
    </div>
</body>

</html>
