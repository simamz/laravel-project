<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TitipinAja – Solusi Penitipan Barang</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">
<!-- Navigation -->
<!-- Sticky Navbar -->
<nav x-data="{ open: false }" class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">Titipin<span class="text-gray-800">Aja</span></a>
            </div>

            <!-- Menu Right -->
            <div class="flex items-center space-x-6">
                <!-- Dropdown: Layanan Kami -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <span class="mr-1">Layanan Kami</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Penyimpanan</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pengiriman</a>
                    </div>
                </div>

                <!-- Dropdown: Tentang Kami -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <span class="mr-1">Tentang Kami</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tim Kami</a>
                    </div>
                </div>

                <!-- Auth -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-indigo-600 hover:underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:underline">Masuk</a>
                    <a href="{{ route('register') }}" class="text-sm text-green-600 hover:underline">Daftar</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-indigo-600 text-white min-h-screen flex flex-col justify-center items-center text-center px-6">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Titip Barang Aman & Fleksibel</h1>
    <p class="text-lg md:text-xl mb-8 max-w-xl">Solusi penyimpanan pintar untuk kamu yang ingin ruang lega tanpa biaya kos tambahan.</p>

    @if (Route::has('login'))
        <div class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow hover:bg-gray-100">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow hover:bg-gray-100">Masuk</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg shadow hover:bg-green-600">Daftar Sekarang</a>
                @endif
            @endauth
        </div>
    @endif
</section>

<!-- Fitur Utama -->
<section class="py-16 bg-gray-100 text-center">
    <h2 class="text-3xl font-bold mb-10">Kenapa TitipinAja?</h2>
    <div class="grid md:grid-cols-3 gap-8 px-8 max-w-6xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-2">💼 Aman & Terpantau</h3>
            <p class="text-gray-600">Setiap ruang dilengkapi sistem keamanan dan pencatatan digital.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-2">📦 Fleksibel</h3>
            <p class="text-gray-600">Pilih durasi dan ukuran sesuai kebutuhanmu. Bayar hanya sesuai pakai.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-2">📍 Lokasi Strategis</h3>
            <p class="text-gray-600">Tersedia titik penitipan di berbagai kota besar Indonesia.</p>
        </div>
    </div>
</section>

<!-- CTA Akhir -->
<section class="py-16 text-center bg-white">
    <h2 class="text-2xl md:text-3xl font-bold mb-6">Siap Ruangan Kamu Lebih Lega?</h2>
    <p class="mb-8 text-gray-600">Mulai titip sekarang dan nikmati hidup tanpa barang menumpuk!</p>
    <a href="{{ route('register') }}" class="px-8 py-3 bg-indigo-600 text-white text-lg rounded-lg shadow hover:bg-indigo-700">Daftar Gratis</a>
</section>
</html>
