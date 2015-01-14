-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 08:07 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuzhagaliyev`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `slug` varchar(32) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`) VALUES
(1, 'Misc', 'Misc', 'Various articles, mostly about this website.'),
(2, 'Java Apps', 'Java-Apps', 'Applications written in Java'),
(3, 'Reddit Themes', 'Reddit-Themes', 'CSS themes for reddit.com'),
(4, 'jQuery Plugins', 'jQuery-Plugins', 'Various plugins for jQuery'),
(5, 'Bukkit Plugins', 'Bukkit-Plugins', 'Java Plugins for Bukkit'),
(6, 'Dota 2 Mods', 'Dota2-Mods', 'Various modifications for Dota 2');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL DEFAULT '1',
  `name` varchar(32) NOT NULL,
  `slug` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `name`, `slug`) VALUES
(1, 3, 'Quantum CSS', 'QuantumCSS'),
(2, 3, 'Narcissus CSS', 'NarcissusCSS'),
(3, 3, 'Aeolus', 'Aeolus'),
(4, 3, 'Singularity CSS', 'SingularityCSS'),
(5, 3, 'Hikari', 'Hikari'),
(6, 6, 'PotM Custom Icons', 'PotM-Custom-Icons'),
(7, 6, 'Lanaya Custom Icons', 'Lanaya-Custom-Icons'),
(8, 1, 'About kuzhagaliyev.kz', 'About'),
(9, 1, 'kuzhagaliyev.kz Development', 'Development');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
