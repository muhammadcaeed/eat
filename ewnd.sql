-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 11:17 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ewnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cover` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_res_id` (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `res_id`, `cat_name`, `cover`) VALUES
(1, 1, 'Promotions', 'images/kfc/cover.jpg'),
(2, 1, 'Everyday Affordable Value', 'images/kfc/everyday.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cat_id`, `item_name`, `price`, `description`) VALUES
(1, 1, 'Big Family Festival 1 ', 1695, '3 Value burgers, 3 zinger burgers, 6 pieces chicken & 1 - 1.5 litre drink.'),
(2, 1, 'Big Family Festival 2', 1995, '6 Zinger burgers, 6 pieces chicken & 1.5 litre drink.'),
(3, 2, 'Chicken Chawal', 235, '1 Piece chicken, Arabian rice, Vietnamese dip sauce & 1 soft drink'),
(4, 2, 'Chicken Chawal 2', 1333, '1 Piece chicken, Arabian rice, Vietnamese dip sauce & 1 soft drink');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`) VALUES
(1, 'kfc'),
(2, 'pizzahut'),
(3, '14thstreetpizza'),
(4, 'ginsoy'),
(5, 'pizzainc'),
(6, 'burgerinc'),
(7, 'spice'),
(8, 'hotnrollbarbq'),
(9, 'pizzacrust'),
(10, 'daynightpizza'),
(11, 'italianopizza'),
(12, 'californiapizza'),
(13, 'lalqila'),
(14, 'kfc'),
(15, 'dunkindonuts'),
(16, 'pennypizza'),
(17, 'subway'),
(18, 'pizzamax'),
(19, 'dominospizza'),
(20, 'thenewyorkpizza'),
(21, 'aftereight');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `phone`, `time`, `date`) VALUES
(1, 'farhan', 'google it', 330, '04:04:00', '2015-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `postname` varchar(50) NOT NULL,
  PRIMARY KEY (`postid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `postname`) VALUES
(1, 1, 'saeed''s post 1'),
(2, 1, 'saeed''s post 2'),
(3, 2, 'shoaib''s post 1'),
(4, 2, 'shoaib''s post 2'),
(5, 2, 'shoaib''s post 3');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(60) NOT NULL,
  `address` varchar(65) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `cover` varchar(65) NOT NULL,
  `type` varchar(50) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `res_name`, `address`, `thumbnail`, `cover`, `type`, `login_id`) VALUES
(1, 'KFC', 'Plot D-14, Block 2,\nNorth Nazimabad', 'images/thumbnails/kfc.png', 'images/kfc/cover.jpg', 'Fast Food', 1),
(2, 'Pizza Hut', '', '', '', 'Pizza', 2),
(3, '14th Street Pizza', '', 'images/thumbnails/14thstreetpizza.jpg', '', 'Pizza', 3),
(4, 'Ginsoy', '', '', '', '', 4),
(5, 'Pizza Inc', '', '', '', '', 5),
(6, 'Burger Inc', '', '', '', '', 6),
(7, 'Spice', '', '', '', '', 7),
(8, 'Hot n Roll BBQ', '', '', '', '', 9),
(9, 'Pizza Crust', '', '', '', '', 9),
(10, 'Day Night Pizza', '', '', '', '', 10),
(11, 'Italiano Pizza', '', '', '', '', 11),
(12, 'California Pizza', '', '', '', '', 12),
(13, 'Lal Qila', '', '', '', '', 13),
(14, 'Red Apple', '', '', '', '', 14),
(15, 'Dunkin Donuts', '', '', '', '', 15),
(16, 'Penny Pizza', '', '', '', '', 16),
(17, 'Subway', '', '', '', '', 17),
(18, 'Pizza Max', '', '', '', '', 18),
(19, 'Dominos Pizza', '', '', '', '', 19),
(20, 'The Newyork Pizza', '', '', '', '', 20),
(21, 'After Eight', '', '', '', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`) VALUES
(1, 'saeed'),
(2, 'shoaib'),
(3, 'farhan'),
(4, 'fahad'),
(5, 'rabeet');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_res_id` FOREIGN KEY (`res_id`) REFERENCES `restaurant` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk_order_item` FOREIGN KEY (`id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_order_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `fk_login_id` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
