-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 03:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `alamat`, `nohp`, `email`, `waktu`) VALUES
(73, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 4', '', '', '2023-10-24 00:04:48'),
(74, 'Website Pengelolaan Laundry', 'Bintang 2', 'aim', '', '2023-10-24 00:31:01'),
(75, 'Website Pengelolaan Laundry', 'Bintang 4', 'zulfan', '', '2023-10-24 00:35:15'),
(76, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 4', 'aim', '', '2023-10-24 00:35:29'),
(77, ' Pengelolaan Laundry Desktop', 'Bintang 4', 'niam', '', '2023-10-24 00:35:40'),
(78, 'Website Pembayaran Spp', 'Bintang 4', 'zulfan', '', '2023-10-24 00:35:51'),
(79, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 4', 'tol', '', '2023-10-24 00:36:42'),
(80, ' Pengelolaan Laundry Desktop', 'Bintang 1', '09090', '', '2023-10-24 00:37:11'),
(81, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 3', 'agus', '', '2023-10-24 00:37:41'),
(82, 'Website Pengelolaan Laundry', 'Bintang 3', 'aim', '', '2023-10-24 00:38:33'),
(83, 'Website Pengelolaan Laundry', 'Bintang 3', 'aim', '', '2023-10-24 00:41:38'),
(84, 'Website Pengelolaan Laundry', 'Bintang 3', 'aim', '', '2023-10-24 00:41:47'),
(85, 'Website Pengelolaan Laundry', 'Bintang 3', 'aim', '', '2023-10-24 00:42:07'),
(86, 'Website Pengelolaan Laundry', 'Bintang 2', 'aim', '', '2023-10-24 00:46:36'),
(87, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 4', 'koko', '', '2023-10-24 00:49:35'),
(88, 'Website Pengaduan Aspirasi Masyarakat', 'Bintang 2', '', '', '2023-10-24 00:55:58'),
(89, 'Website Pengelolaan Laundry', 'Bintang 3', 'aim', '', '2023-10-24 00:57:42'),
(90, 'Website Pengelolaan Laundry', 'Bintang 3', 'wdw', '', '2023-10-24 00:58:22'),
(91, 'Website Pengelolaan Laundry', 'Bintang 3', 'wdw', '', '2023-10-24 00:58:51'),
(92, 'Website Pengelolaan Laundry', 'Bintang 3', 'qeed', '', '2023-10-24 00:59:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
