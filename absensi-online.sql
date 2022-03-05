-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 09:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `berkas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `pegawai_id`, `lokasi`, `keterangan`, `latitude`, `longitude`, `waktu`, `status`, `berkas`, `catatan`) VALUES
(119, 67, '1', '0', -0.4949565, 117.1559576, '2022-02-14 23:08:05', '1', NULL, ''),
(120, 5, '1', '0', -0.4952595, 117.1559205, '2022-02-15 03:00:26', '1', NULL, ''),
(121, 5, '1', NULL, -0.5000326, 117.1397366, '2022-02-15 04:55:06', '2', NULL, ''),
(122, 15, '1', '0', -0.4951814, 117.1555608, '2022-02-15 07:00:18', '1', NULL, ''),
(123, 14, '1', '0', -0.4955675, 117.1554344, '2022-02-15 07:02:41', '1', NULL, ''),
(124, 35, '1', '0', -0.494861, 117.1556978, '2022-02-15 07:03:25', '1', NULL, ''),
(125, 34, '1', '0', -0.49542008365624, 117.15575226649, '2022-02-15 07:07:12', '1', NULL, ''),
(126, 22, '1', 'Cuti', NULL, NULL, '2022-02-15 07:14:08', '1', NULL, ''),
(127, 63, '1', 'Tidak Ada', -0.4952382, 117.1559457, '2022-02-15 07:15:57', '1', NULL, ''),
(128, 59, '1', 'Tidak Ada', -0.4952382, 117.1559457, '2022-02-15 07:16:24', '1', NULL, ''),
(129, 25, '1', '0', -0.4948584, 117.1556972, '2022-02-15 07:16:52', '1', NULL, ''),
(130, 63, '1', NULL, -0.4952382, 117.1559457, '2022-02-15 07:17:15', '2', NULL, ''),
(131, 46, '1', '0', -0.4952601, 117.1556406, '2022-02-15 07:39:38', '1', NULL, ''),
(132, 42, '1', '0', -0.4954267, 117.1555333, '2022-02-15 07:47:06', '1', NULL, ''),
(133, 43, '1', '0', -0.4954158, 117.1554652, '2022-02-15 07:49:53', '1', NULL, ''),
(134, 13, '1', '0', -0.4948647, 117.1556833, '2022-02-15 08:01:07', '1', NULL, ''),
(135, 13, '1', NULL, -0.4948647, 117.1556833, '2022-02-15 08:01:15', '2', NULL, ''),
(136, 43, '1', NULL, -0.495412, 117.1554611, '2022-02-15 08:01:28', '2', NULL, ''),
(137, 53, '1', '0', -0.4948647, 117.1556833, '2022-02-15 08:01:30', '1', NULL, ''),
(138, 53, '1', NULL, -0.4948647, 117.1556833, '2022-02-15 08:01:35', '2', NULL, ''),
(139, 67, '1', NULL, -0.4952255, 117.1556873, '2022-02-15 08:42:31', '2', NULL, ''),
(140, 14, '1', NULL, -0.4743256, 117.1336176, '2022-02-15 08:52:28', '2', NULL, ''),
(141, 59, '1', NULL, -0.5010569, 117.0726441, '2022-02-15 09:18:18', '2', NULL, ''),
(142, 34, '1', NULL, -0.48988474152033, 117.14109747356, '2022-02-15 10:15:21', '2', NULL, ''),
(144, 11, '1', 'Dinas Luar', NULL, NULL, '2022-02-15 11:01:00', '1', NULL, ''),
(145, 68, '1', 'Dinas luar', NULL, NULL, '2022-02-15 11:01:08', '2', NULL, ''),
(146, 11, '1', NULL, NULL, NULL, '2022-02-15 11:01:28', '2', NULL, ''),
(147, 61, '1', 'Dinas Luar', -1.5995270551043, 116.186015657, '2022-02-15 11:02:24', '1', NULL, ''),
(148, 61, '1', 'Dinas Luar', -1.6003598622977, 116.18380516824, '2022-02-15 11:02:47', '2', NULL, ''),
(149, 40, '1', 'Dinas Luar', -1.6005521, 116.1779461, '2022-02-15 11:03:37', '1', NULL, ''),
(150, 40, '1', 'Dinas luar', -1.6045969, 116.1671021, '2022-02-15 11:06:11', '2', NULL, ''),
(151, 41, '1', 'Dinas Luar', -1.8219884, 116.0843977, '2022-02-15 12:06:19', '1', NULL, ''),
(152, 41, '1', 'Dinas Luar', -1.8220238, 116.0844195, '2022-02-15 12:07:17', '2', NULL, ''),
(153, 67, '1', '0', -0.4957449, 117.1554592, '2022-02-15 22:46:41', '1', NULL, ''),
(154, 38, '1', 'Diklat', -0.4599826, 117.1115977, '2022-02-15 23:00:55', '1', NULL, ''),
(155, 43, '1', '0', -0.4952803, 117.1556657, '2022-02-15 23:20:53', '1', NULL, ''),
(156, 53, '1', '0', -0.4952102, 117.1559947, '2022-02-15 23:38:05', '1', NULL, ''),
(157, 63, '1', 'null', -0.4952737, 117.1559166, '2022-02-15 23:38:08', '1', NULL, ''),
(158, 41, '1', 'Dinas Luar', -1.904129, 116.1887975, '2022-02-15 23:47:16', '1', NULL, ''),
(159, 8, '1', '0', -0.4952626, 117.1559306, '2022-02-15 23:49:08', '1', NULL, ''),
(160, 51, '1', '0', -0.4952297, 117.1559504, '2022-02-15 23:51:43', '1', NULL, ''),
(161, 73, '1', '0', -0.4957725, 117.15528, '2022-02-16 00:59:01', '1', NULL, ''),
(162, 73, '1', NULL, -0.4948068, 117.1562019, '2022-02-16 05:11:54', '2', NULL, ''),
(163, 43, '1', 'WFH', -0.4743613, 117.1272896, '2022-02-16 08:07:01', '2', NULL, ''),
(164, 38, '1', NULL, -0.4906351, 117.1460205, '2022-02-16 08:20:05', '2', NULL, ''),
(165, 67, '1', NULL, -0.481763, 117.1177793, '2022-02-16 15:08:00', '2', NULL, ''),
(166, 43, '1', '0', -0.495263, 117.1557184, '2022-02-16 23:15:53', '1', NULL, ''),
(167, 67, '1', '0', -0.4952705, 117.1559141, '2022-02-16 23:17:09', '1', NULL, ''),
(340, 2, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-22 07:52:00', '1', NULL, 'k'),
(341, 2, '1', 'Menghadiri Rapat', -1.2379274, 116.8528526, '2022-02-22 07:54:32', '2', 'public/files/t1iGqRuHvnXP2RAID6n2INAgzmUlNrx8gIVy4IUT.png', NULL),
(355, 2, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-22 21:55:27', '1', NULL, NULL),
(356, 2, '1', 'Menghadiri Rapat', -1.2488589, 116.8733656, '2022-02-22 21:56:29', '2', 'public/files/hAxMFmb93STW49cvZkS80lRTersHDFePmiEgKbkL.jpg', NULL),
(357, 2, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-22 22:45:49', '1', NULL, NULL),
(368, 5, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-23 01:57:10', '1', '/absensi/lampiran/sxF8m3OAN1t6xcohv2OfeqkKVM4X3ysx8l3mFJ8Z.pdf', NULL),
(369, 5, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-23 02:26:24', '2', '/absensi/lampiran/cI5gnGibhh6lIWfJKEgOP5DQPAl7yCygwYazQb9H.pdf', NULL),
(370, 5, '1', 'Menghadiri Rapat', -0.49518502004232, 117.15572739337, '2022-02-23 02:33:57', '2', '/absensi/lampiran/2022-02-23PGRmDQAgjit2LkpApqL9agupG6EkCeQDaUlOrXw2.jpg', NULL),
(423, 2, '1', 'Dinas Luar', -0.49518502004232, 117.15572739337, '2022-02-28 00:00:00', '1', '/absensi/lampiran/2022-02-28re5EQ7YazCX5BgfEGc3UJJWn53pOyUPFsuQ6pafs.pdf', NULL),
(424, 2, '1', 'Dinas Luar', -0.49518502004232, 117.15572739337, '2022-02-28 00:00:00', '2', '/absensi/lampiran/2022-02-28re5EQ7YazCX5BgfEGc3UJJWn53pOyUPFsuQ6pafs.pdf', NULL),
(425, 2, '1', 'Dinas Luar', -0.49518502004232, 117.15572739337, '2022-03-02 00:00:00', '1', '/absensi/lampiran/2022-02-28re5EQ7YazCX5BgfEGc3UJJWn53pOyUPFsuQ6pafs.pdf', NULL),
(426, 2, '1', 'Dinas Luar', -0.49518502004232, 117.15572739337, '2022-03-02 00:00:00', '2', '/absensi/lampiran/2022-02-28y6R7LZ5nvkuk2PgUN6IdPT5QtbI4KNHlVQXGX2dd.png', NULL),
(431, 2, '2', 'Diklat/Bimtek', -0.49518502004232, 117.15572739337, '2022-03-06 00:00:00', '1', '/absensi/lampiran/2022-03-06cy3myupRFmhVM047WA0F03f7Y9m0krCgbrpqcR7J.pdf', NULL),
(432, 2, '2', 'Diklat/Bimtek', -0.49518502004232, 117.15572739337, '2022-03-06 00:00:00', '2', '/absensi/lampiran/2022-03-06cy3myupRFmhVM047WA0F03f7Y9m0krCgbrpqcR7J.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_status`
--

CREATE TABLE `absensi_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `urutan` int(4) NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_status`
--

INSERT INTO `absensi_status` (`id`, `pegawai_id`, `status`, `urutan`, `tanggal`) VALUES
(1, 2, '2', 1, '2022-03-06 00:00:00'),
(2, 3, '0', 2, NULL),
(3, 4, '0', 9, NULL),
(4, 5, '0', 29, NULL),
(5, 6, '0', 30, NULL),
(7, 7, '0', 1, NULL),
(8, 8, '0', 2, NULL),
(9, 9, '0', 3, NULL),
(10, 10, '0', 4, NULL),
(11, 11, '0', 5, NULL),
(12, 12, '0', 6, NULL),
(13, 13, '0', 7, NULL),
(14, 14, '0', 8, NULL),
(15, 15, '0', 10, NULL),
(16, 16, '0', 11, NULL),
(17, 17, '0', 12, NULL),
(18, 18, '0', 13, NULL),
(19, 19, '0', 14, NULL),
(20, 20, '0', 15, NULL),
(21, 21, '0', 16, NULL),
(22, 22, '0', 17, NULL),
(23, 23, '0', 18, NULL),
(24, 24, '0', 19, NULL),
(25, 25, '0', 20, NULL),
(26, 26, '0', 31, NULL),
(27, 27, '0', 35, NULL),
(28, 28, '0', 36, NULL),
(29, 29, '0', 37, NULL),
(30, 30, '0', 39, NULL),
(31, 31, '0', 44, NULL),
(32, 32, '0', 42, NULL),
(33, 33, '0', 43, NULL),
(34, 34, '0', 45, NULL),
(35, 35, '0', 25, NULL),
(36, 36, '0', 34, NULL),
(37, 37, '0', 43, NULL),
(38, 38, '0', 24, NULL),
(39, 39, '0', 22, NULL),
(40, 40, '0', 28, NULL),
(41, 41, '0', 27, NULL),
(42, 42, '0', 26, NULL),
(43, 43, '0', 32, NULL),
(44, 44, '0', 21, NULL),
(45, 45, '0', 23, NULL),
(46, 46, '0', 33, NULL),
(47, 47, '0', 38, NULL),
(48, 48, '0', 40, NULL),
(49, 49, '0', 3, NULL),
(50, 50, '0', 4, NULL),
(51, 51, '0', 5, NULL),
(52, 52, '0', 6, NULL),
(53, 53, '0', 7, NULL),
(54, 54, '0', 8, NULL),
(55, 55, '0', 9, NULL),
(56, 56, '0', 10, NULL),
(57, 57, '0', 11, NULL),
(58, 58, '0', 12, NULL),
(59, 59, '0', 13, NULL),
(60, 60, '0', 14, NULL),
(61, 61, '0', 15, NULL),
(62, 62, '0', 16, NULL),
(63, 63, '0', 17, NULL),
(64, 64, '0', 18, NULL),
(65, 65, '0', 19, NULL),
(66, 66, '0', 20, NULL),
(67, 67, '0', 21, NULL),
(68, 68, '0', 22, NULL),
(69, 69, '0', 23, NULL),
(70, 70, '0', 24, NULL),
(71, 71, '0', 25, NULL),
(72, 72, '0', 26, NULL),
(73, 73, '0', 27, NULL),
(74, 74, '0', 28, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bidangs`
--

CREATE TABLE `bidangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidangs`
--

INSERT INTO `bidangs` (`id`, `kode`, `nama`) VALUES
(1, 'KD', 'KEPALA DINAS'),
(2, 'SEKRE', 'SEKRETARIAT'),
(3, 'FASYAMINDUK', 'FASILITASI PELAYANAN ADMINISTRASI KEPENDUDUKAN'),
(4, 'PPPA', 'PERLINDUNGAN PEREMPUAN DAN ANAK'),
(5, 'SIGA', 'SISTEM DATA GENDER DAN ANAK'),
(6, 'KG', 'KESETARAAN GENDER'),
(7, 'DALDUK & KB', 'PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA'),
(8, 'UPTD PPA', 'UNIT PELAKSANA TEKNIS DAERAH DINAS PERLINDUNGAN PEREMPUAN DAN ANAK');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `golongans`
--

CREATE TABLE `golongans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pangkat` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioritas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `pangkat`, `golongan`, `ruang`, `prioritas`) VALUES
(1, 'Juru Muda', 'I', 'a', 17),
(2, 'Juru Muda Tingkat I', 'I', 'b', 16),
(3, 'Juru', 'I', 'c', 15),
(4, 'Juru Tingkat I', 'I', 'd', 14),
(5, 'Pengatur Muda', 'II', 'a', 13),
(6, 'Pengatur Muda Tingkat I', 'II', 'b', 12),
(7, 'Pengatur', 'II', 'c', 11),
(8, 'Pengatur Tingkat I', 'II', 'd', 10),
(9, 'Penata Muda', 'III', 'a', 9),
(10, 'Penata Muda Tingkat I', 'III', 'b', 8),
(11, 'Penata', 'III', 'c', 7),
(12, 'Penata Tingkat I', 'III', 'd', 6),
(13, 'Pembina', 'IV', 'a', 5),
(14, 'Pembina Tingkat I', 'IV', 'b', 4),
(15, 'Pembina Utama Muda', 'IV', 'c', 3),
(16, 'Pembina Utama Madya', 'IV', 'd', 2),
(17, 'Pembina Utama', 'IV', 'e', 1);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_30_134153_create_bidangs_table', 1),
(6, '2022_01_30_134605_create_sub_bidangs_table', 1),
(7, '2022_01_30_134634_create_pegawais_table', 1),
(8, '2022_01_30_134728_create_absensis_table', 1),
(9, '2022_01_31_054816_create_golongans_table', 1),
(10, '2022_01_31_054817_create_golongans_table', 2),
(11, '2022_02_02_192225_create_absensi_status_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gelar_depan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_bidang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_depan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_absensi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tmt_golongan` date DEFAULT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_pensiun` date DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `gelar_depan`, `bidang_id`, `sub_bidang_id`, `nama_depan`, `nama_belakang`, `gelar_belakang`, `pns`, `nip`, `no_absensi`, `golongan_id`, `tmt_golongan`, `jabatan`, `tgl_lahir`, `tgl_pensiun`, `no_hp`, `photo`) VALUES
(2, 'Hj.', 1, NULL, 'NORYANI', 'SORAYALITA', 'S.E., M.M.', '1', '196512151986012002', '110061', 14, '2013-04-01', 'KEPALA DKP3A', '1965-12-15', '2026-01-01', '08125861746', '/pegawai/foto/196512151986012002.png'),
(3, 'Hj.', 2, NULL, 'EKA', 'WAHYUNI', 'S.Sos., M.M.', '1', '196602041986092001', '30070', 14, '2013-10-01', 'SEKRETARIS', '1966-02-04', '2024-03-01', '0811555354', '/pegawai/foto/196602041986092001.png'),
(4, NULL, 2, 3, 'MASTURIAH', NULL, 'S.E., M.Si.', '1', '196403281990032006', '210010029', 13, '2018-04-01', 'KASUBBAG KEUANGAN', '1964-03-28', '2022-04-01', '081952875918', '/pegawai/foto/196403281990032006.png'),
(5, NULL, 2, 1, 'AKHMAD', 'MARZUKI', 'S.P.', '1', '197906222009011002', '330004010', 12, '2021-10-01', 'KASUBBAG UMUM', '1979-06-22', '2037-07-01', '081346655511', '/pegawai/foto/197906222009011002.png'),
(6, NULL, 2, 2, 'RUDIANSYAH', NULL, 'S.E', '1', '197203262008121001', '401054', 11, '2019-04-01', 'KASUB BAGIAN PERENCANAAN PROGRAM', '1972-03-26', '2030-04-01', '081354004700', '/pegawai/foto/197203262008121001.png'),
(7, NULL, 2, 2, 'EDY', 'SYAFRANI', 'S.Kom', '0', NULL, '220035', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/edy_syafrani.png'),
(8, NULL, 2, 1, 'FAULIN', 'WARDANI', 'S.P', '0', NULL, '220047', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/faulin_wardani.png'),
(9, 'Dr. Pd.', 5, NULL, 'IWAN', 'HERIAWAN', 'S.H., M.Si', '1', '196402271986011001', '660021', 14, '2018-10-01', 'KABID SISTEM DATA GENDER DAN ANAK', '1964-02-27', '2022-03-01', '081347564006', '/pegawai/foto/196402271986011001.png'),
(10, NULL, 4, NULL, 'JUNAINAH', NULL, 'S.E., M.Si.', '1', '197303211998032006', '150034', 14, '2020-04-01', 'KABID PERLINDUNGAN PEREMPUAN DAN ANAK', '1973-03-21', '2031-04-01', '08125849589', '/pegawai/foto/197303211998032006.png'),
(11, 'Dra.', 6, NULL, 'DWI', 'HARTINI', 'M.Pd.', '1', '196509271993032005', '220009', 14, '2020-10-01', 'KABID KESETARAAN GENDER', '1965-09-27', '2023-10-01', '081254245631', '/pegawai/foto/196509271993032005.png'),
(12, NULL, 5, NULL, 'ERNAWATI', NULL, 'S.Sos., M.Si.', '1', '196505051989112001', '240020006', 13, '2015-04-01', 'KASI DATA DAN INFORMASI GENDER', '1965-05-05', '2023-06-01', '082320614304', '/pegawai/foto/196505051989112001.png'),
(13, NULL, 8, NULL, 'KHOLID', 'BUDHAERI', 'S.H., M.Si.', '1', '197205302000031003', '260028', 11, '2016-04-01', 'KEPALA UPTD PERLINDUNGAN PEREMPUAN DAN ANAK', '1972-05-30', '2030-06-01', '081351963019', '/pegawai/foto/197205302000031003.png'),
(14, NULL, 7, NULL, 'SYAHRUL', 'UMAR', 'S.E., M.Si', '1', '196912032000121005', '220020', 13, '2017-04-01', 'KABID PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', '1969-12-03', '2028-01-01', '085751919483', '/pegawai/foto/196912032000121005.png'),
(15, NULL, 3, NULL, 'SULEKAN', NULL, 'S.Sos., M.Si.', '1', '197507071998031003', '210010001', 13, '2018-10-01', 'KABID FASILITASI PELAYANAN ADMINISTRASI KEPENDUDUKAN', '1975-07-07', '2033-08-01', '081347398569', '/pegawai/foto/197507071998031003.png'),
(16, NULL, 7, NULL, 'HAMSIAH', NULL, 'S.Sos., M.Si.', '1', '196609171988102002', '210010030', 13, '2018-10-01', 'KASI KUALITAS KELUARGA', '1966-09-17', '2024-10-01', '081254329777', '/pegawai/foto/196609171988102002.png'),
(17, NULL, 7, NULL, 'HELDAWATI', NULL, 'S.Sos.,M.Si', '1', '197105292002122004', '220031', 13, '2019-04-01', 'KASI KELUARGA BERENCANA', '1971-05-29', '2029-06-01', '082149054359', '/pegawai/foto/197105292002122004.png'),
(18, 'Drg.', 4, NULL, 'NOVA', 'PARANOAN', 'M.Kes', '1', '198002162006042010', '660031', 13, '2019-04-01', 'KASI TUMBUH KEMBANG ANAK', '1980-02-16', '2038-03-01', '081350662746', '/pegawai/foto/198002162006042010.png'),
(19, 'Hj.', NULL, NULL, 'BARKIES', NULL, 'S.E.', '1', '196611201988022001', '220074', 13, NULL, 'PELAKSANA / STAFF', '2021-03-08', '2079-04-01', NULL, '/pegawai/foto/196611201988022001.png'),
(20, NULL, 3, NULL, 'BUDIANSYAH', NULL, 'S.Sos., M.Si.', '1', '197703031998031008', '210010010', 13, '2020-04-01', 'KASI MONITORING, EVALUASI DAN DOKUMENTASI', '1977-03-03', '2035-04-01', '081347931615', '/pegawai/foto/197703031998031008.png'),
(21, NULL, 8, NULL, 'MIRZA', 'ALFIAN', 'S.K.M., M.Kes.', '1', '197204211998031008', '320125', 13, '2021-04-01', 'KEPALA SEKSI TINDAK LANJUT UPTD PPA', '1972-04-21', '2030-05-01', '081347306726', '/pegawai/foto/197204211998031008.png'),
(22, NULL, 6, NULL, 'ANNA', 'SUSILAWATY', 'S.E.', '1', '197210011998032010', '110053', 12, '2008-10-01', 'KASI KESETARAAN GENDER BIDANG POLITIK DAN HUKUM', '1972-10-01', '2030-11-01', '08125112001', '/pegawai/foto/197210011998032010.png'),
(23, NULL, 5, NULL, 'SYAHRIDAH', NULL, 'S.H.', '1', '196705151989022003', '220015', 12, '2011-04-01', 'KASI DATA DAN INFORMASI ANAK', '1967-05-15', '2025-06-01', '085246739329', '/pegawai/foto/196705151989022003.png'),
(24, 'Dra.', 3, NULL, 'RUSNA', 'PAPUTUNGAN', NULL, '1', '196705091989092002', '260003', 12, '2011-04-01', 'KASI BINA APARATUR PENCATATAN SIPIL', '1967-05-09', '2025-06-01', '081291081967', '/pegawai/foto/196705091989092002.png'),
(25, NULL, 8, 5, 'RITA', 'ASFIANIE', 'S.E.', '1', '197005091990032006', '220005', 12, '2012-04-01', 'KASUBBAG TATA USAHA UPTD PPA', '1970-05-09', '2028-06-01', '081253674606', '/pegawai/foto/197005091990032006.png'),
(26, NULL, 2, 3, 'MEUTHIA', 'SRI AGUSTIN', 'S.E.', '1', '197608142011012002', '220010', 11, '2019-04-01', 'ANALIS PERBENDAHARAAN', '1976-08-14', '2034-09-01', '081330280099', '/pegawai/foto/197608142011012002.png'),
(27, NULL, 2, 3, 'KAMSIAH', NULL, 'S.E.', '1', '197106172007012006', '260031', 10, '2018-10-01', 'ANALIS PELAPORAN DAN TRANSAKSI KEUANGAN', '1971-06-17', '2029-07-01', '081253053687', '/pegawai/foto/197106172007012006.png'),
(28, NULL, 2, 1, 'HERINAWATI', NULL, 'S.K.M.', '1', '198112212000122003', '220022', 10, '2019-04-01', 'ANALIS TATA USAHA', '1981-12-21', '2040-01-01', '081253272722', '/pegawai/foto/198112212000122003.png'),
(29, NULL, 2, 2, 'REGINA', NULL, 'S.K.M.', '1', '198503012015032001', '220060', 10, '2019-04-01', 'ANALIS PERENCANAAN, EVALUASI DAN PELAPORAN', '1985-03-01', '2043-04-01', '08125365216', '/pegawai/foto/198503012015032001.png'),
(30, NULL, 2, 2, 'DANI', 'SURYA NATA', 'S.STP', '1', '199610142018081002', '220088', 9, '2018-08-01', 'ANALIS PEMBANGUNAN', '1996-10-14', '2054-11-01', '085250583699', '/pegawai/foto/199610142018081002.png'),
(31, NULL, 2, 1, 'ABIZHAR', 'ALGHIFARI', 'S.Tr.IP', '1', '199710232021081001', '20086', 9, NULL, 'PELAKSANA BAGIAN UMUM', '1997-10-23', NULL, '081330395455', '/pegawai/foto/199710232021081001.png'),
(32, NULL, 2, 2, ' YULIN', 'ILUS STIANTI', 'A.Md', '1', '198906222011012002', '220030', 8, '2021-10-01', 'PRANATA KOMPUTER TERAMPIL', '1989-06-22', '2047-07-01', '085246844760', '/pegawai/foto/198906222011012002.png'),
(33, NULL, 2, 1, 'SABRI', NULL, NULL, '1', '197208142007011013', '260033', 6, '2020-04-01', 'PENGADMINISTRASI KEPENDUDUKAN', '1972-08-14', '2030-09-01', '081347211303', '/pegawai/foto/197208142007011013.png'),
(34, NULL, 2, 1, 'NADIA', 'ISTAMALA', 'S.STP', '1', '199703072018082001', '220089', 9, NULL, 'PENGELOLA SARANA DAN PRASARANA', NULL, NULL, NULL, '/pegawai/foto/199703072018082001.png'),
(35, NULL, 8, NULL, 'DWI', 'LINGGA HARYANTO', 'S.Kep.', '1', '197101111995031005', '220008', 12, '2018-04-01', 'KEPALA SEKSI PENGADUAN UPTD PPA', '1971-01-11', '2029-02-01', '081347741574', '/pegawai/foto/197101111995031005.png'),
(36, NULL, 8, NULL, 'TUTI', 'DARMAYANTI', 'A.MD', '1', '197410102006042033', '220033', 10, '2018-04-01', 'PENGELOLA KEPEGAWAIAN UPTD.PPPA', '1974-10-10', '2032-11-01', '081346485671', '/pegawai/foto/197410102006042033.png'),
(37, NULL, 8, NULL, 'ASRANI ', NULL, NULL, '1', '196610062001121003', '260024', 9, '2020-10-01', 'PENGEMUDI', '1966-10-06', '2024-11-01', '085251388184', '/pegawai/foto/196610062001121003.png'),
(38, NULL, 7, NULL, 'RENIYATI', NULL, 'S.Sos.', '1', '196705041990022002', '240020031', 12, '2018-04-01', 'KASI PENGENDALIAN PENDUDUK', '1967-05-04', '2025-06-01', '085250348820', '/pegawai/foto/196705041990022002.png'),
(39, NULL, 7, NULL, 'DUDI', 'IRZAL SETIAWAN', 'S.Sos.', '1', '197212071992031007', '220034', 12, '2017-04-01', 'ANALIS KETAHANAN KELUARGA SEKSI KUALITAS KELUARGA', '1972-12-07', '2031-01-01', '082150115057', '/pegawai/foto/197212071992031007.png'),
(40, NULL, 6, NULL, 'HASBI', 'ANSHARI', 'S.H.', '1', '197107132009011003', '220024', 12, '2021-04-01', 'KASI KESETARAAN GENDER BIDANG EKONOMI', '1971-07-13', '2029-08-01', '08125514713', '/pegawai/foto/197107132009011003.png'),
(41, NULL, 6, NULL, 'MOH', 'SALEH', 'S.Sos.', '1', '197102062000121001', '250040150', 12, '2019-04-01', 'KASI KESETARAAN GENDER BIDANG SOSIAL BUDAYA', '1971-02-06', '2029-03-01', '08125823455', '/pegawai/foto/197102062000121001.png'),
(42, NULL, 5, NULL, 'DJAROT', 'KURNIADI', 'S.P., M.Si', '1', '196910282007011017', '130040', 12, '2019-04-01', 'KASI INFORMASI DAN PARTISIPASI', '1969-10-28', '2027-11-01', '08125809664', '/pegawai/foto/196910282007011017.png'),
(43, NULL, 5, NULL, 'RENNY', 'FATRIANA', 'S.Sos.', '1', '197512242000122006', '260097', 11, '2020-04-01', 'ANALIS SISTEM INFORMASI', '1975-12-24', '2034-01-01', '08125808946', '/pegawai/foto/197512242000122006.png'),
(44, NULL, 4, NULL, 'FACHMI', 'ROZANO', 'S.E.', '1', '197202011997031008', '220019', 12, '2016-10-01', 'KASI PERLINDUNGAN PEREMPUAN', '1972-02-01', '2030-03-01', '082157151306', '/pegawai/foto/197202011997031008.png'),
(45, NULL, 4, NULL, 'VEPRI', 'HARYONO', 'S.Sos.', '1', '197602051998031003', '220032', 12, '2017-10-01', 'KASI PERLINDUNGAN ANAK', '1976-02-05', '2034-03-01', '081346259630', '/pegawai/foto/197602051998031003.png'),
(46, NULL, 4, NULL, 'SITI', 'MARLETIFAH', NULL, '1', '196412191986032011', '220027', 6, '2006-04-01', 'PENGADMINISTRASI KEUANGAN', '1964-12-19', '2023-01-01', '08125505584', '/pegawai/foto/196412191986032011.png'),
(47, NULL, 3, NULL, 'SURYA', 'DINATA', NULL, '1', '197711271997031001', '210010014', 10, '2021-04-01', 'PENGADMINISTRASI KEPENDUDUKAN', '1977-11-27', '2035-12-01', '081347500509', '/pegawai/foto/197711271997031001.png'),
(48, NULL, 3, NULL, 'JUNAIDI', 'ARBIE', 'S.Kom.', '1', '198906212010011002', '210010021', 9, '2019-04-01', 'PRANATA KOMPUTER AHLI PERTAMA', '1989-06-21', '2047-07-01', '081347944422', '/pegawai/foto/198906212010011002.png'),
(49, NULL, 2, 3, 'HARI', 'SULISTYO WICAKSONO', 'S.T.', '0', NULL, '220063', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, 4, NULL, 'RUSDI', 'RAHMAN', 'S.Hut.', '0', NULL, '220041', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/rusdi_rahman.png'),
(51, NULL, 2, 1, 'ERNI', 'DIA LESTARI', 'S.S', '0', NULL, '260101', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/erni_dia_lestari.png'),
(52, NULL, 4, NULL, 'TARNI', NULL, 'S.HI', '', NULL, '220068', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/tarni.png'),
(53, NULL, 8, NULL, 'ISMAIL', 'RAZAK', 'SKM', '', NULL, '220065', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/ismail_razak.png'),
(54, NULL, 3, NULL, 'ANDINA', 'FAHRIANA', 'S.KOM', '', NULL, '260102', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/andina_fahriana.png'),
(55, NULL, 3, NULL, 'AHMAD', 'HAMDANI HASAN', 'S.E', '', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, 4, NULL, 'NADYA', 'NOVIA RAHMAN', 'M. Psi', '', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, 2, 3, 'ARDIATI', '', 'S.KOM', '', NULL, '220076', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/ardiati.png'),
(58, NULL, 5, NULL, 'DHIENY', 'WAHYUNINGSIH', 'S.KOM', '', NULL, '220077', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/dhieny_wahyuningsih.png'),
(59, NULL, 7, NULL, 'ZULKIFLI', '', 'S.IP', '', NULL, '260105', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/zulkifli.png'),
(60, NULL, 6, NULL, 'M.', 'KHALIL AFIF', 'S.IP', '', NULL, '260106', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, 6, NULL, 'DESSY', 'AULIA EKA PUTRI', 'S.I.KOM', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, 7, NULL, 'HANA', 'ZAVIRA', 'S.SI', '', NULL, '220084', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/hana_zavira.png'),
(63, NULL, 2, 1, 'FAJAR', 'RAMADHANI', 'S.TR.KOM', '', NULL, '220083', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, 2, 3, 'NATALIA', '', 'S.E', '', NULL, '220058', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/natalia.png'),
(65, NULL, 4, NULL, 'RIA', 'RIZKY AMALIA', 'S.PSI', '', NULL, '220080', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/ria_rizky_amalia.png'),
(66, NULL, 5, NULL, 'DIMAS', 'ANANTA ARIESTIA', 'S.STAT', '', NULL, '220086', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/dimas_ananta_ariestia.png'),
(67, NULL, 2, 1, 'RONNY', 'HERMANSYAH', 'S.KOM', '', NULL, '220087', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, 6, NULL, 'ARIE', 'KURNIAWAN', 'A.MD', '', NULL, '220045', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/arie_kurniawan.png'),
(69, NULL, 2, 1, 'MASRIFAH', 'AL MAIDAH', 'A.MD', '', NULL, '220039', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/masrifah_al_maidah.png'),
(70, NULL, 2, 1, 'TEUKU', 'BANTA RACHMAD ATTAHASHI', '', '', NULL, '220037', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, 2, 1, 'ANDI', 'FAISAL', '', '', NULL, '220085', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Hj.', 8, NULL, 'MARDIANIWATI', '', '', '', NULL, '220071', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/mardianiwati.png'),
(73, NULL, 2, 1, 'MUHAMMAD', 'RAISIL', '', '', NULL, '220079', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/muhammad_raisil.png'),
(74, NULL, 7, NULL, 'TONI', 'SUPRIYANTO', '', '', NULL, '220064', NULL, NULL, NULL, NULL, NULL, NULL, '/pegawai/foto/toni_supriyanto.png');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 2, 'Absensi', 'a0f0fc575ad21be54c1f338a208c732060cf9ee7f0eff06f39e7a5ed38ab0b91', '[\"*\"]', NULL, '2022-02-28 14:20:08', '2022-02-28 14:20:08'),
(7, 'App\\Models\\User', 2, 'absensi', '6727c55f9646905493d004addd6edfaed3ef1b4dc1243ba276f70c7178ac12ec', '[\"*\"]', NULL, '2022-02-28 15:49:16', '2022-02-28 15:49:16'),
(12, 'App\\Models\\User', 8, 'absensi', 'f6e733e199b640d2efb6e9ebd5bbda96661a87b5a828f8a0c5ebd164f8705785', '[\"*\"]', NULL, '2022-03-05 19:03:42', '2022-03-05 19:03:42'),
(13, 'App\\Models\\User', 8, 'absensi', 'a2e5a69bba0332507e0f137f3af53e4befa4ab047709ffa589258065bbc1b6ca', '[\"*\"]', NULL, '2022-03-05 19:03:43', '2022-03-05 19:03:43'),
(14, 'App\\Models\\User', 8, 'absensi', '37395562659c2af4b0686a946d6507b3b4332bbf64e3fead93d6f5fd85b71032', '[\"*\"]', NULL, '2022-03-05 19:03:44', '2022-03-05 19:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `sub_bidangs`
--

CREATE TABLE `sub_bidangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_bidangs`
--

INSERT INTO `sub_bidangs` (`id`, `bidang_id`, `nama`) VALUES
(1, 2, 'UMUM'),
(2, 2, 'PERENCANAAN'),
(3, 2, 'KEUANGAN'),
(5, 8, 'TATA USAHA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(2) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pegawai_id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Admin', 'admin@dkp3a.com', NULL, '$2a$12$3u8zQZ0zTV0zOvk8NKB1Oe89KKoILUwtvFDLHLAFXCEyHArnttaPu', 'ZE5xTiZyaSghem71c6E7MBET91S3Oa5azLGRTBWdI9Li3mv2rE7m4wJbPR2w', NULL, NULL),
(5, 2, 2, 'Hj. Noryani Sorayalita S.E., M.M.', '196512151986012002', NULL, '$2y$10$O76JhCrDyZ6ZQko8HStW5.qVwGPu4K8uyplvgF3rYJvzCz9D1IeAy', '1WJnVMMElTMwqdFjrpQoCqlDux03QgEKfUHRewBJwx6oxqRcGAxb9mSEuMFC', '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(6, 3, 3, 'Hj. Eka Wahyuni S.Sos., M.M.', '196602041986092001', NULL, '$2y$10$fdz.RK0TkOBBvjhCYhkDJersyN/Q6kiszN23YoOlVBeumDKAix45m', NULL, '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(7, 4, 3, ' Masturiah  S.E., M.Si.', '196403281990032006', NULL, '$2y$10$3Xl8uTZCjDXe8.tTPBPkHejpOsFXc06dgvGnYMgMwH0StViEhUnzW', NULL, '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(8, 5, 2, ' Akhmad Marzuki S.P.', '197906222009011002', NULL, '$2y$10$esnSKaz70V6Up4BmLYktW.KqU6kWV4VbY9rZ/Anh53tlofAZZiVnO', '5vH323BbBKPVWrXpG76ml1TDa6UBjI2Eoo4ezx8UXeAR5SKNRZVN48YwirwY', '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(9, 6, 3, ' Rudiansyah  S.E', '197203262008121001', NULL, '$2y$10$Z3xUSBQdNwAI0x.phFtiAu.Xu1mHVlMZiWJg2hcqum2wQpWbWEFZK', NULL, '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(10, 7, 3, ' Edy Syafrani S.Kom', '220035', NULL, '$2y$10$ouzrWaY6MgmVbED8OIDvIOGzDMe10yejWbiv1bRxuopQ3Nv8qeFFi', NULL, '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(11, 8, 3, ' Faulin Wardani S.P', '220047', NULL, '$2y$10$S7J45sEHetnDA5lgt9A5k.zwH48vSnvhVYKfdnTBG/03H65Hpm9Cy', NULL, '2022-02-28 16:21:27', '2022-02-28 16:21:27'),
(12, 9, 3, 'Dr. Pd. Iwan Heriawan S.H., M.Si', '196402271986011001', NULL, '$2y$10$6vSQC5RywMQ2nvJKPCIHyO1EjBzVx4YKoqyNfRP43t4AdSX3tAGX2', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(13, 10, 3, ' Junainah  S.E., M.Si.', '197303211998032006', NULL, '$2y$10$X7awmoiiVfXKO9N68Le9GObyDlro7iXMNCKCI1Z//tPLdcrgVQxji', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(14, 11, 3, 'Dra. Dwi Hartini M.Pd.', '196509271993032005', NULL, '$2y$10$kDNCY4NWIuPJC5OEBmQUku/h.oTV4Xd421/yEKBjpGK4po0tUObgi', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(15, 12, 3, ' Ernawati  S.Sos., M.Si.', '196505051989112001', NULL, '$2y$10$ETxmCD4jSkibrBCnZyanpOwCL8nRUPb2klMby6L1r2EnLKU.JTu2i', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(16, 13, 3, ' Kholid Budhaeri S.H., M.Si.', '197205302000031003', NULL, '$2y$10$nIeTUooC/ck7f4KFhVLhA./sN5xRMbakCnPyayfkz5yD5fprTdH3q', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(17, 14, 3, ' Syahrul Umar S.E., M.Si', '196912032000121005', NULL, '$2y$10$ADNlRkDpzH6lWgO8lwRTQe5i8tw/7JAERf2Kv.WgO/LanPUSEnVw6', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(18, 15, 3, ' Sulekan  S.Sos., M.Si.', '197507071998031003', NULL, '$2y$10$fhWW5.xu/uk2/mgRhFQxjuUvAaye3/C1rIcYM7t4Tj5kn1IlJc6Hm', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(19, 16, 3, ' Hamsiah  S.Sos., M.Si.', '196609171988102002', NULL, '$2y$10$krnVrDjvhnNiZZ1HJ2d3L.8weWuPNfY6KocG2V6eDRJY/xmzmkE5W', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(20, 17, 3, ' Heldawati  S.Sos.,M.Si', '197105292002122004', NULL, '$2y$10$E3zs90jxXlR/nKo.mRKH6eijPZCoxbdo92oI5ci6.Hzh6PxQ6c3Ka', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(21, 18, 3, 'Drg. Nova Paranoan M.Kes', '198002162006042010', NULL, '$2y$10$f4U.JuSg7O4UZUY2gkLbsulhKQLtWpCdQhgfTsOPELflLYwdjr.4G', NULL, '2022-02-28 16:21:28', '2022-02-28 16:21:28'),
(22, 19, 3, 'Hj. Barkies  S.E.', '196611201988022001', NULL, '$2y$10$qm4ALKUBzuuzadRqfNrKJuHCy7hqzScMp3O5tpRru8fG.zPpGXUt.', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(23, 20, 3, ' Budiansyah  S.Sos., M.Si.', '197703031998031008', NULL, '$2y$10$Sjj0I39Qk2Z7bnQ.e/KJ5u70DA0CWj8fwXJwDhLygGbaal.Nx5ObK', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(24, 21, 3, ' Mirza Alfian S.K.M., M.Kes.', '197204211998031008', NULL, '$2y$10$E4WmpmXLYdEdktcmwnMzU.kvPz3/qy3aIMrs0BWSqKzhW9r2dkOaG', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(25, 22, 3, ' Anna Susilawaty S.E.', '197210011998032010', NULL, '$2y$10$5nB5anbszLtkipf9qXs0EuoFAjSdprhwhHJff./XBn8jlV/1FI/tW', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(26, 23, 3, ' Syahridah  S.H.', '196705151989022003', NULL, '$2y$10$KuUozFU9xxgEj5x2SZyOjOuSfIJt/CoVp0N1C6tk0.Gp0QYnOICWK', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(27, 24, 3, 'Dra. Rusna Paputungan ', '196705091989092002', NULL, '$2y$10$lZzGdA3ArjBlZRhqnK.dF.d2Zpn7d8rDXVMrKtNMxC539aznjJd5O', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(28, 25, 3, ' Rita Asfianie S.E.', '197005091990032006', NULL, '$2y$10$KiCgVodASs4pUoBXm7MWFucf3Go5sNCdHlTJ5P7xbuEIDF1hXi38.', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(29, 26, 3, ' Meuthia Sri agustin S.E.', '197608142011012002', NULL, '$2y$10$XzsQ2LZstS.c4VTmsJWs4eIrXIBEGg56BhBky/fwZYFl77Mp9H6nq', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(30, 27, 3, ' Kamsiah  S.E.', '197106172007012006', NULL, '$2y$10$0pFgaLdYv/NTpf0ZzSEAC.fujyeeu2CoCEgbbLItlxrSTTUlenHFu', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(31, 28, 3, ' Herinawati  S.K.M.', '198112212000122003', NULL, '$2y$10$Z1Ol9VjVwov4uR2LGCRw/uPCt4JPGFuTt/FXE9D9XBOhR47g0kJMO', NULL, '2022-02-28 16:21:29', '2022-02-28 16:21:29'),
(32, 29, 3, ' Regina  S.K.M.', '198503012015032001', NULL, '$2y$10$AITExQ1psW1jGWwtisXY5e2RvyCfI39tpJyG4dKqH0v4cWyLgSXhG', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(33, 30, 3, ' Dani Surya nata S.STP', '199610142018081002', NULL, '$2y$10$U6lnu3Qp6DSE1Heq2AZ/6eGTqVRC.lcCXoJxtZrOOyhGvR/m1MpCu', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(34, 31, 3, ' Abizhar Alghifari S.Tr.IP', '199710232021081001', NULL, '$2y$10$QohXDwJfMfYa6LnSNjEnauH.pmzwNrjPu1xORwwVBD.LTeqCC8Yq6', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(35, 32, 3, '  yulin Ilus stianti A.Md', '198906222011012002', NULL, '$2y$10$XWxJPOfl8KgAAhiVo0TtdOnK69/Rmwmigal8j9ZktR5ZXwIVQzlq2', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(36, 33, 3, ' Sabri  ', '197208142007011013', NULL, '$2y$10$sQwoUTubMxziCyYponkQ9e9tcPNdsEvASPKNYRYH7DYQPyaleaXMu', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(37, 34, 3, ' Nadia Istamala S.STP', '199703072018082001', NULL, '$2y$10$UbCOhScJI0FFWq.bjcjPFOImjb96fg.QQK9QVoJp1rUFu2QTQH69q', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(38, 35, 3, ' Dwi Lingga haryanto S.Kep.', '197101111995031005', NULL, '$2y$10$33.x7YmxpFavMEEGvQ187.Y8oaWUzcdu1OjY9oEs4GHCOB/cAUdYS', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(39, 36, 3, ' Tuti Darmayanti A.MD', '197410102006042033', NULL, '$2y$10$7aC7U.gELHTv3X0iyrGdTOBsx8YCawhdw.iVlCf6nDJIQi8es.nfm', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(40, 37, 3, ' Asrani   ', '196610062001121003', NULL, '$2y$10$8AHBrUAPT/AsdQxxcAp9EOphhJylz/6PKqWxEPWCd/oKQkBqCLL12', NULL, '2022-02-28 16:21:30', '2022-02-28 16:21:30'),
(41, 38, 3, ' Reniyati  S.Sos.', '196705041990022002', NULL, '$2y$10$dFAwOsQwsI605RQATYiscuytRUfTNhqlt8XvnSz3z09S.0N2voZk6', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(42, 39, 3, ' Dudi Irzal setiawan S.Sos.', '197212071992031007', NULL, '$2y$10$zhqmAnLrrHPmUMHF0tEhAuWKW7Bzv4lQLcyU/gW5VBDgUZF/fAJCi', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(43, 40, 3, ' Hasbi Anshari S.H.', '197107132009011003', NULL, '$2y$10$KTCchy5SbrEMRRfrrYOiouAq2lqfGTuZ0UPMGV8dNS86OzM33/qIG', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(44, 41, 3, ' Moh Saleh S.Sos.', '197102062000121001', NULL, '$2y$10$ScLvgN.Nc2AeNCuAR4878e.LggIEeKJm3qGqqfarjME8cPOUOx9rm', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(45, 42, 3, ' Djarot Kurniadi S.P., M.Si', '196910282007011017', NULL, '$2y$10$Lf94B5BKt1OiaUIBHjUu9.6YCYw8U0OjPMt4IuW.Gj3N5cdu60062', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(46, 43, 3, ' Renny Fatriana S.Sos.', '197512242000122006', NULL, '$2y$10$PwMWfpToZi.wSXRC/n3GvusSwS/iHDHseAwPTainHAfDKa1gLVvIi', NULL, '2022-02-28 16:21:31', '2022-02-28 16:21:31'),
(47, 44, 3, ' Fachmi Rozano S.E.', '197202011997031008', NULL, '$2y$10$YtD2u4MItJqYCzhmPzjJIOdJdyP6ldrdK1ij./xdtRZjHWj9O/yZS', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(48, 45, 3, ' Vepri Haryono S.Sos.', '197602051998031003', NULL, '$2y$10$vtirmKPiQkEbbFkJuOVEGuhmJR0/zSpxbOzT525SBjSSVH1OkcUZy', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(49, 46, 3, ' Siti Marletifah ', '196412191986032011', NULL, '$2y$10$m5PTZ4Tp/pmIpYwT4wrl..8/NZnDpvlMqw5DKExc/nYoeRHTJWsDu', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(50, 47, 3, ' Surya Dinata ', '197711271997031001', NULL, '$2y$10$3I3IvbpnAYEwK7dXGLEKCefsIoxAYpPVf9CjxxBV0A0Y9oIkO6jFG', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(51, 48, 3, ' Junaidi Arbie S.Kom.', '198906212010011002', NULL, '$2y$10$kiRaRz8GhqdE2tFxN6UBr.kOZ6c0/v2THPTNkyGGEEbD0ro2E9f7e', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(52, 49, 3, ' Hari Sulistyo wicaksono S.T.', '220063', NULL, '$2y$10$9zhfhLElM4VkPtct8Rxu0O8Q/vC3eoUOGQf2HEDPpW0z2FwMmPvFG', NULL, '2022-02-28 16:21:32', '2022-02-28 16:21:32'),
(53, 50, 3, ' Rusdi Rahman S.Hut.', '220041', NULL, '$2y$10$8n5TbDHjCUvEkAFJTgztmeR4vfd6EEzscLLdn7UiEhs1U0UcKQF4y', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(54, 51, 3, ' Erni Dia lestari S.S', '260101', NULL, '$2y$10$vwqcce4bI5B/wIBmCPR.a.BHBdkV/m2ivELXtQ.G3m8joGybZVdPO', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(55, 52, 3, ' Tarni  S.HI', '220068', NULL, '$2y$10$/ytoYk0IA1wfHrQZ8zRszeAwvcs4AJ8/joXGc8Eyni.vAM9yTBfxS', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(56, 53, 3, ' Ismail Razak SKM', '220065', NULL, '$2y$10$EbsKTwfqlDA4I53QQ8sE7et4xg3BpHp6hZNnSbtBoSYoMCvf0G5eq', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(57, 54, 3, ' Andina Fahriana S.KOM', '260102', NULL, '$2y$10$6ohc/RApPam/XbIH2R//e.dBv1FivCSCeFPVWAKaMcA2IyIzsJRh6', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(58, 55, 3, ' Ahmad Hamdani hasan S.E', '5', NULL, '$2y$10$/vr9BIGHqKE2jWMIdF/mL.dlYT.B/Kdisu8FruBR.tURwMXKss786', NULL, '2022-02-28 16:21:33', '2022-02-28 16:21:33'),
(59, 56, 3, ' Nadya Novia rahman M. Psi', '4', NULL, '$2y$10$79iBDkH7rqtGmHx34.XtMOINipw.0BNtG3qlxRhEqnkIt.MTwdTIG', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(60, 57, 3, ' Ardiati  S.KOM', '220076', NULL, '$2y$10$PLJlLKRT/alyRJgbO64uVOngMsw0JCCNEKrsetUR/fdGRO4ixdG/G', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(61, 58, 3, ' Dhieny Wahyuningsih S.KOM', '220077', NULL, '$2y$10$ly3IIG09T.UeH64Lowxqxe.fwgEAj9iXOeD.61R/pUIPaLTk9uRGi', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(62, 59, 3, ' Zulkifli  S.IP', '260105', NULL, '$2y$10$8a3dVRBjFWP6qyXSsGsgv.F/GI2Z6XyW/XFnf6tx.AQxNWMilNp0W', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(63, 60, 3, ' M. Khalil afif S.IP', '260106', NULL, '$2y$10$gW/9kkVMqcPkx2eNut1EjO9N5AsQHkcEmIzzX0gDXJ6qFurYxFhVG', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(64, 61, 3, ' Dessy Aulia eka putri S.I.KOM', NULL, NULL, '$2y$10$eVIl7hIuUf3glwh7hxNoPOXoz1/9xtlfnu2PLkyK8KLxrGRczvtrK', NULL, '2022-02-28 16:21:34', '2022-02-28 16:21:34'),
(65, 62, 3, ' Hana Zavira S.SI', '220084', NULL, '$2y$10$WbeeLWNjVtNcSYn7.K/TH.7eYEVpAgmklJrJ9/Uj6xjuNOxNrDChy', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(66, 63, 3, ' Fajar Ramadhani S.TR.KOM', '220083', NULL, '$2y$10$Rw0s4v8tLI9p5kgpoB.Fou70Xpx8D99bmnITEhF7r8Aav3421StDy', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(67, 64, 3, ' Natalia  S.E', '220058', NULL, '$2y$10$ZQ89BV0p44S71sm.PgnTEeru3nEpQhIOfG9Ww/EhdsDAA45yn88Jm', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(68, 65, 3, ' Ria Rizky amalia S.PSI', '220080', NULL, '$2y$10$SzAv9hs5N7ZpV2Z0iewGi.TMwcuv6PbGkscFCU2U4Vmi9ptkx.nT6', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(69, 66, 3, ' Dimas Ananta ariestia S.STAT', '220086', NULL, '$2y$10$8dNWy33WB32oZgiMP0XsL.DCsb97gkhgPpN.IZ8vafz37DVLlJ2qC', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(70, 67, 3, ' Ronny Hermansyah S.KOM', '220087', NULL, '$2y$10$Kl0UCoaMS0zXTmKCMUfZ9OazzIj/j6XCyqIFGu8SHffuyVJbx0dNO', NULL, '2022-02-28 16:21:35', '2022-02-28 16:21:35'),
(71, 68, 3, ' Arie Kurniawan A.MD', '220045', NULL, '$2y$10$6P1CwhXly0YrHB8FOPgC9eTuJcOiUI9RkiU4umA.xoZ8xHW7IeOXa', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(72, 69, 3, ' Masrifah Al maidah A.MD', '220039', NULL, '$2y$10$LwaMLVD5E5uPekOrP5vzwOmOPx.Vtn5dsamr8ygNcuIhqSTLRGQDm', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(73, 70, 3, ' Teuku Banta rachmad attahashi ', '220037', NULL, '$2y$10$dI17ZFioICIcqvnGc.vYBerN.2HEC7p1O6EL2ffzOKrlcpzfhnUXK', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(74, 71, 3, ' Andi Faisal ', '220085', NULL, '$2y$10$0bYuWlwIXjdf5rITSpyIbeD9Om9DUUBZbsN5cJlRPugi0V3Hz6BE.', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(75, 72, 3, 'Hj. Mardianiwati  ', '220071', NULL, '$2y$10$kUDp55SC29P.o87hjWMF4uPt/EAxBBne4t1hfZc3zimCCo9lU5lna', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(76, 73, 3, ' Muhammad Raisil ', '220079', NULL, '$2y$10$iF4fD1qpU8kztUq.xUAHp.2x9ms1BOEvq785b6I4v7mLLGO6GEv6q', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36'),
(77, 74, 3, ' Toni Supriyanto ', '220064', NULL, '$2y$10$ta8mOYzWT3oIEVx9N/giNeIhs/vi7uSp14E8deiFKu6qWxj/XwrQy', NULL, '2022-02-28 16:21:36', '2022-02-28 16:21:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `absensi_status`
--
ALTER TABLE `absensi_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_status_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `golongans`
--
ALTER TABLE `golongans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawais_bidang_id_foreign` (`bidang_id`),
  ADD KEY `pegawais_golongan_id_foreign` (`golongan_id`),
  ADD KEY `pegawais_sub_bidang_id_foreign` (`sub_bidang_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_bidangs`
--
ALTER TABLE `sub_bidangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_bidangs_bidang_id_foreign` (`bidang_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_pegawai_id_foreign` (`pegawai_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `absensi_status`
--
ALTER TABLE `absensi_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongans`
--
ALTER TABLE `golongans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_bidangs`
--
ALTER TABLE `sub_bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `absensi_status`
--
ALTER TABLE `absensi_status`
  ADD CONSTRAINT `absensi_status_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_bidang_id_foreign` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`),
  ADD CONSTRAINT `pegawais_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`),
  ADD CONSTRAINT `pegawais_sub_bidang_id_foreign` FOREIGN KEY (`sub_bidang_id`) REFERENCES `sub_bidangs` (`id`);

--
-- Constraints for table `sub_bidangs`
--
ALTER TABLE `sub_bidangs`
  ADD CONSTRAINT `sub_bidangs_bidang_id_foreign` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
