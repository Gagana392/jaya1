-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 07:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `name` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `descripition` varchar(100) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`name`, `phone`, `item_name`, `date`, `descripition`, `photo`) VALUES
('kyugh', 6576, 'khvhjv', '6457-01-08', 'lkjbnkl', 'found/back.png'),
('kyughkn ', 657665465, 'n jkjhb', '6457-01-08', 'lkjbnklk,bj ', 'found/front.png');

-- --------------------------------------------------------

--
-- Table structure for table `logintab`
--

CREATE TABLE `logintab` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintab`
--

INSERT INTO `logintab` (`username`, `password`) VALUES
('gagana', 'gaga@123'),
('jaya', 'jaya@123');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `name` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `descripition` text,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`name`, `phone`, `item_name`, `date`, `descripition`, `photo`) VALUES
('mnb lkjn', 654631, 'kjgiu', '4455-02-18', 'ljhgjhg', 'lost/left.png'),
('guhulkjh', 6465, 'iuhiouh', '1985-08-04', 'kghvihv', 'lost/right.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
