-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_fajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_asset`
--

CREATE TABLE `computer_asset` (
  `id` int(11) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `computer_type` varchar(255) NOT NULL,
  `computer_brand` varchar(255) NOT NULL,
  `computer_unit` int(11) NOT NULL,
  `computer_total` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `motherboard` varchar(255) NOT NULL,
  `memory` varchar(255) NOT NULL,
  `display_card` varchar(255) NOT NULL,
  `hard_drive` varchar(255) NOT NULL,
  `optical_drive` varchar(255) NOT NULL,
  `network_card` varchar(255) NOT NULL,
  `power_supply` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL,
  `keyboard` varchar(255) NULL,
  `mouse` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_asset`
--

INSERT INTO `computer_asset` (`id`, `computer_name`, `computer_type`, `computer_brand`, `computer_unit`,`computer_total`, `supplier`, `request_date`, `delivery_date`, `status`, `processor`, `motherboard`, `memory`, `display_card`, `hard_drive`, `optical_drive`, `network_card`, `power_supply`, `monitor`, `keyboard`, `mouse`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'testing', 'type3', 'testing1', 'unit1', 'testing3', '2022-11-26', '2022-11-27', 'status3', 'testing4', 'testing5', 'testing6', 'testing7', 'testing8', 'testing9', 'testing10', 'testing11', 'testing12', 'testing13', 'testing14', '2022-11-13 05:47:24', '2022-11-13 16:13:56', NULL),
(2, 'testing1', 'type2', 'testing2', 'unit2', 'testing3', '2022-11-13', '2022-11-16', 'status2', 'testing4', 'testing5', 'testing6', 'testing7', 'testing8', 'testing9', 'testing10', 'testing11', 'testing12', 'testing13', 'testing14', '2022-11-13 08:51:27', '2022-11-13 16:16:08', '2022-11-13 16:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_kategori`
--

CREATE TABLE `ms_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_kategori`
--

INSERT INTO `ms_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(3, 'testing27', '2022-11-08 02:51:30', '2022-11-08 02:51:30'),
(4, 'testing1234', '2022-11-08 02:51:58', '2022-11-08 02:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pegawai`
--

CREATE TABLE `ms_pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `divisi_pegawai` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_pegawai`
--

INSERT INTO `ms_pegawai` (`id`, `nama_pegawai`, `divisi_pegawai`, `created_at`, `updated_at`) VALUES
(2, 'ray123', 'pusdatin123', '2022-11-08 03:11:05', '2022-11-08 03:11:05'),
(3, 'nanda', 'psudatin', '2022-11-07 20:07:02', '2022-11-08 03:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Asset', 'admin', 'admin@admin.com', NULL, '$2y$10$cTDYenv/pTdmVLXfdwatieJgvsE..oXikC.1lic9DVKeEitFDx49m', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_asset`
--
ALTER TABLE `computer_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_kategori`
--
ALTER TABLE `ms_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_pegawai`
--
ALTER TABLE `ms_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_asset`
--
ALTER TABLE `computer_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_kategori`
--
ALTER TABLE `ms_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ms_pegawai`
--
ALTER TABLE `ms_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
