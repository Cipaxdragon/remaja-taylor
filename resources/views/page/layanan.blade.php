@extends('layout.main')
@section('container')

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold">Layanan Kami</h1>
            <p class="text-gray-200 mt-2">Berbagai layanan jahit premium untuk memenuhi kebutuhan fashion Anda</p>
        </div>
    </section>

    <!-- Main Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Layanan Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                
                <!-- Service 1 -->
                <div class="service-card bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg p-8">
                    <div class="text-6xl mb-4">👗</div>
                    <h3 class="text-2xl font-bold mb-4">Jahit Custom</h3>
                    <p class="text-gray-700 mb-4">Buat pakaian sesuai dengan desain dan ukuran pribadi Anda menggunakan bahan berkualitas premium pilihan.</p>
                    <ul class="text-gray-700 space-y-2">
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Desain sesuai keinginan</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Ukuran yang tepat</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Bahan berkualitas</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Waktu pengerjaan transparan</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-8">
                    <div class="text-6xl mb-4">🎨</div>
                    <h3 class="text-2xl font-bold mb-4">Desain & Konsultasi</h3>
                    <p class="text-gray-700 mb-4">Tim desainer profesional siap membantu mewujudkan visi fashion Anda dengan konsultasi gratis.</p>
                    <ul class="text-gray-700 space-y-2">
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Konsultasi fashion gratis</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Rekomendasi desain</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Sesuai dengan karakter</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Tren fashion update</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-8">
                    <div class="text-6xl mb-4">✂️</div>
                    <h3 class="text-2xl font-bold mb-4">Perbaikan & Modifikasi</h3>
                    <p class="text-gray-700 mb-4">Memperbaiki dan memodifikasi pakaian lama Anda agar terlihat seperti baru dengan hasil rapi.</p>
                    <ul class="text-gray-700 space-y-2">
                        <li class="flex gap-2">
                            <span class="text-pink-600 font-bold">✓</span>
                            <span>Pengecilan pakaian</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-pink-600 font-bold">✓</span>
                            <span>Perbesaran pakaian</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-pink-600 font-bold">✓</span>
                            <span>Penggantian kancing/ritsleting</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-pink-600 font-bold">✓</span>
                            <span>Modifikasi gaun pengantin</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Layanan Tambahan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-5xl mb-4">👰</div>
                    <h3 class="text-2xl font-bold mb-4">Gaun Pengantin</h3>
                    <p class="text-gray-700">Kami spesialis dalam membuat gaun pengantin impian Anda dengan desain eksklusif dan bahan berkualitas tinggi. Tim kami akan memastikan gaun Anda sempurna di hari istimewa Anda.</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-5xl mb-4">👔</div>
                    <h3 class="text-2xl font-bold mb-4">Jas Pria</h3>
                    <p class="text-gray-700">Jahit jas custom dengan potongan yang pas dan elegan. Cocok untuk acara formal, pernikahan, atau kebutuhan bisnis profesional Anda.</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-5xl mb-4">🧵</div>
                    <h3 class="text-2xl font-bold mb-4">Pakaian Tradisional</h3>
                    <p class="text-gray-700">Jahit batik, kebaya, baju kurung, dan pakaian tradisional lainnya dengan detail yang autentik dan rapi sesuai keinginan Anda.</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-5xl mb-4">🎒</div>
                    <h3 class="text-2xl font-bold mb-4">Tas & Aksesori</h3>
                    <p class="text-gray-700">Buat tas, dompet, dan aksesori fashion lainnya sesuai desain Anda. Kami menggunakan bahan berkualitas untuk hasil yang tahan lama.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Paket & Harga</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Package 1 -->
                <div class="border-2 border-gray-300 rounded-lg p-8 hover:border-indigo-600 hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold mb-2">Paket Basic</h3>
                    <p class="text-gray-600 mb-6">Jahit pakaian sederhana</p>
                    <div class="text-4xl font-bold text-indigo-600 mb-6">
                        Mulai dari<br>
                        <span class="text-5xl">Rp 150K</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Konsultasi desain</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Jahit pakaian kasual</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Pengambilan ukuran</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>1x fitting</span>
                        </li>
                    </ul>
                    <button class="w-full bg-gray-300 text-gray-700 py-2 rounded-lg font-bold hover:bg-gray-400 transition">Pilih Paket</button>
                </div>

                <!-- Package 2 -->
                <div class="border-2 border-indigo-600 rounded-lg p-8 shadow-lg bg-indigo-50">
                    <div class="text-center mb-6">
                        <span class="bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-bold">POPULER</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Paket Standard</h3>
                    <p class="text-gray-600 mb-6">Jahit pakaian premium</p>
                    <div class="text-4xl font-bold text-indigo-600 mb-6">
                        Mulai dari<br>
                        <span class="text-5xl">Rp 350K</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Semua dari paket basic</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Desain custom detail</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Bahan premium pilihan</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>2x fitting</span>
                        </li>
                    </ul>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-bold hover:bg-indigo-700 transition">Pilih Paket</button>
                </div>

                <!-- Package 3 -->
                <div class="border-2 border-gray-300 rounded-lg p-8 hover:border-purple-600 hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold mb-2">Paket Premium</h3>
                    <p class="text-gray-600 mb-6">Gaun pengantin & formal</p>
                    <div class="text-4xl font-bold text-purple-600 mb-6">
                        Mulai dari<br>
                        <span class="text-5xl">Rp 1.5JT</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Semua dari paket standard</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Desain eksklusif unlimited</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>Bahan premium import</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">✓</span>
                            <span>3x fitting unlimited</span>
                        </li>
                    </ul>
                    <button class="w-full bg-gray-300 text-gray-700 py-2 rounded-lg font-bold hover:bg-gray-400 transition">Pilih Paket</button>
                </div>

            </div>
            <p class="text-center text-gray-600 mt-8 italic">*Harga dapat disesuaikan dengan kompleksitas desain dan jenis bahan yang dipilih. Hubungi kami untuk penawaran khusus.</p>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-indigo-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Proses Pemesanan</h2>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                
                <div class="text-center">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                    <h3 class="font-bold mb-2">Konsultasi</h3>
                    <p class="text-gray-700 text-sm">Diskusi kebutuhan dan desain yang Anda inginkan</p>
                </div>

                <div class="text-center">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h3 class="font-bold mb-2">Pengambilan Ukuran</h3>
                    <p class="text-gray-700 text-sm">Kami mengambil ukuran detail badan Anda</p>
                </div>

                <div class="text-center">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h3 class="font-bold mb-2">Pembelian Bahan</h3>
                    <p class="text-gray-700 text-sm">Anda memilih bahan atau kami rekomendasikan</p>
                </div>

                <div class="text-center">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">4</div>
                    <h3 class="font-bold mb-2">Jahit & Fitting</h3>
                    <p class="text-gray-700 text-sm">Proses jahit dengan fitting berkala</p>
                </div>

                <div class="text-center">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">5</div>
                    <h3 class="font-bold mb-2">Serah Terima</h3>
                    <p class="text-gray-700 text-sm">Pakaian siap dan proses dibayarkan</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Tertarik dengan Layanan Kami?</h2>
            <p class="text-xl text-gray-200 mb-8">Hubungi kami sekarang atau kunjungi toko kami untuk konsultasi gratis!</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <button class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">💬 Chat WhatsApp</button>
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-indigo-600 transition">📞 Hubungi (0274) 555-1234</button>
            </div>
        </div>
    </section>

@endsection
