<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - <?= $data['profil']['nama_masjid'] ?? 'Masjid App'; ?></title>
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/images/dm-hijau.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
        
        /* Clock Styles */
        .clock {
            width: 350px;
            height: 350px;
            border: 10px solid #1f2937;
            border-radius: 50%;
            position: relative;
            background: rgba(6, 78, 59, 0.8);
            box-shadow: 0 0 20px rgba(0,0,0,0.5), inset 0 0 20px rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }
        .clock::after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background: #ef4444;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }
        .hand {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform-origin: bottom;
            border-radius: 10px;
            z-index: 5;
        }
        .hour {
            width: 8px;
            height: 80px;
            background: white;
            transform: translateX(-50%);
        }
        .minute {
            width: 6px;
            height: 120px;
            background: #fbbf24;
            transform: translateX(-50%);
        }
        .second {
            width: 2px;
            height: 140px;
            background: #ef4444;
            transform: translateX(-50%);
            z-index: 6;
        }
        .number {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
        }
        .number span {
            display: inline-block;
        }
        
        /* Custom Scrollbar for Marquee if needed */
        marquee {
            font-size: 1.5rem;
            font-weight: 500;
        }
    </style>
</head>
<body class="h-screen w-screen overflow-hidden flex flex-col bg-gray-900">

    <!-- Header Section -->
    <header class="bg-gray-100 px-8 py-4 flex items-center justify-between shadow-lg relative z-20 border-b-4 border-emerald-500">
        <div class="flex items-center gap-6">
            <div class="h-20 w-20 bg-emerald-600 rounded-full flex items-center justify-center shadow-md">
                <img src="<?= BASEURL; ?>/assets/images/dm-putih.png" alt="Logo" class="h-16 w-auto object-contain">
            </div>
            <div>
                <h1 class="text-4xl font-black text-gray-800 uppercase tracking-tight leading-none mb-1">
                    <?= $data['profil']['nama_masjid'] ?? 'MASJID DARUL MU\'AWANAH'; ?>
                </h1>
                <p class="text-xl text-gray-600 font-medium">
                    <?= $data['profil']['alamat'] ?? 'Kp. Duren Seribu, Bojongsari, Depok'; ?>
                </p>
            </div>
        </div>
        <div class="text-right hidden xl:block">
            <div class="text-sm font-bold text-gray-500 uppercase tracking-widest">Waktu Saat Ini</div>
            <div id="digital-clock" class="text-5xl font-black text-emerald-700 tabular-nums">00:00:00</div>
        </div>
    </header>

    <!-- Date Bar -->
    <div class="bg-emerald-800 text-white py-3 px-8 flex justify-between items-center shadow-md relative z-10">
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span id="gregorian-date" class="text-xl font-bold tracking-wide">...</span>
        </div>
        <div class="flex items-center gap-3">
            <span id="hijri-date" class="text-xl font-bold tracking-wide text-emerald-200">...</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-1 flex relative overflow-hidden">
        
        <!-- Left: Visual & Analog Clock -->
        <div class="w-2/3 relative">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-gray-800">
                <img src="https://images.unsplash.com/photo-1564121211835-e88c852648ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" 
                     alt="Masjid Background" 
                     class="w-full h-full object-cover opacity-60">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
            </div>

            <!-- Analog Clock Container -->
            <div class="absolute bottom-16 left-16">
                <div class="clock">
                    <!-- Numbers -->
                    <?php for($i=1; $i<=12; $i++): ?>
                        <div class="number" style="transform: rotate(<?= $i*30 ?>deg);">
                            <span style="transform: rotate(-<?= $i*30 ?>deg);"><?= $i ?></span>
                        </div>
                    <?php endfor; ?>
                    
                    <!-- Hands -->
                    <div class="hand hour" id="hour-hand"></div>
                    <div class="hand minute" id="minute-hand"></div>
                    <div class="hand second" id="second-hand"></div>
                    
                    <!-- Center Label -->
                    <div class="absolute top-2/3 left-0 w-full text-center text-emerald-400 font-bold tracking-widest text-sm uppercase" style="margin-top: 10px;">
                        MASJID TV
                    </div>
                </div>
            </div>
            
            <!-- Next Prayer Countdown (Optional) -->
            <div class="absolute top-10 left-10 bg-black/50 backdrop-blur-md p-6 rounded-2xl border border-white/10 text-white">
                <div class="text-sm uppercase tracking-wider text-gray-300 mb-1">Menuju Waktu Sholat</div>
                <div class="text-4xl font-bold text-emerald-400" id="next-prayer-name">--</div>
                <div class="text-2xl font-mono mt-2" id="countdown">--:--:--</div>
            </div>
        </div>

        <!-- Right: Schedule Sidebar -->
        <div class="w-1/3 bg-gradient-to-b from-emerald-700 to-emerald-900 border-l-8 border-emerald-500 flex flex-col shadow-2xl z-10">
            
            <?php if(!empty($data['jadwal'])): ?>
                <?php 
                    $times = [
                        ['name' => 'Subuh', 'time' => $data['jadwal']['subuh'], 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['name' => 'Terbit', 'time' => date('H:i', strtotime($data['jadwal']['subuh'] . ' + 85 minutes')), 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'], // Approximation
                        ['name' => 'Dzuhur', 'time' => $data['jadwal']['dzuhur'], 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['name' => 'Ashar', 'time' => $data['jadwal']['ashar'], 'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['name' => 'Maghrib', 'time' => $data['jadwal']['maghrib'], 'icon' => 'M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z'],
                        ['name' => 'Isya', 'time' => $data['jadwal']['isya'], 'icon' => 'M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z']
                    ];
                ?>
                
                <div class="flex-1 flex flex-col justify-center">
                    <?php foreach($times as $t): ?>
                        <div class="prayer-item group relative overflow-hidden border-b border-emerald-600 last:border-0 hover:bg-white/10 transition duration-500">
                            <div class="px-8 py-5 flex justify-between items-center relative z-10">
                                <div class="flex items-center gap-4">
                                    <svg class="w-8 h-8 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $t['icon'] ?>"></path>
                                    </svg>
                                    <span class="text-2xl font-bold text-white uppercase tracking-wider"><?= $t['name'] ?></span>
                                </div>
                                <span class="text-4xl font-black text-white tabular-nums tracking-wide"><?= date('H:i', strtotime($t['time'])) ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="flex-1 flex items-center justify-center p-8 text-center text-white/70">
                    <div>
                        <svg class="w-16 h-16 mx-auto mb-4 text-emerald-300 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <p class="text-xl">Belum ada jadwal untuk tanggal ini.</p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </main>

    <!-- Footer Marquee -->
    <footer class="bg-black text-white py-3 border-t-4 border-emerald-500 relative z-30 shadow-2xl">
        <marquee scrollamount="8" class="text-2xl font-medium tracking-wide">
            <?php if(!empty($data['pengumuman'])): ?>
                <?php foreach($data['pengumuman'] as $p): ?>
                    <span class="mr-24 text-emerald-400 font-bold">★ <?= $p['judul']; ?>:</span> 
                    <span class="mr-24"><?= $p['isi']; ?></span>
                <?php endforeach; ?>
            <?php else: ?>
                Selamat Datang di <?= $data['profil']['nama_masjid'] ?? 'Masjid Kami'; ?>. Mari makmurkan masjid dengan sholat berjamaah.
            <?php endif; ?>
        </marquee>
    </footer>

    <script>
        // Store the initial date to check for day changes
        let lastDate = new Date().getDate();

        // Update Clock and Date
        function updateTime() {
            const now = new Date();
            
            // Check if date has changed (midnight), reload page to get new schedule
            if (now.getDate() !== lastDate) {
                window.location.reload();
            }

            // Analog Clock
            const seconds = now.getSeconds();
            const minutes = now.getMinutes();
            const hours = now.getHours();
            
            const secondDegrees = ((seconds / 60) * 360);
            const minuteDegrees = ((minutes / 60) * 360) + ((seconds/60)*6);
            const hourDegrees = ((hours / 12) * 360) + ((minutes/60)*30);
            
            document.getElementById('second-hand').style.transform = `translateX(-50%) rotate(${secondDegrees}deg)`;
            document.getElementById('minute-hand').style.transform = `translateX(-50%) rotate(${minuteDegrees}deg)`;
            document.getElementById('hour-hand').style.transform = `translateX(-50%) rotate(${hourDegrees}deg)`;
            
            // Digital Clock Header
            document.getElementById('digital-clock').innerText = now.toLocaleTimeString('id-ID', { hour12: false });
            
            // Dates
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('gregorian-date').innerText = now.toLocaleDateString('id-ID', options);
            
            // Hijri Date (Approximate via Intl)
            document.getElementById('hijri-date').innerText = new Intl.DateTimeFormat('id-ID-u-ca-islamic', { 
                day: 'numeric', month: 'long', year: 'numeric' 
            }).format(now);
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>
