-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2025 at 04:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bagian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id`, `nama_bagian`, `created_at`, `updated_at`) VALUES
(1, 'Direktur', NULL, NULL),
(2, 'Keperawatan', NULL, NULL),
(3, 'Keuangan Akuntan', NULL, NULL),
(4, 'Perencanaan', NULL, NULL),
(5, 'Umum', NULL, NULL),
(6, 'Pelayanan Medis', NULL, NULL),
(7, 'Penunjang Medis', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_departemen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama_departemen`, `created_at`, `updated_at`) VALUES
(1, 'ANA POLI ANAK', NULL, NULL),
(2, 'BDGF POLI BEDAH DIGESTIF', NULL, NULL),
(3, 'BDM POLI GIGI BEDAH MULUT', NULL, NULL),
(4, 'BED POLI BEDAH', NULL, NULL),
(5, 'BKL POL BEDAH KEPALA LEHER', NULL, NULL),
(6, 'BVKR POL BEDAH VASKULER', NULL, NULL),
(7, 'DOK DOKTER', NULL, NULL),
(8, 'FAR FARMAS', NULL, NULL),
(9, 'GIG POLI GIGI DAN MULUT', NULL, NULL),
(10, 'GTRI POLI GERIATRI', NULL, NULL),
(11, 'HDL INSTALASI HEMODELISA', NULL, NULL),
(12, 'GD INSTALASI GAWAT DARURAT', NULL, NULL),
(13, 'INT POL PENYAKIT DALAM', NULL, NULL),
(14, 'IRM REHABILITASI MEDIK', NULL, NULL),
(15, 'IT BAGIAN I/PROGRAMER/EDP', NULL, NULL),
(16, 'JAN POLI JANTUNG DAN P.DARAH', NULL, NULL),
(17, 'JANA POLI JANTUNG ANAK', NULL, NULL),
(18, 'JIW POLI PSIKIATRI DAN PSKLG', NULL, NULL),
(19, 'KLT POL KULIT DAN KELAMIN', NULL, NULL),
(20, 'LAB LABORATORIUM', NULL, NULL),
(21, 'MAT POLI MATA', NULL, NULL),
(22, 'MEN MANAJEMEN', NULL, NULL),
(23, '0BG POL KEBIDANAN', NULL, NULL),
(24, 'ORT POLI ORTHOPEDI', NULL, NULL),
(25, 'PAR POL PARU', NULL, NULL),
(26, 'PNR POL PINERE', NULL, NULL),
(27, 'PRM POLI UMUM', NULL, NULL),
(28, 'RAD RADIOLOGI', NULL, NULL),
(29, 'RJ RAWAT JALAN', NULL, NULL),
(30, 'RNAP RAWAT INAP', NULL, NULL),
(31, 'SAR POL SARAF', NULL, NULL),
(32, 'THT POLI THT', NULL, NULL),
(33, 'URO POL UROLOGI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenjang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `nama_jenjang`, `created_at`, `updated_at`) VALUES
(1, 'tak berjenjang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(2, 'APJB Ass Pj Bidang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(3, 'DIRB Direktur Bidang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(4, 'DIRU Direktur Utama', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(5, 'KASI Kepala Sift', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(6, 'KORB Koordinator Bidang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(7, 'PjBd Pj Bidang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(8, 'PjBid', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(9, 'PJBP Pj Bid Pendukung', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(10, 'PJBU Pj Bid Umum', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(11, 'PJSB Pj Sub Bidang', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(12, 'PLSN Staff / Pelaknasa', '2025-03-02 19:06:57', '2025-03-02 19:06:57'),
(13, 'WDU WADIR UMUM', '2025-03-02 19:06:57', '2025-03-02 19:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_jabatan`
--

CREATE TABLE `kelompok_jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelompok_jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelompok_jabatan`
--

INSERT INTO `kelompok_jabatan` (`id`, `nama_kelompok_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'ANGGOTA', NULL, NULL),
(2, 'ANGGOTA POKJA', NULL, NULL),
(3, 'KETUA TIM / PANITIA', NULL, NULL),
(4, 'KETUA TIM AKREDITASI', NULL, NULL),
(5, 'SEKRETARIS DAN BENDAHARA', NULL, NULL),
(6, 'SEKRETARIS/KETUA POKJA', NULL, NULL),
(7, 'WAKIL KETUA TIM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_26_064116_create_departemen_table', 1),
(5, '2025_02_27_045614_create_jenjang_table', 1),
(6, '2025_02_27_045733_create_kelompok_jabatan_table', 1),
(7, '2025_02_27_045753_create_bagian_table', 1),
(8, '2025_02_27_045828_create_resiko_kerja_table', 1),
(9, '2025_02_27_045845_create_tingkat_emergency_table', 1),
(10, '2025_02_27_045913_create_wajib_masuk_table', 1),
(11, '2025_02_27_064119_create_pegawai_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jenjang_id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `departemen_id` bigint(20) UNSIGNED NOT NULL,
  `bagian_id` bigint(20) UNSIGNED NOT NULL,
  `resiko_kerja_id` bigint(20) UNSIGNED NOT NULL,
  `tingkat_emergency_id` bigint(20) UNSIGNED NOT NULL,
  `status_wp` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_karyawan` enum('Kontrak','P3K','Kontrak Evaluasi','PNS') NOT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `pendidikan` enum('D3','S1','S2') NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `mulai_kerja` date NOT NULL,
  `masa_kerja` enum('<1','PT','FT>1') NOT NULL,
  `kode_index` varchar(255) NOT NULL DEFAULT '-0%',
  `bank` enum('BPD','Muamalat','BSI','BCA') NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `status_aktif` enum('Aktif','Tidak Aktif') NOT NULL,
  `wajib_masuk_id` bigint(20) UNSIGNED NOT NULL,
  `mulai_kontrak` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jenis_kelamin`, `jabatan`, `jenjang_id`, `kelompok_jabatan_id`, `departemen_id`, `bagian_id`, `resiko_kerja_id`, `tingkat_emergency_id`, `status_wp`, `status_karyawan`, `npwp`, `pendidikan`, `tmp_lahir`, `tgl_lahir`, `alamat`, `kota`, `mulai_kerja`, `masa_kerja`, `kode_index`, `bank`, `no_rekening`, `status_aktif`, `wajib_masuk_id`, `mulai_kontrak`, `photo`, `no_ktp`, `created_at`, `updated_at`) VALUES
(1, '1173011602010005', 'MAULANA RISWAN', 'Pria', 'IT - SIMRS', 1, 1, 15, 5, 3, 3, 'Tidak Kawin', 'Kontrak', '127828218102000', 'S1', 'Medan', '2001-02-16', 'Jl. Tgk Wahab Dahlawi', 'Lhokseumawe', '2024-12-12', 'FT>1', '-0%', 'BPD', '56463453234', 'Aktif', 4, '2025-02-17', '1740968030_67c5105e81db4.jpg', '1173011602010005', '2025-03-02 19:13:33', '2025-03-02 19:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `resiko_kerja`
--

CREATE TABLE `resiko_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_resiko_kerja` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resiko_kerja`
--

INSERT INTO `resiko_kerja` (`id`, `nama_resiko_kerja`, `created_at`, `updated_at`) VALUES
(1, 'Grade I', '2025-03-03 02:11:02', '2025-03-03 02:11:02'),
(2, 'Grade II', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Grade III', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Grade VI', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DHduhssIAjIruyDk4gnWtBrMTaqshxWXf9l8i0FC', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic0Q1UFkwRE95Tmk3ekhNYldFcGNLd0pOSU91WmlzdGhIcXRzRXVEdyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1740970811);

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_emergency`
--

CREATE TABLE `tingkat_emergency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tingkat_emergency` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tingkat_emergency`
--

INSERT INTO `tingkat_emergency` (`id`, `nama_tingkat_emergency`, `created_at`, `updated_at`) VALUES
(1, 'Grade I', '2025-03-03 02:12:02', '2025-03-03 02:12:02'),
(2, 'Grade II', '2025-03-03 02:12:02', '2025-03-03 02:12:02'),
(3, 'Grade III', '2025-03-03 02:12:02', '2025-03-03 02:12:02'),
(4, 'Grade VI', '2025-03-03 02:12:02', '2025-03-03 02:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@example.com', NULL, '$2y$12$1S/E3UAOstCjzFqKKnuwmOoIY2B.TPfPyQZTDm0vNrlQWkWbCpz/G', NULL, NULL, '2025-03-02 19:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `wajib_masuk`
--

CREATE TABLE `wajib_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wajib_masuk` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wajib_masuk`
--

INSERT INTO `wajib_masuk` (`id`, `nama_wajib_masuk`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '-', 'Wajib masuk 1 bulan-hari libur', '2025-03-02 19:07:57', '2025-03-02 19:07:57'),
(2, '-1', 'Wajib masuk kosong', '2025-03-02 19:07:57', '2025-03-02 19:07:57'),
(3, '-2', 'Wajib masuk 1 bulan-4 hari', '2025-03-02 19:07:57', '2025-03-02 19:07:57'),
(4, '-3', 'Wajib masuk 1 bulan-2 hari-linas', '2025-03-02 19:07:57', '2025-03-02 19:07:57'),
(5, '-4', 'Wajib masuk 1 bulan-hari akhad', '2025-03-02 19:07:57', '2025-03-02 19:07:57'),
(6, '-5', 'Wajib mengikuti penjadwalan', '2025-03-02 19:07:57', '2025-03-02 19:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok_jabatan`
--
ALTER TABLE `kelompok_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`),
  ADD KEY `pegawai_jenjang_id_foreign` (`jenjang_id`),
  ADD KEY `pegawai_kelompok_jabatan_id_foreign` (`kelompok_jabatan_id`),
  ADD KEY `pegawai_departemen_id_foreign` (`departemen_id`),
  ADD KEY `pegawai_bagian_id_foreign` (`bagian_id`),
  ADD KEY `pegawai_resiko_kerja_id_foreign` (`resiko_kerja_id`),
  ADD KEY `pegawai_tingkat_emergency_id_foreign` (`tingkat_emergency_id`),
  ADD KEY `pegawai_wajib_masuk_id_foreign` (`wajib_masuk_id`);

--
-- Indexes for table `resiko_kerja`
--
ALTER TABLE `resiko_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tingkat_emergency`
--
ALTER TABLE `tingkat_emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wajib_masuk`
--
ALTER TABLE `wajib_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelompok_jabatan`
--
ALTER TABLE `kelompok_jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resiko_kerja`
--
ALTER TABLE `resiko_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tingkat_emergency`
--
ALTER TABLE `tingkat_emergency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wajib_masuk`
--
ALTER TABLE `wajib_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_bagian_id_foreign` FOREIGN KEY (`bagian_id`) REFERENCES `bagian` (`id`),
  ADD CONSTRAINT `pegawai_departemen_id_foreign` FOREIGN KEY (`departemen_id`) REFERENCES `departemen` (`id`),
  ADD CONSTRAINT `pegawai_jenjang_id_foreign` FOREIGN KEY (`jenjang_id`) REFERENCES `jenjang` (`id`),
  ADD CONSTRAINT `pegawai_kelompok_jabatan_id_foreign` FOREIGN KEY (`kelompok_jabatan_id`) REFERENCES `kelompok_jabatan` (`id`),
  ADD CONSTRAINT `pegawai_resiko_kerja_id_foreign` FOREIGN KEY (`resiko_kerja_id`) REFERENCES `resiko_kerja` (`id`),
  ADD CONSTRAINT `pegawai_tingkat_emergency_id_foreign` FOREIGN KEY (`tingkat_emergency_id`) REFERENCES `tingkat_emergency` (`id`),
  ADD CONSTRAINT `pegawai_wajib_masuk_id_foreign` FOREIGN KEY (`wajib_masuk_id`) REFERENCES `wajib_masuk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
