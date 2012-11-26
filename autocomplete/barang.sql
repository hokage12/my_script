-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 19, 2010 at 01:11 PM
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `barang`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `barang`
-- 

CREATE TABLE `barang` (
  `id` int(5) NOT NULL auto_increment,
  `nama` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `barang`
-- 

INSERT INTO `barang` VALUES (1, 'Baju', 405);
INSERT INTO `barang` VALUES (2, 'Celana', 1);
INSERT INTO `barang` VALUES (3, 'Kemeja', 4);