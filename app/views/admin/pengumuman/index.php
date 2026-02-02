<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Kelola Pengumuman</h2>
        <a href="<?= BASEURL; ?>/admin/pengumuman_add" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 text-sm">Tambah Pengumuman</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Isi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($data['pengumuman'] as $row): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?= $row['judul']; ?></td>
                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?= $row['isi']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php if($row['is_penting']): ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Penting</span>
                        <?php else: ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Biasa</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= date('d M Y', strtotime($row['tanggal_posting'])); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="<?= BASEURL; ?>/admin/pengumuman_edit/<?= $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <a href="<?= BASEURL; ?>/admin/pengumuman_delete/<?= $row['id']; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
