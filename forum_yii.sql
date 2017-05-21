-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 21 2017 р., 14:09
-- Версія сервера: 5.7.13
-- Версія PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `forum_yii`
--

-- --------------------------------------------------------

--
-- Структура таблиці `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `forum`
--

INSERT INTO `forum` (`id`, `title`, `parent_id`, `view`, `description`) VALUES
(1, 'Main', 0, 1, 'Main forum'),
(2, 'SubForum', 1, 1, 'description'),
(3, 'SubForum 2', 1, 1, 'description'),
(4, 'Main 2', 0, 1, 'desc');

-- --------------------------------------------------------

--
-- Структура таблиці `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `post`
--

INSERT INTO `post` (`id`, `text`, `parent_id`, `status`, `author_id`) VALUES
(1, 'Post 1', 1, 1, 0),
(2, 'Post 2', 1, 1, 0),
(3, 'Post 3', 1, 1, 0),
(4, 'asdxczv', 1, 1, 0),
(5, 'fdhdfgbxcbn', 1, 1, 0),
(6, '123', 1, 1, 0),
(7, '1', 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '1',
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `topic`
--

INSERT INTO `topic` (`id`, `title`, `parent_id`, `view`, `description`) VALUES
(1, 'Topic 1', 1, 1, 'descript');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authKey` varchar(255) NOT NULL,
  `accessToken` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authKey`, `accessToken`) VALUES
(1, '1', '11111', 'test1key', '1-token'),
(2, 'login', 'password', 'authKey', 'login-accessToken'),
(3, 'Qwerty', 'qwerty', '1', '1'),
(4, 'User1', 'password1', 'authKey', 'accessToken-password1'),
(5, 'User2', 'password2', 'RJRteJ0JJ_-z8-E2G0c1Ym9HS8HN5DN0', 'NHl3PJ7G7eO2zesti4NYre7oBRGBWanD'),
(6, '123', '$2y$13$NmgHq.24LJb0WLUCS90YwOShURg7ZZZSe1UwJeRxdFmHs5AmmcOUq', 'pR3LNpBXOSPiA1qaMDSPy93-Lda_V7oj', 'YRu3Evz_ebGGXdoKZgm0v-ryWAcXZJVs');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблиці `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
