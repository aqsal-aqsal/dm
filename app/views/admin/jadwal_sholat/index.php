<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Jadwal Sholat</h1>
        <p class="text-gray-600">Jadwal sholat disinkronisasi otomatis dari API EQuran.id (Kuala Kapuas).</p>
    </div>
    <div class="flex space-x-2">
        <a href="<?= BASEURL; ?>/admin/jadwal_sholat_sync" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm flex items-center" onclick="return confirm('Proses ini akan mengambil data terbaru dari API. Lanjutkan?')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            Sync Data
        </a>
    </div>
</div>

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
    <!-- Filter Bar -->
    <div class="p-4 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-center bg-gray-50/50 gap-4">
         <div class="relative max-w-sm w-full">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text" class="pl-10 block w-full rounded-lg border-gray-300 sm:text-sm focus:ring-emerald-500 focus:border-emerald-500 py-2" placeholder="Cari tanggal...">
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-4">
                        <input type="checkbox" class="rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subuh</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dzuhur</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ashar</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Maghrib</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Isya</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if(empty($data['jadwal'])): ?>
                <tr>
                    <td colspan="8" class="px-6 py-10 text-center text-gray-500 text-sm">
                        Belum ada jadwal sholat.
                    </td>
                </tr>
                <?php else: ?>
                    <?php foreach($data['jadwal'] as $row): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <?= date('d M Y', strtotime($row['tanggal'])); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['subuh']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['dzuhur']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['ashar']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['maghrib']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['isya']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <a href="<?= BASEURL; ?>/admin/jadwal_sholat_edit/<?= $row['id']; ?>" class="text-gray-400 hover:text-indigo-600 transition-colors" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <a href="<?= BASEURL; ?>/admin/jadwal_sholat_delete/<?= $row['id']; ?>" class="text-gray-400 hover:text-red-600 transition-colors" onclick="return confirm('Yakin hapus?')" title="Hapus">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
