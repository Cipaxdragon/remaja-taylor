@extends('layout.main')
@section('container')

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold">Tentang Remaja Taylor</h1>
            <p class="text-gray-200 mt-2">Mengenal lebih dekat tentang toko jahit kami yang telah dipercaya selama bertahun-tahun</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-6">Kisah Remaja Taylor</h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Remaja Taylor didirikan pada tahun 2014 oleh Ibu Siti Nurhayati, seorang penjahit berpengalaman dengan passion tinggi terhadap dunia fashion. Dimulai dari sebuah lapak kecil dengan peralatan sederhana, kini kami telah berkembang menjadi toko jahit yang dipercaya ribuan pelanggan.
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Kami percaya bahwa setiap orang berhak memiliki pakaian yang pas, nyaman, dan mencerminkan kepribadian mereka. Itulah mengapa kami berkomitmen untuk memberikan layanan terbaik dengan hasil jahitan yang berkualitas tinggi.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Hingga hari ini, Remaja Taylor terus berinovasi dan berkembang untuk memenuhi kebutuhan pelanggan yang semakin tinggi, sambil tetap mempertahankan nilai-nilai utama kami: kualitas, kepercayaan, dan kepuasan pelanggan.
                    </p>
                </div>
                <div class="bg-indigo-200 rounded-lg h-96 flex items-center justify-center">
                    <span class="text-8xl">👩‍🔧</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Visi & Misi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-4 text-indigo-600">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi toko jahit terpercaya dan pilihan utama masyarakat dalam mewujudkan gaya pakaian impian dengan kualitas terbaik dan pelayanan profesional yang luar biasa.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-4 text-purple-600">Misi</h3>
                    <ul class="text-gray-700 space-y-3 leading-relaxed">
                        <li class="flex gap-3">
                            <span class="text-purple-600 font-bold">•</span>
                            Memberikan layanan jahit dengan standar kualitas internasional
                        </li>
                        <li class="flex gap-3">
                            <span class="text-purple-600 font-bold">•</span>
                            Menggunakan bahan berkualitas premium dan peralatan modern
                        </li>
                        <li class="flex gap-3">
                            <span class="text-purple-600 font-bold">•</span>
                            Membangun hubungan jangka panjang dengan setiap pelanggan
                        </li>
                        <li class="flex gap-3">
                            <span class="text-purple-600 font-bold">•</span>
                            Terus berinovasi mengikuti tren fashion terkini
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Tim Profesional Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 rounded-lg p-8 text-center">
                    <div class="w-24 h-24 mx-auto bg-indigo-300 rounded-full flex items-center justify-center mb-4">
                        <span class="text-5xl">👩</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Ibu Siti Nurhayati</h3>
                    <p class="text-gray-600 mb-3">Pendiri & Penjahit Utama</p>
                    <p class="text-gray-700">Penjahit berpengalaman 20+ tahun dengan keahlian dalam pembuatan pakaian custom dan modifikasi yang presisi.</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-8 text-center">
                    <div class="w-24 h-24 mx-auto bg-purple-300 rounded-full flex items-center justify-center mb-4">
                        <span class="text-5xl">👩</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Wati</h3>
                    <p class="text-gray-600 mb-3">Penjahit Berpengalaman</p>
                    <p class="text-gray-700">Spesialis dalam jahit pakaian kasual dan tradisional dengan detail yang rapi dan teliti.</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-8 text-center">
                    <div class="w-24 h-24 mx-auto bg-pink-300 rounded-full flex items-center justify-center mb-4">
                        <span class="text-5xl">👩</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Srina</h3>
                    <p class="text-gray-600 mb-3">Desainer & Konsultan</p>
                    <p class="text-gray-700">Ahli dalam mendesain pakaian dan memberikan konsultasi fashion sesuai dengan gaya personal pelanggan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us (Extended) -->
    <section class="py-16 bg-indigo-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Keunggulan Remaja Taylor</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">🏆</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Berpengalaman 12+ Tahun</h3>
                        <p class="text-gray-700">Pengalaman panjang melayani ribuan pelanggan dengan tingkat kepuasan yang sangat tinggi.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">🎨</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Tim Desainer Profesional</h3>
                        <p class="text-gray-700">Tim ahli siap membantu mewujudkan desain impian Anda dengan konsultasi gratis.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">✨</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Bahan Berkualitas Premium</h3>
                        <p class="text-gray-700">Menggunakan bahan terbaik dari supplier terpercaya domestik dan impor terkenal.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">⚙️</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Peralatan Modern</h3>
                        <p class="text-gray-700">Dilengkapi mesin jahit dan peralatan modern untuk hasil jahitan yang presisi dan berkualitas.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">💯</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Kontrol Kualitas Ketat</h3>
                        <p class="text-gray-700">Setiap produk melalui kontrol kualitas yang ketat untuk memastikan kesempurnaan hasil.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="text-4xl flex-shrink-0">⏱️</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Waktu Pengerjaan Tepat</h3>
                        <p class="text-gray-700">Kami berkomitmen menyelesaikan pesanan tepat waktu tanpa mengorbankan kualitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lokasi & Kontak -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Kunjungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <span class="text-2xl">📍</span>
                            <div>
                                <p class="font-bold">Lokasi</p>
                                <p class="text-gray-700">Jl. Merdeka No. 123, Kota, Indonesia 12345</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-2xl">📞</span>
                            <div>
                                <p class="font-bold">Telepon</p>
                                <p class="text-gray-700">(0274) 555-1234</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-2xl">💬</span>
                            <div>
                                <p class="font-bold">WhatsApp</p>
                                <p class="text-gray-700">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-2xl">📧</span>
                            <div>
                                <p class="font-bold">Email</p>
                                <p class="text-gray-700">info@remajataylor.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Jam Operasional</h3>
                    <div class="space-y-3 text-gray-700">
                        <div class="flex justify-between">
                            <span class="font-semibold">Senin - Jumat</span>
                            <span>09:00 - 18:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold">Sabtu</span>
                            <span>09:00 - 17:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold">Minggu</span>
                            <span>10:00 - 16:00 WIB</span>
                        </div>
                        <hr class="my-4">
                        <p class="text-sm text-gray-600 italic">* Kami buka untuk pelayanan khusus pada hari libur nasional dengan pemberitahuan sebelumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection