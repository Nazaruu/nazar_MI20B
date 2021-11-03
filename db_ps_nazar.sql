-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 07:46 AM
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
-- Database: `db_ps_nazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jaminan`
--

CREATE TABLE `tbl_jaminan` (
  `id_jaminan` int(11) NOT NULL,
  `jaminan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jaminan`
--

INSERT INTO `tbl_jaminan` (`id_jaminan`, `jaminan`) VALUES
(1, 'ktp'),
(2, 'Kartu Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rentalps`
--

CREATE TABLE `tbl_rentalps` (
  `no_billing` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lama_peminjaman` int(11) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `harga` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rentalps`
--

INSERT INTO `tbl_rentalps` (`no_billing`, `tanggal`, `nama_penyewa`, `alamat`, `lama_peminjaman`, `jaminan`, `harga`) VALUES
(19, '2021-11-20', 'ganteng', 'jln,Bojong Tengah', 7, 'Kartu Keluarga', 350000),
(20, '2021-11-28', 'nazargantng', 'jln,Bojong Tengah', 8, 'ktp', 400000),
(21, '2021-11-21', 'dfgdhfdgh', 'cimamis', 2, 'ktp', 100000),
(22, '2021-11-27', 'erfsdga', 'jln,Bojong Tritura', 4, 'Kartu Keluarga', 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jaminan`
--
ALTER TABLE `tbl_jaminan`
  ADD PRIMARY KEY (`id_jaminan`);

--
-- Indexes for table `tbl_rentalps`
--
ALTER TABLE `tbl_rentalps`
  ADD PRIMARY KEY (`no_billing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jaminan`
--
ALTER TABLE `tbl_jaminan`
  MODIFY `id_jaminan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rentalps`
--
ALTER TABLE `tbl_rentalps`
  MODIFY `no_billing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
