<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"> <!-- Mengatur karakter encoding menjadi UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsif untuk berbagai perangkat -->
    <title>Laravel</title> <!-- Judul halaman -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> <!-- Mengimpor font -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Memuat file CSS dan JS menggunakan Vite -->
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-300">
    <!-- Layout utama halaman -->
    <div class="min-h-screen flex flex-col items-center justify-between">
        
        <!-- Header -->
        <header class="w-full max-w-5xl px-6 py-6 flex items-center justify-between border-b border-gray-300 dark:border-gray-700">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">MAN 1 KOTA SEMARANG</h1> <!-- Judul header -->
            
            @if (Route::has('login')) <!-- Mengecek apakah rute login tersedia -->
                <nav class="flex gap-6">
                    @auth <!-- Jika pengguna sudah login -->
                        <a href="{{ url('/dashboard') }}" 
                           class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                            Dashboard <!-- Tautan ke Dashboard -->
                        </a>
                    @else <!-- Jika pengguna belum login -->
                        <a href="{{ route('login') }}" 
                           class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                            Login <!-- Tautan ke halaman login -->
                        </a>
                        @if (Route::has('register')) <!-- Mengecek apakah rute registrasi tersedia -->
                            <a href="{{ route('register') }}" 
                               class="text-base font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                                Register <!-- Tautan ke halaman registrasi -->
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Main Content -->
        <main class="flex-grow w-full max-w-4xl px-6 py-10 text-center">
            <p class="text-xl font-semibold text-gray-800 dark:text-gray-100">
                Sistem Informasi Pembayaran Boarding dan Reguler MAN 1 Kota Semarang
            </p> <!-- Konten utama halaman -->
        </main>

        <!-- Footer -->
        <footer class="w-full max-w-5xl px-6 py-6 border-t border-gray-300 dark:border-gray-700 text-center text-sm">
            <p class="text-gray-500 dark:text-gray-400">
               Ini adalah Footer <!-- Konten footer halaman -->
            </p>
        </footer>
    </div>
</body>
</html>
