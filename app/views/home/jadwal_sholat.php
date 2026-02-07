<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Waktu Sholat</span>
            <h1 class="text-4xl font-bold text-gray-800 mt-2 mb-4">Jadwal Sholat Wajib</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Jadwal waktu sholat fardhu untuk wilayah masjid dan sekitarnya.
            </p>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-center border-collapse">
                    <thead>
                        <tr class="bg-emerald-600 text-white text-sm uppercase tracking-wider font-semibold">
                            <th class="p-4 text-left">Tanggal</th>
                            <th class="p-4">Subuh</th>
                            <th class="p-4">Dzuhur</th>
                            <th class="p-4">Ashar</th>
                            <th class="p-4">Maghrib</th>
                            <th class="p-4">Isya</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700">
                        <?php if (!empty($data['jadwal'])): ?>
                            <?php foreach ($data['jadwal'] as $j): ?>
                                <?php 
                                    $isToday = $j['tanggal'] == date('Y-m-d');
                                    $rowClass = $isToday ? 'bg-emerald-50 font-semibold' : 'hover:bg-gray-50';
                                ?>
                                <tr class="<?= $rowClass; ?> transition">
                                    <td class="p-4 text-left whitespace-nowrap">
                                        <?= date('d M Y', strtotime($j['tanggal'])); ?>
                                        <?php if($isToday): ?>
                                            <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-emerald-200 text-emerald-800">Hari Ini</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="p-4"><?= date('H:i', strtotime($j['subuh'])); ?></td>
                                    <td class="p-4"><?= date('H:i', strtotime($j['dzuhur'])); ?></td>
                                    <td class="p-4"><?= date('H:i', strtotime($j['ashar'])); ?></td>
                                    <td class="p-4"><?= date('H:i', strtotime($j['maghrib'])); ?></td>
                                    <td class="p-4"><?= date('H:i', strtotime($j['isya'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="p-8 text-center text-gray-500">
                                    Belum ada data jadwal sholat.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>