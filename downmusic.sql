-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2022 at 11:04 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `downmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `singer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `image`, `singer_id`) VALUES
(1, 'مسافر', 'image\\albums\\1_1.jpg', 1),
(2, 'مقصد', 'image\\albums\\1_2.jpg', 1),
(3, 'تجربه کن', 'image\\albums\\1_3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

DROP TABLE IF EXISTS `musics`;
CREATE TABLE IF NOT EXISTS `musics` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `mp3` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `image` varchar(256) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `name`, `mp3`, `album_id`, `image`) VALUES
(1, 'تجربه کن', '\\music\\1_3_1.mp3', 3, 'image\\albums\\1_3.jpg'),
(2, 'غرور', '\\music\\1_3_2.mp3', 3, 'image\\albums\\1_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

DROP TABLE IF EXISTS `singers`;
CREATE TABLE IF NOT EXISTS `singers` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`id`, `name`, `image`) VALUES
(1, 'شادمهرعقیلی', 'image\\singers\\1.jpg'),
(2, 'همای', 'image\\singers\\2.jpg'),
(3, 'محسن ابراهیم زاده', 'image\\singers\\31.jpg'),
(4, 'محسن چاوشی', 'image\\singers\\41.jpg'),
(5, '25باند', 'image\\singers\\5.jpg'),
(6, 'سوگند', 'image\\singers\\6.jpg'),
(7, 'دنیا', 'image\\singers\\7.jpg'),
(8, 'تتلو', 'image\\singers\\8.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
