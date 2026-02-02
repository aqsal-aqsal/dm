<div class="bg-white rounded-lg shadow-sm p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-6"><?= $data['judul']; ?></h2>
    
    <form action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
            <input type="date" name="tanggal" value="<?= $data['kas']['tanggal'] ?? date('Y-m-d'); ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Transaksi</label>
            <select name="jenis" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
                <option value="masuk" <?= (isset($data['kas']['jenis']) && $data['kas']['jenis'] == 'masuk') ? 'selected' : ''; ?>>Pemasukan (Uang Masuk)</option>
                <option value="keluar" <?= (isset($data['kas']['jenis']) && $data['kas']['jenis'] == 'keluar') ? 'selected' : ''; ?>>Pengeluaran (Uang Keluar)</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nominal (Rp)</label>
            <input type="number" name="nominal" value="<?= $data['kas']['nominal'] ?? ''; ?>" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Keterangan</label>
            <textarea name="keterangan" rows="3" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" required><?= $data['kas']['keterangan'] ?? ''; ?></textarea>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="<?= BASEURL; ?>/admin/kas" class="text-gray-500 mr-4 hover:underline">Batal</a>
            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan
            </button>
        </div>
    </form>
</div>
