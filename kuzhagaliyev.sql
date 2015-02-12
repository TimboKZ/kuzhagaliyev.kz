-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 08:59 PM
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
  `section` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `slug` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `icon` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `section`, `name`, `slug`, `description`, `icon`) VALUES
(1, 2, 'Miscellaneous ', 'Misc', 'Various projects', '<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<g>\n	<path d="M46.9,37.3l-2.9,4.9l-11.3-8L34.1,48h-5.8l1.3-13.8l-11.3,8l-2.9-4.9l12.6-5.9l-12.6-5.8l2.9-4.9l11.3,8l-1.3-13.8h5.8\n		l-1.3,13.8l11.3-8l2.9,4.9l-12.5,5.8L46.9,37.3z"/>\n</g>\n</svg>\n'),
(2, 2, 'Java Apps', 'Java-Apps', 'Applications written in Java', '<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<path fill="#E6E7E8" d="M30.3,30.1c0,0-5.4-5.1-6.2-7.8s2.2-5.3,4.8-7.4s5.5-4.1,6.2-6.6s0.6-3.4,0.6-3.9s-0.1-1.1-0.1-1.1\n	s1.6,1.9,0.9,5.2s-2.8,5.1-3.6,5.7s-4.9,3.6-5.3,5.1s-1.6,3.6,0.6,7.3s2.2,3.6,2.2,3.6"/>\n<path fill="#E6E7E8" d="M32.3,31.9c0,0,2.4-2.2,0.8-4.4s-3.2-4.4-2.3-6.9s4.2-4.5,6.1-5.5s4.2-1.6,4.2-1.6s-4.8,3.1-5.9,4.4\n	s-2.1,3.1-1.5,4.6s2.5,2.9,2.4,4.6s-1.3,3.2-2.2,3.8S32.3,31.9,32.3,31.9z"/>\n<path fill="#E6E7E8" d="M40.9,39.5c0,0,4.8-2.2,5.4-4.8s-0.4-3.6-1.9-3.9s-2.3,0-2.3,0s1.8-1.2,3.8-0.5s3.4,2.4,2.5,4.3\n	s-3.3,3.6-4.7,4.1S40.9,39.5,40.9,39.5z"/>\n<path fill="#E6E7E8" d="M24.2,30.6c0,0-3.1,0.9-3.8,1.4s-0.8,1.2,0.6,1.4s10.6,0.2,13.1-0.1s6.5-1,6.5-1l-1.4,1.4\n	c0,0-8.3,1.5-15.4,1.3s-6.6-0.9-7-1.2s-0.1-1.4,1.7-2S24.2,30.6,24.2,30.6z"/>\n<path fill="#E6E7E8" d="M22.3,36.3c0,0-1.4,1.5,1.5,1.8s8.7,0.2,10.2,0s3.1-0.6,3.1-0.6l1.9,1.1c0,0-5.5,2.2-14.1,1.5\n	c-8.6-0.7-3.2-3.5-2.8-3.7S22.3,36.3,22.3,36.3z"/>\n<path fill="#E6E7E8" d="M23.5,41.7c0,0-0.3,1.1,1.5,1.3s4.9,0.3,6.3,0.3c1.4-0.1,4.4-0.6,4.4-0.6L38,44c0,0-4.5,2-9.6,1.6\n	s-6.2-1.1-6.8-2.3C21.1,42.2,23.1,41.8,23.5,41.7"/>\n<path fill="#E6E7E8" d="M19.8,45.4c0,0-3.1,0.8-3.7,1.1c-0.5,0.4-1.4,1,0.4,1.4s8,1.3,11.1,1.2c3.2,0,13.2-0.7,15.1-1.2\n	s3.1-1.2,3.1-1.7s0-0.5,0-0.5s1.6,0.9,0.2,1.7c-1.5,0.8-6,2.7-13.1,2.8S18,50,15.3,49.5c-2.7-0.6-3.6-0.7-2.9-1.9\n	c0.7-1.2,3.8-2.1,5.2-2.3C19.1,45,19.8,45.4,19.8,45.4z"/>\n<path fill="#E6E7E8" d="M19,51.4c0,0,10.4,1.3,17.1,0.3c6.8-0.9,9.5-1.7,10.8-2.4s1.7-1,1.7-1s0.1,2.5-6.5,3.7\n	c-6.6,1.2-14.2,0.9-16.6,0.8C23.1,52.5,19,51.4,19,51.4z"/>\n</svg>\n'),
(3, 2, 'Reddit', 'Reddit', 'Various projects related to reddit', '<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<path fill="#E6E7E8" d="M32.7,22.3c-12.3,0-22.3,6.7-22.3,14.9c0,8.2,10,14.9,22.3,14.9S55,45.4,55,37.2C55,28.9,45,22.3,32.7,22.3z\n	 M32.6,50.3c-11.2,0-20.3-5.9-20.3-13.1c0-7.2,9.1-13.1,20.3-13.1s20.3,5.9,20.3,13.1C52.9,44.4,43.8,50.3,32.6,50.3z"/>\n<path fill="#E6E7E8" d="M11.8,35.1c0-0.3,0-0.6,0-0.8c-1.2-0.6-2-1.9-2-3.3c0-2.1,1.7-3.8,3.9-3.8c0.9,0,1.7,0.3,2.4,0.8\n	c0.6-0.3,1.3-0.5,2.1-0.6c-1.1-1.2-2.6-2-4.4-2c-3.2,0-5.8,2.5-5.8,5.7c0,2.5,1.7,4.7,4,5.4C11.9,36,11.8,35.6,11.8,35.1z"/>\n<path fill="#E6E7E8" d="M52,25.3c-1.9,0-3.5,0.9-4.6,2.2c0.5,0.3,1,0.6,1.5,1c0.7-0.9,1.8-1.5,3-1.5c2.1,0,3.9,1.7,3.9,3.8\n	c0,1.7-1.2,3.2-2.8,3.6c0.2,0.7,0.3,1.3,0.4,2c2.5-0.6,4.4-2.9,4.4-5.5C57.8,27.9,55.2,25.3,52,25.3z"/>\n<circle fill="#E6E7E8" cx="25.3" cy="34.8" r="3.5"/>\n<circle fill="#E6E7E8" cx="40.3" cy="34.7" r="3.5"/>\n<path fill="#E6E7E8" d="M49.8,10.4c-2.6,0-4.8,2.1-4.8,4.8s2.1,4.8,4.8,4.8s4.8-2.1,4.8-4.8S52.4,10.4,49.8,10.4z M49.7,18.1\n	c-1.6,0-2.9-1.3-2.9-2.9c0-1.6,1.3-2.9,2.9-2.9s2.9,1.3,2.9,2.9C52.6,16.8,51.3,18.1,49.7,18.1z"/>\n<path fill="#E6E7E8" d="M32,22.5l3.7-11c0,0,0.1-0.3,1.3-0.1c1.2,0.2,8.8,2,8.8,2l-0.7,2l-8.1-2.1l-3,9.4"/>\n<path fill="#E6E7E8" d="M24.6,44.3c0,0-0.4-0.9,0.4-1.4c0.8-0.5,1.2,0.4,2,0.8c0.8,0.5,3.7,1.4,6,1.3s4.4-0.3,5.9-1.5s1.6-0.8,2-0.5\n	s0.5,1-0.5,1.8c-1.1,0.8-2.6,2-6.4,2s-6.2-0.2-7.9-1.4"/>\n</svg>\n'),
(4, 2, 'jQuery Plugins', 'jQuery-Plugins', 'Various plugins for jQuery', '<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<path fill="#E6E7E8" d="M35.6,13.1c0,0-1.2,3.7,0.4,6.2s2.8,4,5.9,5s5.4,0,6.2-0.6c0.8-0.7,0.8-0.7,0.8-0.7S48,25.2,46,26.3\n	c-1.9,1.1-4.1,1.3-6,0.7s-3.9-2-5-3.5c-1-1.5-2.1-2.9-1.9-5.3c0.2-2.4,1-3,1.9-4.2"/>\n<path fill="#E6E7E8" d="M27.9,14.8c0,0-1.9,5.7,0.7,9.7s4.4,6.2,9.3,7.8c4.9,1.6,8.5,0.1,9.7-1c1.2-1,1.2-1,1.2-1s-1.4,3.4-4.4,5.2\n	c-3,1.8-6.5,2-9.4,1c-2.9-1-6.1-3.1-7.8-5.4c-1.6-2.4-3.3-4.5-2.9-8.3c0.3-3.8,1.6-4.7,2.9-6.6"/>\n<path fill="#E6E7E8" d="M18.9,17.8c0,0-2.6,8,0.9,13.6s6.1,8.7,12.9,10.9c6.8,2.2,11.8,0.1,13.5-1.4c1.6-1.5,1.6-1.5,1.6-1.5\n	s-2,4.8-6.2,7.2c-4.2,2.5-9,2.8-13.1,1.5s-8.5-4.3-10.8-7.6s-4.5-6.3-4.1-11.6s2.2-6.6,4.1-9.2"/>\n</svg>\n'),
(5, 2, 'Bukkit Plugins', 'Bukkit-Plugins', 'Java Plugins for Bukkit', '<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<rect x="17" y="21" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="22.7" y="23.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="19.9" y="23.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="25.5" y="26.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="31.2" y="26.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="28.4" y="26.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="34" y="26.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="36.9" y="23.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="39.7" y="23.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="42.5" y="21" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="14.2" y="21" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="14.2" y="18.2" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="14.2" y="26.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="14.2" y="23.8" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="14.2" y="29.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="45.4" y="21" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="45.4" y="18.2" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="45.4" y="26.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="45.4" y="23.8" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="45.4" y="29.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="39.7" y="15.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="42.5" y="15.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="17" y="15.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="19.9" y="15.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="22.7" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="25.5" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="28.4" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="31.2" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="34" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="36.9" y="12.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="42.5" y="35.2" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="42.5" y="32.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="42.5" y="38" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="17" y="35.2" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="17" y="32.3" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="17" y="38" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="19.9" y="40.8" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="19.9" y="43.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="39.7" y="40.8" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="39.7" y="43.7" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="22.7" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="25.5" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="28.4" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="31.2" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="34" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n<rect x="36.9" y="46.5" fill="#E6E7E8" width="2.8" height="2.8"/>\n</svg>\n'),
(6, 2, 'Dota 2 Mods', 'Dota2-Mods', 'Various modifications for Dota 2', '<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<path fill="#ED1C24" d="M50.8,33.9l-0.4-0.4l-0.1-1.7l-0.1-2.2c0,0,0.1-1.2-0.4-1.8c-0.5-0.6-0.6-0.8-0.6-0.8l0.4-0.3v-1.2l0.9-0.7\n	l0.1-1.8l-0.3-6.3L50,16.2l0.4-1.2l-1.1-1.3l-1.2-0.6L45.6,13l-0.4,0.4l-0.9-0.4l-2.6-0.4h-4.9l0.1,0.8l-1.3,0.3L35,13.4l-0.4-0.7\n	L28,12.5l-1.3,1l-13.8-0.2l-0.4,1.8l0.4,1v1.2l-0.4,4.2v2.9c0,0,0.4,0.7,0.4,2.8c0,1.5,0,1.8,0,1.9l0.6,2.2l-1.1,0.9l0.2,4.4\n	c0,0,0.9,1.1,0.8,1.9c-0.1,0.9-0.1,1.8-0.3,2.1s-0.9,0.6-0.9,1.6c0,0.9,0.1,3.4,0.1,3.4l0.2,1.2L12,48.8l1.2,0.7l1.7,0.1l1.9-0.2\n	l2.9,0.3l0.9-0.4l1.1,0.3l1.8,0.1l0.7-0.3l1,0.4l1-0.1l0.6,0.2l0.8-0.3l0.5,0.7l1,0.7l1.3-0.8l1.1,0.6l0.6-0.4l0.7,0.3l1.7-0.8\n	l3.6-0.1l3.2-0.4l0.3-0.1l0.6,0.1l2.4,0.5H46l1.4-0.5L47,48.9h2.2l1.3,0.9l0.5,0.3L50.8,33.9z M40.5,19l2.9,1.9l-0.8,5.5l-7.8-5.6\n	L40.5,19z M22.5,44.3l-2.6,0.1l-3.2-2.9l2.7-7.1c0,0,2.9,3,4,4.1s4.3,4.1,4.3,4.1L22.5,44.3z M45.8,39.1l-1.7,4.6l-2.4,0.6l-3.2-0.9\n	l-5.1-6l-2.4-2l-0.8-1l-5-4.8l-5-5l-4.3-4.5l3.4-1.2l3.5,2l23.5,15.6L45.8,39.1z"/>\n</svg>\n'),
(7, 3, 'Miscellaneous ', 'Misc', 'Various experiments', '<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<g>\n	<path d="M46.9,37.3l-2.9,4.9l-11.3-8L34.1,48h-5.8l1.3-13.8l-11.3,8l-2.9-4.9l12.6-5.9l-12.6-5.8l2.9-4.9l11.3,8l-1.3-13.8h5.8\n		l-1.3,13.8l11.3-8l2.9,4.9l-12.5,5.8L46.9,37.3z"/>\n</g>\n</svg>\n'),
(8, 3, 'Web Design', 'Web-Design', 'Various experiments utilising HTML, CSS, JavaScript and/or PHP.', '<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<path fill="#6D2323" d="M32.8,14.2c-9.5,0-17.2,7.7-17.2,17.2s7.7,17.2,17.2,17.2s17.2-7.7,17.2-17.2S42.3,14.2,32.8,14.2z\n	 M33.1,47.1c-8.7,0-15.7-7-15.7-15.7s7-15.7,15.7-15.7s15.7,7,15.7,15.7S41.7,47.1,33.1,47.1z"/>\n<path fill="#6D2323" d="M19.2,24.1c0,0,0.4,0.8,1.1,1.1c0.6,0.3,0.8,0.9,0.7,2.1c-0.2,1.3,0.3,2.7,1.1,3.2s1.5,0.9,1.5,0.9l-0.3-0.7\n	l1.2,1.3l0.5,1.4l0.9,0.7l0.9,1.1l1,0.9l1.5,1h1H31l0.3,0.7v0.2l-1.8,0.8l-1.3,0.8L28,41l0.3,1l0.7,0.7h0.3l0.4,1.6l0.3,0.6l0.3,0.6\n	l0.9,1L32,47l1.4,0.8l2.4,0.2l-0.1-1.1l0.8-1l0.2-0.6v-0.6l0.5-1.1l0.4-0.5l0.4-1.1l1.2-0.9l0.3-0.8l-1.3-0.8l-0.6-1.2l-3.3,0.3\n	l-1.8-1.1L32,37.2l0.2-0.6L32,35.7l-0.6-0.5l-1,0.3l-2-0.5L28,34.1l-1.2-1.8l0.1-1.1l1.1-0.5l1,0.4l1.1,0.7l1.1,1l0.6,0.8l0.7,0.8\n	l0.6-0.3l-0.2-2l0.2-1.7l1.7-1.5l0.4-1.1l0.3-0.6l0.9-0.3l0.5-0.6l-1-0.4l0.4-0.7l1.3,0.7l0.4-0.5l-0.1-0.9l0.2-0.7L37.8,23L37,22.5\n	L35.8,22l-0.9-0.4l-0.5-0.3l-1,1l-0.9,0.1L31.2,22l-1-0.4l-0.6-0.8L29.1,20l0-0.5h1l0.8,0.8l0.7,0.5l0.9,0l0.5,0V20l-0.6-1L32,18.3\n	l-0.3-0.5l0.3-0.5v-1.1v-0.6h-3.5l-5.1,2.1l-3.5,4.7"/>\n<polyline fill="#6D2323" points="45.7,41.2 45.7,39.2 46,37.9 46.5,36.9 45.7,35.7 44.1,36.2 42.7,35.3 41.6,33.8 42.4,32 43,30.9 \n	43.8,30.4 45.2,29.6 46,29 47.5,29 48,29 48,27.8 47.5,26.5 47,25.5 46.1,25.5 44.8,26.3 44.1,26.6 42.7,26.5 42,26.1 42.1,25.1 \n	43.5,24.3 44.2,23 44.3,22.5 43,22.5 41.6,22.6 42.3,21.7 43,20.7 43.5,19.7 41.7,18.3 40,18.3 39.2,18.6 38.4,19.3 37.5,20.4 \n	36.2,20.5 35.6,19.7 35.5,18.3 34.7,17.8 34.2,17 34,16.2 34,15.5 37.2,15.8 42.7,17.8 45.7,20.8 48.3,24.6 49.3,29 48.9,35.2 \n	46.3,41.5 "/>\n</svg>\n'),
(9, 1, 'Miscellaneous ', 'Misc', 'Various pages', '<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">\n<g>\n	<path d="M46.9,37.3l-2.9,4.9l-11.3-8L34.1,48h-5.8l1.3-13.8l-11.3,8l-2.9-4.9l12.6-5.9l-12.6-5.8l2.9-4.9l11.3,8l-1.3-13.8h5.8\n		l-1.3,13.8l11.3-8l2.9,4.9l-12.5,5.8L46.9,37.3z"/>\n</g>\n</svg>\n');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` int(32) NOT NULL,
  `category` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `section`, `category`, `name`, `slug`) VALUES
(1, 2, 3, 'Quantum CSS', 'QuantumCSS'),
(2, 2, 3, 'Narcissus CSS', 'NarcissusCSS'),
(3, 2, 3, 'Aeolus', 'Aeolus'),
(4, 2, 3, 'Singularity CSS', 'SingularityCSS'),
(5, 2, 3, 'Hikari', 'Hikari'),
(6, 2, 6, 'PotM Custom Icons', 'PotM-Custom-Icons'),
(7, 2, 6, 'Lanaya Custom Icons', 'Lanaya-Custom-Icons'),
(8, 1, 9, 'About kuzhagaliyev.kz', 'About'),
(9, 1, 9, 'kuzhagaliyev.kz Development', 'Development'),
(10, 2, 6, 'Slark Custom Icons', 'Slark-Custom-Icons'),
(11, 2, 6, 'Kunkka Custom Icons', 'Kunkka-Custom-Icons'),
(12, 2, 6, 'Pugna Custom Icons', 'Pugna-Custom-Icons'),
(13, 2, 2, 'Active Visualiser', 'Active-Visualiser'),
(14, 2, 2, 'Envision', 'Envision'),
(15, 3, 7, 'Obscure Science Occupation Name Generator', 'OSONG');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `slug` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `use_ajax` tinyint(1) NOT NULL DEFAULT '1',
  `uri` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `slug`, `description`, `use_ajax`, `uri`) VALUES
(1, 'Pages', 'Pages', 'Various articles and notes, mostly about this website.', 1, ''),
(2, 'Projects', 'Projects', 'Some of the projects I think are worth displaying.', 1, ''),
(3, 'Experiments', 'Experiments', 'Experiments', 0, 'Experiments/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
