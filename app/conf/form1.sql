-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2017 at 05:28 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `form1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE IF NOT EXISTS `cookies` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `hash` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`id`, `hash`) VALUES
(1, 'yr?"ãhñÄA#—$V¼]é±%feGVu''Fd Æ'),
(2, 'WŠMQa}?@2tç>Ýæ.	¦•±„+ZµQk¾7'),
(3, '˜Üè$@T~|AMn‡x…l»´ý³ìý}Ó9€#{'),
(4, 'ƒÅ¥ {ŠŸp+p=\ZŒ9“ÿ3K:vø=ªæ-'),
(5, 'ÑL×ÃÍ\\ u¬Õ”¡LÍÏ9dÄÌŠ[&LZÔ'),
(6, 'âÙ„yÑ+öðŽOX0qÎðÃ]èF'' %·ç(@eN'),
(7, 'XZ¾ïÐÅ«€~ïuŸg.’°ñ¹zGÒÛÔIÅ›¼µ§Å');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `input1` varchar(70) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`ID`, `input1`) VALUES
(1, 'HS'),
(2, 'Hk'),
(3, 'Hj'),
(4, 'thjbknlmlbjvhchvb n,'),
(5, 'klmn'),
(6, 'hsdfg'),
(7, 'oiuytfdghjkjhgfcdxfgh'),
(8, 'gujb'),
(9, 'ther'),
(10, 'thercbjjkhshj'),
(11, 'rdihjlkkjhfgtdfygjhklkkjhfgtdgfgh'),
(12, 'fyhvnmgfgdcvhb'),
(13, 'fyhvnmgfgdcvhb12345678'),
(14, 'brhntmyjnhbgfv');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(83) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'dfcgvhjnkmljhgfdghnjmk', 'hg'),
(2, 'harsha', 'hs'),
(3, 'cgvhbjkmljhugtfhjkhg', 'hjhgbg'),
(4, 'kanndy', 'kh'),
(5, 'kannrtyuiolkjhvbnm,', 'hgfvb'),
(6, 'klanmbg', 'kp'),
(7, 'MAMMMA', 'MN'),
(8, 'sdxfcgvhbjnkml,;jbhvgcfxcghvjbkn,.g', 'ghn'),
(9, 'login', 'lo'),
(10, 'harsha', 'f7e11d1a6608f891f14eaea'),
(12, 'sagar', '5dae429688af1c521ad87ac'),
(13, 'mj5', '007de96adfa8b36dc2c8dd2'),
(14, 'rohan', 'bc755ac45a0e799d1d490cb'),
(15, 'fuck', 'cacdf0823fa0a658842237b'),
(16, 'noob', 'ecbfa235adde27cf8f809e4'),
(17, 'name', '50c3c575ce2bb12c45e20736ce59e86fe81915b4'),
(18, 'harsha', '648737a4d5e8e7f3005f086c2dbed7bf1e0319c8'),
(19, 'harsha', '648737a4d5e8e7f3005f086c2dbed7bf1e0319c8'),
(20, 'harsha1', 'b2f4a349b0e6bfdbefb345bfe231d51fe64a3e2f'),
(21, 'sagarika13', 'e179b826187d20c2980941f94fcdf559952c1b3c'),
(22, 'rina', 'bc755ac45a0e799d1d490cba76febc56d80cc5fc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
