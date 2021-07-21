-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 09:36 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amk`
--

-- --------------------------------------------------------

--
-- Table structure for table `backendofcontact`
--

CREATE TABLE `backendofcontact` (
  `S.No` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Time` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backendofcontact`
--

INSERT INTO `backendofcontact` (`S.No`, `Name`, `Mail`, `Message`, `Number`, `Time`) VALUES
(1, 'Muralikrishna A', 'mu@gmail.com', 'Hii', 9384647695, '2021-07-17 06:37:14.47725');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backendofcontact`
--
ALTER TABLE `backendofcontact`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backendofcontact`
--
ALTER TABLE `backendofcontact`
  MODIFY `S.No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
