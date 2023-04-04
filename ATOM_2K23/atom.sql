-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2023 at 02:10 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atom`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `email` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fname` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ELECTRIXPLORE` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TECHNOWIZ` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TECHTONIC` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TECHIPEDIA` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TECHNOPHILE` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TECHNOFRENZY` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `THE LOST FORTUNE` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `MATTER MIND` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `FINDING FELONG` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `SYNERGY` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `FUNTASTIC TRIVIA` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `FANTASTIC FRIDAZE` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flagship`
--

DROP TABLE IF EXISTS `flagship`;
CREATE TABLE IF NOT EXISTS `flagship` (
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fname` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `RETRO CRICKET AUCTION` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `ATOMOTECH` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `events` varchar(50) NOT NULL,
  `workshops` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `flagship` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paperpres`
--

DROP TABLE IF EXISTS `paperpres`;
CREATE TABLE IF NOT EXISTS `paperpres` (
  `fname` int NOT NULL,
  `email` int NOT NULL,
  `mobile` int NOT NULL,
  `workshop1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `workshop2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `workshop3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paperpres`
--

INSERT INTO `paperpres` (`fname`, `email`, `mobile`, `workshop1`, `workshop2`, `workshop3`) VALUES
(0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `transaction_id`, `payment_status`, `added_on`) VALUES
(7, 'Karthi keyan', 1, 'ATOM_ROV_7a2c77e', 'Created', '2023-03-10 22:21:47'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7c26dbd', 'Created', '2023-03-10 23:07:56'),
(7, 'Karthi keyan', 200, 'SRISHTI_SMA_7b02b44', 'Created', '2023-03-10 23:13:18'),
(7, 'Karthi keyan', 1, 'SRISHTI_SMA_76560f2', 'Created', '2023-03-10 23:13:55'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7d7c807', 'Created', '2023-03-10 23:14:39'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7f2092d', 'Created', '2023-03-10 23:15:07'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7304093', 'Created', '2023-03-11 12:25:34'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7d3ba7e', 'Created', '2023-03-11 12:26:16'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7d90f7d', 'Created', '2023-03-11 12:27:14'),
(7, 'Karthi keyan', 1, 'ATOM_SMA_7bb40c2', 'Created', '2023-03-11 12:28:01'),
(10, 'karthik', 1, 'ATOM_23_CLO_109817f1', 'success', '2023-03-13 11:40:40'),
(10, 'karthik', 1, 'ATOM_23_CLO_100de008', 'success', '2023-03-13 11:59:27'),
(10, 'karthik', 1, 'ATOM_23_CLO_10d3719d', 'success', '2023-03-13 12:12:06'),
(10, 'karthik', 1, 'ATOM_23_CLO_10c6f729', 'success', '2023-03-13 12:13:49'),
(10, 'karthik', 1, 'ATOM_23_CLO_1035e550', 'Created', '2023-03-13 12:34:35'),
(10, 'karthik', 1, 'ATOM_23_CLO_10d6e2e8', 'success', '2023-03-13 12:49:11'),
(10, 'karthik', 1, 'ATOM23_CLO_10565f89', 'success', '2023-03-13 12:51:44'),
(10, 'karthik', 1, 'ATOM23_CLO_1004bf61', 'success', '2023-03-13 12:57:40'),
(10, 'karthik', 1, 'ATOM23_CLO_109b21ef', 'success', '2023-03-13 13:00:48'),
(10, 'karthik', 1, 'ATOM23_CLO_10c345a6', 'success', '2023-03-13 13:03:34'),
(10, 'karthik', 1, 'ATOM23_CLO_1071bd44', 'success', '2023-03-13 13:04:29'),
(10, 'karthik', 1, 'ATOM23_CLO_1070f5f7', 'success', '2023-03-13 13:06:15'),
(10, 'karthik', 1, 'ATOM23_CLO_1006e75e', 'success', '2023-03-13 13:07:43'),
(10, 'karthik', 1, 'ATOM23_CLO_10fa1ae5', 'success', '2023-03-13 13:10:03'),
(10, 'karthik', 1, 'ATOM23_SMA_10f22033', 'success', '2023-03-13 13:12:58'),
(9, 'Karthi keyan', 1, 'ATOM23_CLO_985ee2b', 'success', '2023-03-13 13:18:33'),
(9, 'Karthi keyan', 1, 'ATOM23_SMA_903613b', 'Created', '2023-03-13 13:20:37'),
(9, 'Karthi keyan', 1, 'ATOM23_SMA_959a26b', 'Created', '2023-03-13 13:20:43'),
(9, 'Karthi keyan', 1, 'ATOM23_SMA_95b8400', 'success', '2023-03-13 13:20:48'),
(10, 'karthik', 1, 'ATOM23_CLO_1082d69f', 'success', '2023-03-13 20:36:51'),
(10, 'karthik', 1, 'ATOM23_SMA_10990457', 'success', '2023-03-13 20:38:57'),
(10, 'karthik', 1, 'ATOM23_CLO_105f217a', 'success', '2023-03-13 20:41:51'),
(10, 'karthik', 1, 'ATOM23_SMA_1073d17f', 'success', '2023-03-13 20:44:55'),
(10, 'karthik', 1, 'ATOM23_SMA_103fb75f', 'success', '2023-03-13 20:59:56'),
(10, 'karthik', 1, 'ATOM23_CLO_10446bb4', 'success', '2023-03-13 21:02:35'),
(10, 'karthik', 250, 'ATOM23_SMA_107255da', 'Created', '2023-03-14 13:57:32'),
(10, 'karthik', 250, 'ATOM23_SMA_10482262', 'Created', '2023-03-14 13:58:25'),
(10, 'karthik', 250, 'ATOM23_SMA_10e95eee', 'Created', '2023-03-14 13:59:03'),
(10, 'karthik', 250, 'ATOM23_SMA_10ac175f', 'Created', '2023-03-14 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pwdrequest`
--

DROP TABLE IF EXISTS `pwdrequest`;
CREATE TABLE IF NOT EXISTS `pwdrequest` (
  `id` int NOT NULL,
  `email` int NOT NULL,
  `submitted_on` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
CREATE TABLE IF NOT EXISTS `workshops` (
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fname` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `CLOUD COMPUTING` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `SMART ROVER USING IOT` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `MISSING PIECES OF BUSINESS SAGA` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
