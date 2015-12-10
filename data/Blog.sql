-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2015 at 01:06 AM
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
  `verification_code` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=309 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `UserName`, `Password`, `verificationCode`) VALUES
(299, 'stosdima@gmail.com', 'stosdima', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '723addceae641d9910976600a19a3a87a209bde0'),
(300, 'stosdima@gmail.com', 's1t2o3s4', 'f7963737e8b46161ede6ec001a0bfa7572359fa3', 'a2c9b56691d388b649f2061412f8d8455d8e498b'),
(302, 'dimas@gmail.com', 'dimass', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '2f1cce5b6252eb2a626f998b092817dedecfab63'),
(303, 'stosdima@gmail.com', 'stosdima', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '723addceae641d9910976600a19a3a87a209bde0'),
(304, 'sdsdsdsd', 'stosbsh', '506a334ac93a2c9eb383b33430c7d1ab9fb192f3', '7d54ab7c421d91e0b26042fa6647399fd3652923'),
(305, 'olyamahanko@mail.ru', 'dimass', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '2f1cce5b6252eb2a626f998b092817dedecfab63'),
(306, 'stosdima@gmail.com', 'stosdima', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '723addceae641d9910976600a19a3a87a209bde0'),
(307, 'stosdima@gmail.com', 'stosdima', 'a2c9b56691d388b649f2061412f8d8455d8e498b', '723addceae641d9910976600a19a3a87a209bde0'),
(308, 'stosdima@gmail.com', 'stsstsst', 'f02a9aba2974e8aa930fe8e3f6da436d04a01054', '11a4b862175161eabadf1a5aee55e5fa633a7263');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
