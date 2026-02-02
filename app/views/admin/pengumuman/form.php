<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900"><?= $data['judul']; ?></h1>
    <p class="text-gray-600">Isi formulir berikut untuk data pengumuman.</p>
</div>

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden max-w-2xl">
    <div class="p-6">
        <form action="" method="POST">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                    <input type="text" name="judul" value="<?= $data['pengumuman']['judul'] ?? ''; ?>" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Isi Pengumuman</label>
                    <textarea name="isi" rows="4" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2" required><?= $data['pengumuman']['isi'] ?? ''; ?></textarea>
                </div>

                <div class="flex items-center">
                    <input id="is_penting" type="checkbox" name="is_penting" value="1" <?= (isset($data['pengumuman']['is_penting']) && $data['pengumuman']['is_penting']) ? 'checked' : ''; ?> class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                    <label for="is_penting" class="ml-2 block text-sm text-gray-900">
                        Tandai sebagai Penting
                    </label>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end space-x-3">
                <a href="<?= BASEURL; ?>/admin/pengumuman" class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
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
