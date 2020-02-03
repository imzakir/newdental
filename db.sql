-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 05:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(10) NOT NULL,
  `id_dental` int(50) NOT NULL,
  `id_pasien` int(10) NOT NULL,
  `nomor_antrian` int(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `id_dental`, `id_pasien`, `nomor_antrian`, `created_at`) VALUES
(1, 1, 1, 1, '2020-01-16 03:38:44'),
(2, 1, 1, 2, '2020-01-10 03:42:54'),
(3, 1, 1, 3, '2020-01-29 03:44:10'),
(4, 1, 1, 4, '2020-01-08 03:55:42'),
(5, 1, 1, 1, '2020-01-30 04:32:24'),
(6, 1, 1, 2, '2020-01-30 04:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `id_dental` int(50) NOT NULL,
  `nama_pasien` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `umur` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `kontak_pasien` varchar(20) NOT NULL,
  `anamnesa` enum('0','1') NOT NULL DEFAULT '0',
  `tindakan` enum('0','1') NOT NULL DEFAULT '0',
  `input_tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `input_oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id_dental`, `nama_pasien`, `alamat`, `umur`, `gender`, `tanggal_lahir`, `kontak_pasien`, `anamnesa`, `tindakan`, `input_tgl`, `input_oleh`) VALUES
(1, 1, 'iqbal nur', 'jl jambu', '17', 'Laki-laki', '19-12-1997', '029297386236', '0', '0', '2020-01-30 03:13:09', 'revan.ar'),
(2, 0, 'iqbal nur', 'Jalan Saharjo', '17', 'Laki-laki', '16-01-2010', '0230283823', '0', '0', '2020-01-30 19:36:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `id_dental` int(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_user` varchar(20) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_dental`, `nama`, `username`, `password`, `role_user`, `registered_at`) VALUES
(1, 1, 'Revan Arifio', 'revan.ar', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', '2020-01-31 08:01:32'),
(2, 2, 'Iqbal Nur', 'iqbal.n', '202cb962ac59075b964b07152d234b70', 'Admin', '2020-01-31 07:14:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
