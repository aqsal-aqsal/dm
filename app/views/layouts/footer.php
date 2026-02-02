<footer id="kontak" class="bg-gray-900 text-white pt-20 pb-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Brand -->
            <div class="md:col-span-1">
                <div class="flex items-center space-x-3 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold leading-none"><?= $data['profil']['nama_masjid'] ?? 'Masjid App'; ?></h3>
                        <p class="text-xs text-gray-400 mt-1">Membangun Umat</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    <?= $data['profil']['deskripsi'] ?? 'Masjid sebagai pusat peradaban dan pembinaan umat untuk mencapai ridho Allah SWT.'; ?>
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-emerald-600 transition text-gray-400 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-emerald-600 transition text-gray-400 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.409-.06 3.809-.06zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm0-2.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-emerald-600 transition text-gray-400 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 01-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 01-1.768-1.768C2 15.255 2 12 2 12s0-3.255.418-4.814a2.507 2.507 0 011.768-1.768C5.744 5 12 5 12 5s6.256 0 7.812.418zM15.194 12l-4.017 2.22V9.78L15.194 12z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white border-b border-gray-700 pb-2 inline-block">Tautan Cepat</h3>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-emerald-400 transition flex items-center"><span class="mr-2">›</span> Beranda</a></li>
                    <li><a href="#jadwal" class="hover:text-emerald-400 transition flex items-center"><span class="mr-2">›</span> Jadwal Sholat</a></li>
                    <li><a href="#kegiatan" class="hover:text-emerald-400 transition flex items-center"><span class="mr-2">›</span> Agenda Kegiatan</a></li>
                    <li><a href="#berita" class="hover:text-emerald-400 transition flex items-center"><span class="mr-2">›</span> Berita & Pengumuman</a></li>
                    <li><a href="#layanan" class="hover:text-emerald-400 transition flex items-center"><span class="mr-2">›</span> Layanan Masjid</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white border-b border-gray-700 pb-2 inline-block">Hubungi Kami</h3>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-emerald-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span><?= $data['profil']['alamat'] ?? 'Jl. Masjid No. 1, Kota Bandung'; ?></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span><?= $data['profil']['kontak'] ?? '+62 812 3456 7890'; ?></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>info@masjiddarulmuawanah.id</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter (Optional) -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white border-b border-gray-700 pb-2 inline-block">Waktu Sholat</h3>
                <div class="bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <div class="flex justify-between items-center mb-2 text-sm border-b border-gray-700 pb-2">
                        <span class="text-gray-400">Subuh</span>
                        <span class="font-bold text-white"><?= $data['jadwal_sholat']['subuh'] ?? '04:15'; ?></span>
                    </div>
                    <div class="flex justify-between items-center mb-2 text-sm border-b border-gray-700 pb-2">
                        <span class="text-gray-400">Dzuhur</span>
                        <span class="font-bold text-white"><?= $data['jadwal_sholat']['dzuhur'] ?? '11:45'; ?></span>
                    </div>
                    <div class="flex justify-between items-center mb-2 text-sm border-b border-gray-700 pb-2">
                        <span class="text-gray-400">Ashar</span>
                        <span class="font-bold text-white"><?= $data['jadwal_sholat']['ashar'] ?? '15:05'; ?></span>
                    </div>
                    <div class="flex justify-between items-center mb-2 text-sm border-b border-gray-700 pb-2">
                        <span class="text-gray-400">Maghrib</span>
                        <span class="font-bold text-white"><?= $data['jadwal_sholat']['maghrib'] ?? '17:55'; ?></span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-400">Isya</span>
                        <span class="font-bold text-white"><?= $data['jadwal_sholat']['isya'] ?? '19:05'; ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm mb-4 md:mb-0">&copy; <?= date('Y'); ?> <?= $data['profil']['nama_masjid'] ?? 'Masjid Darul Mu\'awanah'; ?>. All rights reserved.</p>
            <div class="flex space-x-6 text-sm text-gray-500">
                <a href="#" class="hover:text-emerald-400 transition">Privacy Policy</a>
                <a href="#" class="hover:text-emerald-400 transition">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
