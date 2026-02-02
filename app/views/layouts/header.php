<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - <?= $data['profil']['nama'] ?? 'Masjid App'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-emerald-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <!-- Icon Masjid (Optional) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
            </svg>
            <h1 class="text-xl font-bold"><?= $data['profil']['nama'] ?? 'Masjid'; ?></h1>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="<?= BASEURL; ?>" class="hover:text-emerald-200">Beranda</a>
            <a href="#jadwal" class="hover:text-emerald-200">Jadwal</a>
            <a href="#pengumuman" class="hover:text-emerald-200">Pengumuman</a>
            <a href="#agenda" class="hover:text-emerald-200">Agenda</a>
            <a href="<?= BASEURL; ?>/login" class="bg-emerald-700 hover:bg-emerald-800 px-4 py-2 rounded-md text-sm font-medium transition">Login Admin</a>
        </div>
    </div>
</nav>
