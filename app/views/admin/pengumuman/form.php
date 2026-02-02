<div class="bg-white rounded-lg shadow-sm p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-6"><?= $data['judul']; ?></h2>
    
    <form action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
            <input type="text" name="judul" value="<?= $data['pengumuman']['judul'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Isi Pengumuman</label>
            <textarea name="isi" rows="4" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required><?= $data['pengumuman']['isi'] ?? ''; ?></textarea>
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="is_penting" value="1" <?= (isset($data['pengumuman']['is_penting']) && $data['pengumuman']['is_penting']) ? 'checked' : ''; ?> class="form-checkbox h-5 w-5 text-emerald-600">
                <span class="ml-2 text-gray-700 text-sm font-bold">Tandai sebagai Penting</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="<?= BASEURL; ?>/admin/pengumuman" class="text-gray-500 mr-4 hover:underline">Batal</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
