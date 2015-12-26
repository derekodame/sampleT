
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2015 at 08:43 AM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u521606808_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(222) NOT NULL,
  `other_email` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `comment` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1218 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `email`, `other_email`, `name`, `comment`, `time`) VALUES
(1158, 'Derek.odame@hotmail.com', 'gcmt', 'Derek Odame', 'juggling juggling juggling juggling juggling juggling juggling juggling juggling juggling juggling juggling juggling juggling <br />\n', 1370127616),
(1159, 'Derek.odame@hotmail.com', 'gcmt', 'Derek Odame', 'r', 1370551938),
(1160, 'Derek.odame@hotmail.com', 'dddd@hotmail.com', 'Derek Odame', 'hi ama<br />\n', 1370701760),
(1161, 'Derek.odame@hotmail.com', 'dddd@hotmail.com', 'Derek Odame', 'long time no c<br />\n', 1370701767),
(1162, 'jennifer@hot.com', 'dddd@hotmail.com', 'Ama Asam', 'yo!', 1370701816),
(1163, 'dddd@hotmail.com', 'jennifer@hot.com', 'Benjamin Benjamin', 'hi ama', 1370701955),
(1164, 'jennifer@hot.com', 'gcmt', 'Ama Asam', 'sdfsdf', 1370875075),
(1165, 'Derek.odame@hotmail.com', 'gcmt', 'Derek Odame', 'sdfsdf', 1370875081),
(1166, 'jennifer@hot.com', 'gcmt', 'Ama Asam', 'ssdfsdf', 1370875315),
(1167, 'Derek.odame@hotmail.com', 'Kofi@yahoo.com', 'Derek Odame', 'yo, derek<br />\n', 1371043864),
(1168, 'Kofi@yahoo.com', 'Derek.odame@hotmail.com', 'Kofi Otoo', 'yo!<br />\n', 1371043885),
(1169, 'Kofi@yahoo.com', 'Derek.odame@hotmail.com', 'Kofi Otoo', 'what up?<br />\n', 1371043887),
(1170, 'Derek.odame@hotmail.com', 'Kofi@yahoo.com', 'Derek Odame', 'nothing much ooo<br />\n', 1371043908),
(1171, 'Kofi@yahoo.com', 'Derek.odame@hotmail.com', 'Kofi Otoo', 'kk<br />\n', 1371043914),
(1172, 'Kofi@yahoo.com', 'gcmt', 'Kofi Otoo', 'sfsd', 1371176908),
(1173, 'Kofi@yahoo.com', 'gcmt', 'Kofi Otoo', 'what the fuck', 1371176914),
(1174, 'dddd@hotmail.com', 'gcmt', 'Benjamin who', 'what the fuck what?<br />\n', 1371176976),
(1175, 'Kofi@yahoo.com', 'gcmt', 'Kofi Otoo', 'sdfsd', 1371177085),
(1176, 'dddd@hotmail.com', 'gcmt', 'Benjamin who', 'what?<br />\n', 1371177169),
(1177, 'Kofi@yahoo.com', 'gcmt', 'Kofi Otoo', 'what,what?<br />\n', 1371177180),
(1178, 'dddd@hotmail.com', 'gcmt', 'Benjamin who', 'anyone there<br />\n', 1374578520),
(1179, 'Derek.odame@hotmail.com', 'gcmt', 'Derek Odame', 'ddkdf<br />\n', 1374591847),
(1180, 'dddd@hotmail.com', 'Derek.odame@hotmail.com', 'Benjamin who', 'hi derek', 1374611190),
(1181, 'myhuehuynh0105@yahoo.com', 'Derek.odame@hotmail.com', 'hue huynh', 'hi dear Derek. Nice to meet you <br />\n', 1374616867),
(1182, 'Derek.odame@hotmail.com', 'myhuehuynh0105@yahoo.com', 'Derek Odame', 'Nice to meet u too', 1374617003),
(1183, 'Derek.odame@hotmail.com', 'idellatedoe@yahoo.com', 'Derek Odame', 'hi<br />\n', 1375103426),
(1184, 'idellatedoe@yahoo.com', 'Derek.odame@hotmail.com', 'Idella Tedoe', 'how u you doing<br />\n', 1375103462),
(1185, 'Derek.odame@hotmail.com', 'idellatedoe@yahoo.com', 'Derek Odame', 'you can press enter when done<br />\n', 1375103472),
(1186, 'idellatedoe@yahoo.com', 'Derek.odame@hotmail.com', 'Idella Tedoe', 'ok<br />\n', 1375103485),
(1187, 'danielotoo76@yahoo.com', 'idellatedoe@yahoo.com', 'daniel otoo', 'hi<br />\n', 1375524901),
(1188, 'danielotoo76@yahoo.com', 'idellatedoe@yahoo.com', 'daniel otoo', 'hi<br />\n', 1375524902),
(1189, 'dddd@hotmail.com', 'danielotoo76@yahoo.com', 'Benjamin who', 'hi<br />\n', 1375542614),
(1190, 'dddd@hotmail.com', 'myhuehuynh0105@yahoo.com', 'Benjamin Who', 'hi<br />\n', 1377725758),
(1191, 'Derek.odame@hotmail.com', 'lovelystar010%@yahoo.com', 'Derek Odame', 'hi', 1378240591),
(1192, 'Derek.odame@hotmail.com', 'josindeinfor@yahoo.com', 'Derek Odame', 'hi<br />\n', 1379383731),
(1193, 'Derek.odame@hotmail.com', 'dzekona@yahoo.com', 'Derek Odame', 'hey<br />\n', 1387375784),
(1194, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'hi<br />\n', 1387407681),
(1195, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'hi dear<br />\n', 1387407855),
(1196, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'hey<br />\n', 1387407867),
(1197, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'how is the site?<br />\n', 1387407875),
(1198, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'cul dear<br />\n', 1387407887),
(1199, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'thanks<br />\n', 1387407899),
(1200, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'dat is great<br />\n', 1387407916),
(1201, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'you upload pic, change color and do a whole lot<br />\n', 1387407937),
(1202, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'i know<br />\n', 1387407942),
(1203, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'ok dear<br />\n', 1387407973),
(1204, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'tanks<br />\n', 1387407987),
(1205, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', ':)<br />\n', 1387408005),
(1206, 'forgivesogbey@yahoo.com', 'Derek.odame@hotmail.com', 'forgive sogbey', 'wat is dat for<br />\n', 1387408048),
(1207, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'a smile<br />\n', 1387408061),
(1208, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'you can now logout, just wanted you to see how the website is. see you on facebook.<br />\n', 1387408151),
(1209, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 'Derek Odame', 'im logging out know<br />\n', 1387408168),
(1210, 'Derek.odame@hotmail.com', 'gcmt', 'Derek Odame', 'hi<br />\n<br />\n', 1387696462),
(1211, 'Derek.odame@hotmail.com', 'Kofi@yahoo.com', 'Derek Odame', 'yo<br />\n', 1388683268),
(1212, 'Derek.odame@hotmail.com', 'Kofi@yahoo.com', 'Derek Odame', 'what up ma boi<br />\n', 1388683291),
(1213, 'Derek.odame@hotmail.com', 'lutterodtgeorge@yahoo.com', 'Derek Odame', 'type this site<br />\nstecks.bugs3.com/pages/money.php', 1390854846),
(1214, 'Derek.odame@hotmail.com', 'lutterodtgeorge@yahoo.com', 'Derek Odame', '&quot;www.type this site<br />\nstecks.bugs3.com/pages/money.php<br />\n', 1390854893),
(1215, 'Derek.odame@hotmail.com', 'lutterodtgeorge@yahoo.com', 'Derek Odame', 'www.stecks.bugs3.com/pages/money.php <br />\n<br />\n', 1390854934),
(1216, 'Derek.odame@hotmail.com', 'lutterodtgeorge@yahoo.com', 'Derek Odame', 'yo!<br />\n', 1391013155),
(1217, 'Derek.odame@hotmail.com', '', 'Derek Odame', '', 1423883508);

-- --------------------------------------------------------

--
-- Table structure for table `chat_new`
--

CREATE TABLE IF NOT EXISTS `chat_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(222) NOT NULL,
  `other_email` varchar(222) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `chat_new`
--

INSERT INTO `chat_new` (`id`, `email`, `other_email`, `number`) VALUES
(14, 'Derek.odame@hotmail.com', 'Kofi@yahoo.com', 2),
(4, 'Derek.odame@hotmail.com', 'idellatedoe@yahoo.com', 2),
(7, 'dddd@hotmail.com', 'danielotoo76@yahoo.com', 1),
(12, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 10),
(10, 'Derek.odame@hotmail.com', 'josindeinfor@yahoo.com', 1),
(16, 'Derek.odame@hotmail.com', 'lutterodtgeorge@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(333) NOT NULL,
  `comment` text NOT NULL,
  `date` varchar(222) NOT NULL,
  `likee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=964 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `date`, `likee`) VALUES
(923, 'Kofi Otoo', 'Kofi@yahoo.com', 'nd any computer classes in high school is that right? I want to get my bachelors degree in it. anyway how do I start as said below i just get into one of those classes and stay into it for what 4 years and thats itï»¿ or are there some prerequisite classes what? I really need your help and your is greatly appreciated thnx ', 'June 11, 2013', 1),
(941, 'Idella Tedoe', 'idellatedoe@yahoo.com', 'hi<br />\n ', 'July 29, 2013', 1),
(936, 'Derek Odame', 'Derek.odame@hotmail.com', 'I love programming and maths,and i am not about to quit ', 'July 23, 2013', 0),
(950, 'Derek_g Odame', 'derek.odame@gmail.com', 'the shortcur fo close alt + f4 ', 'October 15, 2013', 1),
(962, 'Derek Odame', 'Derek.odame@hotmail.com', 'What going on ', 'April 16, 2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_new`
--

CREATE TABLE IF NOT EXISTS `comment_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `other_email` varchar(222) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `comment_new`
--

INSERT INTO `comment_new` (`id`, `comment_id`, `email`, `other_email`, `number`) VALUES
(69, 936, 'jennifer@hot.com', 'Derek.odame@hotmail.com', 1),
(70, 953, 'Derek.odame@hotmail.com', 'forgivesogbey@yahoo.com', 2),
(71, 947, '', '', 1),
(72, 947, 'Derek.odame@hotmail.com', '', 1),
(73, 950, 'Derek.odame@hotmail.com', 'derek.odame@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itserve1`
--

CREATE TABLE IF NOT EXISTS `itserve1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `age` varchar(55) NOT NULL,
  `date` varchar(55) NOT NULL,
  `code` varchar(55) NOT NULL,
  `picture` varchar(222) NOT NULL,
  `picturehide` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `itserve1`
--

INSERT INTO `itserve1` (`id`, `firstname`, `lastname`, `email`, `password`, `occupation`, `sex`, `age`, `date`, `code`, `picture`, `picturehide`, `online`, `about`) VALUES
(1, 'Derek', 'Odame', 'Derek.odame@hotmail.com', 'Stecks0298', 'Programmer', 'Male', 'Above 18', 'January 03, 2013', '408269455f78f1355681e814c317679a', 'Derek.odame@hotmail.com.png', 1, 1, 'don''t know about you, dude.'),
(2, 'Kofi', 'Otoo', 'Kofi@yahoo.com', 'Stecks0298', 'Farmer', 'Male', 'Above 18', 'January 03, 2013', 'fe09f091f5c661afdf1f5069a4136735', 'Kofi@yahoo.com.jpeg', 1, 1, ''),
(4, 'Ama', 'Asam', 'jennifer@hot.com', 'Stecks0298', 'Student', 'Female', '', 'January 04, 2013', 'ce6f311f2548c0e40fbd9beaaa288d32', 'jennifer@hot.com.jpeg', 1, 0, ''),
(45, 'Benjamin', 'Who', 'dddd@hotmail.com', 'dddd', 'Dddd', 'Male', 'Above 18', 'May 12, 2013', 'c76e0311deedd13a30ae50f3cf210245', 'dddd@hotmail.com.jpeg', 1, 0, ''),
(44, 'Wee', 'Best', 'ssss@hotmail.com', 'sssss', 'farmer', 'Female', '', 'April 23, 2013', '58aeb181265efefda62c3475bec08882', '', 0, 0, ''),
(61, 'Kingsley', 'Nunoo', 'Knelsonn7@yahoo.com', 'knelsonn', 'student', 'Male', 'Above 18', 'April 04, 2014', 'e75d82e95064175d608195e71356cee6', '', 0, 0, ''),
(48, 'Idella', 'Tedoe', 'idellatedoe@yahoo.com', 'swoopes22', 'Student', 'Female', 'Above 18', 'July 29, 2013', '5c8ef6ffb0e0f80e95c127473029150a', '', 0, 0, ''),
(49, 'Daniel', 'Otoo', 'danielotoo76@yahoo.com', 'messimay', 'Student', 'Male', 'Above 18', 'August 03, 2013', 'afd286b03acc77b3481bd145f2f9aac1', 'danielotoo76@yahoo.com.jpeg', 1, 0, ''),
(50, 'Derek_g', 'Odame', 'derek.odame@gmail.com', 'stecks0298', 'Any', 'Male', 'Above 18', 'August 21, 2013', 'b2238202daf1b6236f7cc03494ebc18c', '', 0, 0, ''),
(55, 'forgive', 'sogbey', 'forgivesogbey@yahoo.com', 'stecks', 'student', 'Female', 'Above 18', 'December 18, 2013', '4875dfcfa9f0f6bbfbf4bd9129f12826', '', 0, 0, ''),
(54, 'Kennedy ', 'boadi Antwi ', 'dzekona@yahoo.com', 'gonnty', 'student ', 'Male', 'Above 18', 'December 18, 2013', 'c6afe431b88085b82fc2f0a6ccaa412f', '', 0, 0, ''),
(57, 'philip', 'quayson', 'pilquash@yahoo.com', 'Throneroom1', 'insurance', 'Male', 'Above 18', 'January 31, 2014', '5f8b33fda30fa8bc39054c79e2d61757', '', 0, 0, ''),
(56, 'george', 'lutterodt', 'lutterodtgeorge@yahoo.com', '0000', 'businessman', 'Male', 'Above 18', 'January 27, 2014', 'a6652451b790244b65c3c480e6a1d0ed', '', 0, 0, ''),
(58, 'sharon', 'lifty', 'briggsdelia@yahoo.com', 'Spears11', 'doctor', 'Female', 'Above 18', 'February 08, 2014', 'd6b43058c9d911ef284b742f78039f9b', '', 0, 0, ''),
(60, 'Anh', 'Lieu', 'ryouyoushunei@yahoo.com', 'luconmapdit1148', 'Student', 'Female', 'Above 18', 'March 31, 2014', 'a3d0d754645d9238e89a7bc0c0d71c08', '', 0, 0, ''),
(62, 'Daniel', 'Otoo', 'danieotoo76@yahoo.com', 'messimay', 'Student', 'Male', 'Above 18', 'November 24, 2014', 'a6f077724a687c47fd0100fa2d3bc501', '', 0, 0, ''),
(63, 'xxxx', 'xxxx', 'xxxx@xxx.com', 'xxxxxx', 'xxxxxx', 'Male', 'Above 18', 'February 09, 2015', 'b75c4fd66783b919ffff3dc34fdd0b7e', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `liketb`
--

CREATE TABLE IF NOT EXISTS `liketb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `liked` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1090 ;

--
-- Dumping data for table `liketb`
--

INSERT INTO `liketb` (`id`, `user_id`, `liked`) VALUES
(1070, 1, 941),
(1086, 1, 950),
(1085, 1, 923),
(1088, 1, 962);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `otheremail` varchar(222) NOT NULL,
  `othername` varchar(222) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `pannel`
--

CREATE TABLE IF NOT EXISTS `pannel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(222) NOT NULL,
  `bgcolor` varchar(222) NOT NULL,
  `sessioncolor` varchar(222) NOT NULL,
  `sessionbgcolor` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `pannel`
--

INSERT INTO `pannel` (`id`, `email`, `bgcolor`, `sessioncolor`, `sessionbgcolor`) VALUES
(28, 'xxxx@hotmail.com', '', 'sessioncolor', 'sessionbodycolor'),
(29, 'first@hotmail.com', '', 'sessioncolor', 'sessionbodycolor'),
(27, 'ssss@hotmail.com', '#730', 'sessioncolor', 'sessionbodycolor'),
(26, 'Kofi@yahoo.com', '#289', 'sessioncolor', 'sessionbodycolor'),
(25, 'dddd@hotmail.com', 'purple', 'sessioncolor', 'sessionbodycolor'),
(24, 'Derek.odame@hotmail.com', 'Peru', 'sessioncolor', 'sessionbodycolor'),
(23, 'jennifer@hot.com', 'MediumSeaGreen', 'sessioncolor', 'sessionbodycolor'),
(30, 'myhuehuynh0105@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(31, 'idellatedoe@yahoo.com', 'green', 'sessioncolor', 'sessionbodycolor'),
(32, 'danielotoo76@yahoo.com', 'blue', 'sessioncolor', 'sessionbodycolor'),
(33, 'derek.odame@gmail.com', 'Session_Color', 'sessioncolor', 'sessionbodycolor'),
(34, 'lovelystar010%@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(35, 'josindeinfor@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(36, 'sx.@hisks.xom', 'black', 'sessioncolor', 'sessionbodycolor'),
(37, 'dzekona@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(38, 'forgivesogbey@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(39, 'lutterodtgeorge@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(40, 'pilquash@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(41, 'briggsdelia@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(42, 'derek.odwame@hotmail.com', 'Session_Color', 'sessioncolor', 'sessionbodycolor'),
(43, 'ryouyoushunei@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(44, 'Knelsonn7@yahoo.com', '', 'sessioncolor', 'sessionbodycolor'),
(45, 'danieotoo76@yahoo.com', 'OrangeRed', 'sessioncolor', 'sessionbodycolor');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `replycomment` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `userid`, `name`, `email`, `replycomment`, `time`) VALUES
(62, 923, 'Derek Odame', 'Derek.odame@hotmail.com', 'hi<br />\n', 1375714666),
(32, 24, 'Ama Asam', 'jennifer@hot.com', 'http://127.0.0.1/ITserve/pages/homee.phphttp://127.0.0.1/ITserve/pages/homee.phphttp://127.0.0.1/ITserve/pages/homee.phphttp://127.0.0.1/ITserve/pages/homee.php', 1370876195),
(33, 24, 'Derek Odame', 'Derek.odame@hotmail.com', 'http://127.0.0.1/ITserve/pages/homee.phphttp://127.0.0.1/ITserve/pages/homee.php', 1370876211),
(73, 950, 'Kofi Otoo', 'Kofi@yahoo.com', 'yep, will try that', 1384712481),
(74, 950, 'Derek Odame', 'Derek.odame@hotmail.com', 'df', 1385234783),
(75, 936, 'Ama Asam', 'jennifer@hot.com', 'Good for you<br />\n', 1385623779),
(80, 950, 'Derek Odame', 'Derek.odame@hotmail.com', 'good<br />\n', 1425747505);

-- --------------------------------------------------------

--
-- Table structure for table `ste`
--

CREATE TABLE IF NOT EXISTS `ste` (
  `PersonID` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
