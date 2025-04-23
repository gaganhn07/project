-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 07:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(120) NOT NULL,
  `apassword` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `apassword`) VALUES
('instantuniform', 'nopassword');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `bno` int(120) NOT NULL,
  `uno` int(120) DEFAULT NULL,
  `bemail` varchar(120) DEFAULT NULL,
  `bdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`bno`, `uno`, `bemail`, `bdate`) VALUES
(4, 17, 'pavan@gmail.com', '2015-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cname` varchar(120) DEFAULT NULL,
  `cemail` varchar(120) DEFAULT NULL,
  `csubject` varchar(120) DEFAULT NULL,
  `cmessage` varchar(500) DEFAULT NULL,
  `cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cname`, `cemail`, `csubject`, `cmessage`, `cdate`) VALUES
('pavan', 'pavan@gmail.com', 'test', 'sdfg', '2015-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rno` int(11) NOT NULL,
  `rname` varchar(120) DEFAULT NULL,
  `remail` varchar(120) NOT NULL,
  `rphone` varchar(120) DEFAULT NULL,
  `raddress` varchar(500) DEFAULT NULL,
  `rpass` varchar(120) DEFAULT NULL,
  `rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rno`, `rname`, `remail`, `rphone`, `raddress`, `rpass`, `rdate`) VALUES
(5, 'pavan naik', 'pavan@gmail.com', '9901145508', 'gokarna', '123', '2011-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `uno` int(11) NOT NULL,
  `suy` varchar(120) DEFAULT NULL,
  `ssize` varchar(120) DEFAULT NULL,
  `scollege` varchar(120) DEFAULT NULL,
  `sprice` varchar(120) DEFAULT NULL,
  `supload` varchar(120) DEFAULT NULL,
  `sgender` varchar(120) DEFAULT NULL,
  `stype` varchar(120) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `uemail` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`uno`, `suy`, `ssize`, `scollege`, `sprice`, `supload`, `sgender`, `stype`, `sdate`, `uemail`) VALUES
(13, '2', '32', 'gc', '122', 'uploads/uni1.jpg', 'male', 'Shirt', '2012-08-23', 'pavan@gmail.com'),
(14, '3', '34', 'gc college', '222', 'uploads/uni2.jpg', 'Female', 'Pant', '2012-08-23', 'pavan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`uno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `bno` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
