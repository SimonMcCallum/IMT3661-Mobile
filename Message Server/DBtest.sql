-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2012 at 09:52 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE IF NOT EXISTS `studentdata` (
  `Data` mediumtext CHARACTER SET latin1 COLLATE latin1_danish_ci,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User` text,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Data table for IMT3661' AUTO_INCREMENT=33 ;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`Data`, `Time`, `User`, `id`) VALUES
('test', '2012-09-11 14:46:29', 'Simon', 13),
('test3', '2012-09-11 19:26:24', 'Simon1', 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
