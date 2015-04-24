-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 09:01 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sharedoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  id int(11) NOT NULL AUTO_INCREMENT,
  filename varchar(200) NOT NULL,
  filetype varchar(5) NOT NULL,
  filesize varchar(20) NOT NULL,
  documentName varchar(20) NOT NULL,
  description varchar(250) NOT NULL,
  addedTimestamp datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;ol

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
INSERT INTO `sharedoc`.`file` (`id`, `filename`, `filetype`,  `filesize`,`documentName`, `description`, `addedTimestamp`) VALUES (NULL, 'demo1.pdf', 'pdf','3.470', 'Thomas Nagel', 'sample pdf file', CURRENT_TIMESTAMP), (NULL, 'demo2.jpg', 'jpg','17', 'sample 2', 'sample jpg file', CURRENT_TIMESTAMP);