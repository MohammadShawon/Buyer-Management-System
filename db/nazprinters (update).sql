-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 10:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nazprinters`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
`bill_no` int(10) NOT NULL,
  `order_code` int(10) NOT NULL,
  `total_price` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `order_code`, `total_price`) VALUES
(3, 3, 56466),
(4, 4, 6789),
(5, 7, 45646),
(6, 2, 0),
(7, 2, 0),
(8, 2, 0),
(9, 6, 0),
(10, 6, 0),
(11, 6, 0),
(12, 6, 0),
(13, 6, 0),
(14, 2, 56);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
`buyer_id` int(100) NOT NULL,
  `buyer_name` varchar(64) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(16) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_name`, `company`, `email`, `phone`, `address`) VALUES
(12, 'shipu', 'techzone', 'ss@email.com', 163564265, 'ssdc'),
(34, 'dfdg', 'gdgd', 'sess@email.com', 9098, '$dasfcdcdf');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
`delivery_id` int(11) NOT NULL,
  `order_code` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `order_code`, `status`, `remarks`) VALUES
(1, 2, 'ddd', 'ddd'),
(2, 2, '', ''),
(4, 4, '', ''),
(5, 5, 'delivered', 'paid'),
(6, 3, 'ff', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_code` int(11) NOT NULL,
  `buyer_name` varchar(64) DEFAULT NULL,
  `company` varchar(64) DEFAULT NULL,
  `approved_by` varchar(64) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `rate` int(10) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `phone` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_code`, `buyer_name`, `company`, `approved_by`, `quantity`, `rate`, `order_date`, `delivery_date`, `phone`) VALUES
(2, 'sathi', 'complies', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(3, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(4, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(5, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(6, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(7, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0),
(8, '', '', '', 123, 12, '0000-00-00', '0000-00-00', 0),
(11, '', '', '', 0, 0, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'shawon', '1234', 'Admin'),
(2, 'naim', '12345', 'Employee'),
(3, 'shipu', '1234', 'Admin'),
(4, 'sanji', '1234', 'Admin'),
(5, 'sinthy', '1234', 'Admin'),
(7, 'emp', 'emp', 'Employee'),
(9, 'admin', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
 ADD UNIQUE KEY `order_code` (`bill_no`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
 ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
 ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
MODIFY `bill_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
MODIFY `buyer_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
