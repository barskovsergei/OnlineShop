-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 10 2019 г., 11:57
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `29092018_1_3project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(256) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`, `description`) VALUES
(1, 'Зимняя куртка', 2900, '', 'Это хорошая зимняя куртка'),
(2, 'куртка 2', 4353, '', ''),
(3, 'куртка 3', 6432, '', ''),
(4, 'куртка 3', 90000, '', ''),
(5, 'куртка 4', 7909, '', ''),
(6, 'куртка 5', 43322, '', ''),
(7, 'куртка 6', 35435, '', ''),
(8, 'куртка 7', 5335, '', ''),
(9, 'куртка 8', 4509, '', ''),
(10, 'куртка 9', 4324, '', ''),
(11, 'куртка 10', 5403, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
