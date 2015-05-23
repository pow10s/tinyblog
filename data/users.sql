-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Трв 23 2015 р., 16:28
-- Версія сервера: 5.6.21
-- Версія PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `users`
--

-- --------------------------------------------------------

--
-- Структура таблиці `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` varchar(250) NOT NULL,
  `user_id_from` int(11) unsigned NOT NULL,
  `user_id_to` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `messages`
--

INSERT INTO `messages` (`ID`, `Title`, `Text`, `user_id_from`, `user_id_to`) VALUES
(1, 'hello', 'world', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`ID`, `Email`, `UserName`, `Password`) VALUES
(1, 'stosdima@gmail.com', 'stosdima', 's1t2o3s4'),
(2, 'yurkastos@gmail.com', 'yurka', '123456'),
(3, 'vitya123@mail.ru', 'vitya', '123456');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_id_from` (`user_id_from`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `messages`
--
ALTER TABLE `messages`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
