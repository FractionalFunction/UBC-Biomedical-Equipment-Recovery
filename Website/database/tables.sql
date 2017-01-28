-- The table structure for the The UBC Biomedical Equipment Recovery Project
-- -------------------------------------------------------------------------

-- Table structure for table `MicroscopeModels`

CREATE TABLE IF NOT EXISTS `MicroscopeModels` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Make` text NOT NULL COMMENT 'Manufacturer',
  `Model` text NOT NULL COMMENT 'Model number',
  `Type` text NOT NULL COMMENT 'The type of microscope',
  `PlugType` text NOT NULL COMMENT 'Which power cable plug does it have?',
  `Short Description` text NOT NULL COMMENT 'Short description for displaying on the thumbnails',
  `Long Description` text NOT NULL COMMENT 'Long description for displaying on the item page',
  `Comments` text NOT NULL COMMENT 'Comments about the microscope model (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available microscope models' AUTO_INCREMENT=1 ;

-- Table structure for table `Microscopes`
CREATE TABLE IF NOT EXISTS `Microscopes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The auto-incrementing ID',
  `Model` text NOT NULL COMMENT 'The microscope model',
  `Status` text NOT NULL COMMENT 'Is it broken?',
  `Condition` text NOT NULL COMMENT 'How well does it work?',
  `Comments` text NOT NULL COMMENT 'Comments about the model (internal use)',
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available microscopes' AUTO_INCREMENT=1 ;
