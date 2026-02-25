<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/dm-hijau.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-pattern {
            background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-gray-50 bg-pattern h-screen flex items-center justify-center p-4">

<div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-[400px] border border-gray-100">
    <!-- Logo -->
    <div class="flex justify-center mb-0">
        <div class="w-auto h-auto flex items-center justify-center">
             <img src="<?= BASEURL; ?>/assets/images/dm-hijau.png" alt="Logo Masjid" class="h-48 w-auto">
        </div>
    </div>

    <!-- Header Text -->
    <div class="text-center mb-6 -mt-6">
        <h2 class="text-2xl font-bold text-gray-900">Masuk ke Akun</h2>
        <p class="text-gray-500 text-sm mt-2">Selamat datang kembali! Silakan masukkan detail Anda.</p>
    </div>

    <!-- Form -->
    <form action="<?= BASEURL; ?>/login/process" method="POST">
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Username</label>
            <input class="w-full px-4 py-3 border border-gray-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition duration-200 text-gray-700 placeholder-gray-400" 
                   id="username" name="username" type="text" placeholder="Masukkan username" required>
        </div>
        
        <div class="mb-8">
            <label class="block text-gray-700 text-sm font-medium mb-2" for="password">Password</label>
            <input class="w-full px-4 py-3 border border-gray-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition duration-200 text-gray-700 placeholder-gray-400" 
                   id="password" name="password" type="password" placeholder="••••••••" required>
        </div>

        <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-emerald-500/30 transition duration-300 transform active:scale-[0.98]" type="submit">
            Login
        </button>
    </form>
    
    <div class="mt-8 pt-6 border-t border-gray-100 text-center">
        <p class="text-gray-400 text-xs">
            &copy; <?= date('Y'); ?> Masjid Darul Mu'awanah
        </p>
    </div>
</div>

</body>
</html>
