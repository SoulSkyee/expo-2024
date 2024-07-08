-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 04:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egaleria1`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyaterjual`
--

CREATE TABLE `karyaterjual` (
  `id_karya` int(11) NOT NULL,
  `gambar_karya` varchar(255) NOT NULL,
  `nama_karya` varchar(255) NOT NULL,
  `harga_karya` varchar(255) NOT NULL,
  `deskripsi_karya` text NOT NULL,
  `status_karya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyaterjual`
--

INSERT INTO `karyaterjual` (`id_karya`, `gambar_karya`, `nama_karya`, `harga_karya`, `deskripsi_karya`, `status_karya`) VALUES
(2, 'galeri-item-2.jpg', 'Raden Shaleh', 'Rp 5000000', 'Karya ini lkjaskdjfj kasjdfkja;sdjf jaskdjfkasjdfkas;df ajskdfjaksdjf;ak', 'Terjual'),
(3, 'hero-img.jpg', 'Penangkapan pangeran diponegoro', 'Rp 9000000', 'Penangkapan Pangeran Diponegoro adalah sebuah lukisan 1857 karya Raden Saleh, yang menggambarkan ditangkapnya Pangeran Diponegoro oleh Letnan Jenderal Hendrik Merkus de Kock pada 28 Maret 1830', 'Belum Terjual'),
(4, 'ruins-piano.jpg', 'Ruins and Piano', 'Rp 5000000', 'S. Sudjojono (1914-1986) menggunakan lukisan untuk mengekspresikan pandangan politik dan sosialnya. Dia banyak menggambarkan pedesaan dan masyarakat Indonesia dalam kerangka realis.\r\n\r\nLukisan “The Ruins and The Piano” dapat dikatakan keluar dari pakem Sudjojono selama ini. Di sana ada piano teronggok merana di tengah reruntuhan usai bencana, seperti sesuatu yang dicabut dari lingkungan aslinya untuk ditempatkan di suasana asing. Lewat lukisan ini S. Sudjojono mendemonstrasikan eksperimennya atas prinsip-prinsip dan estetika.', 'Terjual');

-- --------------------------------------------------------

--
-- Table structure for table `laporanpendapatan`
--

CREATE TABLE `laporanpendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `hari_pendapatan` varchar(255) NOT NULL,
  `order_pendapatan` int(11) NOT NULL,
  `hasil_pendapatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporanpendapatan`
--

INSERT INTO `laporanpendapatan` (`id_pendapatan`, `hari_pendapatan`, `order_pendapatan`, `hasil_pendapatan`) VALUES
(2, 'Agustus 2024', 82, 'Rp 5000000'),
(3, 'September 2024', 190, 'Rp 11000000'),
(9, 'Juni 2024', 82, 'Rp 90000000'),
(11, 'Juli 2024', 90, 'Rp 7000000');

-- --------------------------------------------------------

--
-- Table structure for table `userpembelian`
--

CREATE TABLE `userpembelian` (
  `id_pembelian` int(11) NOT NULL,
  `nama_pembelian` varchar(255) NOT NULL,
  `gambar_pembelian` varchar(255) NOT NULL,
  `hari_pembelian` varchar(255) NOT NULL,
  `harga_pembelian` varchar(255) NOT NULL,
  `jumlah_pembelian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpembelian`
--

INSERT INTO `userpembelian` (`id_pembelian`, `nama_pembelian`, `gambar_pembelian`, `hari_pembelian`, `harga_pembelian`, `jumlah_pembelian`) VALUES
(1, 'Ruins & Piano\r\n', 'ruins-piano.jpg', 'Agustus 2024', 'Rp 5000000', '1'),
(3, 'Raden Saleh', 'galeri-item-4.jpg', 'Agustus 2024', 'Rp 3500000', '2'),
(5, 'Diponegoro', 'galeri-item-5.jpg', 'September 2024', 'Rp 6000000', '1'),
(6, 'Istana megah', 'hero-img-2.jpg', 'Oktober 2024', 'Rp 2000000', '6'),
(7, 'borobudur', 'galeri-item-1.png', 'November 2024', 'Rp 2350000', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyaterjual`
--
ALTER TABLE `karyaterjual`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indexes for table `laporanpendapatan`
--
ALTER TABLE `laporanpendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indexes for table `userpembelian`
--
ALTER TABLE `userpembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyaterjual`
--
ALTER TABLE `karyaterjual`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporanpendapatan`
--
ALTER TABLE `laporanpendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userpembelian`
--
ALTER TABLE `userpembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
