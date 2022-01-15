-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 04:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantuan_pupuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftarkelompok`
--

CREATE TABLE `tbl_daftarkelompok` (
  `id_daftarkelompok` int(11) NOT NULL,
  `nama_anggota` varchar(225) NOT NULL,
  `nama_kelompok` varchar(225) NOT NULL,
  `identitas` varchar(225) NOT NULL,
  `luas_tanah` varchar(225) NOT NULL,
  `komoditas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daftarkelompok`
--

INSERT INTO `tbl_daftarkelompok` (`id_daftarkelompok`, `nama_anggota`, `nama_kelompok`, `identitas`, `luas_tanah`, `komoditas`) VALUES
(1, 'parman', 'tani bunga', 'ktp', '4577mn', 'padi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuanpupuk`
--

CREATE TABLE `tbl_pengajuanpupuk` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ktp` text NOT NULL,
  `kk` text NOT NULL,
  `kartutani` text NOT NULL,
  `kelompok_tani` varchar(225) NOT NULL,
  `luas_lahan` int(10) NOT NULL,
  `komoditas` varchar(225) NOT NULL,
  `no_telpon` int(15) NOT NULL,
  `status` enum('Disetuju','Tidak') DEFAULT 'Tidak',
  `nik` varchar(20) NOT NULL,
  `validasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuanpupuk`
--

INSERT INTO `tbl_pengajuanpupuk` (`id_pengajuan`, `nama`, `ktp`, `kk`, `kartutani`, `kelompok_tani`, `luas_lahan`, `komoditas`, `no_telpon`, `status`, `nik`, `validasi`) VALUES
(64, 'Tomy Chaniago', '212.jpg', '1_I5O6NX_DIKYI1VBuLfX77Q4.jpeg', '213.jpg', 'Kelompok Tani Bunga', 1690, 'palawijaya', 987654, 'Disetuju', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nik` int(25) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nik`, `nama`, `username`, `password`, `role_id`, `is_active`) VALUES
(23, 12, 'admin', 'admin', 'admin', 1, 1),
(35, 2147483647, 'Muhammad Alwi Basyir', 'alwi', '123', 2, 1),
(36, 12345, 'Tomy Chaniago', 'tomy', '123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_rol`
--

CREATE TABLE `user_rol` (
  `id` int(11) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rol`
--

INSERT INTO `user_rol` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_daftarkelompok`
--
ALTER TABLE `tbl_daftarkelompok`
  ADD PRIMARY KEY (`id_daftarkelompok`);

--
-- Indexes for table `tbl_pengajuanpupuk`
--
ALTER TABLE `tbl_pengajuanpupuk`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_rol`
--
ALTER TABLE `user_rol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_daftarkelompok`
--
ALTER TABLE `tbl_daftarkelompok`
  MODIFY `id_daftarkelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengajuanpupuk`
--
ALTER TABLE `tbl_pengajuanpupuk`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_rol`
--
ALTER TABLE `user_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
