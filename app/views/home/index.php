

<!-- Hero Section -->
<div class="relative h-screen min-h-[600px] flex items-center justify-center bg-gray-900 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1564682337624-94f4c28c8945?q=80&w=1920&auto=format&fit=crop" alt="Masjid Background" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/40 to-black/30"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 text-center text-white mt-16">
        <p class="text-emerald-300 font-medium tracking-widest uppercase mb-4 animate-fade-in-up">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight drop-shadow-lg">
            Selamat Datang di <br>
            <span class="text-emerald-400">Masjid Darul Mu'awanah</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto mb-10 leading-relaxed">
            Pusat ibadah dan kegiatan umat untuk membangun generasi Rabbani yang berakhlak mulia.
        </p>
        <a href="#jadwal" class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-4 px-10 rounded-full transition transform hover:-translate-y-1 shadow-lg border-2 border-emerald-400/50">
            Lihat Jadwal Sholat
        </a>
    </div>

    <!-- Decorative Bottom Curve -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none rotate-180">
        <svg class="relative block w-[calc(100%+1.3px)] h-[60px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-50"></path>
        </svg>
    </div>
</div>

<!-- Jadwal Jumat Banner (Floating) -->
<div class="relative z-20 -mt-24 container mx-auto px-6 mb-20">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-emerald-100 flex flex-col md:flex-row">
        <div class="bg-emerald-600 p-8 md:w-1/3 flex flex-col justify-center items-center text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-pattern opacity-10"></div> <!-- Placeholder for pattern -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-emerald-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h3 class="text-2xl font-bold mb-1">Jadwal Sholat Jum'at</h3>
            <p class="text-emerald-100">Mendatang</p>
        </div>
        <div class="p-8 md:w-2/3 flex flex-col md:flex-row items-center justify-between">
            <div class="mb-6 md:mb-0">
                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold mb-1">Khotib & Imam</p>
                <?php if (!empty($data['jadwal_jumat'])): ?>
                    <h4 class="text-2xl font-bold text-gray-800"><?= $data['jadwal_jumat']['khotib']; ?></h4>
                    <p class="text-gray-600 mt-1 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <?= date('d F Y', strtotime($data['jadwal_jumat']['tanggal'])); ?>
                    </p>
                <?php else: ?>
                    <h4 class="text-2xl font-bold text-gray-800">Belum terjadwal</h4>
                <?php endif; ?>
            </div>
            <div class="text-right">
                 <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold mb-1">Waktu</p>
                 <div class="text-3xl font-bold text-emerald-600">11:45 WIB</div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Section -->
<section id="layanan" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Layanan</span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2 mb-12">Fasilitas & Layanan Masjid</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Item 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600 group-hover:text-white transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 mb-2">Jadwal Sholat</h3>
                <p class="text-sm text-gray-500">Waktu sholat akurat sesuai Kemenag.</p>
            </div>
            
            <!-- Item 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600 group-hover:text-white transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 mb-2">Kajian Islam</h3>
                <p class="text-sm text-gray-500">Kajian rutin mingguan dan bulanan.</p>
            </div>
            
            <!-- Item 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600 group-hover:text-white transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 mb-2">Zakat & Infaq</h3>
                <p class="text-sm text-gray-500">Penyaluran dana umat yang transparan.</p>
            </div>
            
            <!-- Item 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600 group-hover:text-white transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 mb-2">Remaja Masjid</h3>
                <p class="text-sm text-gray-500">Wadah aktivitas positif pemuda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kegiatan / Agenda Section -->
<section id="kegiatan" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Agenda</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Kegiatan Mendatang</h2>
            </div>
            <a href="#" class="hidden md:inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition">
                Lihat Semua Agenda
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-[120px] top-0 bottom-0 w-px bg-gray-200"></div>

            <div class="space-y-12">
                <?php if (!empty($data['agenda'])): ?>
                    <?php foreach ($data['agenda'] as $agenda): ?>
                    <div class="relative flex flex-col md:flex-row md:items-start group">
                        <!-- Date Badge -->
                        <div class="md:w-[120px] flex-shrink-0 mb-4 md:mb-0 md:pr-8 md:text-right">
                            <span class="block text-2xl font-bold text-gray-800"><?= date('d', strtotime($agenda['tanggal'])); ?></span>
                            <span class="block text-sm text-gray-500 uppercase"><?= date('F Y', strtotime($agenda['tanggal'])); ?></span>
                            <span class="block text-xs text-emerald-600 mt-1 font-medium"><?= date('H:i', strtotime($agenda['waktu'])); ?> WIB</span>
                        </div>
                        
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-[120px] top-1.5 w-3 h-3 bg-emerald-500 rounded-full -translate-x-1.5 border-4 border-white shadow-sm group-hover:scale-125 transition"></div>

                        <!-- Content Card -->
                        <div class="flex-1 md:pl-8">
                            <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50/30 transition duration-300">
                                <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $agenda['nama_kegiatan']; ?></h3>
                                <p class="text-gray-600 mb-4 leading-relaxed"><?= $agenda['deskripsi'] ?? 'Kegiatan rutin masjid.'; ?></p>
                                <a href="#" class="inline-flex items-center text-sm font-semibold text-emerald-600 hover:text-emerald-700">
                                    Detail Kegiatan
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="text-center py-10 bg-gray-50 rounded-2xl">
                        <p class="text-gray-500">Belum ada agenda mendatang.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Berita / Pengumuman Section -->
<section id="berita" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Informasi</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Berita & Pengumuman</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php if (!empty($data['pengumuman'])): ?>
                <?php foreach ($data['pengumuman'] as $info): ?>
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group flex flex-col h-full">
                    <!-- Placeholder Image (Randomized for variety) -->
                    <div class="h-48 overflow-hidden relative">
                         <div class="absolute inset-0 bg-emerald-900/10 group-hover:bg-transparent transition z-10"></div>
                        <img src="https://source.unsplash.com/random/400x300/?mosque,islamic&sig=<?= $info['id']; ?>" alt="Berita Image" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 left-4 z-20">
                            <?php if(isset($info['is_penting']) && $info['is_penting']): ?>
                                <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">PENTING</span>
                            <?php else: ?>
                                <span class="bg-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">INFO</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-xs text-gray-500 mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <?= date('d M Y', strtotime($info['tanggal_posting'])); ?>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-emerald-600 transition"><?= $info['judul']; ?></h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-1">
                            <?= substr($info['isi'], 0, 100) . '...'; ?>
                        </p>
                        <a href="#" class="text-emerald-600 font-semibold text-sm hover:underline mt-auto">Baca Selengkapnya →</a>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-3 text-center text-gray-500 italic">Belum ada pengumuman.</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Call to Action (Donasi/Kas) -->
<section class="py-20 bg-emerald-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Mari Berlomba dalam Kebaikan</h2>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto mb-10">
            Salurkan infaq dan shodaqoh terbaik Anda untuk kemakmuran masjid dan kesejahteraan umat.
        </p>
        <div class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 mb-8">
            <p class="text-emerald-200 text-sm uppercase tracking-wider mb-2">Saldo Kas Saat Ini</p>
            <p class="text-4xl md:text-5xl font-bold text-white">Rp <?= number_format($data['saldo'], 0, ',', '.'); ?></p>
        </div>
        <br>
        <a href="#kontak" class="inline-block bg-white text-emerald-900 font-bold py-3 px-8 rounded-full hover:bg-emerald-50 transition transform hover:-translate-y-1 shadow-lg">
            Salurkan Donasi
        </a>
    </div>
</section>


