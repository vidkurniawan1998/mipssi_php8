-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 07:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mipssi`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(161, '2020_01_10_063102_create_user_table', 1),
(162, '2020_01_13_025032_create_pengumuman_table', 1),
(163, '2020_01_13_025517_create_dokumen_table', 1),
(164, '2020_01_13_025729_create_mahasiswa_table', 1),
(165, '2020_01_13_043412_create_dosen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_dokumen` int(11) NOT NULL,
  `judul_dokumen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id`, `tahun_dokumen`, `judul_dokumen`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(6, 2015, 'ABC', 'Reistoration', '1580290484.jpg', '2020-01-29 01:34:44', '2020-01-29 01:34:44'),
(7, 2017, 'APSI', 'Reuters', '1580290529.jpg', '2020-01-29 01:35:29', '2020-01-29 01:35:29'),
(8, 2014, 'MPSI', 'BUMN', '1580291225.jpg', '2020-01-29 01:47:05', '2020-01-29 01:47:05'),
(9, 2016, 'ABC', 'Jumanji', '1580291280.jpg', '2020-01-29 01:48:00', '2020-01-29 01:48:00'),
(10, 2016, 'Asimilasi', 'Kolonk', '1580291328.jpg', '2020-01-29 01:48:48', '2020-01-29 01:48:48'),
(11, 2013, 'Pedoman Laporan KP', 'Juru Kunci', '1580291434.jpg', '2020-01-29 01:50:34', '2020-01-29 01:50:34'),
(12, 2015, 'MPSI', 'Buriram', '1580291462.jpg', '2020-01-29 01:51:02', '2020-01-29 01:51:02'),
(13, 2016, 'APSI', 'Berniaga', '1580363819.jpg', '2020-01-29 21:56:59', '2020-01-29 21:56:59'),
(14, 2014, 'BUMN', 'BPSK', '1580363844.jpg', '2020-01-29 21:57:24', '2020-01-29 21:57:24'),
(15, 2015, 'Pedoman Laporan KP', 'Buruan', '1580363870.jpg', '2020-01-29 21:57:50', '2020-01-29 21:57:50'),
(16, 2014, 'ABC', 'Buriram', '1580363896.jpg', '2020-01-29 21:58:16', '2020-01-29 21:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `alamat`, `no_telepon`, `no_handphone`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Suparmin Hadikusumo', 'Laki-Laki', 'Denpasar', '1998-03-19', 'S3', 'Jl.Gunung Sari No.20 Denpasar', '0361141231', '08123731313', 'suparmin@gmail.com', '1584325918.JPG', '2020-03-15 18:31:58', '2020-03-15 18:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `angkatan` int(11) NOT NULL,
  `status_mahasiswa` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `angkatan`, `status_mahasiswa`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `no_handphone`, `email`, `facebook`, `twitter`, `nim`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 2020, 'Aktif', 'Aristo Suryodiningrat', 'Laki-Laki', 'Jakarta', '2020-01-19', 'Jl.Surya Dinata No.10 Denpasar', '0361101910', '08112314123', 'Suriandana@gmail.com', 'vidkurniawan', 'vidkurniawan', '160010123', '$2y$10$gCCYi61MPBCVZ2WGSyItfufU1gtvSubK7N.3mHzozMit./tIAHW4i', '1580363984.jpg', '2020-01-29 21:59:44', '2020-01-29 21:59:44'),
(2, 2017, 'Tidak Aktif', 'Aristo Suryodiningrat', 'Laki-Laki', 'Surabaya', '2020-01-26', 'Jl. Mulawarman No.10', '0361101910', '08112314123', 'viguran@gmail.com', 'vidkurniawan', 'vidkurniawan', '160030245', '$2y$10$rpzxgLcFCTJaImfcwxTgNeEyX5GLG6URoojDy2Bmy3eOxDFDchY6K', '1580364071.jpg', '2020-01-29 22:01:11', '2020-01-29 22:01:11'),
(3, 2013, 'Aktif', 'Arianto', 'Laki-Laki', 'Unggaran', '2020-01-23', 'Jl. Perum Antagiri', '03612413214', '08112314123', 'johannes_david8@yahoo.co.id', 'vidkurniawan', 'vidkurniawan', '160030256', '$2y$10$XROjV29OQbyTLHjo7KtIUuSogbs61miIP2ofCKZMDjub0c7z/Y/VW', '1580364130.jpg', '2020-01-29 22:02:10', '2020-01-29 22:02:10'),
(4, 2014, 'Aktif', 'Horteka', 'Laki-Laki', 'Papua', '2020-01-26', 'Jl. Perum Antagiri', '0361101910', '08112314123', 'viguran@gmail.com', 'vidkurniawan', 'vidkurniawan', '160030171', '$2y$10$M.4yC80wFmYrP8JzDjvx/OoqZV.ttFsDtB6buiO.lHQHC6rh5IlKW', '1580364298.jpg', '2020-01-29 22:04:58', '2020-01-29 22:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `angkatan` int(11) NOT NULL,
  `judul_pengumuman` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `angkatan`, `judul_pengumuman`, `deskripsi`, `tanggal_pengumuman`, `image`, `created_at`, `updated_at`) VALUES
(6, 2019, 'BSD', 'Pembuatan Pupuk Kompos', '2020-01-26', '1581942521.JPG', '2020-01-29 01:16:35', '2020-02-17 04:28:42'),
(7, 2015, 'Gorlits', 'BDS', '2020-01-26', '1580289420.jpg', '2020-01-29 01:17:00', '2020-01-29 01:17:00'),
(8, 2016, 'Upgrade', 'BDREWS', '2020-01-26', '1580289447.jpg', '2020-01-29 01:17:27', '2020-01-29 01:17:27'),
(9, 2015, 'Gorlits', 'BDSSSE', '2020-01-26', '1580289465.jpg', '2020-01-29 01:17:45', '2020-01-29 01:17:45'),
(10, 2013, 'Buriram', 'Jumpartis', '2020-01-26', '1580289537.jpg', '2020-01-29 01:18:57', '2020-01-29 01:18:57'),
(11, 2015, 'Upgrade', 'Brondong', '2020-01-26', '1580289757.jpg', '2020-01-29 01:22:37', '2020-01-29 01:22:37'),
(12, 2015, 'Some Noise', 'Brosis', '2020-01-26', '1580289812.jpg', '2020-01-29 01:23:32', '2020-01-29 01:23:32'),
(13, 2014, 'Gorlits', 'BRE', '2020-01-27', '1580289836.jpg', '2020-01-29 01:23:56', '2020-01-29 01:23:56'),
(14, 2015, 'Janji Suci', 'UMC', '2020-01-26', '1580289861.jpg', '2020-01-29 01:24:21', '2020-01-29 01:24:21'),
(15, 2014, 'UMK', 'Rounded', '2020-01-26', '1580289906.jpg', '2020-01-29 01:25:06', '2020-01-29 01:25:06'),
(16, 2017, 'Operation', 'operasi tangkap tangan', '2020-03-16', '1583588321.png', '2020-03-07 05:38:41', '2020-03-07 05:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` enum('Ketua Program Studi Sistem Informasi','Sekertaris Program Studi Sistem Informasi','Staff Program Studi Sistem Informasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_lengkap`, `jabatan`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sukirman', 'Sekertaris Program Studi Sistem Informasi', 'sukirman@gmail.com', 'sukirman101', '$2y$10$QeF/EXH7swlTmfr1SNJ0EePkaVZZHL75wKNug63Pvo/bB1mB7itJu', '2020-02-17 04:52:12', '2020-02-17 04:52:12'),
(2, 'Ponjampae', 'Ketua Program Studi Sistem Informasi', 'sugi@gmail.com', 'sugi123', '$2y$10$04PXr6v8xZw656yPr6NAH.HA9L7MTknIJ8x6ZuCTTkdIdBKsaDqPy', '2020-02-17 04:55:23', '2020-02-17 04:55:23'),
(3, 'Ponjampae', 'Ketua Program Studi Sistem Informasi', 'poni@gmail.com', 'poni123', '$2y$10$IN5HHo6y8LX43TYX1wHGpec5lrO9iuWUmyesrmjYwaBWUgdHIia/W', '2020-02-17 04:56:51', '2020-02-17 04:56:51'),
(4, 'Jori Astrianto', 'Staff Program Studi Sistem Informasi', 'jori@gmail.com', 'jori123', '$2y$10$U2Pw1w.0KSx.hEXrNEEM4OsrnFjdiRF7mgXSp3dG3oBw2wm.ejbbG', '2020-03-07 05:36:41', '2020-03-07 05:36:41'),
(5, 'Suri Arianto', 'Sekertaris Program Studi Sistem Informasi', 'suri@gmail.com', 'suri123', '$2y$10$nmemISAQJ6PQm.6e4I.WIukqutSP8Sd6UQQ58Cae2bFfNTr9v0f8.', '2020-03-15 18:11:42', '2020-03-15 18:11:42'),
(6, 'Joni Aristarkus', 'Staff Program Studi Sistem Informasi', 'joni_aristarkus@gmail.com', 'joniaristarkus123', '$2y$10$MyglOd946zo.ba4Wg0QFCeAlpkI7bHNyX.O2k3IXnLzo.H0En2Rfm', '2020-03-21 08:42:20', '2020-03-21 08:42:20'),
(7, 'Agus Rahardjo', 'Staff Program Studi Sistem Informasi', 'agus_raharjo@gmail.com', 'agus_raharjo123', '$2y$10$XjifpWOTtizypjzzjO6A8u0WQrtok7R7zGc.RPrte1MisdMTis3kS', '2020-03-21 08:47:25', '2020-03-21 08:47:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_dosen_email_unique` (`email`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_mahasiswa_nim_unique` (`nim`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
