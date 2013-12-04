-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2013 at 08:18 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xmas`
--
CREATE DATABASE IF NOT EXISTS `xmas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `xmas`;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `txtname` varchar(255) NOT NULL,
  `txtlocation` varchar(255) NOT NULL,
  `audioTrack` int(10) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`auto_id`, `photo`, `txtname`, `txtlocation`, `audioTrack`, `created_on`) VALUES
(1, '20131202051642.jpg', '', '', 0, '2013-12-02 12:16:42'),
(2, '20131202070718.jpg', '', '', 0, '2013-12-02 14:07:18'),
(3, '20131202072217.jpg', '', '', 0, '2013-12-02 14:22:17'),
(4, '20131202072710.jpg', '', '', 0, '2013-12-02 14:27:10'),
(5, '20131202072745.jpg', '', '', 0, '2013-12-02 14:27:45'),
(6, '20131202072827.jpg', '', '', 0, '2013-12-02 14:28:27'),
(7, '20131202072906.jpg', '', '', 0, '2013-12-02 14:29:06'),
(8, '20131202073021.jpg', '', '', 0, '2013-12-02 14:30:21'),
(9, '20131202073101.jpg', '', '', 0, '2013-12-02 14:31:01'),
(10, '20131202073640.jpg', '', '', 0, '2013-12-02 14:36:40'),
(11, '20131202074416.jpg', '', '', 0, '2013-12-02 14:44:17'),
(12, '20131202074506.jpg', '', '', 0, '2013-12-02 14:45:06'),
(13, 'General_Picture.jpg', '', '', 0, '2013-12-02 14:47:52'),
(14, 'General_Picture.jpg', '', '', 0, '2013-12-02 14:52:21'),
(15, 'General_Picture.jpg', 'sad df dfdf', '', 2, '2013-12-02 14:53:16'),
(16, 'General_Picture.jpg', '', '', 0, '2013-12-02 14:53:22'),
(17, 'General_Picture.jpg', '', '', 0, '2013-12-02 14:56:45'),
(18, 'General_Picture.jpg', '', '', 0, '2013-12-02 16:08:54'),
(19, '20131202091652.jpg', '', '', 0, '2013-12-02 16:16:52'),
(20, '20131202091903.jpg', '', '', 0, '2013-12-02 16:19:03'),
(21, '20131202092042.jpg', '', '', 0, '2013-12-02 16:20:42'),
(22, '20131202092114.jpg', 'brilliant', '', 7, '2013-12-02 16:21:14'),
(23, '20131202092347.jpg', '', '', 8, '2013-12-02 16:23:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
