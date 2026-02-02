<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Kelola Agenda Kegiatan</h2>
        <a href="<?= BASEURL; ?>/admin/agenda_add" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 text-sm">Tambah Agenda</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Kegiatan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($data['agenda'] as $row): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $row['waktu']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?= $row['nama_kegiatan']; ?></td>
                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?= $row['deskripsi']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="<?= BASEURL; ?>/admin/agenda_edit/<?= $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <a href="<?= BASEURL; ?>/admin/agenda_delete/<?= $row['id']; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
