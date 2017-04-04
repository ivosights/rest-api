-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 06:55 PM
-- Server version: 5.7.17
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Sisi Positif di Balik Absennya Messi', 'Bintang sepakbola Argentina itu terpaksa hanya menyaksikan rekan-rekannya dari bangku penonton di pertandingan itu. Messi terkena sanksi skorsing otomatis usai menerima kartu kuning kelima di musim ini dalam pertandingan melawan Valencia sebelum jeda internasional', '2017-04-05 00:32:29', '2017-04-05 00:32:29'),
(3, 'Warna-warni Jam Tangan Pintar Garmin', 'Garmin merilis seri Fenix 5 yang hadir dengan berbagai ukuran dan pilihan strap warna-warni. Seri ini sudah punya fitur GPS sebagai penunjang kegiatan outdoor.', '2017-04-05 00:32:29', '2017-04-05 00:32:29'),
(4, 'iPhone 7 Kembali ke Indonesia', 'Ponsel pintar besutan Apple seri terbaru, yakni iPhone 7 dan iPhone 7 Plus, resmi menyambangi jaringan ritel resmi di Indonesia dengan penjualan serentak pada Jumat (31/3). Produk ini bisa tersedia setelah Apple lama terkendala terkait regulasi kandungan lokal', '2017-04-04 18:21:28', '2017-04-04 18:21:28'),
(5, 'Perbaikan Tahap Dua Fokus pada Keselamatan Stabilitas', 'Perbaikan Jembatan Cisomang tahap kedua difokuskan pada peningkatan faktor keselamatan stabilitas. Hal itu dilakukan melalui penambahan jangkar tanah untuk menahan beban lateral dan fondasi berbentuk tabung (bored pile).', '2017-04-05 01:28:12', '2017-04-05 01:28:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
