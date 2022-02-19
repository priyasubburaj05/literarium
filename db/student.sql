-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 02:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `studdetails`
--
-- Creation: Oct 29, 2020 at 11:42 AM
-- Last update: May 25, 2021 at 10:54 AM
--

CREATE TABLE `studdetails` (
  `StudNo` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `studdetails`:
--

--
-- Dumping data for table `studdetails`
--

INSERT INTO `studdetails` (`StudNo`, `FirstName`, `LastName`, `PhoneNo`, `Email`, `Password`) VALUES
(9, 'akshara', 'magesh', 2147483647, '123@gmail.com', 'aksu123'),
(10, 'rahul', 'verma', 2147483647, 'hell@gmail.com', '123'),
(11, 'ram', 'verma', 124325463, 'seh@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studdetails`
--
ALTER TABLE `studdetails`
  ADD PRIMARY KEY (`StudNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studdetails`
--
ALTER TABLE `studdetails`
  MODIFY `StudNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
