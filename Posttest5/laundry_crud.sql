-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 09:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`id`, `nama`, `alamat`, `telpon`, `email`, `jenis`) VALUES
(5, 'Zhong Chenle', 'China', '081234567890', 'zhongchenle@gmail.com', 'Laundry Exclusive'),
(8, 'Lee Jeno', 'Mars', '08123456789', 'jenolee@gmail.com', 'Laundry Sepatu'),
(9, 'Na Jaemin', 'Bumi', '081234567899', 'nana@gmail.com', 'Laundry Bed Cover'),
(10, 'Atika', 'Samarinda', '08987654321', 'atika@gmail.com', 'Regular Ekonomis'),
(11, 'Mark Lee', 'Canada', '0987654321', 'marklee@yahoo.co.id', 'Laundry Exclusive'),
(12, 'Jisung', 'Saturnus', '01234567890', 'parkjisung@gmail.com', 'Laundry Sepatu'),
(13, 'Huang Renjun', 'China', '08796543210', 'huang@yahoo.co.id', 'Regular Ekonomis'),
(14, 'Lee Haechan', 'Busan', '06098765409', 'sunflower@gmail.com', 'Laundry Bed Cover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
