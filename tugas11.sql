-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-pertemuan11`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas11`
--

CREATE TABLE `tugas11` (
  `kode` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `qty` int(200) NOT NULL,
  `jlh_harga` int(200) NOT NULL,
  `rabat_persen` int(200) NOT NULL,
  `rabat_rp` int(200) NOT NULL,
  `cara_bayar` varchar(200) NOT NULL,
  `adm` int(200) NOT NULL,
  `total` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tugas11`
--
ALTER TABLE `tugas11`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas11`
--
ALTER TABLE `tugas11`
  MODIFY `kode` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
