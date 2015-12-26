-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 02:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psych`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`, `password`, `date`) VALUES
(13, 'derek', 'odame', 'derek.odame@gmail.com', 'cd6c7dc9217fcb34a6e94e2205104b31', '  December 20,2015'),
(14, 'kwame', 'adom', 'kwame@yahoo.com', 'e571235c0731868be23d44535115f593', '  December 20,2015'),
(15, 'derek', 'sdfsdf', 'derek.odame@gmail.comf', 'af15d5fdacd5fdfea300e88a8e253e82', '  December 20,2015');

-- --------------------------------------------------------

--
-- Table structure for table `dropbox`
--

CREATE TABLE IF NOT EXISTS `dropbox` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `label` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groupt`
--

CREATE TABLE IF NOT EXISTS `groupt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dropbox_id` int(11) NOT NULL,
  `age` varchar(222) NOT NULL,
  `Stage of change` varchar(222) NOT NULL,
  `Symptoms and disorders` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `linkgroup`
--

CREATE TABLE IF NOT EXISTS `linkgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(222) NOT NULL,
  `treatment,Degree of evidence` varchar(222) NOT NULL,
  `Basis for evidence` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `a` varchar(222) NOT NULL,
  `b` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `a`, `b`) VALUES
(43, 'Book1.xlsx', 'sdf'),
(44, 'Book1.xlsx', 'sdfsd'),
(46, 'Book1.xlsx', 'kojo''s file');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
