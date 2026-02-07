<div class="pt-24 pb-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm">Transparansi Dana Umat</span>
            <h1 class="text-4xl font-bold text-gray-800 mt-2 mb-4">Laporan Kas Masjid</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Berikut adalah laporan arus kas masuk dan keluar masjid yang dikelola secara transparan dan akuntabel.
            </p>
        </div>

        <!-- Saldo Summary -->
        <div class="max-w-4xl mx-auto mb-10">
            <div class="bg-gradient-to-r from-emerald-600 to-emerald-800 rounded-2xl p-8 text-white shadow-xl text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')] opacity-10"></div>
                <p class="text-emerald-100 text-lg uppercase tracking-widest font-medium mb-2 relative z-10">Total Saldo Saat Ini</p>
                <h2 class="text-5xl font-bold relative z-10">Rp <?= number_format($data['saldo'], 0, ',', '.'); ?></h2>
            </div>
        </div>

        <!-- Transaction Table -->
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                            <th class="p-4">Tanggal</th>
                            <th class="p-4">Keterangan</th>
                            <th class="p-4 text-center">Jenis</th>
                            <th class="p-4 text-right">Nominal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if (!empty($data['kas'])): ?>
                            <?php foreach ($data['kas'] as $k): ?>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="p-4 text-gray-600 whitespace-nowrap">
                                        <?= date('d M Y', strtotime($k['tanggal'])); ?>
                                    </td>
                                    <td class="p-4 text-gray-800 font-medium">
                                        <?= $k['keterangan']; ?>
                                    </td>
                                    <td class="p-4 text-center">
                                        <?php if (strtolower($k['jenis']) == 'masuk'): ?>
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                                Pemasukan
                                            </span>
                                        <?php else: ?>
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                Pengeluaran
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="p-4 text-right font-bold <?= strtolower($k['jenis']) == 'masuk' ? 'text-emerald-600' : 'text-red-600'; ?>">
                                        <?= strtolower($k['jenis']) == 'masuk' ? '+' : '-'; ?> Rp <?= number_format($k['nominal'], 0, ',', '.'); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="p-8 text-center text-gray-500">
                                    Belum ada data transaksi kas.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>