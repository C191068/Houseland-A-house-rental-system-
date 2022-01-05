-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2021 at 11:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abana`
--

CREATE TABLE IF NOT EXISTS `abana` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `abana`
--


-- --------------------------------------------------------

--
-- Table structure for table `abhnaz`
--

CREATE TABLE IF NOT EXISTS `abhnaz` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `abhnaz`
--


-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `sl` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sl`, `name`, `password`) VALUES
(1, 'Ali Chowdhury', '8426'),
(2, 'Khatami Chowdhury', '6248');

-- --------------------------------------------------------

--
-- Table structure for table `ahmed`
--

CREATE TABLE IF NOT EXISTS `ahmed` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ahmed`
--


-- --------------------------------------------------------

--
-- Table structure for table `anjita`
--

CREATE TABLE IF NOT EXISTS `anjita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `anjita`
--


-- --------------------------------------------------------

--
-- Table structure for table `anwar`
--

CREATE TABLE IF NOT EXISTS `anwar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `anwar`
--


-- --------------------------------------------------------

--
-- Table structure for table `ataur`
--

CREATE TABLE IF NOT EXISTS `ataur` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ataur`
--


-- --------------------------------------------------------

--
-- Table structure for table `azzak`
--

CREATE TABLE IF NOT EXISTS `azzak` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `azzak`
--


-- --------------------------------------------------------

--
-- Table structure for table `chowdhury`
--

CREATE TABLE IF NOT EXISTS `chowdhury` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chowdhury`
--


-- --------------------------------------------------------

--
-- Table structure for table `jafar`
--

CREATE TABLE IF NOT EXISTS `jafar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jafar`
--


-- --------------------------------------------------------

--
-- Table structure for table `kari`
--

CREATE TABLE IF NOT EXISTS `kari` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kari`
--


-- --------------------------------------------------------

--
-- Table structure for table `manshah`
--

CREATE TABLE IF NOT EXISTS `manshah` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manshah`
--


-- --------------------------------------------------------

--
-- Table structure for table `mitsan`
--

CREATE TABLE IF NOT EXISTS `mitsan` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mitsan`
--


-- --------------------------------------------------------

--
-- Table structure for table `obita`
--

CREATE TABLE IF NOT EXISTS `obita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `obita`
--


-- --------------------------------------------------------

--
-- Table structure for table `paraj`
--

CREATE TABLE IF NOT EXISTS `paraj` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `paraj`
--


-- --------------------------------------------------------

--
-- Table structure for table `prasad`
--

CREATE TABLE IF NOT EXISTS `prasad` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prasad`
--


-- --------------------------------------------------------

--
-- Table structure for table `rahim`
--

CREATE TABLE IF NOT EXISTS `rahim` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rahim`
--


-- --------------------------------------------------------

--
-- Table structure for table `sharif`
--

CREATE TABLE IF NOT EXISTS `sharif` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sharif`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `gender` varchar(50) default NULL,
  `members` varchar(50) default NULL,
  `dateofBirth` varchar(50) default NULL,
  `picture` blob,
  `email` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  `address` varchar(50) default NULL,
  `postalcode` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `signup`
--


-- --------------------------------------------------------

--
-- Table structure for table `ubarna`
--

CREATE TABLE IF NOT EXISTS `ubarna` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ubarna`
--

