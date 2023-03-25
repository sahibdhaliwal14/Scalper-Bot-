-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 06:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp370`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `size` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`size`, `colour`, `quantity`) VALUES
('9', 'white', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `creditCardNumber` varchar(100) NOT NULL,
  `cardName` varchar(100) NOT NULL,
  `CCV` varchar(100) NOT NULL,
  `EXPDate` varchar(100) NOT NULL,
  `CardType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postalCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`address`, `city`, `province`, `country`, `postalCode`) VALUES
('12345', 'Abbotsford', 'BC', 'Canada', 'V2t 123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`) VALUES
('9', 'sahib', 'sahibdhaliwal14@gmail.com', 'Sahib Dhaliwal'),
('example', 'example', 'example@gmail.com', 'example'),
('jeevs', 'jeevs', 'sahibdhaliwal14@gmail.com', 'jeevatBadwal'),
('professor1', '123', 'professor@ufv.ca', 'professor'),
('sahib', 'sahib', 'sahibdhaliwal14@gmail.com', 'Choose your first add-on'),
('sahib1', 'sahib', '', ''),
('sahib4444', 'sahib', 'sahibdhaliwal14@gmail.com', 'Choose your first add-on'),
('sahib45', '123', 'sahibdhaliwal14@gmail.com', 'sahib'),
('sahib5555555', 'sahib', 'sahibdhaliwal14@gmail.com', ''),
('sahib7', '', '', ''),
('sahib999', '1', '', ''),
('shawn', '1', 'shawn@gmail', 'shawn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
