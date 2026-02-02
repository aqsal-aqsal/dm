<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Kelola Jadwal Sholat</h2>
        <a href="<?= BASEURL; ?>/admin/jadwal_sholat_add" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 text-sm">Tambah Jadwal</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subuh</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dzuhur</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ashar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Maghrib</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Isya</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($data['jadwal'] as $row): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['tanggal']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['subuh']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['dzuhur']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['ashar']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['maghrib']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['isya']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="<?= BASEURL; ?>/admin/jadwal_sholat_edit/<?= $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <a href="<?= BASEURL; ?>/admin/jadwal_sholat_delete/<?= $row['id']; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
