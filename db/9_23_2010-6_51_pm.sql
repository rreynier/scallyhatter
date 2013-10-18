-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2010 at 06:50 PM
-- Server version: 5.1.46
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scallyhatter`
--
CREATE DATABASE `scallyhatter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scallyhatter`;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skill` int(11) NOT NULL,
  `shirt_size` varchar(1) NOT NULL,
  `request` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `first_name`, `last_name`, `gender`, `phone`, `email`, `skill`, `shirt_size`, `request`) VALUES
(1, 'Roeland', 'Reyniers', 'm', 813468003, 'roeland.reyniers@gmail.com', 4, 'm', 'I wanna be with my homies!'),
(2, 'Bob', 'Jones', 'm', 813958328, 'bobjones@aol.com', 1, 'l', '');

-- --------------------------------------------------------

--
-- Table structure for table `player_scallyhatter`
--

CREATE TABLE IF NOT EXISTS `player_scallyhatter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_player_id` int(11) NOT NULL,
  `fk_scallyhatter_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_player_id` (`fk_player_id`),
  KEY `fk_scallyhatter_id` (`fk_scallyhatter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `player_scallyhatter`
--

INSERT INTO `player_scallyhatter` (`id`, `fk_player_id`, `fk_scallyhatter_id`, `status`) VALUES
(3, 1, 2, ''),
(4, 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `scallyhatter`
--

CREATE TABLE IF NOT EXISTS `scallyhatter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scallyhatter`
--

INSERT INTO `scallyhatter` (`id`, `year`) VALUES
(1, 2009),
(2, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`) VALUES
(1, 'rreynier', '6dbd97851d347720fc13b91477ef1c84');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player_scallyhatter`
--
ALTER TABLE `player_scallyhatter`
  ADD CONSTRAINT `player_scallyhatter_ibfk_1` FOREIGN KEY (`fk_player_id`) REFERENCES `player` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_scallyhatter_ibfk_2` FOREIGN KEY (`fk_scallyhatter_id`) REFERENCES `scallyhatter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
