<div class="bg-white rounded-lg shadow-sm p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-6"><?= $data['judul']; ?></h2>
    
    <form action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" value="<?= $data['agenda']['nama_kegiatan'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
                <input type="date" name="tanggal" value="<?= $data['agenda']['tanggal'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Waktu</label>
                <input type="text" name="waktu" placeholder="08:00 - Selesai" value="<?= $data['agenda']['waktu'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"><?= $data['agenda']['deskripsi'] ?? ''; ?></textarea>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="<?= BASEURL; ?>/admin/agenda" class="text-gray-500 mr-4 hover:underline">Batal</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
