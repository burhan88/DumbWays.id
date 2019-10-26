-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 03:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` varchar(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `deskripsi` tinytext DEFAULT NULL,
  `category_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `stok`, `image`, `deskripsi`, `category_id`) VALUES
('BO1', 'One Piece', 10, 'images.jpg', 'Buku Anak yang Menceritakan Tentang Perjalan Seorang Bajak Laut', '01'),
('BO2', 'Sejarah Lengkap Indo', 5, 'images (1).jpg', 'Sejak ribuan bahkan jutaan tahun silam, nusantara telah menorehkan jejak sejarahnya sendiri. Kehidupan di nusantara ini memang telah dimulai jauh sebelum kemerdekaan negara kesatuan Republik Indonesia diproklamirkan oleh Soekarno.\r\nDi dalam buku ini, diha', '02'),
('BO3', 'AGAMA UNTUK PERADABA', 2, 'images (2).jpg', 'Agama merupakan elemen penting yang melahirkan peradaban sekaligus menjadi pilar utama penyangganya. Hampir tak ada peradaban besar di dunia lepas dari peran dan pengaruh agama. Agama menjadi sumber inspirasi, fondasi, nilai, maupun etos yang menjaga kebe', '04'),
('BO4', 'Rasulullah Saw: The ', 7, 'images (3).jpg', 'Berbagai literatur sejarah mengungkapkan bahwa Rasulullah Muhammad saw., adalah seseorang yang mempunyai prestasi luar biasa. Beliau berhasil mendirikan peradaban Madinah sebagai mercusuar keunggulan peradaban dunia, menaklukkan kota Mekkah tanpa pertumpa', '03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
('01', 'Komik'),
('02', 'Sejarah'),
('03', 'Novel'),
('04', 'Agama'),
('05', 'Kesehatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories.id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `categories.id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
