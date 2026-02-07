<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Ibadah Jumat</span>
            <h1 class="text-4xl font-bold text-gray-800 mt-2 mb-4">Jadwal Petugas Jumat</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Informasi jadwal petugas sholat Jumat (Khatib, Imam, dan Muadzin) di Masjid Darul Mu'awanah.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
            <?php if (!empty($data['jadwal'])): ?>
                <?php foreach ($data['jadwal'] as $j): ?>
                    <?php 
                        $isUpcoming = strtotime($j['tanggal']) >= strtotime(date('Y-m-d'));
                        $cardClass = $isUpcoming ? 'border-emerald-500 shadow-lg ring-1 ring-emerald-500 bg-white' : 'border-gray-200 bg-gray-50 opacity-80';
                        $headerClass = $isUpcoming ? 'bg-emerald-600 text-white' : 'bg-gray-200 text-gray-600';
                    ?>
                    <div class="rounded-2xl border overflow-hidden transition hover:shadow-xl <?= $cardClass; ?>">
                        <div class="p-4 text-center <?= $headerClass; ?>">
                            <p class="text-lg font-bold"><?= date('d F Y', strtotime($j['tanggal'])); ?></p>
                            <?php if($isUpcoming): ?>
                                <span class="inline-block mt-1 px-2 py-0.5 bg-white/20 rounded text-xs font-medium">Mendatang</span>
                            <?php endif; ?>
                        </div>
                        <div class="p-6 space-y-4">
                            <!-- Khatib -->
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 text-emerald-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-semibold tracking-wider">Khatib</p>
                                    <p class="font-bold text-gray-800 text-lg"><?= $j['khatib']; ?></p>
                                </div>
                            </div>

                            <!-- Imam -->
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-semibold tracking-wider">Imam</p>
                                    <p class="font-bold text-gray-800 text-lg"><?= $j['imam']; ?></p>
                                </div>
                            </div>

                            <!-- Muadzin -->
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center flex-shrink-0 text-amber-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-semibold tracking-wider">Muadzin</p>
                                    <p class="font-bold text-gray-800 text-lg"><?= $j['muadzin']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-12 bg-white rounded-2xl shadow-sm border border-gray-200">
                    <p class="text-gray-500 text-lg">Belum ada jadwal petugas Jumat yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>