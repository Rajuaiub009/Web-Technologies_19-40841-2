-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_manager`
--

CREATE TABLE `add_manager` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `retypepassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_manager`
--

INSERT INTO `add_manager` (`name`, `email`, `username`, `password`, `retypepassword`) VALUES
('Raju Dey', 'rajuad632@gmail.com', 'rajuvai', '444444', '444444'),
('Rafsan', 'rajuad632@gmail.com', 'Ra', '222222', '222222'),
('Dipto', 'rajuad632@gmail.com', 'dip', '555555', '555555'),
('Arjun', 'rajuad632@gmail.com', 'a', '111111', '111111'),
('Arpon', 'rajuad632@gmail.com', 'arpon', '888888', '888888');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `productname` varchar(30) NOT NULL,
  `productcategory` char(1) NOT NULL,
  `productprice` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`productname`, `productcategory`, `productprice`) VALUES

('mobile', 'm', '20000'),
('', '', ''),
('mobile', 'm', '100000'),


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `retypepassword` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `email`, `username`, `password`, `retypepassword`, `gender`) VALUES
('Raju', 'Dey', 'rajuad632@gmail.com', 'Raju', '111111', '111111', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
