-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2020 at 06:19 AM
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
-- Database: `mipssiid_mipssi`
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
(166, '2020_01_10_063102_create_user_table', 1),
(167, '2020_01_13_025032_create_pengumuman_table', 1),
(168, '2020_01_13_025517_create_dokumen_table', 1),
(169, '2020_01_13_025729_create_mahasiswa_table', 1),
(170, '2020_01_13_043412_create_dosen_table', 1);

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
(1, 2020, 'Dokumen Pedoman Tugas Akhir', 'Pedoman tugas akhir revisi 1', '1594969742.jpg', '2020-07-16 23:09:02', '2020-07-16 23:09:02'),
(3, 2020, 'Dokumen Pedoman Laporan Kerja Praktek', 'Pedoman laporan kerja praktek tahun 2020', '1594969904.jpg', '2020-07-16 23:11:45', '2020-07-16 23:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Arianto Sujatmiko, S.Kom.,M.Kom', 'Laki-Laki', 'Denpasar', '1996-06-17', 'S2', 'Jl.Salak Timur No.147 Denpasar', '036114121514', '08141523151', 'arianto@gmail.com', '1597515158.jpg', '2020-08-15 10:12:38', '2020-08-15 10:12:38'),
(2, 'Joni Suranto, S.Kom.,M.Kom', 'Laki-Laki', 'Surakarta', '1997-02-16', 'S2', 'Jl.Kusumawijaya No.10 Denpasar', '03611514123', '081412512341', 'joni@gmail.com', '1597515233.jpg', '2020-08-15 10:13:53', '2020-08-15 10:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `angkatan` int(11) NOT NULL,
  `status_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 2020, '1', 'Joni Hariyanto', 'Laki-Laki', 'Denpasar', '2020-08-12', 'Jl.Sangaji No.10 Denpasar', '081141512512', '081141251341', 'joni@gmail.com', 'joni141', 'joni411', '170010415', '$2y$10$cXB2qpaI7rAlU5yqsKTItehfCa/px8vqJxbwgv1eLiud6Jgpyq0vK', '1597514945.jpg', '2020-08-15 10:09:06', '2020-08-15 10:09:06'),
(2, 2016, '1', 'Arianto Sumitro', 'Laki-Laki', 'Denpasar', '2020-08-01', 'Jl.Kepajen Utara No.10 Denpasar', '0361451251', '081141231451', 'arianto@gmail.com', 'arianto141', 'arianto141', '160031513', '$2y$10$z4hkQONw.zJnFgBij..XueyCxY2yudUAm24FLxveywG4apRzh1eiu', '1597515054.jpg', '2020-08-15 10:10:54', '2020-08-15 10:10:54');

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
(1, 2020, 'Pengumuman Yudisium III', 'Pengumuman Yudisium III Tahun 2020', '2020-07-18', '1594969536.jpg', '2020-07-16 23:05:36', '2020-07-16 23:05:36'),
(2, 2020, 'Pengumuman Kelas Percepatan Tahun 2020', 'Kelas percepatan mahasiswa ITB STIKOM Bali', '2020-07-22', '1594969611.jpg', '2020-07-16 23:06:51', '2020-07-16 23:06:51'),
(3, 2015, 'Pengumuman Penggunaan Microsoft Teams', 'Peraturan penggunaan akun Microsoft Teams', '2020-07-29', '1594969679.jpg', '2020-07-16 23:07:59', '2020-07-16 23:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` enum('Ketua Program Studi Sistem Informasi','Sekertaris Program Studi Sistem Informasi','Staff Program Studi Sistem Informasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id`, `nama_lengkap`, `jabatan`, `email`, `username`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Joni Artawan', 'Ketua Program Studi Sistem Informasi', 'joni@gmail.com', 'joni1234', '$2y$10$BOkXLUwDDXkGuIS6MVwPAeDXAQT6K28cvNd7gjiWzAGyr/40la.c.', '1595693245.jpg', '2020-07-25 08:07:25', '2020-07-25 08:07:25');

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
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_staff_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
