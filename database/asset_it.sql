-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 05:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_information`
--

CREATE TABLE `client_information` (
  `id` int(11) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `connection_type` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `start_using_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_information`
--

INSERT INTO `client_information` (`id`, `computer_name`, `ip_address`, `connection_type`, `room`, `employee_number`, `user_name`, `position`, `department`, `start_using_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MUI-NB-001', '192.168.1.163', 'wireless', 'C2', 'U.22.01.11.1542.E', 'RISNAWATI SIMATUPANG', 'MARKETING & COSTING STAFF', 'MARKETING & COSTING', '2022-11-01', '2022-11-14 20:08:31', '2022-11-30', NULL),
(2, 'MUI-NB-002', '192.168.1.165', 'wireless', 'C2', 'U.19.08.26.1280.E', 'RENY HARDIANTI', 'PURCHASING STAFF', 'PURCHASING & ACCOUNTING', '2022-11-01', '2022-11-16 00:14:52', '2022-11-30', NULL),
(3, 'MUI-NB-003', '192.168.1.164', 'wireless', 'C2', 'U.22.03.14.1600.C', 'NOVYANI', 'PURCHASING STAFF', 'PURCHASING & ACCOUNTING', '2022-11-01', '2022-11-16 00:16:47', '2022-11-30', NULL),
(4, 'MUI-NB-004', '192.168.1.167', 'wireless', 'C1', 'U.17.12.20.1070.C', 'ERLINDA', 'HR & GA Dept. Head', 'HR & GA', '2022-11-01', '2022-11-16 00:18:25', '2022-11-30', NULL),
(5, 'MUI-NB-005', '192.168.1.166', 'wireless', 'C1', 'U.17.11.28.1065.E', 'SITI KHOIROTURRODIYAH', 'ASSISTANT LEADER HUMAN RESOURCE', 'HR & GA', '2022-11-01', '2022-11-16 00:21:39', '2022-11-30', NULL),
(6, 'MUI-NB-006', '192.168.1.168', 'wireless', 'C1', 'U.14.10.13.0735.E', 'Darmawan Rangga Permana', 'ASSISTANT LEADER GENERAL AFFAIR', 'HR & GA', '2022-11-01', '2022-11-16 00:23:03', '2022-11-21', NULL),
(7, 'MUI-NB-007', '192.168.1.169', 'wireless', 'C1', 'U.16.10.03.0944.E', 'IKBAL AINUN NAZAR', 'WAREHOUSE FOREMAN', 'PPIC', '2022-11-01', '2022-11-16 00:25:15', '2022-11-30', NULL),
(8, 'MUI-NB-008', '192.168.1.160', 'wireless', 'C1', 'U.11.09.12.0318.E', 'DESI SECSIONAWATI', 'WAREHOUSE & INVENTORY CONTROL LEADER', 'PPIC', '2022-11-03', '2022-11-16 00:28:06', '2022-11-30', NULL),
(9, 'MUI-NB-009', '192.168.1.76', 'wireless', 'C2', '123456', 'FAJAR ARYANTO', 'TECHNICAL SUPPORT STAFF', 'INFORMATION TECHNOLOGY', '2022-10-31', '2022-11-16 00:29:42', '2022-11-30', NULL),
(10, 'MUI-NB-010', '192.168.1.170', 'wireless', 'C1', 'U.10.10.22.0302.E', 'ADEK SUHENDRI. G', 'WAREHOUSE & INVENTORY CONTROL LEADER', 'PPIC', '2022-01-01', '2022-11-16 00:31:08', '2022-11-30', NULL),
(11, 'MUI-NB-011', '192.168.1.157', 'wireless', 'C2', 'U.17.07.17.1029.E', 'ANDRIANI PURWANTI', 'PRODUCTION PLANING AND INVENTORY CONTROL STAFF', 'PPIC', '2022-11-01', '2022-11-16 00:33:54', '2022-11-30', NULL),
(12, 'MUI-NB-014', '192.168.1.153', 'wireless', 'C1', 'U.11.04.22.0313.E', 'SUTRISNO', 'AUTO LINE LEADER', 'PRODUCTION', '2022-11-01', '2022-11-16 00:38:45', '2022-11-30', NULL),
(13, 'MUI-NB-015', '192.168.1.155', 'wireless', 'C1', 'U.12.07.10.0367.E', 'SUSIYANTO', 'QUALITY ASSURANCE SUPERVISOR', 'QUALITY ASSURANCE', '2022-11-01', '2022-11-16 00:40:45', '2022-11-30', NULL),
(14, 'MUI-NB-016', '192.168.1.151', 'wireless', 'C1', 'U.05.06.22.0108.E', 'SIKADIR ZILIWU', 'PRODUCTION DEPARTMENT HEAD', 'PRODUCTION', '2022-11-01', '2022-11-16 00:42:12', '2022-11-30', NULL),
(15, 'MUI-NB-017', '192.168.1.75', 'wireless', 'C2', 'U.16.06.27.0884.E', 'FEBBY DAMAYANTI', 'TECHNICAL SUPPORT STAFF', 'INFORMATION TECHNOLOGY', '2022-01-01', '2022-11-16 00:44:27', '2022-11-30', NULL),
(16, 'MUI-NB-021', '192.168.1.149', 'wireless', 'C2', 'U.07.01.25.0029.E', 'SUPRAPTI', 'MARKETING & COSTING DEPARTMENT HEAD', 'MARKETING & COSTING', '2022-01-01', '2022-11-16 00:46:38', '2022-11-30', NULL),
(17, 'MIT-LP-001', '192.168.1.143', 'wireless', 'C2', 'U.14.03.03.0644.E', 'SEPIHATI SIHOTANG', 'MARKETING & COSTING ASST SPV', 'Marketing', '2022-11-01', '2022-11-16 00:49:10', '2022-11-21', NULL),
(18, 'MUI-NB-023', '192.168.1.150', 'wireless', 'C2', 'U.08.01.22.0248.E', 'TRI ISWATI', 'PROJECT CONTROL SUPERVISOR', 'PROJECT CONTROL', '2022-11-01', '2022-11-16 00:52:04', '2022-11-30', NULL),
(19, 'MIT-LP-002', '192.168.1.158', 'wireless', 'C2', 'U.14.11.18.0743.E', 'DELFI NOVIRA', 'DOCUMENT CONTROL CENTER STAFF', 'MS & TC', '2022-11-02', '2022-11-16 01:00:13', '2022-11-30', NULL),
(20, 'MUI-NB-025', '192.168.1.152', 'wireless', 'C2', 'U.22.07.14.1623.C', 'RIKI ARYANTO', 'PROJECT CONTROL SUPERVISOR', 'PROJECT CONTROL', '2022-11-01', '2022-11-16 01:04:50', '2022-11-30', NULL),
(21, 'MUI-NB-026', '192.168.1.147', 'wireless', 'C2', 'U.22.11.01.1644.C', 'USEP MARDIANSYAH NURUBAY', 'PROJECT CONTROL SUPERVISOR', 'PROJECT CONTROL', '2022-11-02', '2022-11-16 01:08:20', '2022-11-30', NULL),
(22, 'MUI-NB-027', '192.168.1.161', 'wireless', 'C2', 'U.20.08.11.1327.C', 'ARI SETIAWAN', 'ASST MANAGER', 'PROJECT CONTROL', '2022-11-01', '2022-11-16 01:10:06', '2022-11-30', NULL),
(23, 'MUI-NB-028', '192.168.1.137', 'wireless', 'C1', 'U.12.08.27.0398.E', 'OMO ATANG SATARI', 'QUALITY ASSURANCE LEADER', 'QUALITY ASSURANCE', '2022-11-01', '2022-11-16 01:11:58', '2022-11-30', NULL),
(24, 'MUI-NB-029', '192.168.1.154', 'wireless', 'C1', 'U.12.08.27.0404.E', 'RITA NURLIANITA', 'QUALITY ASSURANCE STAFF', 'QUALITY ASSURANCE', '2022-11-01', '2022-11-16 01:13:44', '2022-11-30', NULL),
(25, 'MUI-NB-030', '192.168.1.141', 'wireless', 'C1', 'U.22.07.1627.C', 'GHOFRAN SHOLEH', 'QC MANAGER', 'QUALITY ASSURANCE', '2022-11-01', '2022-11-16 01:17:31', '2022-11-30', NULL),
(26, 'MUI-NB-031', '192.168.1.124', 'wireless', 'C1', 'U.0.09.22.0296.E', 'MUKHTARUDIN', 'MANAGEMENT SYSTEM & TRAINING CENTER DEPARTMENT HEAD', 'MS & TC', '2022-11-01', '2022-11-16 01:22:01', '2022-11-21', NULL),
(27, 'MUI-NB-032', '192.168.1.127', 'wireless', 'C1', 'U.04.11.27.0099.E', 'SUPRIYANTI', 'PRODUCTION PLANNING INVENTORY CONTROL DEPARTMENT HEAD', 'PPIC', '2022-11-01', '2022-11-16 01:24:25', '2022-11-30', NULL),
(28, 'MUI-NB-033', '192.168.1.135', 'wireless', 'C1', 'U.11.11.28.0325.E', 'Wahyu Hidayat', 'ENGINEERING DEPARTMENT HEAD', 'Engineering', '2022-11-01', '2022-11-16 01:26:55', '2022-11-21', NULL),
(29, 'MUI-NB-034', '192.168.1.126', 'wireless', 'C1', 'U.17.04.28.1008.C', 'Eko Rusdianto', 'IMPROVEMENT DEPARTEMENT', 'DEPT HEAD IMPROVMENT', '2022-11-01', '2022-11-16 01:28:46', '2022-11-21', NULL),
(30, 'hp', '192.168.1.131', 'type1', 'room1', '123456', 'Wahyu Hidayat', 'FREE', 'Engineering', '2022-11-02', '2022-11-16 01:30:37', '2022-11-17', '2022-11-17'),
(31, 'MUI-NB-036', '-', 'wireless', 'C2', '123456', 'Kiyoshi Oku', 'All Dept.', 'All Dept.', '2022-11-02', '2022-11-16 01:33:15', '2022-11-21', NULL),
(32, 'MUI-NB-037', '192.168.1.145', 'wireless', 'C2', 'U.02.10.21.0016.E', 'Dewi Rosalina', 'LEADER', 'Production', '2022-11-01', '2022-11-16 01:35:59', '2022-11-21', NULL),
(33, 'MUI-NB-038', '192.168.1.121', 'wireless', 'C2', 'U.17.10.12.1058.E', 'Andi Baso Andriant Tadda', 'PRODUCTION PLANING AND INVENTORY CONTROL STAFF', 'PPIC', '2022-11-01', '2022-11-16 01:37:56', '2022-11-21', NULL),
(34, 'MUI-NB-041', '192.168.1.36', 'cable', 'C1', '123456', 'Inspection', 'Operator', 'Production', '2022-11-01', '2022-11-16 01:39:38', '2022-11-21', NULL),
(35, 'MUI-NB-042', '192.168.1.144', 'cable', 'C1', 'U.12.07.10.0349.E', 'Anton', 'ELECTRICAL OPERATOR', 'Maintenance', '2022-11-01', '2022-11-16 01:43:25', '2022-11-21', NULL),
(36, 'MUI-NB-043', '192.168.1.32', 'wireless', 'C1', '123456', 'Incoming', 'Deliverry', 'Deliverry', '2022-11-01', '2022-11-16 01:45:17', '2022-11-21', NULL),
(37, 'PC Delivery', '192.168.1.31', 'wireless', 'C1', 'U.15.09.09.0823.E', 'TEGUH KARYA', 'DELIVERY STAFF', 'PPIC', '2022-11-01', '2022-11-16 01:46:50', '2022-11-21', NULL),
(38, 'PC Toyoriko', '192.168.1.33', 'cable', 'C1', '123456', 'QC MUI', 'QA', 'QA', '2022-11-04', '2022-11-16 01:48:00', '2022-11-21', NULL),
(39, 'PC WHGBU', '192.168.1.135', 'cable', 'C1', '123456', 'Admin Non Plating', '-', '-', '2022-11-03', '2022-11-16 01:48:40', '2022-11-21', NULL),
(40, 'hp', '192.168.1.165', 'Cable', 'C1', '123456', 'kantin C2', 'PPIC', 'a2', '2022-11-30', '2022-11-16 18:39:46', '2022-11-17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `computer_asset`
--

CREATE TABLE `computer_asset` (
  `id` int(11) NOT NULL,
  `id_num` varchar(255) NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `computer_type` varchar(255) NOT NULL,
  `computer_brand` varchar(255) NOT NULL,
  `computer_unit` varchar(255) NOT NULL,
  `computer_total` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `motherboard` varchar(255) DEFAULT NULL,
  `memory` varchar(255) NOT NULL,
  `display_card` varchar(255) DEFAULT NULL,
  `hard_drive` varchar(255) NOT NULL,
  `optical_drive` varchar(255) DEFAULT NULL,
  `network_card` varchar(255) DEFAULT NULL,
  `power_supply` varchar(255) DEFAULT NULL,
  `monitor` varchar(255) DEFAULT NULL,
  `keyboard` varchar(255) DEFAULT NULL,
  `mouse` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_asset`
--

INSERT INTO `computer_asset` (`id`, `id_num`, `computer_name`, `computer_type`, `computer_brand`, `computer_unit`, `computer_total`, `supplier`, `request_date`, `delivery_date`, `status`, `processor`, `motherboard`, `memory`, `display_card`, `hard_drive`, `optical_drive`, `network_card`, `power_supply`, `monitor`, `keyboard`, `mouse`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '001', 'MUI-PC-003', 'Notebook', 'Hp', 'Unit', 10, 'Pt.Computer', '2022-11-27', '2022-12-08', 'Normal', 'intel i7', NULL, '8', NULL, 'SSD', NULL, NULL, NULL, NULL, NULL, 'Logitech', '2022-12-07 21:06:47', '2022-12-09 10:36:36', NULL),
(8, '004', 'MUI-PC-004', 'Notebook', 'Hp', 'Unit', 5, 'Mall kcp', '2022-12-30', '2022-12-13', 'Normal', 'intel i5', NULL, '4', NULL, 'SSD', NULL, NULL, NULL, NULL, NULL, 'Hp', '2022-12-09 01:13:29', '2022-12-09 10:37:32', NULL);

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
-- Table structure for table `peripheral_asset`
--

CREATE TABLE `peripheral_asset` (
  `id` int(11) NOT NULL,
  `id_num` varchar(255) DEFAULT NULL,
  `peripheral_name` varchar(255) NOT NULL,
  `peripheral_type` varchar(255) DEFAULT NULL,
  `peripheral_brand` varchar(255) DEFAULT NULL,
  `peripheral_spesification` varchar(255) DEFAULT NULL,
  `peripheral_unit` varchar(255) DEFAULT NULL,
  `peripheral_total` int(11) NOT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peripheral_asset`
--

INSERT INTO `peripheral_asset` (`id`, `id_num`, `peripheral_name`, `peripheral_type`, `peripheral_brand`, `peripheral_spesification`, `peripheral_unit`, `peripheral_total`, `supplier`, `request_date`, `delivery_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, NULL, 'Boor', 'Other', NULL, NULL, 'Unit', 1, 'Pt.Computer', NULL, NULL, 'Normal', '2022-12-21 20:49:31', '2023-02-21 03:49:31', NULL),
(6, NULL, 'Kabel Eterna', 'Other', NULL, NULL, 'Roll', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 20:50:45', '2022-12-22 03:50:45', NULL),
(7, NULL, 'DVD-R', 'Multimedia', NULL, NULL, 'Unit', 41, NULL, NULL, NULL, 'Normal', '2022-12-21 20:51:36', '2022-12-22 03:51:36', NULL),
(8, NULL, 'Mouse Wirelles', 'Input Device', NULL, NULL, 'Unit', 2, NULL, NULL, NULL, 'Normal', '2022-12-21 20:53:57', '2022-12-22 03:53:57', NULL),
(9, NULL, 'Power Supplay', 'Power Supply', NULL, NULL, 'Unit', 4, NULL, NULL, NULL, 'Normal', '2022-12-21 20:54:36', '2022-12-22 03:54:36', NULL),
(10, NULL, 'Keyboard USB', 'Input Device', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 20:55:07', '2022-12-22 03:55:07', NULL),
(11, NULL, 'Tp-link Router Wireless', 'Networking', NULL, NULL, 'Unit', 2, NULL, NULL, NULL, 'Normal', '2022-12-21 20:55:53', '2022-12-22 03:55:53', NULL),
(12, NULL, 'Wifi Display Receiver', 'Networking', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 20:56:47', '2022-12-22 03:56:47', NULL),
(13, NULL, 'USB to adapter', 'Other', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 20:58:18', '2022-12-22 03:58:18', NULL),
(14, NULL, 'Kabel USB', 'Other', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 20:58:47', '2022-12-22 03:58:47', NULL),
(15, NULL, 'HUB Port USB', 'Other', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:00:14', '2022-12-22 04:00:14', NULL),
(16, NULL, 'USB Extender', 'Other', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:00:54', '2022-12-22 04:00:54', NULL),
(17, NULL, 'D-Link 8 Port', 'Networking', NULL, NULL, 'Unit', 2, NULL, NULL, NULL, 'Normal', '2022-12-21 21:01:35', '2022-12-22 04:01:35', NULL),
(19, NULL, 'Web Cam', 'Input Device', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:03:53', '2022-12-22 04:03:53', NULL),
(20, NULL, 'Digital Multimeter', 'Multimedia', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:04:37', '2022-12-22 04:04:37', NULL),
(21, NULL, 'Tinta Epson T664 Kuning', 'Printing', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:05:40', '2022-12-22 04:05:40', NULL),
(22, NULL, 'Tinta Epson T664 Merah', 'Printing', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:06:03', '2022-12-22 04:06:03', NULL),
(23, NULL, 'Terminal 6 lubang', 'Networking', NULL, NULL, 'Unit', 5, NULL, NULL, NULL, 'Normal', '2022-12-21 21:07:02', '2022-12-22 04:07:02', NULL),
(24, NULL, 'Terminal 3 lubang', 'Networking', NULL, NULL, 'Unit', 3, NULL, NULL, NULL, 'Normal', '2022-12-21 21:07:28', '2022-12-22 04:07:28', NULL),
(25, NULL, 'Terminal 4 lubang', 'Networking', NULL, NULL, 'Unit', 2, NULL, NULL, NULL, 'Normal', '2022-12-21 21:13:26', '2022-12-22 04:13:26', NULL),
(26, NULL, 'Kepala Terminal 3 port', 'Networking', NULL, NULL, 'Unit', 4, NULL, NULL, NULL, 'Normal', '2022-12-21 21:17:40', '2022-12-22 04:17:40', NULL),
(27, NULL, 'Kepala Terminal', 'Networking', NULL, NULL, 'Unit', 10, NULL, NULL, NULL, 'Normal', '2022-12-21 21:18:06', '2022-12-22 04:18:06', NULL),
(28, NULL, 'Mainboard', 'Motherboard', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:18:52', '2022-12-22 04:18:52', NULL),
(29, NULL, 'Krisbow', 'Other', NULL, NULL, 'Box', 2, NULL, NULL, NULL, 'Normal', '2022-12-21 21:19:54', '2022-12-22 04:19:54', NULL),
(30, NULL, 'Kertas Namas', 'Other', NULL, NULL, 'Pack', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:20:24', '2022-12-22 04:20:24', NULL),
(31, NULL, 'Laminating', 'Other', NULL, NULL, 'Unit', 100, NULL, NULL, NULL, 'Normal', '2022-12-21 21:20:45', '2022-12-22 04:20:45', NULL),
(32, NULL, 'TP-link 24 port', 'Networking', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:21:18', '2022-12-22 04:21:18', NULL),
(33, NULL, 'Kabel duck', 'Networking', NULL, NULL, 'Roll', 3, NULL, NULL, NULL, 'Normal', '2022-12-21 21:22:20', '2022-12-22 04:27:04', NULL),
(34, NULL, 'Adaptor', 'Networking', NULL, NULL, 'Unit', 7, NULL, NULL, NULL, 'Normal', '2022-12-21 21:28:42', '2022-12-22 04:28:42', NULL),
(35, NULL, 'kabel sata', 'Networking', NULL, NULL, 'Unit', 10, NULL, NULL, NULL, 'Normal', '2022-12-21 21:29:06', '2022-12-22 04:29:06', NULL),
(36, NULL, 'kabel printer', 'Printing', NULL, NULL, 'Pcs', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:29:33', '2022-12-22 04:29:33', NULL),
(37, NULL, 'kabel vga', 'Other', NULL, NULL, 'Unit', 1, NULL, NULL, NULL, 'Normal', '2022-12-21 21:30:05', '2022-12-22 04:30:05', NULL),
(38, NULL, 'Kabel LAN', NULL, NULL, NULL, 'Unit', 7, NULL, NULL, NULL, 'Normal', '2022-12-21 21:30:27', '2022-12-22 04:30:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `software_asset`
--

CREATE TABLE `software_asset` (
  `id` int(11) NOT NULL,
  `id_num` varchar(255) NOT NULL,
  `software_name` varchar(255) NOT NULL,
  `software_type` varchar(255) NOT NULL,
  `software_brand` varchar(255) NOT NULL,
  `software_unit` varchar(255) NOT NULL,
  `software_total` int(11) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_asset`
--

INSERT INTO `software_asset` (`id`, `id_num`, `software_name`, `software_type`, `software_brand`, `software_unit`, `software_total`, `serial_number`, `supplier`, `request_date`, `delivery_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '001', 'MUI-PC-001', 'Office', 'Asus', 'Pcs', 5, '34534', 'Pt. Gumilar', '2022-11-02', '2022-11-08', 'Normal', '2022-11-15 19:19:26', '2022-12-09 10:40:17', NULL),
(5, '002', 'MUI-PC-007', 'Programming Language', 'Java Development Kit', 'Unit', 5, '01921', 'Pt.Computer', '2022-11-27', '2022-12-08', 'Normal', '2022-12-08 00:05:17', '2022-12-09 10:39:33', NULL);

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
(1, 'Admin Asset', 'admin', 'admin@admin.com', NULL, '$2y$10$cTDYenv/pTdmVLXfdwatieJgvsE..oXikC.1lic9DVKeEitFDx49m', NULL, NULL, NULL),
(2, 'Admin IT', 'user_it', 'User@IT.com', NULL, '$2y$10$cTDYenv/pTdmVLXfdwatieJgvsE..oXikC.1lic9DVKeEitFDx49m', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_information`
--
ALTER TABLE `client_information`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `peripheral_asset`
--
ALTER TABLE `peripheral_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_asset`
--
ALTER TABLE `software_asset`
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
-- AUTO_INCREMENT for table `client_information`
--
ALTER TABLE `client_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `computer_asset`
--
ALTER TABLE `computer_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `peripheral_asset`
--
ALTER TABLE `peripheral_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `software_asset`
--
ALTER TABLE `software_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
