-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 12:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'asdfe', '$2y$10$B0CRR1xFZQe0WzgdhRdHi.yiB8b1b/hdrKQgVZF3bfB6scgNuy26i', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) UNSIGNED NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `pemilik_rekening` varchar(255) NOT NULL,
  `nomor_rekening` int(11) NOT NULL,
  `kode_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `pemilik_rekening`, `nomor_rekening`, `kode_rekening`) VALUES
(1, 'bcae', 'johane', 200021315, 15),
(3, 'asfd', 'fsad', 213, 123);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(11) UNSIGNED NOT NULL,
  `id_sub_klasifikasi` int(11) NOT NULL,
  `nama_klasifikasi` varchar(255) NOT NULL,
  `kode_klasifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-02-19-160119', 'App\\Database\\Migrations\\Project', 'default', 'App', 1676823056, 1),
(2, '2023-02-19-160546', 'App\\Database\\Migrations\\Bank', 'default', 'App', 1676823056, 1),
(3, '2023-02-19-160804', 'App\\Database\\Migrations\\Klarifikasi', 'default', 'App', 1676823056, 1),
(4, '2023-02-19-160926', 'App\\Database\\Migrations\\SubKlarifikasi', 'default', 'App', 1676823056, 1),
(5, '2023-02-19-160804', 'App\\Database\\Migrations\\Klasifikasi', 'default', 'App', 1676830521, 2),
(6, '2023-02-19-160926', 'App\\Database\\Migrations\\SubKlasifikasi', 'default', 'App', 1676830521, 2);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) UNSIGNED NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tahun_project` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `tgl_awal`, `tgl_akhir`, `tahun_project`, `deskripsi`) VALUES
(1, 'teste', '2023-02-13', '2023-02-20', 20231, 'asdfe'),
(2, 'asdf', '2023-02-19', '2023-02-21', 2022, 'zxcv');

-- --------------------------------------------------------

--
-- Table structure for table `sub_klasifikasi`
--

CREATE TABLE `sub_klasifikasi` (
  `id_sub_klasifikasi` int(11) UNSIGNED NOT NULL,
  `nama_sub_klasifikasi` varchar(255) NOT NULL,
  `kode_sub_klasifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_klasifikasi`
--

INSERT INTO `sub_klasifikasi` (`id_sub_klasifikasi`, `nama_sub_klasifikasi`, `kode_sub_klasifikasi`) VALUES
(2, 'Gelap', '200'),
(3, 'Terang', '2001');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vklasifikasi`
-- (See below for the actual view)
--
CREATE TABLE `vklasifikasi` (
`id_klasifikasi` int(11) unsigned
,`id_sub_klasifikasi` int(11) unsigned
,`nama_klasifikasi` varchar(255)
,`kode_klasifikasi` int(11)
,`nama_sub_klasifikasi` varchar(255)
,`kode_sub_klasifikasi` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vklasifikasi`
--
DROP TABLE IF EXISTS `vklasifikasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vklasifikasi`  AS SELECT `klasifikasi`.`id_klasifikasi` AS `id_klasifikasi`, `sub_klasifikasi`.`id_sub_klasifikasi` AS `id_sub_klasifikasi`, `klasifikasi`.`nama_klasifikasi` AS `nama_klasifikasi`, `klasifikasi`.`kode_klasifikasi` AS `kode_klasifikasi`, `sub_klasifikasi`.`nama_sub_klasifikasi` AS `nama_sub_klasifikasi`, `sub_klasifikasi`.`kode_sub_klasifikasi` AS `kode_sub_klasifikasi` FROM (`klasifikasi` join `sub_klasifikasi` on(`klasifikasi`.`id_sub_klasifikasi` = `sub_klasifikasi`.`id_sub_klasifikasi`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `sub_klasifikasi`
--
ALTER TABLE `sub_klasifikasi`
  ADD PRIMARY KEY (`id_sub_klasifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_klasifikasi`
--
ALTER TABLE `sub_klasifikasi`
  MODIFY `id_sub_klasifikasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
