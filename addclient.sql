-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 03:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codesprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `addclient`
--

CREATE TABLE `addclient` (
  `clientId` int(50) NOT NULL,
  `addId` int(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addclient`
--
ALTER TABLE `addclient`
  ADD PRIMARY KEY (`clientId`,`addId`),
  ADD KEY `addId` (`addId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addclient`
--
ALTER TABLE `addclient`
  MODIFY `clientId` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addclient`
--
ALTER TABLE `addclient`
  ADD CONSTRAINT `addclient_ibfk_1` FOREIGN KEY (`addId`) REFERENCES `adds` (`addId`),
  ADD CONSTRAINT `addclient_ibfk_2` FOREIGN KEY (`clientId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `addclient_ibfk_3` FOREIGN KEY (`clientId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
