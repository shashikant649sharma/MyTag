-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 04:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagtest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `testdata1`
--

CREATE TABLE `testdata1` (
  `S_NO` int(9) NOT NULL,
  `U_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `U_Name` varchar(15) NOT NULL,
  `U_User` varchar(15) NOT NULL,
  `U_Email` varchar(15) NOT NULL,
  `U_Mango` varchar(15) NOT NULL,
  `U_ID` varchar(32) NOT NULL,
  `U_Tag` int(1) NOT NULL DEFAULT 0,
  `U_Phone` int(11) DEFAULT NULL,
  `U_Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testdata1`
--
ALTER TABLE `testdata1`
  ADD PRIMARY KEY (`S_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testdata1`
--
ALTER TABLE `testdata1`
  MODIFY `S_NO` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
