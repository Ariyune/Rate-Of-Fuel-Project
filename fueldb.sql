-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 01:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fueldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientinformation`
--

CREATE TABLE `clientinformation` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `FirstAddress` varchar(100) NOT NULL,
  `SecondAddress` varchar(100) DEFAULT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientinformation`
--

INSERT INTO `clientinformation` (`ID`, `Name`, `FirstAddress`, `SecondAddress`, `City`, `State`, `Zip`) VALUES
(1, 'Carlos Alvarado', '1100 Street.', NULL, 'Houston', 'TX', '77080');

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `ID` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercredentials`
--

INSERT INTO `usercredentials` (`ID`, `password`) VALUES
(1, 'password1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientinformation`
--
ALTER TABLE `clientinformation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usercredentials`
--
ALTER TABLE `usercredentials`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercredentials`
--
ALTER TABLE `usercredentials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientinformation`
--
ALTER TABLE `clientinformation`
  ADD CONSTRAINT `clientinformation_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `usercredentials` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
