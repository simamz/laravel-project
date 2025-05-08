<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TitipinAja – Solusi Penitipan Barang</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white min-h-screen flex flex-col justify-center items-center text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Titip Barang Aman & Fleksibel</h1>
        <p class="text-lg md:text-xl mb-8 max-w-xl">Solusi penyimpanan pintar untuk kamu yang ingin ruang lega tanpa biaya kos tambahan.</p>

        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded hover:bg-gray-100">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded hover:bg-gray-100">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white font-semibold rounded hover:bg-green-600">Daftar Sekarang</a>
                    @endif
                @endauth
            </div>
        @endif
    </section>

    <!-- Fitur Utama -->
    <section class="py-16 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-10">Kenapa TitipinAja?</h2>
        <div class="grid md:grid-cols-3 gap-8 px-8 max-w-6xl mx-auto">
            <div>
                <h3 class="text-xl font-semibold mb-2">💼 Aman & Terpantau</h3>
                <p class="text-gray-600">Setiap ruang dilengkapi sistem keamanan dan pencatatan digital.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2">📦 Fleksibel</h3>
                <p class="text-gray-600">Pilih durasi dan ukuran sesuai kebutuhanmu. Bayar hanya sesuai pakai.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2">📍 Lokasi Strategis</h3>
                <p class="text-gray-600">Tersedia titik penitipan di berbagai kota besar Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- CTA Akhir -->
    <section class="py-16 text-center bg-white">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">Siap Ruangan Kamu Lebih Lega?</h2>
        <p class="mb-8 text-gray-600">Mulai titip sekarang dan nikmati hidup tanpa barang menumpuk!</p>
        <a href="{{ route('register') }}" class="px-8 py-3 bg-indigo-600 text-white text-lg rounded hover:bg-indigo-700">Daftar Gratis</a>
    </section>

</body>
</html>
