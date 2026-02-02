<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-xl font-bold">Kelola Kas Masjid</h2>
            <p class="text-gray-500 text-sm mt-1">Saldo Saat Ini: <span class="font-bold text-emerald-600">Rp <?= number_format($data['saldo'], 0, ',', '.'); ?></span></p>
        </div>
        <a href="<?= BASEURL; ?>/admin/kas_add" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 text-sm">Tambah Transaksi</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Nominal</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($data['kas'] as $row): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['keterangan']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php if($row['jenis'] == 'masuk'): ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Masuk</span>
                        <?php else: ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Keluar</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                        Rp <?= number_format($row['nominal'], 0, ',', '.'); ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="<?= BASEURL; ?>/admin/kas_edit/<?= $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <a href="<?= BASEURL; ?>/admin/kas_delete/<?= $row['id']; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
