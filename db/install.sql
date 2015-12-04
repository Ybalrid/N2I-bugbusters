-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2015 at 05:47 AM
-- Server version: 10.0.22-MariaDB-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugbusters`
--

-- --------------------------------------------------------

--
-- Table structure for table `Signalements`
--

DROP TABLE IF EXISTS `Signalements`;
CREATE TABLE `Signalements` (
  `ID` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `GPS_Lat` double NOT NULL,
  `GPS_Long` double NOT NULL,
  `SigType` int(11) NOT NULL,
  `Comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Signalements`
--

INSERT INTO `Signalements` (`ID`, `Date`, `GPS_Lat`, `GPS_Long`, `SigType`, `Comments`) VALUES
(1, '2015-12-04 05:39:06', 48.8138021, 2.3769392, 1, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

DROP TABLE IF EXISTS `Types`;
CREATE TABLE `Types` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Types`
--

INSERT INTO `Types` (`ID`, `Name`) VALUES
(1, 'Attentat'),
(2, 'Catastrophe Naturelle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Signalements`
--
ALTER TABLE `Signalements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Signalements`
--
ALTER TABLE `Signalements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Types`
--
ALTER TABLE `Types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
