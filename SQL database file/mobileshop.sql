-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 12:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('faizan', '70066855'),
('salman', '70066856');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `ram` int(10) DEFAULT NULL,
  `rom` int(10) DEFAULT NULL,
  `frontcam` int(10) DEFAULT NULL,
  `backcam` int(10) DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `dom` varchar(30) DEFAULT NULL,
  `discount` float NOT NULL,
  `des` varchar(1000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `price`, `ram`, `rom`, `frontcam`, `backcam`, `available`, `dom`, `discount`, `des`, `img`) VALUES
(22, 'samsung a30', 40000, 6, 128, 32, 64, 1, 'notch', 1, '256965238', 'card11.jpg'),
(120, 'samsung a30', 40000, 6, 128, 32, 64, 1, 'notch', 0, 'rete', 'card10.jpg'),
(300, 'salman', 456, 456, 456, 456, 456, 1, '456', 0, '456456', 'card10.jpg'),
(2111, 'samsung a30', 40000, 6, 128, 32, 64, 1, 'notch', 2.25, '4555456', 'card11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
