-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Generation Time: Jan 17, 2017 at 08:36 PM

--
-- Table structures for the UBC Biomedical Equipment Recovery Project database
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `MicroscopeModels`
--

CREATE TABLE IF NOT EXISTS `MicroscopeModels` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Make` text NOT NULL COMMENT 'Manufacturer',
  `Model` text NOT NULL COMMENT 'Model number',
  `Type` text NOT NULL COMMENT 'The type of microscope',
  `PlugType` text NOT NULL COMMENT 'Which power cable plug does it have?',
  `Short Description` text NOT NULL COMMENT 'Short description for displaying on the thumbnails',
  `Long Description` text NOT NULL COMMENT 'Long description for displaying on the item page',
  `Code` text NOT NULL COMMENT 'Used for identifying individual microscope units to a model',
  `Comments` text NOT NULL COMMENT 'Comments about the microscope model (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available microscope models' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Microscopes`
--

CREATE TABLE IF NOT EXISTS `Microscopes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Status` text NOT NULL COMMENT 'Is it broken?',
  `Condition` text NOT NULL COMMENT 'How well does it work?',
  `Code` text NOT NULL COMMENT 'The ID for the microscope model',
  `Comments` text NOT NULL COMMENT 'Comments about the model (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available microscopes' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
