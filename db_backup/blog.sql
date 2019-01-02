-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 02:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'news'),
(2, 'events'),
(3, 'tutorials'),
(4, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 1, 'international php conferance 2016', '<p>Suspendisse dapibus massa vel nibh pharetra lacinia. Pellentesque non imperdiet sem, ac bibendum mauris. Nam nulla turpis, egestas quis faucibus ac, scelerisque id dui. Suspendisse placerat, ligula vel commodo malesuada, mauris massa eleifend nulla, at elementum neque lacus id elit. Vivamus nec enim scelerisque, efficitur nulla nec, sagittis ex.\r\n\r\nPhasellus lobortis odio metus, id feugiat nunc finibus nec. Pellentesque accumsan metus libero, et efficitur ex hendrerit sit amet. Maecenas vel quam eu dolor eleifend facilisis ac et ligula. Mauris finibus auctor metus in tempus. Praesent tempus hendrerit auctor. Ut posuere sollicitudin mi a mollis. Sed sodales lacinia urna at fringilla. Nunc sit amet tempus erat. Ut cursus est nunc, facilisis ultrices lectus lobortis vitae. Curabitur interdum viverra libero, at convallis sem molestie in. Phasellus in ornare purus. Praesent maximus sagittis purus vitae cursus. Ut nulla est, suscipit eget laoreet in, lobortis sit amet neque. Vestibulum finibus turpis sed libero malesuada molestie</p>', 'asmaa', 'php news,php events', '2016-11-23 19:32:35'),
(2, 1, 'php 5.6 realesd ', '<p>Suspendisse dapibus massa vel nibh pharetra lacinia. Pellentesque non imperdiet sem, ac bibendum mauris. Nam nulla turpis, egestas quis faucibus ac, scelerisque id dui. Suspendisse placerat, ligula vel commodo malesuada, mauris massa eleifend nulla, at elementum neque lacus id elit. Vivamus nec enim scelerisque, efficitur nulla nec, sagittis ex.\r\n\r\nPhasellus lobortis odio metus, id feugiat nunc finibus nec. Pellentesque accumsan metus libero, et efficitur ex hendrerit sit amet. Maecenas vel quam eu dolor eleifend facilisis ac et ligula. Mauris finibus auctor metus in tempus. Praesent tempus hendrerit auctor. Ut posuere sollicitudin mi a mollis. Sed sodales lacinia urna at fringilla. Nunc sit amet tempus erat. Ut cursus est nunc, facilisis ultrices lectus lobortis vitae. Curabitur interdum viverra libero, at convallis sem molestie in. Phasellus in ornare purus. Praesent maximus sagittis purus vitae cursus. Ut nulla est, suscipit eget laoreet in, lobortis sit amet neque. Vestibulum finibus turpis sed libero malesuada molestie</p>', 'ahmed', 'php news,php events', '2016-11-23 19:32:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
