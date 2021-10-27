-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 05:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id` int(11) UNSIGNED NOT NULL,
  `no_surat` varchar(12) NOT NULL,
  `jenis_surat` int(11) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `ttd_surat` varchar(50) NOT NULL,
  `ttd_mengetahui` varchar(50) NOT NULL,
  `ttd_menyetujui` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_surat`
--

INSERT INTO `tbl_surat` (`id`, `no_surat`, `jenis_surat`, `tgl_surat`, `ttd_surat`, `ttd_mengetahui`, `ttd_menyetujui`) VALUES
(11, 'SK-2934-9-23', 1, '2021-10-21', 'Ilham Jaya Kusumah', 'Ragil', 'Wacak'),
(20, 'SK-2934-9-24', 2, '2021-10-21', 'Ujun Junaedi', 'Ragil', 'Wacak'),
(21, 'SK-2934-9-25', 1, '2021-10-21', 'Ujun Junaedi', 'Ragil', 'Wacak'),
(22, 'SK-2934-9-26', 1, '2021-10-21', 'Ujun Junaedi', 'Ragil', 'Wacak'),
(23, 'SK-2934-9-27', 1, '2021-10-21', 'Ujun Junaedi', 'Ragil', 'Wacak'),
(24, 'SK-2934-9-28', 1, '2021-10-21', 'Ujun Junaedi', 'Ragil', 'Wacak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_surat` (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
