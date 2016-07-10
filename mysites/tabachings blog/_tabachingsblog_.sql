-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 03:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tabachings_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`, `fname`, `lname`, `email`, `birthdate`) VALUES
(6, 'nagatron', '123', 'Neil Anthony', 'Te', 'neilanthony.blog2@gmail.com', '10/04/1988'),
(8, 'nagatron2', '123456', 'Neil Anthony', 'Te', 'neilanthony.blog4@gmail.com', '10/04/2015');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `date_published` datetime NOT NULL,
  `post_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_tag`, `post_content`, `date_published`, `post_update`) VALUES
(9, 'This is a new post DSDASDSA DAS  SDA DAS', 'sports', 'testing one two three  SADAS AS DAD ASD AD ASD AS DAS', '2015-08-22 01:14:02', '2015-08-22 01:56:40'),
(10, 'second post ASADA DSA D A ASDAS', 'holidays', 'dasdadas ad ad as dsa dasd asd as ASD A DA DASD AS DAS DSA', '2015-08-22 01:51:36', '2015-08-22 01:56:15'),
(11, 'Adding tag test', 'holiday, new year, trip, business', 'testing', '2015-08-22 09:57:54', '0000-00-00 00:00:00'),
(12, 'a perfect post to see the result', 'travel, food, trip, amazing view, wondrous, people', 'What a wonderful post it is\r\nall right!!', '2015-08-22 11:30:58', '2015-08-22 11:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagname`) VALUES
(1, 'holidays'),
(2, 'winter'),
(3, 'trips'),
(4, 'sports'),
(5, 'Business'),
(6, 'Love'),
(7, 'holidays');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
