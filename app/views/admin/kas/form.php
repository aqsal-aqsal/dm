<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900"><?= $data['judul']; ?></h1>
    <p class="text-gray-600">Isi formulir berikut untuk data kas.</p>
</div>

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden max-w-2xl">
    <div class="p-6">
        <form action="" method="POST">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $data['kas']['tanggal'] ?? date('Y-m-d'); ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Transaksi</label>
                    <select name="jenis" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                        <option value="masuk" <?= (isset($data['kas']['jenis']) && $data['kas']['jenis'] == 'masuk') ? 'selected' : ''; ?>>Pemasukan (Uang Masuk)</option>
                        <option value="keluar" <?= (isset($data['kas']['jenis']) && $data['kas']['jenis'] == 'keluar') ? 'selected' : ''; ?>>Pengeluaran (Uang Keluar)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nominal (Rp)</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">Rp</span>
                        </div>
                        <input type="number" name="nominal" value="<?= $data['kas']['nominal'] ?? ''; ?>" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan</label>
                    <textarea name="keterangan" rows="3" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2" required><?= $data['kas']['keterangan'] ?? ''; ?></textarea>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end space-x-3">
                <a href="<?= BASEURL; ?>/admin/kas" class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    <svg class="h-5 w-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
