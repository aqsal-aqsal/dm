<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Profil Masjid</h1>
    <p class="text-gray-600">Kelola informasi dasar dan profil masjid.</p>
</div>

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden max-w-3xl">
    <div class="p-6">
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $data['profil']['id']; ?>">
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Masjid</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <input type="text" name="nama" value="<?= htmlspecialchars($data['profil']['nama']); ?>" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kontak / Telepon</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <input type="text" name="kontak" value="<?= htmlspecialchars($data['profil']['kontak']); ?>" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2.5">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                    <div class="relative">
                         <div class="absolute top-3 left-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <textarea name="alamat" rows="3" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2" required><?= htmlspecialchars($data['profil']['alamat']); ?></textarea>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="4" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm py-2"><?= $data['profil']['deskripsi']; ?></textarea>
                    <p class="mt-1 text-sm text-gray-500">Deskripsi ini akan muncul di halaman utama website.</p>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    <svg class="h-5 w-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
