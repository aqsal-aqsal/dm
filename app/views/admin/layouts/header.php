<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

<nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="<?= BASEURL; ?>/admin" class="font-bold text-xl">Admin Masjid</a>
                <div class="hidden md:block ml-10">
                    <div class="flex items-baseline space-x-4">
                        <a href="<?= BASEURL; ?>/admin" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="<?= BASEURL; ?>/admin/jadwal_sholat" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Sholat</a>
                        <a href="<?= BASEURL; ?>/admin/jadwal_jumat" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Jumat</a>
                        <a href="<?= BASEURL; ?>/admin/pengumuman" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Pengumuman</a>
                        <a href="<?= BASEURL; ?>/admin/agenda" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Agenda</a>
                        <a href="<?= BASEURL; ?>/admin/kas" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Kas</a>
                        <a href="<?= BASEURL; ?>/admin/profil" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Profil</a>
                    </div>
                </div>
            </div>
            <div>
                <a href="<?= BASEURL; ?>/login/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</a>
            </div>
        </div>
    </div>
</nav>

<main class="container mx-auto px-4 py-6">
