-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2015 at 03:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `picture` varchar(222) NOT NULL,
  `online` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`, `date`, `picture`, `online`) VALUES
(26, 'kofi ', 'kofi@gmail.com', 'stecks0298', 'November 27, 2015', '', ''),
(27, 'derekodame ', 'derek.odame@hotmail.com', 'stecks0298', 'November 27, 2015', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `picture` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `workschedule`
--

CREATE TABLE IF NOT EXISTS `workschedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `uniquee` varchar(222) NOT NULL,
  `day` varchar(222) NOT NULL,
  `hr` varchar(222) NOT NULL,
  `min` varchar(22) NOT NULL,
  `position` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3710 ;

--
-- Dumping data for table `workschedule`
--

INSERT INTO `workschedule` (`id`, `user`, `email`, `uniquee`, `day`, `hr`, `min`, `position`) VALUES
(3704, '26', 'kofi', '1122015', 'pm', '1', '00', 'Salad'),
(3705, '26', 'kofi', '3122015', 'pm', '4', '30', 'Grill'),
(3706, '26', 'kofi', '2122015', 'am', '4', '30', 'Fry'),
(3707, '26', 'kofi', '5122015', 'am', '8', '00', 'Salad'),
(3708, '26', 'kofi', '6122015', 'pm', '10', '00', 'Fry'),
(3709, '27', 'derekodame', '26122015', 'pm', '12', '00', 'Fry');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
