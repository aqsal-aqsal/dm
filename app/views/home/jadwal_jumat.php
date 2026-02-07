<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - <?= $data['profil']['nama_masjid'] ?? 'Masjid App'; ?></title>
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
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(6, 78, 59, 0.3); 
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.5); 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(16, 185, 129, 0.8); 
        }

        marquee {
            font-size: 1.5rem;
            font-weight: 500;
        }
    </style>
</head>
<body class="h-screen w-screen overflow-hidden flex flex-col bg-gray-900">

    <?php
    // Helper simple untuk tanggal Indo
    function tanggal_indo($tanggal) {
        $bulan = array (
            1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        // variabel pecahkan 0 = tanggal (yyyy), 1 = bulan (mm), 2 = tanggal (dd)
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    
    // Get Next Friday for Countdown
    $nextJumatISO = '';
    if (!empty($data['jadwal'])) {
        // Assuming data is sorted by date ascending, first one is next
        $nextJumatISO = $data['jadwal'][0]['tanggal'] . 'T' . $data['jadwal'][0]['waktu'];
    }
    ?>

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
            
            <!-- Next Prayer Countdown -->
            <div class="absolute top-10 left-10 bg-black/50 backdrop-blur-md p-6 rounded-2xl border border-white/10 text-white shadow-xl">
                <div class="text-sm uppercase tracking-wider text-gray-300 mb-1">Menuju Sholat Jumat</div>
                <div class="text-4xl font-bold text-emerald-400" id="next-prayer-name">JUMAT</div>
                <div class="text-3xl font-mono mt-2 tracking-widest" id="countdown">--:--:--</div>
            </div>
        </div>

        <!-- Right: Schedule Sidebar -->
        <div class="w-1/3 bg-gradient-to-b from-emerald-700 to-emerald-900 border-l-8 border-emerald-500 flex flex-col shadow-2xl z-10">
            
            <div class="p-6 bg-emerald-800/50 border-b border-emerald-600">
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider flex items-center gap-2">
                    <svg class="w-8 h-8 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Jadwal Petugas
                </h2>
            </div>

            <div class="flex-1 overflow-y-auto p-4 space-y-4">
                <?php if(!empty($data['jadwal'])): ?>
                    <?php foreach($data['jadwal'] as $index => $j): ?>
                        <?php 
                            $isFirst = $index === 0;
                            // Highlight first item strongly
                            $cardClass = $isFirst ? 'bg-white/10 border-emerald-400/50 shadow-lg scale-[1.02]' : 'bg-black/20 border-emerald-800 opacity-80';
                        ?>
                        <div class="rounded-xl border p-5 transition-all <?= $cardClass; ?>">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-emerald-300 font-bold uppercase tracking-wider text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <?= tanggal_indo($j['tanggal']); ?>
                                </span>
                                <?php if($isFirst): ?>
                                    <span class="px-2 py-0.5 bg-emerald-500 text-white text-[10px] font-bold rounded uppercase tracking-wider animate-pulse">Terdekat</span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="mb-4 bg-black/20 rounded-lg p-3 flex items-center justify-between">
                                <div class="flex items-center gap-2 text-white">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-sm opacity-80 uppercase font-semibold">Waktu</span>
                                </div>
                                <div class="text-2xl font-bold text-white tabular-nums">
                                    <?= date('H:i', strtotime($j['waktu'])); ?> <span class="text-sm font-normal opacity-70">WIB</span>
                                </div>
                            </div>

                            <div class="space-y-3 pl-1">
                                <!-- Muadzin -->
                                <div class="flex items-start gap-3">
                                    <div class="w-1 bg-amber-500 h-8 rounded-full"></div>
                                    <div>
                                        <div class="text-[10px] text-amber-300 uppercase font-bold tracking-wider">Muadzin</div>
                                        <div class="text-lg font-medium text-white leading-tight"><?= $j['muadzin']; ?></div>
                                    </div>
                                </div>
                                <!-- Khatib -->
                                <div class="flex items-start gap-3">
                                    <div class="w-1 bg-emerald-500 h-8 rounded-full"></div>
                                    <div>
                                        <div class="text-[10px] text-emerald-300 uppercase font-bold tracking-wider">Khatib</div>
                                        <div class="text-lg font-medium text-white leading-tight"><?= $j['khatib']; ?></div>
                                    </div>
                                </div>
                                <!-- Imam -->
                                <div class="flex items-start gap-3">
                                    <div class="w-1 bg-blue-500 h-8 rounded-full"></div>
                                    <div>
                                        <div class="text-[10px] text-blue-300 uppercase font-bold tracking-wider">Imam</div>
                                        <div class="text-lg font-medium text-white leading-tight"><?= $j['imam']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="p-8 text-center text-emerald-200 opacity-70">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <p class="text-lg">Belum ada jadwal Jumat yang tersedia.</p>
                    </div>
                <?php endif; ?>
            </div>

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
        // Variables passed from PHP
        const nextJumatTime = "<?= $nextJumatISO; ?>";

        // Update Clock and Date
        function updateTime() {
            const now = new Date();
            
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
            
            // Countdown Logic
            if (nextJumatTime) {
                const target = new Date(nextJumatTime).getTime();
                const diff = target - now.getTime();
                
                if (diff > 0) {
                    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const s = Math.floor((diff % (1000 * 60)) / 1000);
                    
                    let countdownStr = "";
                    if (d > 0) countdownStr += d + "h ";
                    countdownStr += (h < 10 ? "0"+h : h) + ":";
                    countdownStr += (m < 10 ? "0"+m : m) + ":";
                    countdownStr += (s < 10 ? "0"+s : s);
                    
                    document.getElementById('countdown').innerText = countdownStr;
                } else {
                    document.getElementById('countdown').innerText = "SEKARANG";
                    document.getElementById('next-prayer-name').innerText = "SHOLAT JUMAT";
                    document.getElementById('next-prayer-name').classList.add('animate-pulse');
                }
            }
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>
