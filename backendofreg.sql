-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 09:35 AM
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
-- Table structure for table `backendofreg`
--

CREATE TABLE `backendofreg` (
  `SNo` int(10) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` text NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backendofreg`
--

INSERT INTO `backendofreg` (`SNo`, `Fname`, `Lname`, `Email`, `Pass`, `Time`) VALUES
(1, '', '', '', 'd41d8cd98f00b204', '2021-07-15 13:58:01.529159'),
(2, '', '', '', 'd41d8cd98f00b204', '2021-07-15 13:58:12.084971'),
(3, '', '', '', 'd41d8cd98f00b204', '2021-07-15 13:58:12.110467'),
(4, 'Pavithra', 'M', 'pavi@gmail.com', '202cb962ac59075b', '2021-07-16 13:35:44.108170'),
(5, 'Muralikrishna', 'A', 'mu@gmail.com', '827ccb0eea8a706c', '2021-07-16 13:49:49.135413'),
(6, 'Muralikrishna', 'A', 'kr@gmail.com', '202cb962ac59075b', '2021-07-16 14:17:39.025644'),
(7, 'Balaji', 'BS', 'bala@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-16 14:30:03.113017'),
(8, 'Muralikrishna', 'A', 'mu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-07-16 14:34:28.200123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backendofreg`
--
ALTER TABLE `backendofreg`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backendofreg`
--
ALTER TABLE `backendofreg`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
