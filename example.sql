-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2017 г., 23:01
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `example`
--
CREATE DATABASE IF NOT EXISTS `example` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `example`;

-- --------------------------------------------------------

--
-- Структура таблицы `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `homepage` varchar(255) DEFAULT NULL,
  `captcha` varchar(255) DEFAULT NULL,
  `text` text,
  `ip` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `add_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_data`
--

INSERT INTO `user_data` (`id`, `user_name`, `email`, `homepage`, `captcha`, `text`, `ip`, `browser`, `add_date`) VALUES
(1, 'name_01', 'email_01@ukr.net', 'www.homepage_01.com', '9762', 'text_01', '192.168.157.29', 'internet explorer', '2011-07-03'),
(2, 'name_02', 'email_02@mail.ru', 'www.homepage_02.com', '3168', 'text_02', '192.168.225.143', 'firefox', '2017-08-10'),
(3, 'name_03', 'email_03@ukr.net', 'www.homepage_03.com', '2014', 'text_03', '192.168.79.144', 'firefox', '2016-09-27'),
(4, 'name_04', 'email_04@gmail.com', 'www.homepage_04.com', '9839', 'text_04', '192.168.44.226', 'opera', '2015-07-11'),
(5, 'name_05', 'email_05@gmail.com', 'www.homepage_05.com', '1363', 'text_05', '192.168.53.144', 'firefox', '2011-05-16'),
(6, 'name_06', 'email_06@mail.ru', 'www.homepage_06.com', '4542', 'text_06', '192.168.99.53', 'internet explorer', '2016-02-05'),
(7, 'name_07', 'email_07@vega.kharkov.ua', 'www.homepage_07.com', '4097', 'text_07', '192.168.51.191', 'safari', '2017-04-08'),
(8, 'name_08', 'email_08@vega.kharkov.ua', 'www.homepage_08.com', '8316', 'text_08', '192.168.132.97', 'internet explorer', '2015-12-05'),
(9, 'name_09', 'email_09@list.ru', 'www.homepage_09.com', '6585', 'text_09', '192.168.128.128', 'internet explorer', '2011-11-08'),
(10, 'name_10', 'email_10@ukr.net', 'www.homepage_10.com', '2196', 'text_10', '192.168.78.242', 'safari', '2017-01-17'),
(11, 'name_11', 'email_11@mail.ru', 'www.homepage_11.com', '6777', 'text_11', '192.168.141.80', 'safari', '2015-11-23'),
(12, 'name_12', 'email_12@gmail.com', 'www.homepage_12.com', '5837', 'text_12', '192.168.70.13', 'firefox', '2011-10-12'),
(13, 'name_13', 'email_13@ukr.net', 'www.homepage_13.com', '6473', 'text_13', '192.168.132.82', 'firefox', '2016-06-11'),
(14, 'name_14', 'email_14@rambler.ru', 'www.homepage_14.com', '9498', 'text_14', '192.168.51.160', 'opera', '2010-12-09'),
(15, 'name_15', 'email_15@rambler.ru', 'www.homepage_15.com', '2679', 'text_15', '192.168.111.172', 'internet explorer', '2015-08-09'),
(16, 'name_16', 'email_16@i.ua', 'www.homepage_16.com', '8999', 'text_16', '192.168.136.238', 'firefox', '2011-08-26'),
(17, 'name_17', 'email_17@gmail.com', 'www.homepage_17.com', '1092', 'text_17', '192.168.219.181', 'internet explorer', '2012-10-26'),
(18, 'name_18', 'email_18@rambler.ru', 'www.homepage_18.com', '9828', 'text_18', '192.168.211.4', 'firefox', '2015-05-18'),
(19, 'name_19', 'email_19@ukr.net', 'www.homepage_19.com', '6760', 'text_19', '192.168.243.81', 'firefox', '2012-11-28'),
(20, 'name_20', 'email_20@mail.ru', 'www.homepage_20.com', '4581', 'text_20', '192.168.1.182', 'chrome', '2013-06-12'),
(21, 'name_21', 'email_21@list.ru', 'www.homepage_21.com', '1623', 'text_21', '192.168.153.86', 'firefox', '2011-12-22'),
(22, 'name_22', 'email_22@vega.kharkov.ua', 'www.homepage_22.com', '1203', 'text_22', '192.168.198.220', 'firefox', '2012-07-14'),
(23, 'name_23', 'email_23@rambler.ru', 'www.homepage_23.com', '4832', 'text_23', '192.168.102.23', 'firefox', '2010-05-01'),
(24, 'name_24', 'email_24@ukr.net', 'www.homepage_24.com', '2992', 'text_24', '192.168.135.25', 'internet explorer', '2014-04-15'),
(25, 'name_25', 'email_25@vega.kharkov.ua', 'www.homepage_25.com', '8785', 'text_25', '192.168.3.201', 'internet explorer', '2014-06-02'),
(26, 'name_26', 'email_26@vega.kharkov.ua', 'www.homepage_26.com', '1252', 'text_26', '192.168.173.53', 'internet explorer', '2017-07-07'),
(27, 'name_27', 'email_27@mail.ru', 'www.homepage_27.com', '1901', 'text_27', '192.168.166.37', 'safari', '2010-10-05'),
(28, 'name_28', 'email_28@mail.ru', 'www.homepage_28.com', '6852', 'text_28', '192.168.209.164', 'internet explorer', '2014-10-28'),
(29, 'name_29', 'email_29@vega.kharkov.ua', 'www.homepage_29.com', '7662', 'text_29', '192.168.230.133', 'opera', '2017-02-24'),
(30, 'name_30', 'email_30@i.ua', 'www.homepage_30.com', '9165', 'text_30', '192.168.253.89', 'safari', '2016-05-05'),
(31, 'name_31', 'email_31@vega.kharkov.ua', 'www.homepage_31.com', '5936', 'text_31', '192.168.216.84', 'chrome', '2011-11-08'),
(32, 'name_32', 'email_32@vega.kharkov.ua', 'www.homepage_32.com', '9206', 'text_32', '192.168.229.76', 'opera', '2015-05-09'),
(33, 'name_33', 'email_33@gmail.com', 'www.homepage_33.com', '2967', 'text_33', '192.168.197.82', 'internet explorer', '2012-12-29'),
(34, 'name_34', 'email_34@list.ru', 'www.homepage_34.com', '7750', 'text_34', '192.168.33.237', 'internet explorer', '2017-12-30'),
(35, 'name_35', 'email_35@gmail.com', 'www.homepage_35.com', '7140', 'text_35', '192.168.40.74', 'internet explorer', '2011-02-18'),
(36, 'name_36', 'email_36@list.ru', 'www.homepage_36.com', '2984', 'text_36', '192.168.194.29', 'opera', '2013-07-29'),
(37, 'name_37', 'email_37@mail.ru', 'www.homepage_37.com', '7635', 'text_37', '192.168.62.24', 'chrome', '2010-02-22'),
(38, 'name_38', 'email_38@ukr.net', 'www.homepage_38.com', '6225', 'text_38', '192.168.63.2', 'opera', '2013-03-12'),
(39, 'name_39', 'email_39@vega.kharkov.ua', 'www.homepage_39.com', '6577', 'text_39', '192.168.30.80', 'chrome', '2015-03-11'),
(40, 'name_40', 'email_40@i.ua', 'www.homepage_40.com', '6209', 'text_40', '192.168.223.107', 'safari', '2010-12-14'),
(41, 'name_41', 'email_41@gmail.com', 'www.homepage_41.com', '8921', 'text_41', '192.168.134.85', 'opera', '2010-08-18'),
(42, 'name_42', 'email_42@rambler.ru', 'www.homepage_42.com', '5965', 'text_42', '192.168.203.51', 'firefox', '2010-02-17'),
(43, 'name_43', 'email_43@gmail.com', 'www.homepage_43.com', '7490', 'text_43', '192.168.188.39', 'opera', '2012-03-24'),
(44, 'name_44', 'email_44@mail.ru', 'www.homepage_44.com', '5369', 'text_44', '192.168.117.224', 'internet explorer', '2011-03-29'),
(45, 'name_45', 'email_45@gmail.com', 'www.homepage_45.com', '4211', 'text_45', '192.168.21.148', 'firefox', '2011-01-04'),
(46, 'name_46', 'email_46@mail.ru', 'www.homepage_46.com', '5688', 'text_46', '192.168.106.161', 'internet explorer', '2017-09-18'),
(47, 'name_47', 'email_47@i.ua', 'www.homepage_47.com', '3363', 'text_47', '192.168.172.164', 'safari', '2016-11-06'),
(48, 'name_48', 'email_48@vega.kharkov.ua', 'www.homepage_48.com', '1085', 'text_48', '192.168.237.88', 'firefox', '2017-10-19'),
(49, 'name_49', 'email_49@list.ru', 'www.homepage_49.com', '3682', 'text_49', '192.168.162.101', 'opera', '2014-12-12'),
(50, 'name_50', 'email_50@gmail.com', 'www.homepage_50.com', '7906', 'text_50', '192.168.250.189', 'opera', '2016-05-22'),
(86, 'Zakhar', 'Zakhar@mail.ru', 'n/a', '7920', 'This is Zakhar', '127.0.0.1', 'Unknow', '2017-03-29'),
(87, 'Pelmen', 'pelmen@ramler.ua', 'n/a', '3569', 'Hello Pelmen', '127.0.0.1', 'Chrome', '2017-03-29'),
(88, 'Maxud', 'maxud@mail.ru', 'n/a', '6714', 'jjjjj', '127.0.0.1', 'Unknow', '2017-03-29'),
(89, 'Timofey', 'gibonomakaka@mail.ru', 'n/a', '8768', 'sdfsfdsfsfdsf', '127.0.0.1', 'Chrome', '2017-03-29'),
(90, 'newUser', 'newUser@gmail.com', 'n/a', '4853', 'newUser text', '127.0.0.1', 'Unknow', '2017-03-29');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
