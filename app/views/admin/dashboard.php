<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
    <p class="text-gray-600">Ringkasan aktivitas dan informasi masjid.</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Card 1: Saldo -->
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-500">Total Saldo Kas</h3>
            <span class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
        </div>
        <div class="flex items-baseline">
            <h2 class="text-2xl font-bold text-gray-900">Rp <?= number_format($data['saldo'], 0, ',', '.'); ?></h2>
        </div>
        <div class="mt-4">
            <a href="<?= BASEURL; ?>/admin/kas" class="text-sm text-emerald-600 hover:text-emerald-700 font-medium flex items-center">
                Lihat rincian
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Card 2: Agenda -->
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-500">Agenda Mendatang</h3>
            <span class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
        </div>
        <div class="flex items-baseline">
            <h2 class="text-2xl font-bold text-gray-900"><?= $data['agenda_count']; ?></h2>
            <span class="ml-2 text-sm text-gray-500">kegiatan</span>
        </div>
        <div class="mt-4">
            <a href="<?= BASEURL; ?>/admin/agenda" class="text-sm text-blue-600 hover:text-blue-700 font-medium flex items-center">
                Kelola agenda
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Card 3: Pengumuman -->
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-500">Pengumuman Aktif</h3>
            <span class="p-2 bg-purple-50 text-purple-600 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
            </span>
        </div>
        <div class="flex items-baseline">
            <h2 class="text-2xl font-bold text-gray-900"><?= $data['pengumuman_count']; ?></h2>
            <span class="ml-2 text-sm text-gray-500">posting</span>
        </div>
        <div class="mt-4">
            <a href="<?= BASEURL; ?>/admin/pengumuman" class="text-sm text-purple-600 hover:text-purple-700 font-medium flex items-center">
                Atur pengumuman
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
    <h3 class="text-lg font-bold text-gray-900 mb-4">Selamat Datang di Panel Admin</h3>
    <p class="text-gray-600 mb-4">
        Gunakan menu di sebelah kiri untuk mengelola konten website Masjid Darul Mu'awanah. 
        Anda dapat mengatur jadwal sholat, agenda kegiatan, laporan kas, dan informasi profil masjid.
    </p>
    <div class="p-4 bg-yellow-50 rounded-lg border border-yellow-100">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-yellow-800">Tips Penggunaan</h3>
                <div class="mt-2 text-sm text-yellow-700">
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Pastikan data jadwal sholat selalu update.</li>
                        <li>Catat setiap transaksi kas masuk dan keluar secara rutin.</li>
                        <li>Gunakan fitur pengumuman untuk menyebarkan informasi penting kepada jamaah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
