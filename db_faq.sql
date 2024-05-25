-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 10:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faq`
--

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_user`, `tanggal`, `waktu`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(19, 4, '2024-05-25', '16:28:00', 'Kenapa komputer saya tidak bisa booting?', 'Masalah booting pada komputer bisa disebabkan oleh beberapa hal, seperti kerusakan pada sistem operasi, kesalahan konfigurasi BIOS, atau bahkan kerusakan pada hardware seperti hard drive atau RAM. Anda dapat mencoba memulai dengan memeriksa koneksi hardware, memastikan BIOS terkonfigurasi dengan benar, dan memeriksa integritas sistem operasi atau melakukan pemulihan sistem.', '2024-05-25 01:28:17', '2024-05-25 01:28:17'),
(20, 4, '2024-05-25', '15:28:00', 'Mengapa komputer saya sering mengalami \"blue screen\" atau crash?', 'Blue screen atau crash pada komputer biasanya terkait dengan masalah pada sistem operasi atau hardware. Hal ini bisa disebabkan oleh driver yang rusak, overheat pada CPU atau GPU, atau bahkan kerusakan pada hardware seperti RAM yang buruk. Anda dapat mencoba memperbarui driver perangkat keras, membersihkan debu dari komponen dalam, dan melakukan pengujian hardware untuk mengidentifikasi masalah.', '2024-05-25 01:28:41', '2024-05-25 01:28:41'),
(21, 4, '2024-05-25', '15:28:00', 'Apa yang harus dilakukan jika komputer saya lambat?', 'Lambatnya komputer bisa disebabkan oleh berbagai faktor, termasuk program yang berjalan di latar belakang, kapasitas penyimpanan yang hampir penuh, atau bahkan infeksi malware. Anda dapat mencoba membersihkan sementara file, menonaktifkan program yang tidak perlu dijalankan di latar belakang, dan menjalankan pemindaian antivirus untuk mengidentifikasi dan menghapus malware.', '2024-05-25 01:28:58', '2024-05-25 01:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@admin.com', NULL, '$2y$10$Ih1uD8LKxE/ViBjiexxKG.9VNDmRXiqRIahKgqqTg65ArSxuTk0Um', NULL, '2024-05-25 01:27:08', '2024-05-25 01:27:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
