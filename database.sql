-- Database Schema for Masjid App
-- Database Name: dm

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

-- --------------------------------------------------------

-- Table structure for table `admins`
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Default admin (password: admin123)
INSERT INTO `admins` (`username`, `password`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- --------------------------------------------------------

-- Table structure for table `profil_masjid`
CREATE TABLE IF NOT EXISTS `profil_masjid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `profil_masjid` (`nama`, `alamat`, `kontak`, `deskripsi`) VALUES
('Masjid Al-Hikmah', 'Jl. Masjid No. 1, Kota', '08123456789', 'Masjid Jami yang nyaman dan damai.');

-- --------------------------------------------------------

-- Table structure for table `jadwal_sholat`
-- Note: Simplified for manual entry per date
CREATE TABLE IF NOT EXISTS `jadwal_sholat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `subuh` varchar(10) NOT NULL,
  `dzuhur` varchar(10) NOT NULL,
  `ashar` varchar(10) NOT NULL,
  `maghrib` varchar(10) NOT NULL,
  `isya` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tanggal` (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `jadwal_jumat`
CREATE TABLE IF NOT EXISTS `jadwal_jumat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `imam` varchar(100) DEFAULT NULL,
  `khatib` varchar(100) DEFAULT NULL,
  `muadzin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tanggal` (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `pengumuman`
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_posting` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_penting` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `agenda_kegiatan`
CREATE TABLE IF NOT EXISTS `agenda_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `kas_masjid`
CREATE TABLE IF NOT EXISTS `kas_masjid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis` enum('masuk','keluar') NOT NULL,
  `nominal` decimal(15,2) NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;
