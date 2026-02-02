<footer class="bg-gray-800 text-white mt-12 py-8">
    <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-3"><?= $data['profil']['nama'] ?? 'Masjid'; ?></h3>
            <p class="text-gray-400 text-sm"><?= $data['profil']['alamat'] ?? 'Alamat Masjid'; ?></p>
            <p class="text-gray-400 text-sm mt-2">Kontak: <?= $data['profil']['kontak'] ?? '-'; ?></p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-3">Tentang Kami</h3>
            <p class="text-gray-400 text-sm"><?= $data['profil']['deskripsi'] ?? 'Deskripsi masjid.'; ?></p>
        </div>
        <div class="text-center md:text-right">
            <p class="text-gray-500 text-xs">&copy; <?= date('Y'); ?> <?= $data['profil']['nama'] ?? 'Masjid App'; ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
