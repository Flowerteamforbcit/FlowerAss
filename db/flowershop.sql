-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2016 at 12:25 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flowershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`ID` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(15,2) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `state`, `time`, `total`) VALUES
(1, 'cancelled', '2016-03-06 00:38:50', '0.00'),
(2, 'cancelled', '2016-03-06 00:38:50', '0.00'),
(12, 'checked out', '2016-03-21 16:50:13', '0.00'),
(11, 'checked out', '2016-03-21 00:46:56', '0.00'),
(10, 'checked out', '2016-03-21 00:45:59', '0.00'),
(9, 'checked out', '2016-03-21 00:43:38', '0.00'),
(13, 'started', '2016-03-24 15:51:39', '0.00'),
(14, 'started', '2016-03-28 10:23:01', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE IF NOT EXISTS `cart_product` (
`ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`ID`, `product_id`, `cart_id`, `quantity`, `time`) VALUES
(1, 1, 1, 0, '2016-03-06 00:38:50'),
(2, 2, 1, 0, '2016-03-06 00:38:50'),
(3, 1, 2, 0, '2016-03-06 00:38:50'),
(4, 2, 2, 0, '2016-03-06 00:38:50'),
(27, 1, 9, 1, '2016-03-21 00:43:44'),
(28, 1, 9, 1, '2016-03-21 00:43:44'),
(29, 1, 10, 1, '2016-03-21 00:46:04'),
(30, 1, 10, 1, '2016-03-21 00:46:04'),
(31, 1, 10, 1, '2016-03-21 00:46:04'),
(32, 1, 11, 1, '2016-03-21 00:47:05'),
(33, 1, 11, 1, '2016-03-21 00:47:05'),
(34, 1, 11, 1, '2016-03-21 00:47:05'),
(21, 2, 8, 1, '2016-03-21 00:40:28'),
(22, 4, 8, 1, '2016-03-21 00:40:28'),
(23, 1, 9, 1, '2016-03-21 00:43:44'),
(24, 1, 9, 1, '2016-03-21 00:43:44'),
(25, 1, 9, 1, '2016-03-21 00:43:44'),
(26, 1, 9, 1, '2016-03-21 00:43:44'),
(20, 1, 8, 1, '2016-03-21 00:40:28'),
(35, 1, 11, 1, '2016-03-21 00:47:05'),
(36, 1, 11, 1, '2016-03-21 00:47:05'),
(37, 2, 11, 1, '2016-03-21 00:47:05'),
(38, 2, 11, 1, '2016-03-21 00:47:05'),
(39, 2, 11, 1, '2016-03-21 00:47:05'),
(40, 1, 12, 1, '2016-03-21 16:50:33'),
(41, 1, 12, 1, '2016-03-21 16:50:33'),
(42, 1, 12, 1, '2016-03-21 16:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `message`) VALUES
(7, 'test1', 'zgp@gmail.com', 'hi nice to meet you my name is blah blahthis line was 3rd line and this is the last line (5th)');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pw` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pw`, `created`) VALUES
(12, 'HTML', 'html@itsalie.com', 'yes', '2016-02-17 23:52:12'),
(9, 'harry', 'zgp7777@gmail.com', '1234', '2016-02-17 19:22:52'),
(10, 'customer1', 'kee@yke.com', '555', '2016-02-17 20:02:08'),
(11, 'customer2', 'hha@ddp.com', 'hahahah', '2016-02-17 21:42:22'),
(13, 'mouse', '7777@gmi.com', '111', '2016-02-18 09:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ID` int(11) NOT NULL,
  `SKU` varchar(100) NOT NULL,
  `item_price` decimal(15,2) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `SKU`, `item_price`, `description`) VALUES
(1, 'sk-2843y', '4.99', 'Rose'),
(2, 'sk-327623z', '3.99', 'Iris'),
(3, 'sk-438s3x', '4.59', 'Lily'),
(4, 'sk-yx28s9', '5.99', 'Sunflower\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
 ADD PRIMARY KEY (`ID`), ADD KEY `product_id` (`product_id`), ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
