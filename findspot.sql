-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2021 at 01:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pantai'),
(2, 'Gunung'),
(3, 'Taman Margasatwa'),
(4, 'Tempat Bersejarah');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kota`
--

CREATE TABLE `tabel_kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kota`
--

INSERT INTO `tabel_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Denpasar'),
(2, 'Gianyar'),
(3, 'Semarapura'),
(4, 'Badung'),
(5, 'Bangli'),
(6, 'Buleleng'),
(7, 'Tabanan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_review`
--

CREATE TABLE `tabel_review` (
  `id_review` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kebersihan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tempat_makan` int(11) NOT NULL,
  `akomodasi_transportasi` int(11) NOT NULL,
  `sightseeing` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_review`
--

INSERT INTO `tabel_review` (`id_review`, `id_wisata`, `id_user`, `kebersihan`, `harga`, `tempat_makan`, `akomodasi_transportasi`, `sightseeing`, `created_at`, `status`) VALUES
(1, 3, 0, 1, 1, 1, 1, 1, '2021-05-22 14:54:13', 'Confirmed'),
(2, 1, 0, 3, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(3, 1, 0, 2, 4, 4, 2, 3, '2021-05-22 14:54:13', 'Confirmed'),
(4, 1, 0, 4, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(5, 2, 0, 4, 3, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(6, 2, 0, 2, 3, 2, 2, 2, '2021-05-22 14:54:13', 'Confirmed'),
(7, 2, 0, 4, 4, 2, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(8, 3, 0, 3, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(9, 3, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(10, 3, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(11, 4, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(12, 4, 0, 3, 3, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(13, 5, 0, 3, 4, 2, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(14, 5, 0, 3, 2, 2, 2, 3, '2021-05-22 14:54:13', 'Confirmed'),
(15, 5, 0, 4, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(16, 6, 0, 3, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(17, 6, 0, 2, 3, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(18, 6, 0, 3, 4, 2, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(19, 7, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(20, 7, 0, 4, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(21, 7, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(22, 7, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(23, 8, 0, 3, 4, 3, 2, 3, '2021-05-22 14:54:13', 'Confirmed'),
(24, 8, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(25, 8, 0, 3, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(26, 9, 0, 3, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(27, 9, 0, 2, 3, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(28, 9, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(29, 10, 0, 3, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(30, 11, 0, 3, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(31, 11, 0, 3, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(32, 11, 0, 2, 3, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(33, 12, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(34, 12, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(35, 13, 0, 3, 4, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(36, 13, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(37, 13, 0, 2, 3, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(38, 14, 0, 4, 3, 4, 4, 2, '2021-05-22 14:54:13', 'Confirmed'),
(39, 14, 0, 3, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(40, 14, 0, 2, 3, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(41, 15, 0, 4, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(42, 15, 0, 4, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(43, 15, 0, 4, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(44, 15, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(45, 16, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(46, 16, 0, 3, 4, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(47, 16, 0, 2, 3, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(48, 17, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(49, 17, 0, 3, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(50, 17, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(51, 17, 0, 3, 3, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(52, 18, 0, 3, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(53, 18, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(54, 18, 0, 4, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(55, 19, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(56, 19, 0, 2, 3, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(57, 19, 0, 3, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(58, 20, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(59, 20, 0, 4, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(60, 20, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(61, 20, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(62, 21, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(63, 21, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(64, 22, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(65, 22, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(66, 22, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(67, 23, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(68, 23, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(69, 23, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(70, 24, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(71, 24, 0, 3, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(72, 23, 0, 3, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(73, 23, 0, 2, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(74, 24, 0, 4, 3, 3, 4, 2, '2021-05-22 14:54:13', 'Confirmed'),
(75, 24, 0, 4, 3, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(76, 25, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(77, 25, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(78, 25, 0, 2, 3, 2, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(79, 26, 0, 3, 4, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(80, 26, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(81, 26, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(82, 27, 0, 2, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(83, 27, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(84, 27, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(85, 27, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(86, 27, 0, 2, 3, 2, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(87, 28, 0, 2, 3, 2, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(88, 28, 0, 2, 3, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(89, 29, 0, 2, 3, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(90, 29, 0, 2, 3, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(91, 29, 0, 2, 3, 3, 4, 2, '2021-05-22 14:54:13', 'Confirmed'),
(92, 29, 0, 4, 4, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(93, 30, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(94, 30, 0, 2, 3, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(95, 30, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(96, 31, 0, 2, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(97, 31, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(98, 31, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(99, 31, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(100, 32, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(101, 32, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(102, 32, 0, 2, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(103, 33, 0, 2, 4, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(104, 33, 0, 2, 3, 3, 3, 2, '2021-05-22 14:54:13', 'Confirmed'),
(105, 33, 0, 3, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(106, 34, 0, 3, 4, 4, 2, 3, '2021-05-22 14:54:13', 'Confirmed'),
(107, 34, 0, 3, 4, 3, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(108, 34, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(109, 35, 0, 3, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(110, 35, 0, 3, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(111, 35, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(112, 36, 0, 3, 4, 4, 3, 4, '2021-05-22 14:54:13', 'Confirmed'),
(113, 36, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(114, 36, 0, 2, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(115, 37, 0, 3, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(116, 37, 0, 3, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(117, 37, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(118, 37, 0, 3, 4, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(119, 38, 0, 4, 3, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(120, 38, 0, 3, 4, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(121, 38, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(122, 38, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(123, 39, 0, 4, 3, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(124, 39, 0, 4, 3, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(125, 39, 0, 2, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(126, 40, 0, 3, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(127, 40, 0, 3, 4, 4, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(128, 40, 0, 3, 4, 3, 4, 3, '2021-05-22 14:54:13', 'Confirmed'),
(129, 41, 0, 4, 3, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(130, 41, 0, 4, 4, 3, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(131, 41, 0, 2, 4, 4, 3, 3, '2021-05-22 14:54:13', 'Confirmed'),
(132, 41, 0, 2, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(133, 42, 0, 3, 4, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(134, 42, 0, 2, 4, 3, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(135, 42, 0, 3, 4, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(136, 42, 0, 4, 3, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(137, 3, 0, 2, 1, 5, 5, 4, '2021-05-22 14:54:13', 'Confirmed'),
(138, 43, 0, 5, 5, 5, 5, 5, '2021-05-22 14:54:13', 'Confirmed'),
(139, 43, 0, 4, 4, 4, 4, 4, '2021-05-22 14:54:13', 'Confirmed'),
(150, 1, 4, 4, 5, 4, 5, 5, '2021-05-23 07:30:36', 'Pending'),
(151, 1, 1, 5, 5, 5, 5, 5, '2021-05-23 08:16:18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tempat_wisata`
--

CREATE TABLE `tabel_tempat_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_tempat_wisata` varchar(100) NOT NULL,
  `gmaps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_tempat_wisata`
--

INSERT INTO `tabel_tempat_wisata` (`id_wisata`, `id_kota`, `id_kategori`, `nama_tempat_wisata`, `gmaps`) VALUES
(1, 1, 1, 'Pantai Sanur', 'https://www.google.com/maps/place/Sanur/@-8.7042412,115.2509381,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd241c1ce0912c1:0xf026af7177f0d541!8m2!3d-8.7071782!4d115.2626236'),
(2, 1, 1, 'Pantai Sindhu', 'https://www.google.com/maps/place/Sindhu/@-8.6841665,115.2556896,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd240345de542e5:0xd6ac47050830f7e!8m2!3d-8.6841667!4d115.2644444'),
(3, 4, 1, 'Pantai Kuta', 'https://www.google.com/maps/place/Kuta+Beach/@-8.7209026,115.1285996,13z/data=!4m9!1m2!2m1!1spantai+kuta!3m5!1s0x2dd246bc2ab70d43:0x82feaae12f4ab48e!8m2!3d-8.7184926!4d115.1686322!15sCgtwYW50YWkga3V0YVoaCgtwYW50YWkga3V0YSILcGFudGFpIGt1dGGSAQViZWFjaJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VOM2MyWnlUMFJCRUFF'),
(4, 7, 1, 'Pantai Tanah Lot', 'https://www.google.com/maps/place/Tanah+Lot/@-8.6595304,115.0980069,13.09z/data=!4m5!3m4!1s0x2dd237824f71deab:0xcaabe270f7e34d69!8m2!3d-8.621166!4d115.0868565'),
(5, 2, 1, 'Pantai Lebih', 'https://www.google.com/maps/place/Lebih+Beach/@-8.5754976,115.3371365,14z/data=!4m9!1m2!2m1!1spantai+lebih+gianyar!3m5!1s0x2dd2146a984be6c9:0xabf388c60108c661!8m2!3d-8.581006!4d115.355501!15sChRwYW50YWkgbGViaWggZ2lhbnlhclosChRwYW50YWkgbGViaWggZ2lhbnlhciIUcGFudGFpIGxlYmloIGdpYW55YXKSAQViZWFjaJoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOM05HSjVTM1pSUlJBQg'),
(6, 2, 1, 'Pantai Cucukan', 'https://www.google.com/maps/place/Cucukan+Beach/@-8.5877532,115.3326815,14z/data=!4m9!1m2!2m1!1spantai+cucukan!3m5!1s0x2dd2144343e33b45:0xe8eef3f4a1c803dc!8m2!3d-8.5871953!4d115.3506361!15sCg5wYW50YWkgY3VjdWthbpIBBWJlYWNo'),
(7, 2, 1, 'Pantai Siyut', 'https://www.google.com/maps/place/Siyut+Beach/@-8.5745263,115.3678608,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd2140c3402b51b:0xf57335decf606d94!8m2!3d-8.5745263!4d115.3700495'),
(8, 4, 1, 'Pantai Green Bowl', 'https://www.google.com/maps/place/Green+Bowl+Beach/@-8.8485804,115.1687925,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd25b73d7aa2a3f:0x715aafb7e76c4e!8m2!3d-8.8486708!4d115.1710301'),
(9, 4, 1, 'Pantai Tegal Wangi', 'https://www.google.com/maps/place/Tegal+Wangi+Beach/@-8.7815393,115.1391442,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd245d6f651cd05:0x27c2a7f7476949c0!8m2!3d-8.7815393!4d115.1413329'),
(10, 7, 2, 'Gunung Tapak', 'https://www.google.com/maps/place/Gunung+Tapak/@-8.2702776,115.1298563,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd188dfb3429ce3:0x335cae7124333aca!8m2!3d-8.2702778!4d115.1386111'),
(11, 6, 2, 'Gunung Lesung', 'https://www.google.com/maps/place/Gunung+Lesung/@-8.2799998,115.0973563,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd18890a6d9f285:0xe6ec6992c48ddc35!8m2!3d-8.28!4d115.1061111'),
(12, 5, 2, 'Gunung Batur', 'https://www.google.com/maps/place/Mt+Batur/@-8.2401297,115.3687396,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd1f403c8e8ee3f:0xd38045afa18670b4!8m2!3d-8.2401299!4d115.3774944'),
(13, 7, 2, 'Gunung Batukaru', 'https://www.google.com/maps/place/Bukit+Batukau/@-8.3348032,115.0790206,14.98z/data=!4m5!3m4!1s0x2dd187f8b41bd26f:0x688908b6268505d3!8m2!3d-8.3347222!4d115.0877778'),
(14, 7, 2, 'Gunung Sanghyang', 'https://www.google.com/maps/place/Gunung+Sanghyang/@-8.3192105,115.1049901,17z/data=!4m5!3m4!1s0x2dd189c972b5775b:0xdced62171f509071!8m2!3d-8.3192105!4d115.1071788'),
(15, 4, 2, 'Gunung Catur', 'https://www.google.com/maps/place/Gunung+Catur/@-8.2475495,115.177238,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd18eaadf660b7b:0x48cdcef1aca7cd65!8m2!3d-8.247571!4d115.1859928'),
(16, 5, 2, 'Gunung Abang', 'https://www.google.com/maps/place/Gunung+Abang/@-8.2802563,115.4206896,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd1f7adac28eb37:0x7e0239cd53b4be4b!8m2!3d-8.2802778!4d115.4294444'),
(17, 7, 2, 'Gunung Adeng', 'https://www.google.com/maps/place/Gunung+Adeng/@-8.3183118,115.1312452,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd188336aa82ed7:0x2181ea65c1e0e6ba!8m2!3d-8.3183333!4d115.14'),
(18, 4, 2, 'Gunung Mangu', 'https://www.google.com/maps/place/Gunung+Mangu/@-8.2552563,115.1812452,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd18bfd9a041e77:0x6f2fe3602bf0e83b!8m2!3d-8.2552778!4d115.19'),
(19, 2, 3, 'Mandala Suci Wenara Wana', 'https://www.google.com/maps/place/Sacred+Monkey+Forest+Sanctuary/@-8.5187458,115.2564086,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd23d43f6189b67:0xb6ec43164befc356!8m2!3d-8.5187511!4d115.2585973'),
(20, 1, 3, 'Pusat Konservasi Kura-Kura dan Penyu', 'https://www.google.com/maps/place/Penangkaran+Penyu+Bali+Tanjung+Benoa/@-8.7617034,115.1986717,14z/data=!4m9!1m2!2m1!1spusat+konservasi+kura-kura+dan+penyu+bali!3m5!1s0x2dd243a32e668d47:0x3d52bd86b73ff3de!8m2!3d-8.7617034!4d115.2161812!15sCilwdXNhdCBrb25zZXJ2YXNpIGt1cmEta3VyYSBkYW4gcGVueXUgYmFsaVpRCiRwdXNhdCBrb25zZXJ2YXNpIGt1cmEga3VyYSBkYW4gcGVueXUiKXB1c2F0IGtvbnNlcnZhc2kga3VyYSBrdXJhIGRhbiBwZW55dSBiYWxpkgESdG91cmlzdF9hdHRyYWN0aW9umgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVVJOT0hONmFDMTNSUkFC'),
(21, 2, 3, 'Taman Safari dan Bahari Bali', 'https://www.google.com/maps/place/Bali+Safari+and+Marine+Park/@-8.5841011,115.3458623,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd21446b81f7d39:0x34b39c786c2e54ec!8m2!3d-8.5841064!4d115.348051'),
(22, 1, 3, 'Objek Wisata Hiu', 'https://www.google.com/maps/place/Serangan+Island/@-8.74709,115.2150641,13.7z/data=!4m5!3m4!1s0x2dd243d4d05c8813:0xf030bfcad763c90!8m2!3d-8.7288889!4d115.2333333'),
(23, 2, 3, 'Taman Burung Bali', 'https://www.google.com/maps/place/Bali+Bird+Park/@-8.5999747,115.2496613,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd23e4efac54c0f:0x5f8920acf656382c!8m2!3d-8.59998!4d115.25185'),
(24, 2, 3, 'Mason Elephant Park', 'https://www.google.com/maps/place/Elephant+Safari+Park+Lodge+Bali/@-8.3912257,115.2817783,17z/data=!3m1!4b1!4m8!3m7!1s0x2dd218d1a0ba5a03:0x165ad32430c70f14!5m2!4m1!1i2!8m2!3d-8.391231!4d115.283967'),
(25, 4, 3, 'Pulau Penyu', 'https://www.google.com/maps/place/Tiket+Pulau+Penyu/@-8.7647554,115.2146676,18z/data=!4m13!1m6!2m5!1spulau+penyu+bali!5m3!5m2!4m1!1i2!3m5!1s0x2dd2433299119719:0xbb519a4aa0c27598!8m2!3d-8.7648035!4d115.2157631!15sChBwdWxhdSBwZW55dSBiYWxpWiQKEHB1bGF1IHBlbnl1IGJhbGkiEHB1bGF1IHBlbnl1IGJhbGmSARJ0b3VyaXN0X2F0dHJhY3Rpb24'),
(26, 7, 3, 'Taman Kupu-Kupu Bali', 'https://www.google.com/maps/place/Bali+Butterfly+Park/@-8.4794402,115.1326481,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd23ad34eaba331:0x9b2fc46f2ed42a46!8m2!3d-8.4794455!4d115.1348368'),
(27, 1, 3, 'Bali Exotic Marine Park', 'https://www.google.com/maps/place/Bali+Exotic+Marine+Park/@-8.7238879,115.2143821,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd2419a57a1d77f:0x45e6740258630c37!8m2!3d-8.7238932!4d115.2165708'),
(28, 1, 4, 'Pura Agung Jagatnatha', 'https://www.google.com/maps/place/Pura+Agung+Jagatnatha/@-8.6565619,115.216629,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd2409bd9b22e93:0xd1ab0166f1f4f930!8m2!3d-8.6565672!4d115.2188177'),
(29, 1, 4, 'Pura Sakenan', 'https://www.google.com/maps/place/Sakenan+Temple/@-8.6197147,115.2074003,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd23f2329ebb933:0x5ab8bcd6bc17f621!8m2!3d-8.61972!4d115.209589'),
(30, 1, 4, 'Bajra Sandhi Renon', 'https://www.google.com/maps/place/Bajra+Sandhi+Monument/@-8.6717295,115.2317133,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd240f5b0baad2f:0xf67150ab4e009a2c!8m2!3d-8.6717348!4d115.233902'),
(31, 4, 4, 'Pura Luhur Uluwatu', 'https://www.google.com/maps/place/Uluwatu+Temple/@-8.829354,115.0840778,18z/data=!3m1!4b1!4m5!3m4!1s0x2dd24ffc20cb8191:0xcb98d1ba7db0495!8m2!3d-8.8291432!4d115.0849069'),
(32, 2, 4, 'Pura Tirta Empul Tampak Siring', 'https://www.google.com/maps/place/Tirta+Empul+Temple/@-8.4156985,115.3131155,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd218f4e06131b5:0x53a25a017714ecc1!8m2!3d-8.4157586!4d115.3151588'),
(33, 4, 4, 'Taman Ayun Mengwi', 'https://www.google.com/maps/place/Taman+Ayun+Temple/@-8.541627,115.1704126,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd23b90db7a4001:0xaf262ff28fc4caed!8m2!3d-8.5416293!4d115.1725862'),
(34, 5, 4, 'Pura Goa Lawah Klungkung', 'https://www.google.com/maps/place/Pura+Goa+Lawah/@-8.5515628,115.4666763,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd212002b27b8a9:0x64d9703162191aad!8m2!3d-8.5515681!4d115.468865'),
(35, 2, 4, 'Pura Gunung Kawi', 'https://www.google.com/maps/place/Pura+Gunung+Kawi/@-8.4144699,115.2943516,15z/data=!4m9!1m2!2m1!1spura+gunung+kawi!3m5!1s0x2dd218ea5597859b:0x7aaf9b3f4e5de4f1!8m2!3d-8.4227873!4d115.3127525!15sChBwdXJhIGd1bnVuZyBrYXdpWiQKEHB1cmEgZ3VudW5nIGthd2kiEHB1cmEgZ3VudW5nIGthd2mSAQxoaW5kdV90ZW1wbGU'),
(36, 7, 4, 'Ulun Danu Beratan Temple', 'https://www.google.com/maps/place/Ulun+Danu+Beratan+Temple/@-8.2751754,115.1646347,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd1896c9fac0857:0x18246568e4db1b53!8m2!3d-8.2751807!4d115.1668234'),
(37, 3, 1, 'Pantai Lepang', 'https://www.google.com/maps/place/Pantai+Lepang/@-8.5745618,115.3757094,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd213f478877d9f:0x5f3f55037c3112eb!8m2!3d-8.5745833!4d115.3844642'),
(38, 3, 1, 'Pantai Tegal Besar', 'https://www.google.com/maps/place/Pantai+Tegal+Besar/@-8.5744269,115.3625329,15z/data=!3m1!4b1!4m5!3m4!1s0x2dd2140bbdd3bab3:0x1bfacf856bac5618!8m2!3d-8.5744484!4d115.3712877'),
(39, 3, 4, 'Pura Gunung Lingga', 'https://www.google.com/maps/place/Pura+Gunung+Lingga/@-8.5433707,115.4354003,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd2119aabb7737b:0x6a55a7df7dfdae58!8m2!3d-8.543376!4d115.437589'),
(40, 3, 4, 'Pura Taman Sari', 'https://www.google.com/maps/place/Pura+Taman+Sari/@-8.5433441,115.4288342,15z/data=!4m9!1m2!2m1!1spura+taman+sari!3m5!1s0x2dd21185dd534531:0xe9a20b2157c11874!8m2!3d-8.5481052!4d115.4363081!15sCg9wdXJhIHRhbWFuIHNhcmmSAQ9jdWx0dXJhbF9jZW50ZXI'),
(41, 3, 4, 'Pura Dalem Tampuagan', 'https://www.google.com/maps/place/Pura+Dalem+Tampuagan,+Sengguan+Klungkung/@-8.5431467,115.3675489,12z/data=!4m9!1m2!2m1!1spura+dalem+tampuangan!3m5!1s0x2dd2111453cbec47:0xda65702286f2e18a!8m2!3d-8.5327768!4d115.4055298!15sChRwdXJhIGRhbGVtIHRhbXB1YWdhbpIBDGhpbmR1X3RlbXBsZQ'),
(42, 3, 4, 'Taman Kertha Gosa', 'https://www.google.com/maps/place/Taman+Kertha+Gosa/@-8.5356268,115.4011469,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd211154c6b51d9:0xd32fe6608e383c8!8m2!3d-8.5356952!4d115.4033306'),
(43, 4, 1, 'Pantai Pandawa', 'https://www.google.com/maps/place/Pandawa+Beach/@-8.8448028,115.1843368,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd25b7cd8ba1f31:0x41b8785dd055b2a4!8m2!3d-8.8452802!4d115.1870679');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `tipe_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `tipe_user`) VALUES
(0, 'Admin', 'findspot@gmail.com', 'admin', 'admin'),
(1, 'Olivia', 'oliv@gmail.com', 'oliv', 'user'),
(3, 'Yogi', 'yogi@gmail.com', 'yogi', 'admin'),
(4, 'Alvian', 'alvian@gmail.com', 'alvian', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_kota`
--
ALTER TABLE `tabel_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tabel_review`
--
ALTER TABLE `tabel_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tabel_tempat_wisata`
--
ALTER TABLE `tabel_tempat_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_kota`
--
ALTER TABLE `tabel_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_review`
--
ALTER TABLE `tabel_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `tabel_tempat_wisata`
--
ALTER TABLE `tabel_tempat_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_review`
--
ALTER TABLE `tabel_review`
  ADD CONSTRAINT `tabel_review_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tabel_tempat_wisata` (`id_wisata`),
  ADD CONSTRAINT `tabel_review_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`);

--
-- Constraints for table `tabel_tempat_wisata`
--
ALTER TABLE `tabel_tempat_wisata`
  ADD CONSTRAINT `tabel_tempat_wisata_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tabel_kota` (`id_kota`),
  ADD CONSTRAINT `tabel_tempat_wisata_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
