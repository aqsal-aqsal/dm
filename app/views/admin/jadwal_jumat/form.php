<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900"><?= $data['judul']; ?></h1>
    <p class="text-gray-600">Isi formulir berikut untuk data jadwal jumat.</p>
</div>

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden max-w-2xl">
    <div class="p-6">
        <form action="" method="POST">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $data['jadwal']['tanggal'] ?? ''; ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Khatib</label>
                    <input type="text" name="khatib" value="<?= $data['jadwal']['khatib'] ?? ''; ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Imam</label>
                    <input type="text" name="imam" value="<?= $data['jadwal']['imam'] ?? ''; ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Muadzin</label>
                    <input type="text" name="muadzin" value="<?= $data['jadwal']['muadzin'] ?? ''; ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5">
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end space-x-3">
                <a href="<?= BASEURL; ?>/admin/jadwal_jumat" class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
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
