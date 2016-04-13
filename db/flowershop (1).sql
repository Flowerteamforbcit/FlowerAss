-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2016 at 05:54 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

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
(14, 'started', '2016-03-28 10:23:01', '0.00'),
(15, 'cancelled', '2016-03-31 03:14:17', '0.00'),
(16, 'checked out', '2016-03-31 04:03:58', '0.00'),
(17, 'checked out', '2016-03-31 04:04:06', '0.00'),
(18, 'cancelled', '2016-03-31 04:54:30', '0.00'),
(19, 'checked out', '2016-03-31 05:07:03', '0.00'),
(20, 'cancelled', '2016-03-31 05:07:31', '0.00'),
(21, 'cancelled', '2016-03-31 05:14:55', '0.00'),
(22, 'cancelled', '2016-03-31 05:17:07', '0.00'),
(23, 'checked out', '2016-03-31 05:44:03', '0.00'),
(24, 'cancelled', '2016-03-31 05:53:22', '0.00'),
(25, 'cancelled', '2016-03-31 05:54:41', '0.00'),
(26, 'checked out', '2016-03-31 05:54:46', '0.00'),
(27, 'cancelled', '2016-03-31 05:58:25', '0.00'),
(28, 'cancelled', '2016-03-31 06:37:16', '0.00'),
(29, 'cancelled', '2016-03-31 07:21:43', '0.00'),
(30, 'checked out', '2016-03-31 08:03:55', '0.00'),
(31, 'cancelled', '2016-03-31 08:08:19', '0.00'),
(32, 'started', '2016-03-31 08:19:23', '0.00'),
(33, 'started', '2016-03-31 16:08:32', '0.00'),
(34, 'started', '2016-03-31 16:15:44', '0.00'),
(35, 'cancelled', '2016-04-01 11:09:17', '0.00'),
(36, 'started', '2016-04-06 16:22:01', '0.00'),
(37, 'checked out', '2016-04-07 04:50:38', '0.00'),
(38, 'checked out', '2016-04-07 16:58:40', '0.00'),
(39, 'checked out', '2016-04-10 05:35:41', '0.00'),
(40, 'checked out', '2016-04-13 05:41:09', '0.00'),
(41, 'cancelled', '2016-04-13 05:46:37', '0.00'),
(42, 'started', '2016-04-13 05:47:38', '0.00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

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
(42, 1, 12, 1, '2016-03-21 16:50:33'),
(43, 1, 16, 1, '2016-03-31 04:04:00'),
(44, 1, 17, 1, '2016-03-31 04:15:58'),
(45, 2, 17, 1, '2016-03-31 04:15:58'),
(46, 2, 17, 1, '2016-03-31 04:15:58'),
(47, 2, 17, 1, '2016-03-31 04:15:58'),
(48, 2, 17, 1, '2016-03-31 04:15:58'),
(49, 4, 17, 1, '2016-03-31 04:15:58'),
(50, 1, 17, 1, '2016-03-31 04:15:58'),
(51, 1, 17, 1, '2016-03-31 04:15:58'),
(52, 3, 17, 1, '2016-03-31 04:15:58'),
(53, 3, 19, 1, '2016-03-31 05:07:20'),
(54, 4, 19, 1, '2016-03-31 05:07:20'),
(55, 1, 23, 1, '2016-03-31 05:53:21'),
(56, 1, 23, 1, '2016-03-31 05:53:21'),
(57, 1, 23, 1, '2016-03-31 05:53:21'),
(58, 2, 23, 1, '2016-03-31 05:53:21'),
(59, 2, 23, 1, '2016-03-31 05:53:21'),
(60, 2, 26, 1, '2016-03-31 05:54:50'),
(61, 1, 26, 1, '2016-03-31 05:54:50'),
(62, 4, 30, 1, '2016-03-31 08:05:57'),
(63, 4, 30, 1, '2016-03-31 08:05:57'),
(64, 4, 30, 1, '2016-03-31 08:05:57'),
(65, 4, 30, 1, '2016-03-31 08:05:57'),
(66, 4, 30, 1, '2016-03-31 08:05:57'),
(67, 4, 30, 1, '2016-03-31 08:05:57'),
(68, 4, 30, 1, '2016-03-31 08:05:57'),
(69, 4, 30, 1, '2016-03-31 08:05:57'),
(70, 2, 30, 1, '2016-03-31 08:05:57'),
(71, 1, 30, 1, '2016-03-31 08:05:57'),
(72, 3, 30, 1, '2016-03-31 08:05:57'),
(73, 1, 37, 1, '2016-04-07 06:37:02'),
(74, 1, 37, 1, '2016-04-07 06:37:02'),
(75, 1, 38, 1, '2016-04-07 16:58:51'),
(76, 1, 38, 1, '2016-04-07 16:58:51'),
(77, 1, 38, 1, '2016-04-07 16:58:51'),
(78, 1, 38, 1, '2016-04-07 16:58:51'),
(79, 1, 39, 1, '2016-04-10 05:35:49'),
(80, 1, 39, 1, '2016-04-10 05:35:49'),
(81, 1, 39, 1, '2016-04-10 05:35:49'),
(82, 1, 39, 1, '2016-04-10 05:35:49'),
(83, 1, 40, 1, '2016-04-13 05:46:05'),
(84, 1, 40, 1, '2016-04-13 05:46:05'),
(85, 1, 40, 1, '2016-04-13 05:46:05');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pw`, `created`) VALUES
(9, 'harry', 'zgp7777@gmail.com', '1234', '2016-02-17 19:22:52'),
(24, 'test1', 'z@g.c', '123', '2016-04-09 23:21:46'),
(25, 'sss', 'zgp@gm', '123', '2016-04-09 23:30:17'),
(23, 'sqltest', 'emailtest', 'pwtest', '2016-04-09 23:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ID` int(11) NOT NULL,
  `SKU` varchar(100) NOT NULL,
  `item_price` decimal(15,2) NOT NULL,
  `description` varchar(100) NOT NULL,
  `path` varchar(256) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `SKU`, `item_price`, `description`, `path`, `Quantity`) VALUES
(1, 'sk-2843y', '4.99', 'Rose', 'img/f1.jpg', 3),
(2, 'sk-327623z', '3.99', 'Iris', 'img/iris.png', 5),
(3, 'sk-438s3x', '4.59', 'Lily', 'img/lily.jpg', 1),
(4, 'sk-yx28s9', '5.99', 'Sunflower\r\n', 'img/sunflower.jpg', 2);

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
