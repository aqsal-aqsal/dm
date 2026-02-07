<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - <?= $data['profil']['nama_masjid'] ?? 'Masjid App'; ?></title>
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/dm-hijau.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

<!-- Navbar -->
<nav class="absolute w-full z-50 transition-all duration-300 bg-gradient-to-b from-black/50 to-transparent">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center text-white">
            <img src="<?= BASEURL; ?>/assets/images/dm-putih.png" alt="Logo Masjid" class="h-36 w-auto">
            <span class="text-xl font-bold leading-none ml-3"><?= $data['profil']['nama_masjid'] ?? 'Darul Mu\'awanah'; ?></span>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8 text-white font-medium">
            <a href="<?= BASEURL; ?>" class="hover:text-emerald-300 transition">Beranda</a>
            <div class="relative group">
                <button class="flex items-center hover:text-emerald-300 transition focus:outline-none">
                    <span>Jadwal</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left z-50">
                    <a href="<?= BASEURL; ?>/home/jadwal_sholat" class="block px-4 py-2 text-gray-800 hover:bg-emerald-50 hover:text-emerald-600 transition">Waktu Sholat</a>
                    <a href="<?= BASEURL; ?>/home/jadwal_jumat" class="block px-4 py-2 text-gray-800 hover:bg-emerald-50 hover:text-emerald-600 transition">Petugas Jumat</a>
                </div>
            </div>
            <a href="<?= BASEURL; ?>/home/kas" class="hover:text-emerald-300 transition">Laporan Kas</a>
            <a href="<?= BASEURL; ?>/login" class="bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded-full transition shadow-lg transform hover:scale-105">
                Login
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white absolute top-full left-0 w-full shadow-xl border-t border-gray-100">
        <div class="flex flex-col py-4 px-6 space-y-4">
            <a href="<?= BASEURL; ?>" class="text-gray-800 font-medium hover:text-emerald-600">Beranda</a>
            <a href="<?= BASEURL; ?>/home/jadwal_sholat" class="text-gray-800 font-medium hover:text-emerald-600">Waktu Sholat</a>
            <a href="<?= BASEURL; ?>/home/jadwal_jumat" class="text-gray-800 font-medium hover:text-emerald-600">Jadwal Jumat</a>
            <a href="<?= BASEURL; ?>/home/kas" class="text-gray-800 font-medium hover:text-emerald-600">Laporan Kas</a>
            <a href="<?= BASEURL; ?>/login" class="inline-block bg-emerald-500 text-white text-center px-5 py-2 rounded-lg font-medium">Login</a>
        </div>
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if(mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
