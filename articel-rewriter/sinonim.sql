-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2011 at 08:13 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `thestuffreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinonim`
--

CREATE TABLE `sinonim` (
  `nomor` int(5) NOT NULL auto_increment,
  `kata1` varchar(50) NOT NULL,
  `kata2` varchar(50) NOT NULL,
  PRIMARY KEY  (`nomor`)
);

--
-- Dumping data for table `sinonim`
--

INSERT INTO `sinonim` (`nomor`, `kata1`, `kata2`) VALUES
(1, 'read', 'keep reading'),
(2, 'variety', 'multiplicity'),
(3, 'unique', 'unequaled'),
(4, 'amazing', 'awesome'),
(5, 'everyone', 'anybody'),
(6, 'find', 'get'),
(7, 'search', 'find'),
(8, 'make', 'create'),
(9, 'definitely', 'absolutely'),
(10, 'experience', 'knowledge'),
(11, 'rarely', 'infrequently'),
(12, 'after', 'behind'),
(13, 'understand', 'know'),
(14, 'quick', 'fast'),
(15, 'arrival', 'appearance'),
(16, 'loyal', 'supportive'),
(17, 'better', 'improved'),
(18, 'paid', 'gainful'),
(19, 'great', 'wonderful'),
(20, 'finished', 'done'),
(21, 'wanted', 'desirable'),
(22, 'dye', 'color'),
(23, 'collection', 'portfolio'),
(24, 'sparkling', 'fizzing'),
(25, 'shimmering', 'glittering'),
(26, 'however', 'nevertheless'),
(27, 'durable', 'enduring'),
(28, 'when', 'once'),
(29, 'actually', 'truly'),
(30, 'put', 'place'),
(31, 'attached', 'tied'),
(32, 'trendy', 'voguish'),
(33, 'said', 'told'),
(34, 'greeted', 'received'),
(35, 'try', 'test'),
(36, 'tried', 'tested'),
(37, 'entire', 'whole'),
(38, 'can', 'may'),
(39, 'shimmer', 'glitter'),
(40, 'really', 'truly'),
(41, 'clip', 'snip'),
(42, 'easy', 'simple'),
(43, 'across', 'astride'),
(44, 'numerous', 'several'),
(45, 'sightings', 'unearthing'),
(46, 'sighting', 'unearthing'),
(47, 'glowing', 'blazing'),
(48, 'descending', 'downward'),
(49, 'above', 'over'),
(50, 'around', 'about');
