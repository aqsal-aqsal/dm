<div class="bg-white rounded-lg shadow-sm p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-6"><?= $data['judul']; ?></h2>
    
    <form action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
            <input type="date" name="tanggal" value="<?= $data['jadwal']['tanggal'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Subuh</label>
                <input type="time" name="subuh" value="<?= $data['jadwal']['subuh'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Dzuhur</label>
                <input type="time" name="dzuhur" value="<?= $data['jadwal']['dzuhur'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Ashar</label>
                <input type="time" name="ashar" value="<?= $data['jadwal']['ashar'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Maghrib</label>
                <input type="time" name="maghrib" value="<?= $data['jadwal']['maghrib'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Isya</label>
                <input type="time" name="isya" value="<?= $data['jadwal']['isya'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="<?= BASEURL; ?>/admin/jadwal_sholat" class="text-gray-500 mr-4 hover:underline">Batal</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
