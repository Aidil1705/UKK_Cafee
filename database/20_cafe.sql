-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`) VALUES
(1, 'My Cafe', '<p>Aidildgdgdffd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pesan` varchar(25) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `nama`, `pesan`, `waktu`) VALUES
(1, 'kasir', 'Melakukan Login', '2022-11-23 14:27:32'),
(2, 'admin', 'Melakukan Login', '2022-11-23 14:27:55'),
(3, 'manajer', 'Melakukan Login', '2022-11-23 14:28:25'),
(4, 'admin', 'Melakukan Login', '2022-11-23 14:32:48'),
(5, 'manajer', 'Melakukan Login', '2022-11-23 15:59:25'),
(6, 'kasir', 'Melakukan Login', '2022-11-24 16:10:00'),
(7, 'kasir', 'Melakukan Login', '2022-11-24 17:08:59'),
(8, 'kasir', 'Melakukan Login', '2022-11-24 17:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `harga` double NOT NULL,
  `jenis` enum('Ringan','Berat','Minuman') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `jenis`, `foto`) VALUES
(3, 'rotipg', 5000, 'Ringan', './img/d8efffab02fa94683ef78af7ebbf02a65632c0082d05fb58c82ed6f410dffccfjpg'),
(4, 'Nasi Goreng', 15000, 'Berat', './img/c578812655cb368bf0eff5e1e64c7bec9b02dec6bfdfac5b5fda5515f9b48c83jpg'),
(6, 'Bubble Drink', 5000, 'Minuman', './img/8b6a136e33fe73dfa972281b3ddb3259c5e45cc1b300d1c4735929f7dc8ef6a4jpg'),
(7, 'Risol', 3000, 'Ringan', './img/6ae93084b0630a9f21a93a0896407ef1e43e6452835ac079b38baecf5ab66604jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('Kasir','Manajer','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Kasir', 'kasir', 'kaisr', 'Kasir'),
(2, 'manajer', 'manajer', 'manajer', 'Manajer'),
(3, 'admin', 'admin', 'admin', 'Admin'),
(5, 'aidil', 'aidil', 'aidil', 'Kasir'),
(6, 'fikri', 'fikri', 'fikri', 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nomeja` int(11) NOT NULL,
  `pesanan` text NOT NULL,
  `total_harga` bigint(22) NOT NULL,
  `nama_kasir` varchar(26) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nomeja`, `pesanan`, `total_harga`, `nama_kasir`, `id_kasir`, `create_at`) VALUES
(13, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:31:29'),
(14, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:31:36'),
(15, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:32:04'),
(16, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:34:45'),
(17, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:35:05'),
(18, 1, 'risol 2, bubledrink 2', 16, 'aidil', 0, '2022-11-24 17:35:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
