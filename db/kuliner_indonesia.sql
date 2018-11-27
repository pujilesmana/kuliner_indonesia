-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 04:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'header_home', '2018-11-23 01:40:28'),
(3, 'Caption Makanan Terbaru', '2018-11-23 03:23:18'),
(4, 'Makanan Terbaru Konten', '2018-11-27 02:35:48'),
(5, 'Masakan Jawa ', '2018-11-27 03:15:22'),
(6, 'Masakan Sumatera', '2018-11-27 03:15:31'),
(7, 'Masakan_sulawesi', '2018-11-27 03:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` varchar(300) DEFAULT NULL,
  `tulisan_gambar` varchar(50) DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_slug` varchar(100) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_gambar`, `tulisan_tanggal`, `tulisan_slug`, `kategori_id`) VALUES
(1, 'Bakso Setan', 'bakso setan', 'bakso1.jpg', '2018-11-20 00:55:41', 'bakso', 1),
(2, 'Rumput', 'Rumput Sapi', '1.jpg', '2018-11-20 02:41:03', 'rumput', 1),
(3, 'Makanan Terbaru', 'Bla bla bla bla bla bla bla bla bla bla bla bla bla ', '11.jpg', '2018-11-23 03:24:20', 'makanan-terbaru', 3),
(5, 'Mie Ayam ', 'mie Ayam Palembang', 'mie_ayam1.jpg', '2018-11-27 02:49:29', 'mie-ayam-', 4),
(6, 'Mie ayam 2', 'Mie ayam 2', 'mie_ayam2.jpg', '2018-11-27 02:51:34', 'mie-ayam-2', 4),
(7, 'Mie Ayam 3', 'Mie Ayam 3', 'mie_ayam3.jpg', '2018-11-27 02:51:58', 'mie-ayam-3', 4),
(8, 'Mie Ayam 4', 'Mie Ayam 4', 'mie_ayam4.jpg', '2018-11-27 02:52:16', 'mie-ayam-4', 4),
(9, 'Mie Ayam Jawa', 'Mie Ayam Jawa', 'mie_ayam5.jpg', '2018-11-27 03:20:50', 'mie-ayam-jawa', 5),
(10, 'Mie Ayam Sulawesi', 'Mie Ayam Sulawesi', 'mie_ayam6.jpg', '2018-11-27 03:21:31', 'mie-ayam-sulawesi', 7),
(11, 'Mie Ayam Sumatera', 'Mie Ayam Sumatera', 'mie_ayam7.jpg', '2018-11-27 03:21:53', 'mie-ayam-sumatera', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(30) DEFAULT NULL,
  `user_password` varchar(30) DEFAULT NULL,
  `user_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_tanggal`) VALUES
(1, 'Puji', 'lesmana123', '2018-11-12 02:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
