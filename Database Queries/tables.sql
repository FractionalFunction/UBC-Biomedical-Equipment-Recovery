-- The table structure for the The UBC Biomedical Equipment Recovery Project
-- -------------------------------------------------------------------------

-- Table structure for table `MicroscopeModels`
CREATE TABLE IF NOT EXISTS `MicroscopeModels` (
  `ID` int(11) NOT NULL COMMENT 'The microscope model ID',
  `Type` text NOT NULL COMMENT 'The type of microscope',
  `Make` text NOT NULL COMMENT 'Manufacturer',
  `Model` text NOT NULL COMMENT 'Model number',
  `Image` text NOT NULL COMMENT 'An image of the microscope',
  `PlugType` text NOT NULL COMMENT 'Which power cable plug does it have?',
  `Description` text NOT NULL COMMENT 'Description of the microscope',
  `Comments` text NOT NULL COMMENT 'Comments about the microscope model (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Available microscope models';

-- Table structure for table `Microscopes`
CREATE TABLE IF NOT EXISTS `Microscopes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Model` text NOT NULL COMMENT 'The microscope model',
  `Status` text NOT NULL COMMENT 'Is it broken?',
  `Condition` text NOT NULL COMMENT 'How well does it work?',
  `Comments` text NOT NULL COMMENT 'Comments about the microscope (internal use)',
  `Visibility` text NOT NULL COMMENT 'Toggles the visibility of the listing. 0 for hidden and 1 for visible.',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Available microscopes' AUTO_INCREMENT=95 ;

-- Table structure for table `Messages`
CREATE TABLE IF NOT EXISTS `Messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Name` text NOT NULL COMMENT 'The name of the sender',
  `Email` text NOT NULL COMMENT 'The email of the sender',
  `Message` text NOT NULL COMMENT 'The message content',
  `Comments` text NOT NULL COMMENT 'Comments from administrators about the message (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Messages from people wishing to contact us' AUTO_INCREMENT=1 ;

-- Table structure for table `Books`
CREATE TABLE IF NOT EXISTS `Books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `ISBN13` text NOT NULL COMMENT 'The 13-digit ISBN number',
  `Category` text NOT NULL,
  `Title` text NOT NULL,
  `FirstAuthor` text NOT NULL,
  `Publisher` text NOT NULL,
  `Edition` text NOT NULL,
  `MarketPrice` text NOT NULL,
  `Binding` text NOT NULL,
  `Condition` text NOT NULL,
  `Copies` text NOT NULL,
  `PublicationDate` text NOT NULL,
  `Notes` text NOT NULL,
  `Visibility` text NOT NULL COMMENT 'Toggles the visibility of the listing. 0 for hidden and 1 for visible.',
  
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available books' AUTO_INCREMENT=1 ;

-- Table structure for table `AnimalBones`
CREATE TABLE IF NOT EXISTS `AnimalBones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Name` text NOT NULL,
  `NumberAvailable` text NOT NULL,
  `Image` text NOT NULL,
  `Visibility` text NOT NULL COMMENT 'Toggles the visibility of the specimen. 0 for hidden and 1 for visible.',
  `Comments` text NOT NULL COMMENT 'Comments about the specimen (internal use)',

  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Available animal bones' AUTO_INCREMENT=12 ;

