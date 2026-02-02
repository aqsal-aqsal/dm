<div class="bg-white rounded-lg shadow-sm p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-6"><?= $data['judul']; ?></h2>
    
    <form action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
            <input type="date" name="tanggal" value="<?= $data['jadwal']['tanggal'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Khatib</label>
            <input type="text" name="khatib" value="<?= $data['jadwal']['khatib'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Imam</label>
            <input type="text" name="imam" value="<?= $data['jadwal']['imam'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Muadzin</label>
            <input type="text" name="muadzin" value="<?= $data['jadwal']['muadzin'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="<?= BASEURL; ?>/admin/jadwal_jumat" class="text-gray-500 mr-4 hover:underline">Batal</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
