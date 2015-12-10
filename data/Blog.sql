-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2015 at 05:49 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Text` varchar(250) NOT NULL,
  `user_id_from` int(11) unsigned NOT NULL,
  `user_id_to` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `messages_users_fk` (`user_id_from`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Title`, `Text`, `user_id_from`, `user_id_to`) VALUES
(13, 'hello', 'helloman', 10, 0),
(14, 'asffasfas', 'fasfasfasf', 12, 0),
(15, '', '', 10, 0),
(16, 'saf', 'asfa', 10, 0),
(17, 'asffasf', 'glglgglgl\r\n', 10, 0),
(18, '', '', 10, 0),
(19, '', '', 10, 0),
(20, 'dasfasfasfasf', 'asfasfasfas', 10, 0),
(21, '', '', 10, 0),
(22, 'sfafasf', 'asfasfasf', 10, 0),
(23, 'asfaf', 'asfasfas', 10, 0),
(24, 'dasfasfas', 'fasfasfasfas', 10, 0),
(25, 'fasfasf', 'asfafasf', 10, 0),
(26, 'fasfasf', 'asfasfasf', 10, 0),
(27, 'fasfasf', 'asfas', 10, 0),
(28, 'fasfasf', 'fasfasfasf', 10, 0),
(29, 'hello', 'world', 10, 12),
(30, '123456', '123456', 10, 11),
(31, 'privet ', 'krasavec', 10, 11),
(32, '', '', 11, 0),
(33, '', '', 11, 0),
(34, '', '', 11, 0),
(35, 'fasfas', 'fasfas', 11, 0),
(36, 'fsfdfsd', 'fsdfsdf', 11, 10),
(37, 'hi', 'bro', 11, 10),
(38, 'stosdima', 'privetKreved', 10, 11),
(39, 'stosdima', 'asdfasfasfasfsf', 10, 11),
(40, 'sasfasas', 'fasfafasf', 10, 11),
(41, 'dasdasdasd', 'dasdasdasdasdas', 10, 12),
(42, 'privet', 'kreved', 1, 2),
(43, 'privet', 'privet', 10, 12),
(44, '1', '2', 3, 4),
(45, 'fasfasfas', 'fasfasfas', 10, 11),
(46, 'asfasfasfas', 'fasfasfasfasfas', 10, 12),
(47, 'dasdasd', 'asdasdas', 10, 11),
(48, 'dsasd', 'asdasd', 10, 13),
(49, 'dasdasd', 'asdasdasd', 10, 13),
(50, 'omg', 'omfg\r\n', 10, 17),
(51, 'dasfasfasfdasddasd', 'asddasd', 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=321 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `user_name`, `password`) VALUES
(320, 'stosdima@gmail.com', 'stosdima', 'a2c9b56691d388b649f2061412f8d8455d8e498b');

-- --------------------------------------------------------

--
-- Table structure for table `verification_table`
--

CREATE TABLE IF NOT EXISTS `verification_table` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `verification_code` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
