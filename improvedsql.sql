-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2014 at 07:40 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `improvedworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions1`
--

CREATE TABLE `actions1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` text NOT NULL,
  `age_range` tinyint(4) NOT NULL,
  `localisation` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actions1`
--

INSERT INTO `actions1` (`id`, `action`, `age_range`, `localisation`) VALUES
(1, '<p>-1-<p>\n<p>There is something you have twice<p>\n<p>while someone might need it once...<p>', 99, '1'),
(2, '<p>-1-<p>\n<p>There is this person you see everyday<p>\n<p>Who might need something...<p>', 99, '1'),
(3, '<p>-1-<p>\n<p>There are things you know That you might<p>\n<p>want to share with the people you love<p>', 99, '1');

-- --------------------------------------------------------

--
-- Table structure for table `actions2`
--

CREATE TABLE `actions2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` text NOT NULL,
  `age_range` tinyint(4) NOT NULL,
  `localisation` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actions2`
--

INSERT INTO `actions2` (`id`, `action`, `age_range`, `localisation`) VALUES
(1, '<p>-2-<p>\n<p>Slow down and start looking around<p>\n<p>Time has come to help a stranger<p>', 99, '1'),
(2, '<p>-2-<p>\n<p>A dollar for you<p>\n<p>is a million for others<p>', 99, '1'),
(3, '<p>-2-<p>\r\n<p>time is precious<p>\r\n<p>you might want to share it<p>', 99, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthdate` date NOT NULL,
  `actions_completed` tinyint(1) DEFAULT NULL,
  `sub_date` date NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `validation_key` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `gender`, `birthdate`, `actions_completed`, `sub_date`, `active`, `validation_key`) VALUES
(1, 'simiandjulien@gmail.com', 'cb56193b142813b0138fc057977862a8', '2', '2005-06-05', 1, '2014-05-07', 1, '3aca5128dae4a657c1fdc3307'),
(2, 'simiandjulien@yahoo.fr', 'cb56193b142813b0138fc057977862a8', '1', '1998-07-06', 0, '2014-05-08', 0, 'd00abbea2a0cd268102596987'),
(3, 'simiandjulien@cacalove.com', '18a6d9146483619a06de585289d387cb', '1', '1991-05-04', 0, '2014-05-08', 0, '03b1dced6fe954af42f238549');
