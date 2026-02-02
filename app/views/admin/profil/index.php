<div class="bg-white rounded-lg shadow-sm p-6 max-w-2xl mx-auto">
    <h2 class="text-xl font-bold mb-6">Edit Profil Masjid</h2>
    
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $data['profil']['id']; ?>">
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Masjid</label>
            <input type="text" name="nama" value="<?= $data['profil']['nama']; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Kontak / Telepon</label>
            <input type="text" name="kontak" value="<?= $data['profil']['kontak']; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Lengkap</label>
            <textarea name="alamat" rows="3" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required><?= $data['profil']['alamat']; ?></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Singkat</label>
            <textarea name="deskripsi" rows="4" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"><?= $data['profil']['deskripsi']; ?></textarea>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
