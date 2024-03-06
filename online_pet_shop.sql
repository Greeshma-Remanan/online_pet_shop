-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2022 at 04:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_pet_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `accid` int(11) NOT NULL AUTO_INCREMENT,
  `accesname` varchar(30) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `stocks` varchar(200) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`accid`, `accesname`, `desc`, `stocks`, `amount`, `image`) VALUES
(9, 'Dog Feeding Bowl.', 'Long-lasting, food grade stainless steel', '2', '1779', 'dogfeedingbowl.jpg'),
(10, 'Persian Cat Belt.', 'High quality and reduce wear and tear, avoid scratches.', '6', '1500', 'catbelt.jpg'),
(11, 'Bird cage', '	The durable metal cage uses a non-toxic metallic finish.', '5', '1499', 'birds cage.jpg'),
(22, 'Dog Shampoo', '	This is an anti-microbial, anti-fungal moisturizing shampoo. 200ml', '10', '455', 'dogshampoo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE IF NOT EXISTS `addcart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `accid` int(11) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cartid`, `userid`, `accid`) VALUES
(3, 2, 11),
(4, 5, 11),
(11, 5, 10),
(12, 5, 9),
(13, 5, 22);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminname` varchar(20) NOT NULL,
  `passcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `passcode`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `userid`, `pid`, `amount`, `qty`, `total`, `date`) VALUES
(1, 1, 1, '12000', '1', '12000', ''),
(2, 2, 4, '5678', '1', '5678', ''),
(3, 8, 7, '15000', '1', '15000', ''),
(4, 2, 7, '12000', '1', '12000', ''),
(5, 2, 7, '12000', '1', '12000', ''),
(6, 9, 12, '1233', '1', '1233', ''),
(7, 2, 7, '18000', '1', '18000', ''),
(8, 2, 7, '18000', '1', '18000', ''),
(9, 2, 7, '18000', '1', '18000', ''),
(10, 2, 8, '20000', '1', '20000', ''),
(11, 2, 10, '3000', '1', '3000', ''),
(12, 2, 14, '15000', '1', '15000', ''),
(13, 5, 10, '3100', '1', '3100', ''),
(14, 3, 10, '3100', '1', '3100', ''),
(15, 5, 9, '20000', '2', '40000', ''),
(16, 5, 14, '15000', '1', '15000', ''),
(17, 5, 13, '25000', '1', '25000', '22-07-25 20:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `book_accessories`
--

CREATE TABLE IF NOT EXISTS `book_accessories` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `accid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `book_id` (`book_id`),
  KEY `book_id_2` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `book_accessories`
--

INSERT INTO `book_accessories` (`book_id`, `accid`, `user_id`, `amount`, `qty`, `total`) VALUES
(1, 9, 2, 455, 1, 455),
(2, 11, 2, 1750, 1, 1750),
(3, 11, 2, 1750, 1, 1750),
(4, 9, 9, 455, 1, 455),
(5, 9, 2, 455, 10, 4550),
(6, 9, 2, 455, 10, 4550),
(8, 10, 2, 279, 1, 279),
(18, 22, 2, 366, 1, 366),
(19, 22, 2, 366, 1, 366),
(20, 22, 2, 366, 1, 366),
(21, 22, 2, 366, 1, 366),
(22, 9, 2, 1779, 2, 3558),
(23, 9, 2, 1779, 2, 3558),
(24, 9, 2, 1779, 1, 1779),
(25, 9, 2, 1779, 1, 1779),
(26, 11, 5, 1750, 1, 1750),
(27, 11, 5, 1750, 1, 1750),
(28, 22, 2, 366, 1, 366),
(29, 9, 3, 1779, 1, 1779),
(30, 22, 5, 455, 2, 910);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `types` varchar(200) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `stock` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pid`, `pname`, `types`, `desc`, `stock`, `amount`, `image`) VALUES
(9, 'Siberian Husky', 'DOG', 'The Siberian Husky is a medium-sized working sled dog breed.', '4', '20000', 'husky.jpg'),
(10, 'Cockatiel.', 'BIRDS', '	They are prized as household pets and companion parrots throughout the world and are relatively eas', '2', '3100', 'cocktail.jpg'),
(13, 'Rottweiler', 'DOG', '	The Rottweiler is a breed of domestic dog, regarded as medium-to-large or large.', '3', '25000', 'rottweiler-puppy.jpg'),
(14, 'Argente Rabbits', 'RABBIT', 'The ArgentÃ© rabbit is one of the oldest breeds of French show rabbits. ', '1', '15000', 'argente-brun-baby-rabbit.jpg'),
(15, 'Persian Cat.', 'CAT', 'The persian cat is a breed of domestic cat.', '5', '3000', 'Persiancat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sellername` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `sellername`, `address`, `email`, `mobile`, `aadhar`, `password`, `status`) VALUES
(1, 'Ajith C G', 'bgsc', 'a@gmail.com', '2345678908', '234567899876', 'ajith1', 1),
(3, 'alb', 'qwerty', 'alb@gmail.com', '8595222222', '111111111111', 'zxcvbn', 1),
(11, 'aashi', 'vbnm', 'ashi@gmail.com', '9988776655', '123456789098', 'aashi', 1),
(13, 'Akhila', 'ABC House', 'akhila@gmail.com', '8978675456', '1234567865ih', 'akhila1', 1),
(16, 'Karthika', 'hscg', 'k@gmail.com', '5655678909', '234567890987', 'karthu1', 0),
(17, 'ghh', 'nbhh', 'abc@gmail.com', '2345678900', '234567899988', 'qwerty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `address`, `email`, `mobile`, `password`) VALUES
(1, 'greeshma', 'vbhb', 'g@gmail.com', '1234567889', '123456'),
(3, 'Honey', 'gghfsa', 'honey@gmail.com', '1234567898', '112222'),
(5, 'sibin c', 'sib h', 'sib@gmail.com', '1234567890', 'sib123'),
(6, 'resma', 'vgsa', 'res@gmail.com', '5566778887', 'zxcvb'),
(7, 'v', 'ertyuiop[', 'd@gmail.com', '1234567899', '123456'),
(8, 'hi jj', '655', 'yy@gmil.com', '5756566565', '6776767676');
