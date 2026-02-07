<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - Admin Panel</title>
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/dm-hijau.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Custom scrollbar for sidebar */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="hidden md:flex flex-col w-72 bg-white border-r border-gray-200">
        <!-- Logo -->
        <div class="flex items-center justify-center h-20 border-b border-gray-100 px-6">
             <div class="flex items-center space-x-3">
                <img src="<?= BASEURL; ?>/assets/images/dm-hijau.png" alt="Logo" class="h-10 w-auto">
                <span class="text-lg font-bold text-gray-800 tracking-tight">Darul Mu'awanah</span>
             </div>
        </div>

        <!-- Navigation -->
        <div class="flex-1 flex flex-col overflow-y-auto no-scrollbar py-4 px-3 space-y-1">
            <?php
            $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'admin';
            $url = explode('/', $url);
            $active = isset($url[1]) ? $url[1] : 'dashboard'; // Default admin/dashboard
            if(count($url) == 1 && $url[0] == 'admin') $active = 'dashboard';
            
            function isActive($page, $current) {
                return $page === $current ? 'bg-emerald-50 text-emerald-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900';
            }
            ?>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 mt-2">Menu Utama</p>

            <a href="<?= BASEURL; ?>/admin" class="<?= isActive('dashboard', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'dashboard' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Dashboard
            </a>

            <a href="<?= BASEURL; ?>/admin/jadwal_sholat" class="<?= isActive('jadwal_sholat', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'jadwal_sholat' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Jadwal Sholat
            </a>

            <a href="<?= BASEURL; ?>/admin/jadwal_jumat" class="<?= isActive('jadwal_jumat', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'jadwal_jumat' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Jadwal Jumat
            </a>

            <a href="<?= BASEURL; ?>/admin/pengumuman" class="<?= isActive('pengumuman', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'pengumuman' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
                Pengumuman
            </a>

            <a href="<?= BASEURL; ?>/admin/agenda" class="<?= isActive('agenda', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'agenda' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                Agenda
            </a>

            <a href="<?= BASEURL; ?>/admin/kas" class="<?= isActive('kas', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'kas' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Kas Masjid
            </a>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 mt-6">Pengaturan</p>

            <a href="<?= BASEURL; ?>/admin/profil" class="<?= isActive('profil', $active); ?> group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors duration-150">
                <svg class="mr-3 h-5 w-5 flex-shrink-0 <?= $active == 'profil' ? 'text-emerald-600' : 'text-gray-400 group-hover:text-gray-500'; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Profil Masjid
            </a>
        </div>

        <!-- User Profile (Bottom) -->
        <div class="border-t border-gray-200 p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="h-9 w-9 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold">
                        A
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">Admin</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                </div>
                <a href="<?= BASEURL; ?>/login/logout" class="text-gray-400 hover:text-red-500 transition-colors" title="Logout">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header (Mobile & Search) -->
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <button class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none mr-4">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h2 class="text-xl font-semibold text-gray-800"><?= $data['judul']; ?></h2>
            </div>
            
            <div class="flex items-center space-x-4">
                <a href="<?= BASEURL; ?>" target="_blank" class="text-sm text-gray-500 hover:text-emerald-600 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    Lihat Website
                </a>
            </div>
        </header>

        <!-- Main Content Scroll Area -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
