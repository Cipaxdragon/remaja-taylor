@extends('layout.main')
@section('container')

    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-8">
            <div class="flex-1">
                <h1 class="text-5xl font-bold mb-4">Remaja Taylor</h1>
                <p class="text-xl text-gray-100 mb-2">Toko Jahit Premium & Terpercaya</p>
                <p class="text-lg text-gray-200 mb-8">Mewujudkan gaya pakaian impian Anda dengan kualitas terbaik dan desain eksklusif.</p>
                <div class="flex gap-4">
                    <button class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100">Konsultasi Gratis</button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-indigo-600">Lihat Galeri</button>
                </div>
            </div>
            <div class="flex-1">
                <svg class="w-full h-80" fill="currentColor" viewBox="0 0 200 200">
                    <rect x="50" y="40" width="100" height="120" stroke="white" stroke-width="2" fill="none"/>
                    <circle cx="100" cy="60" r="15" stroke="white" stroke-width="2" fill="none"/>
                    <line x1="75" y1="85" x2="50" y2="130" stroke="white" stroke-width="2"/>
                    <line x1="125" y1="85" x2="150" y2="130" stroke="white" stroke-width="2"/>
                    <line x1="80" y1="85" x2="100" y2="140" stroke="white" stroke-width="2"/>
                    <line x1="120" y1="85" x2="100" y2="140" stroke="white" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl">
                    <div class="text-5xl mb-4">👗</div>
                    <h3 class="text-2xl font-bold mb-4">Pakaian Custom</h3>
                    <p class="text-gray-600">Jahit pakaian sesuai desain dan ukuran Anda dengan bahan pilihan berkualitas premium.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl">
                    <div class="text-5xl mb-4">🎨</div>
                    <h3 class="text-2xl font-bold mb-4">Desain Eksklusif</h3>
                    <p class="text-gray-600">Tim desainer berpengalaman siap mewujudkan ide Anda menjadi karya fashion yang memukau.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl">
                    <div class="text-5xl mb-4">🔧</div>
                    <h3 class="text-2xl font-bold mb-4">Perbaikan & Modifikasi</h3>
                    <p class="text-gray-600">Layanan perbaikan, pengecilan, perbesaran, dan modifikasi pakaian dengan ahli berpengalaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portofolio/Galeri -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Galeri Karya Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-indigo-200 rounded-lg h-64 flex items-center justify-center">
                    <p class="text-indigo-700 font-semibold">Gambar 1</p>
                </div>
                <div class="bg-purple-200 rounded-lg h-64 flex items-center justify-center">
                    <p class="text-purple-700 font-semibold">Gambar 2</p>
                </div>
                <div class="bg-pink-200 rounded-lg h-64 flex items-center justify-center">
                    <p class="text-pink-700 font-semibold">Gambar 3</p>
                </div>
                <div class="bg-rose-200 rounded-lg h-64 flex items-center justify-center">
                    <p class="text-rose-700 font-semibold">Gambar 4</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-indigo-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex gap-4">
                    <div class="text-3xl">✓</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Berpengalaman 10+ Tahun</h3>
                        <p class="text-gray-700">Kami telah melayani ribuan pelanggan dengan kepuasan yang tinggi.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-3xl">✓</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Bahan Berkualitas</h3>
                        <p class="text-gray-700">Menggunakan bahan terbaik dari supplier terpercaya domestik dan impor.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-3xl">✓</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Hasil Presisi</h3>
                        <p class="text-gray-700">Proses jahitan yang detail dan teliti menghasilkan pakaian yang sempurna.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-3xl">✓</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Harga Kompetitif</h3>
                        <p class="text-gray-700">Menawarkan harga terbaik tanpa mengorbankan kualitas produk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Testimoni Pelanggan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 rounded-lg p-6">
                    <div class="flex mb-4">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Hasil jahitannya luar biasa! Desain sesuai keinginan dan bahan berkualitas bagus. Saya sangat puas dengan layanan Remaja Taylor."</p>
                    <p class="font-bold">Siti Nurhaliza</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6">
                    <div class="flex mb-4">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Proses jahit cepat, detail rapi, dan harga sangat terjangkau. Rekomendasi banget untuk yang cari tukang jahit terpercaya!"</p>
                    <p class="font-bold">Rini Wijaya</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6">
                    <div class="flex mb-4">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Pelayanan ramah, profesional, dan hasil kerja memuaskan. Jahitan halus dan rapi. Jadi langganan tetap di Remaja Taylor."</p>
                    <p class="font-bold">Ahmad Rizki</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="kontak" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-16 shadow-glow">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Siap Mewujudkan Gaya Impian Anda?</h2>
            <p class="text-xl text-gray-100 mb-8">Hubungi kami sekarang untuk konsultasi gratis dan penawaran spesial.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <button class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Hubungi WA</button>
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-indigo-600 transition">Telepon (+0274) 555-1234</button>
            </div>
        </div>
    </section>

@endsection