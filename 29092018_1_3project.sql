-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 09 2019 г., 12:01
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
CREATE DATABASE IF NOT EXISTS `29092018_1_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `29092018_1_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`) VALUES
(1, 'мужская'),
(2, 'женская'),
(3, 'детская');

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs_products`
--

CREATE TABLE IF NOT EXISTS `catalogs_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`, `description`) VALUES
(1, 'Кросовки', 3200, '', 'Описание временно отсутствует'),
(2, 'куртка 1', 5900, '', ''),
(3, 'куртка 2', 4000, '', ''),
(4, 'куртка 3 ', 9080, '', ''),
(5, 'куртка 4', 3454, '', ''),
(6, 'курка 5 ', 6577, '', ''),
(7, 'куртка 6', 4332, '', ''),
(8, 'курка 7', 5433, '', ''),
(9, 'куртка 8', 4543, '', ''),
(10, 'курка 9', 3222, '', ''),
(11, 'куртка 10', 2423, '', ''),
(12, 'куртка 11', 7654, '', ''),
(13, 'куртка 12', 4532, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
