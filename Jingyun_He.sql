-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2020 at 08:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Jingyun_He`
--
CREATE DATABASE IF NOT EXISTS `Jingyun_He` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Jingyun_He`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `productindex` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `username`, `comment`, `productindex`) VALUES
(1, 'Peter', 'hahhaha', '3'),
(2, 'Peter', 'this is the first test', '3'),
(3, 'Peter', 'this is the first test', '3'),
(4, '', '', ''),
(5, '', '', ''),
(6, 'Peter', 'asked', '3'),
(7, 'gem', 'Second user test', '3'),
(8, 'gem', 'test', '5'),
(9, 'gem', 'second test', '5'),
(10, 'gem', 'first test', '1'),
(11, 'norris', 'safest', '1'),
(12, 'norris', 'a', '1'),
(13, '', 'wafsadf', '6'),
(14, '', 'wafsadf', '6'),
(15, '', 'safdsfvzvd', '6'),
(16, 'hey', 'sfklhgfsk', '1'),
(17, '', 'dvzdbv', '4'),
(18, '', 'dvzdbv', '4'),
(19, '', 'sFC', '4'),
(20, '', 'sFC', '4'),
(21, '', 'C zSvcdsv', '1'),
(22, 'hey', 'zvczs', '1'),
(23, 'hey', 'zvczs', '1'),
(24, 'hey', 'test', '1'),
(25, 'Tian', 'good', '2'),
(26, 'Tian', 'good', '2');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `password`, `address`, `phone`) VALUES
(1, 'gem', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1'),
(2, 'norris', '310dcbbf4cce62f762a2aaa148d556bd', '333', '333'),
(3, 'hey', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1'),
(4, 'Tian', 'c4ca4238a0b923820dcc509a6f75849b', 'TTT Ave', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `teaLeaf` varchar(128) NOT NULL,
  `teaFavor` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `caffine` varchar(128) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `teaLeaf`, `teaFavor`, `image`, `caffine`) VALUES
(1, 'Euealyptus Mist', 'Green', 'Lemon', 'green1.jpg', 'High'),
(2, 'Rhubarb Fizz', 'Green', 'Ginger', 'green2.jpg', 'Low'),
(3, 'Grapefully Yours', 'White', 'Lemon', 'white1.jpg', 'High'),
(4, 'Flamingo Fresca', 'White', 'Ginger', 'white2.jpg', 'Midium'),
(5, 'Pumpkin Chai', 'Black', 'Lemon', 'black1.jpg', 'Low'),
(6, 'Irish Breakfast', 'Black', 'Ginger', 'black2.jpg', 'High'),
(7, 'Tangerine Turmeric', 'Oolong', 'Lemon', 'oolong1.jpg', 'Midium'),
(8, 'Organic GoldenLily', 'Oolong', 'Ginger', 'oolong2.jpg', 'Low');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
