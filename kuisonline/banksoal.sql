-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2010 at 10:14 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `databaseku`
--

-- --------------------------------------------------------

--
-- Table structure for table `banksoal`
--

CREATE TABLE `banksoal` (
  `soalid` int(5) NOT NULL auto_increment,
  `topik` tinytext NOT NULL,
  `pertanyaan` text NOT NULL,
  `pilihan_a` tinytext NOT NULL,
  `pilihan_b` tinytext NOT NULL,
  `pilihan_c` tinytext NOT NULL,
  `pilihan_d` tinytext NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  PRIMARY KEY  (`soalid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banksoal`
--

INSERT INTO `banksoal` (`soalid`, `topik`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`) VALUES
(1, 'internet', 'Website paling populer di dunia?', 'google.com', 'facebook.com', 'yahoo.com', 'kaskus.us', 'a'),
(2, 'internet', 'Pencipta PHP', 'Bill Gates', 'Steve Jobs', 'Rasmus Lerdorf', 'Larry Page', 'c'),
(3, 'internet', 'Berikut adalah server side programming untuk pemograman web, kecuali?', 'PHP', 'ASP', 'JSP', 'Javascript', 'd'),
(4, 'internet', 'Berikut adalah website berita lokal, kecuali?', 'kompas.com', 'cnn.com', 'detik.com', 'vivanews.com', 'b');
