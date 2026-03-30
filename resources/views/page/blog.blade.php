@extends('layout.main')
@section('container')

    <!-- Page Header -->
    <section class="bg-linear-to-r from-indigo-600 to-purple-600 text-white py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold">Layanan & Tips Jahit</h1>
            <p class="text-gray-200 mt-2">Pelajari berbagai layanan kami dan tips perawatan pakaian jahit</p>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-16 bg-gray-50">
         <x-header>
              <x-slot:title>
                Judul Artikel
             </x-slot:title>
            <x-slot:desc>
                ini adalah halama artikel yang bisa anda baca baca bos
             </x-slot:desc>
         </x-header>
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Post 1 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-indigo-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">👗</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-indigo-600 font-semibold">Desain Custom</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Cara Memilih Desain Pakaian yang Tepat</h2>
                        <p class="text-gray-600 mb-4">Panduan memilih desain pakaian yang sesuai dengan bentuk tubuh dan gaya personal Anda. Kami akan membantu mewujudkan impian fashion Anda dengan konsultasi gratis.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">16 Maret 2026</span>
                            <a href="#" class="text-indigo-600 font-bold hover:text-indigo-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-purple-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">🎨</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-purple-600 font-semibold">Tips Perawatan</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Cara Merawat Pakaian Jahit Agar Tahan Lama</h2>
                        <p class="text-gray-600 mb-4">Tips lengkap merawat pakaian jahit agar tetap terlihat baru dan awet. Dari pencucian, pengeringan, hingga penyimpanan yang benar untuk menjaga kualitas bahan dan jahitan.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 Maret 2026</span>
                            <a href="#" class="text-purple-600 font-bold hover:text-purple-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <!-- Post 3 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-pink-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">✂️</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-pink-600 font-semibold">Trend Fashion</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Tren Fashion 2026 yang Harus Anda Coba</h2>
                        <p class="text-gray-600 mb-4">Pelajari tren fashion terkini tahun 2026 yang sedang populer. Dari model potongan, warna, hingga detail yang akan membuat Anda tampil percaya diri dan stylish.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">14 Maret 2026</span>
                            <a href="#" class="text-pink-600 font-bold hover:text-pink-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <!-- Post 4 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-rose-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">📏</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-rose-600 font-semibold">Panduan Ukuran</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Cara Mengambil Ukuran Badan dengan Benar</h2>
                        <p class="text-gray-600 mb-4">Panduan lengkap mengambil ukuran badan untuk hasil jahitan yang sempurna dan pas di badan. Kami juga menyediakan layanan pengambilan ukuran profesional oleh tim ahli kami.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">13 Maret 2026</span>
                            <a href="#" class="text-rose-600 font-bold hover:text-rose-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <!-- Post 5 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-cyan-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">💰</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-cyan-600 font-semibold">Harga & Paket</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Paket Harga Jahit Terjangkau & Berkualitas</h2>
                        <p class="text-gray-600 mb-4">Kami menawarkan berbagai paket harga yang kompetitif dan terjangkau. Tidak ada biaya tersembunyi, semua transparan dan jelas dengan hasil jahitan yang memuaskan.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">12 Maret 2026</span>
                            <a href="#" class="text-cyan-600 font-bold hover:text-cyan-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <!-- Post 6 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-lime-400 h-48 flex items-center justify-center">
                        <span class="text-6xl">🎯</span>
                    </div>
                    <div class="p-6">
                        <span class="text-sm text-lime-600 font-semibold">Proses Jahit</span>
                        <h2 class="text-2xl font-bold mt-2 mb-3">Proses Pembuatan Pakaian Jahit dari A sampai Z</h2>
                        <p class="text-gray-600 mb-4">Ketahui tahap demi tahap proses pembuatan pakaian jahit di Remaja Taylor. Dari konsultasi, fitting, hingga hasil akhir yang memuaskan dengan kontrol kualitas yang ketat.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">11 Maret 2026</span>
                            <a href="#" class="text-lime-600 font-bold hover:text-lime-700">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-indigo-600 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ingin Konsultasi Gratis?</h2>
            <p class="text-lg text-gray-200 mb-8">Hubungi kami sekarang untuk mendiskusikan desain dan kebutuhan pakaian Anda.</p>
            <button class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Hubungi Kami</button>
        </div>
    </section>

@endsection