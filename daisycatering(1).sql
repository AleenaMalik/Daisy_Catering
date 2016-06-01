-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 03:56 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daisycatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `MemberID` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `NIC` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`MemberID`, `First_Name`, `Last_Name`, `NIC`, `Email`, `phoneNo`, `Password`) VALUES
('Aleena', 'Aleena', 'Malik', 78552, 'email', 69852145, 'pass'),
('huda', 'huda', 'sarfraz', 123657, 'email@email.com', 123647, 'pass'),
('newmem', 'fghjk', 'fghj', 236, 'email@email.com', 45633, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `appetizer`
--

DROP TABLE IF EXISTS `appetizer`;
CREATE TABLE IF NOT EXISTS `appetizer` (
  `AppetizerName` varchar(50) NOT NULL,
  `AppetizerPrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`AppetizerName`),
  KEY `AppetizerName` (`AppetizerName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appetizer`
--

INSERT INTO `appetizer` (`AppetizerName`, `AppetizerPrice`) VALUES
('Beef Stew', '300'),
('Bread and Butter', '150'),
('Chicken Soup', '200'),
('Cucumber Sandwhich', '350'),
('rice', '300');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `billID` int(4) NOT NULL AUTO_INCREMENT,
  `ReservationID` int(4) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `paymentStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`billID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

DROP TABLE IF EXISTS `dessert`;
CREATE TABLE IF NOT EXISTS `dessert` (
  `DessertName` varchar(50) NOT NULL,
  `DessertPrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`DessertName`),
  KEY `DessertName` (`DessertName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`DessertName`, `DessertPrice`) VALUES
('Cheesecake', '350'),
('Chocolate Cake', '200'),
('Kheer', '120'),
('Red Velvet Cake', '300');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

DROP TABLE IF EXISTS `drink`;
CREATE TABLE IF NOT EXISTS `drink` (
  `DrinkName` varchar(50) NOT NULL,
  `DrinkPrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`DrinkName`),
  KEY `DrinkName` (`DrinkName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`DrinkName`, `DrinkPrice`) VALUES
('Coke', '80'),
('Fanta', '80'),
('Juice', '60'),
('Sprite', '80'),
('Water', '50');

-- --------------------------------------------------------

--
-- Table structure for table `entree`
--

DROP TABLE IF EXISTS `entree`;
CREATE TABLE IF NOT EXISTS `entree` (
  `EntreeName` varchar(50) NOT NULL,
  `EntreePrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`EntreeName`),
  KEY `EntreeName` (`EntreeName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entree`
--

INSERT INTO `entree` (`EntreeName`, `EntreePrice`) VALUES
('Beef Steak', '450'),
('Fried Chiken', '300'),
('Mutton Chops', '400'),
('Vegan Lasagna', '450');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `eventID` int(4) NOT NULL AUTO_INCREMENT,
  `eventType` varchar(50) NOT NULL,
  PRIMARY KEY (`eventType`),
  KEY `eventID` (`eventID`),
  KEY `eventType` (`eventType`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `eventType`) VALUES
(1, 'Birthday'),
(2, 'Wedding'),
(4, 'Tea Party'),
(5, 'Brunch'),
(6, 'Luncheon'),
(7, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `menupackages`
--

DROP TABLE IF EXISTS `menupackages`;
CREATE TABLE IF NOT EXISTS `menupackages` (
  `PackageID` int(4) NOT NULL AUTO_INCREMENT,
  `Appetizer` varchar(50) NOT NULL,
  `Entree` varchar(50) NOT NULL,
  `SideOne` varchar(50) NOT NULL,
  `SideTwo` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) NOT NULL,
  `DrinkOne` varchar(50) NOT NULL,
  `DrinkTwo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PackageID`),
  KEY `Appetizer` (`Appetizer`),
  KEY `Entree` (`Entree`),
  KEY `PackageID` (`PackageID`),
  KEY `SideOne` (`SideOne`),
  KEY `SideTwo` (`SideTwo`),
  KEY `Dessert` (`Dessert`),
  KEY `DrinkOne` (`DrinkOne`),
  KEY `DrinkTwo` (`DrinkTwo`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menupackages`
--

INSERT INTO `menupackages` (`PackageID`, `Appetizer`, `Entree`, `SideOne`, `SideTwo`, `Dessert`, `DrinkOne`, `DrinkTwo`) VALUES
(8, 'Chicken Soup', 'Beef Steak', 'Cornbread', 'Mixed vegetables', 'Chocolate Cake', 'Water', 'Sprite'),
(15, 'Bread and Butter', 'Fried Chiken', 'Vegetable Soup', 'Ceasar Salad', 'Kheer', 'Coke', 'Sprite'),
(16, 'Chicken Soup', 'Mutton Chops', 'Ceasar Salad', 'Mixed Vegetables', 'Cheesecake', 'Fanta', NULL),
(17, 'Bread and Butter', 'Beef Steak', 'Ceasar Salad', 'Mixed Vegetables', 'Chocolate Cake', 'Fanta', 'Coke'),
(18, 'Chicken Soup', 'Vegan Lasagna', 'Mixed Vegetables', 'Cornbread', 'Chocolate Cake', 'Sprite', 'Fanta'),
(19, 'Chicken Soup', 'Mutton Chops', 'Mixed Vegetables', 'Mixed Vegetables', 'Red Velvet Cake', 'Sprite', 'Fanta'),
(21, 'Cucumber Sandwhich', 'Vegan Lasagna', 'Mixed Vegetables', NULL, 'Chocolate Cake', 'Water', 'Juice'),
(33, 'Chicken Soup', 'Fried Chiken', 'Cornbread', 'Cornbread', 'Red Velvet Cake', 'Coke', 'Fanta');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ReservationID` int(4) NOT NULL AUTO_INCREMENT,
  `MemberID` varchar(50) NOT NULL,
  `rDate` varchar(20) NOT NULL,
  `rTime` varchar(20) NOT NULL,
  `EventType` varchar(50) NOT NULL,
  `VenueName` varchar(50) NOT NULL,
  `PackageID` int(4) NOT NULL,
  `Capacity` int(3) NOT NULL,
  PRIMARY KEY (`ReservationID`),
  KEY `MemberID` (`MemberID`),
  KEY `rDate` (`rDate`),
  KEY `rTime` (`rTime`),
  KEY `EventID` (`EventType`),
  KEY `VenueID` (`VenueName`),
  KEY `PackageID` (`PackageID`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `MemberID`, `rDate`, `rTime`, `EventType`, `VenueName`, `PackageID`, `Capacity`) VALUES
(110, 'Aleena', '6/2/2016', '07:59 AM', 'Tea Party', 'Venue 2', 19, 123),
(111, 'newmem', '6/2/2016', '08:02 AM', 'Tea Party', 'Venue 2', 17, 123),
(112, 'huda', '6/18/2016', '11:12 AM', 'Luncheon', 'Venue 2', 19, 360);

-- --------------------------------------------------------

--
-- Table structure for table `side`
--

DROP TABLE IF EXISTS `side`;
CREATE TABLE IF NOT EXISTS `side` (
  `SideName` varchar(50) NOT NULL,
  `SidePrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`SideName`),
  KEY `SideName` (`SideName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `side`
--

INSERT INTO `side` (`SideName`, `SidePrice`) VALUES
('Ceasar Salad', '300'),
('Cornbread', '300'),
('Mixed Vegetables', '250'),
('Vegetable Soup', '300');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `TestID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  PRIMARY KEY (`TestID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`TestID`, `Name`, `Comment`) VALUES
(1, 'Sally', 'Amazing to work with!'),
(2, 'James', 'Superb quality!'),
(20, 'Amanda', 'Very Efficient and incredibly professional!'),
(23, 'huda', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `VenueName` varchar(50) NOT NULL,
  `Capacity` int(3) NOT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`VenueName`),
  KEY `VenueName` (`VenueName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`VenueName`, `Capacity`, `Location`) VALUES
('Venue 1', 100, '123 gulberg 3'),
('Venue 2', 120, '345 Defence Lahore'),
('venue3', 400, 'abc');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menupackages`
--
ALTER TABLE `menupackages`
  ADD CONSTRAINT `Appetizer` FOREIGN KEY (`Appetizer`) REFERENCES `appetizer` (`AppetizerName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Dessert` FOREIGN KEY (`Dessert`) REFERENCES `dessert` (`DessertName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DrinkOne` FOREIGN KEY (`DrinkOne`) REFERENCES `drink` (`DrinkName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DrinkTwo` FOREIGN KEY (`DrinkTwo`) REFERENCES `drink` (`DrinkName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Entree` FOREIGN KEY (`Entree`) REFERENCES `entree` (`EntreeName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SideOne` FOREIGN KEY (`SideOne`) REFERENCES `side` (`SideName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SideTwo` FOREIGN KEY (`SideTwo`) REFERENCES `side` (`SideName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `EventType` FOREIGN KEY (`EventType`) REFERENCES `event` (`eventType`),
  ADD CONSTRAINT `MemberID` FOREIGN KEY (`MemberID`) REFERENCES `account` (`MemberID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `PackageID` FOREIGN KEY (`PackageID`) REFERENCES `menupackages` (`PackageID`),
  ADD CONSTRAINT `VenueName` FOREIGN KEY (`VenueName`) REFERENCES `venue` (`VenueName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
