<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remaja Taylor - Toko Jahit</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-900">
    
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a class="text-3xl font-extrabold flex items-center gap-2" href="/">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 3v6H6V3h3zm0 8v6H6v-6h3zm2 0h3v6h-3v-6zm0-8v6h3V3h-3z"/>
                </svg>
                Remaja Taylor
            </a>
            <div class="hidden md:flex space-x-8">
                <a class="hover:text-gray-200 transition duration-300" href="/">Beranda</a>
                <a class="hover:text-gray-200 transition duration-300" href="/layanan">Layanan</a>
                <a class="hover:text-gray-200 transition duration-300" href="/blog">Tips & Artikel</a>
                <a class="hover:text-gray-200 transition duration-300" href="/about">Tentang</a>
                <a class="hover:text-gray-200 transition duration-300" href="#kontak">Kontak</a>
            </div>
            <button class="md:hidden text-white focus:outline-none" id="navbar-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="md:hidden bg-indigo-700" id="navbar-menu">
            <a class="block py-2 px-4 text-white hover:bg-indigo-800 transition" href="/">Beranda</a>
            <a class="block py-2 px-4 text-white hover:bg-indigo-800 transition" href="/layanan">Layanan</a>
            <a class="block py-2 px-4 text-white hover:bg-indigo-800 transition" href="/blog">Tips & Artikel</a>
            <a class="block py-2 px-4 text-white hover:bg-indigo-800 transition" href="/about">Tentang</a>
            <a class="block py-2 px-4 text-white hover:bg-indigo-800 transition" href="#kontak">Kontak</a>
        </div>
    </nav>

    <script>
        const toggle = document.getElementById('navbar-toggle');
        const menu = document.getElementById('navbar-menu');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

    <!-- Main Content -->
    <main>
        @yield('container')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Remaja Taylor</h3>
                    <p class="text-gray-400">Toko jahit profesional dengan pengalaman lebih dari 10 tahun melayani pelanggan setia.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Navigasi</h4>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="/blog" class="hover:text-white transition">Layanan</a></li>
                        <li><a href="/about" class="hover:text-white transition">Tentang</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Hubungi Kami</h4>
                    <p class="text-gray-400">
                        <strong>Alamat:</strong> Jl. Merdeka No. 123, Kota<br>
                        <strong>Telepon:</strong> (0274) 555-1234<br>
                        <strong>Email:</strong> info@remajataylor.com
                    </p>
                </div>
            </div>
            <hr class="border-gray-700 mb-4">
            <div class="text-center text-gray-400">
                <p>&copy; 2026 Remaja Taylor. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

</body>
</html>