-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1,	'Business',	'2018-06-22 05:28:58'),
(2,	'Technology',	'2018-06-22 05:29:30');

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `prenews` text NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `post_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `category_id`, `title`, `prenews`, `body`, `slug`, `created_at`, `post_image`) VALUES
(25,	0,	'test',	'',	'test',	'test',	'0000-00-00 00:00:00',	''),
(26,	1,	'title',	'',	'test4',	'title',	'0000-00-00 00:00:00',	''),
(40,	1,	'123',	'',	'00',	'123',	'0000-00-00 00:00:00',	'orden.jpg');

-- 2018-07-10 13:44:56
