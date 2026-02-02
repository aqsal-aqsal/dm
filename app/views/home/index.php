<div class="container mx-auto px-4 py-6 space-y-8">

    <!-- Pengumuman Penting (Running Text or Alert) -->
    <?php if(!empty($data['pengumuman'])): ?>
        <div class="space-y-2">
        <?php foreach($data['pengumuman'] as $p): ?>
            <?php if($p['is_penting']): ?>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded shadow-sm flex justify-between items-start" role="alert">
                    <div>
                        <p class="font-bold"><?= $p['judul']; ?></p>
                        <p><?= $p['isi']; ?></p>
                    </div>
                    <span class="text-xs text-yellow-600"><?= date('d M Y', strtotime($p['tanggal_posting'])); ?></span>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Jadwal Sholat Hari Ini -->
    <div id="jadwal" class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-emerald-600 px-6 py-4">
            <h2 class="text-white text-xl font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Jadwal Sholat Hari Ini (<?= date('d M Y'); ?>)
            </h2>
        </div>
        <div class="p-6">
            <?php if($data['jadwal_sholat']): ?>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 text-center">
                <div class="bg-emerald-50 p-4 rounded-lg">
                    <span class="block text-gray-500 text-sm font-medium uppercase tracking-wider">Subuh</span>
                    <span class="block text-2xl font-bold text-emerald-800"><?= $data['jadwal_sholat']['subuh']; ?></span>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg">
                    <span class="block text-gray-500 text-sm font-medium uppercase tracking-wider">Dzuhur</span>
                    <span class="block text-2xl font-bold text-emerald-800"><?= $data['jadwal_sholat']['dzuhur']; ?></span>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg">
                    <span class="block text-gray-500 text-sm font-medium uppercase tracking-wider">Ashar</span>
                    <span class="block text-2xl font-bold text-emerald-800"><?= $data['jadwal_sholat']['ashar']; ?></span>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg">
                    <span class="block text-gray-500 text-sm font-medium uppercase tracking-wider">Maghrib</span>
                    <span class="block text-2xl font-bold text-emerald-800"><?= $data['jadwal_sholat']['maghrib']; ?></span>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg">
                    <span class="block text-gray-500 text-sm font-medium uppercase tracking-wider">Isya</span>
                    <span class="block text-2xl font-bold text-emerald-800"><?= $data['jadwal_sholat']['isya']; ?></span>
                </div>
            </div>
            <?php else: ?>
                <p class="text-center text-gray-500 italic">Jadwal sholat belum tersedia untuk hari ini.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Jadwal Jumat & Kas -->
        <div class="md:col-span-1 space-y-8">
            <!-- Jumat -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-emerald-700 px-6 py-3">
                    <h3 class="text-white font-semibold">Jadwal Jumat Terdekat</h3>
                </div>
                <div class="p-6">
                    <?php if($data['jadwal_jumat']): ?>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Tanggal</span>
                            <p class="font-bold text-lg"><?= date('d M Y', strtotime($data['jadwal_jumat']['tanggal'])); ?></p>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <span class="text-xs text-gray-500 uppercase">Khatib</span>
                                <p class="font-medium"><?= $data['jadwal_jumat']['khatib']; ?></p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-500 uppercase">Imam</span>
                                <p class="font-medium"><?= $data['jadwal_jumat']['imam']; ?></p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-500 uppercase">Muadzin</span>
                                <p class="font-medium"><?= $data['jadwal_jumat']['muadzin']; ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <p class="text-gray-500 italic text-sm">Belum ada jadwal Jumat.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Saldo Kas -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-blue-600 px-6 py-3">
                    <h3 class="text-white font-semibold">Saldo Kas Masjid</h3>
                </div>
                <div class="p-6 text-center">
                    <span class="block text-gray-500 text-sm mb-1">Total Saldo Saat Ini</span>
                    <span class="block text-3xl font-bold text-blue-800">Rp <?= number_format($data['saldo'], 0, ',', '.'); ?></span>
                </div>
            </div>
        </div>

        <!-- Agenda & Pengumuman Lain -->
        <div class="md:col-span-2 space-y-8">
            <!-- Agenda -->
            <div id="agenda" class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-gray-100 px-6 py-3 border-b">
                    <h3 class="text-gray-800 font-semibold">Agenda Kegiatan Mendatang</h3>
                </div>
                <div class="divide-y divide-gray-100">
                    <?php if(!empty($data['agenda'])): ?>
                        <?php foreach($data['agenda'] as $agenda): ?>
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-start">
                                <div class="bg-emerald-100 text-emerald-600 rounded-lg p-3 text-center min-w-[80px] mr-4">
                                    <span class="block text-xl font-bold"><?= date('d', strtotime($agenda['tanggal'])); ?></span>
                                    <span class="block text-xs uppercase"><?= date('M', strtotime($agenda['tanggal'])); ?></span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-800"><?= $agenda['nama_kegiatan']; ?></h4>
                                    <div class="flex items-center text-sm text-gray-500 mt-1 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <?= $agenda['waktu']; ?> WIB
                                    </div>
                                    <p class="text-gray-600"><?= $agenda['deskripsi']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="p-6 text-center text-gray-500 italic">Tidak ada agenda mendatang.</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Pengumuman Lain -->
            <div id="pengumuman" class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-gray-100 px-6 py-3 border-b">
                    <h3 class="text-gray-800 font-semibold">Pengumuman Lainnya</h3>
                </div>
                <div class="p-6 space-y-4">
                     <?php if(!empty($data['pengumuman'])): ?>
                        <ul class="space-y-4">
                        <?php foreach($data['pengumuman'] as $p): ?>
                            <?php if(!$p['is_penting']): ?>
                            <li class="border-b pb-4 last:border-0 last:pb-0">
                                <h4 class="font-bold text-gray-800"><?= $p['judul']; ?></h4>
                                <p class="text-gray-600 mt-1"><?= $p['isi']; ?></p>
                                <span class="text-xs text-gray-400 mt-2 block"><?= date('d M Y', strtotime($p['tanggal_posting'])); ?></span>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p class="text-gray-500 italic">Tidak ada pengumuman.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
