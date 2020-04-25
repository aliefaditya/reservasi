-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean`
--

CREATE TABLE `antrean` (
  `id_antrean` int(3) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `no_antrean` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antrean`
--

INSERT INTO `antrean` (`id_antrean`, `nama_lengkap`, `nama_rs`, `poli`, `no_antrean`) VALUES
(1, 'testdulugan', 'Harapan Kita', 'Jantung', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(3) NOT NULL,
  `nama_poli` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `jam_operasional` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `nama_dokter`, `ruangan`, `jam_operasional`) VALUES
(1, 'Jantung', 'Alex', 'Matahari C310', '05.00 - 10'),
(2, 'Kanker Hati', 'Margareth', 'Mawar A708', '06.00 - 13'),
(5, 'Umum', 'Asmawi', 'A801', '08.00 - 10');

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(3) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `jam_operasional` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `nama_rs`, `alamat`, `kota`, `jam_operasional`) VALUES
(1, 'Harapan Kita', 'Slipi Raya', 'Jakarta Barat', '05.00 - 23'),
(2, 'Darmais', 'Slipi Raya', 'Jakarta Barat', '06.00 - 22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `umur`, `level`) VALUES
(1, 'test', '123', 'testdulugan', 5, 0),
(2, 'aliefadity', '1', 'csdce', 22, 0),
(3, 'anaconda', '123', 'blabla', 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean`
--
ALTER TABLE `antrean`
  ADD PRIMARY KEY (`id_antrean`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrean`
--
ALTER TABLE `antrean`
  MODIFY `id_antrean` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_rs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
