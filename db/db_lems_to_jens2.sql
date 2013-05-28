-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 06:48 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `AIRLINES`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cars`
--

CREATE TABLE IF NOT EXISTS `Cars` (
  `cars_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pick_up_l` varchar(40) DEFAULT NULL,
  `Drop_off_l` varchar(40) DEFAULT NULL,
  `Cpick_up` varchar(20) DEFAULT NULL,
  `Cdrop_off` varchar(20) DEFAULT NULL,
  `Phours` varchar(3) DEFAULT NULL,
  `Pmin` varchar(2) DEFAULT NULL,
  `Pam_pm` varchar(2) DEFAULT NULL,
  `Dhours` varchar(3) DEFAULT NULL,
  `Dmin` varchar(3) DEFAULT NULL,
  `Dam_pm` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cars_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Cars`
--

INSERT INTO `Cars` (`cars_ID`, `Pick_up_l`, `Drop_off_l`, `Cpick_up`, `Cdrop_off`, `Phours`, `Pmin`, `Pam_pm`, `Dhours`, `Dmin`, `Dam_pm`) VALUES
(13, 'asd', 'asd', '05/25/2013', '06/19/2013', '01', '45', 'am', '03', '30', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `combine`
--

CREATE TABLE IF NOT EXISTS `combine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_id` int(11) DEFAULT NULL,
  `Hotel_ID` int(11) DEFAULT NULL,
  `paBook_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Hotel_ID` (`Hotel_ID`),
  KEY `paBook_id` (`paBook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `combine`
--

INSERT INTO `combine` (`id`, `Cust_id`, `Hotel_ID`, `paBook_id`) VALUES
(2, 25, 3, 37);

-- --------------------------------------------------------

--
-- Table structure for table `Cruises`
--

CREATE TABLE IF NOT EXISTS `Cruises` (
  `cruises_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Destination` varchar(40) DEFAULT NULL,
  `LOcruises` varchar(40) DEFAULT NULL,
  `Ddate` varchar(20) DEFAULT NULL,
  `Ydate` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cruises_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Cruises`
--

INSERT INTO `Cruises` (`cruises_ID`, `Destination`, `LOcruises`, `Ddate`, `Ydate`) VALUES
(1, '5', '3', '04', '2015'),
(2, '', '2', '05', '2013'),
(3, '', '2', '05', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `Cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `E_O_N` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `C_number` int(30) DEFAULT NULL,
  PRIMARY KEY (`Cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Cust_id`, `fname`, `mname`, `lname`, `age`, `E_O_N`, `code`, `C_number`) VALUES
(22, 'lemuel', 'silleza', 'lucanas', 12, 'asdasda', '51564654', 546545),
(23, 'joanne', 'alcain', 'lucanas', 25, 'kamote@yahoo.com', '9809898', 2147483647),
(24, 'johlem', 'silleza', 'lucanas', 12, 'asdasdasd', '2131231', 324234),
(25, 'annKo', 'kamote', 'balanghoy', 17, 'saanako@gmail.com', '1234134', 2147483647),
(26, '', '', '', 0, '', '', 0),
(27, 'mj', 'mj', 'mj', 6, 'mj@yahoo.com', '12', 2147483647),
(28, '', '', '', 0, '', '', 0),
(29, 'jiemay', 'gastalla', 'gastalla', 21, '02123154541', '213656', 232326);

-- --------------------------------------------------------

--
-- Table structure for table `Hotels`
--

CREATE TABLE IF NOT EXISTS `Hotels` (
  `hotel_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HotelName` varchar(20) DEFAULT NULL,
  `checkIn` varchar(20) DEFAULT NULL,
  `checkOut` varchar(20) DEFAULT NULL,
  `R_F_A` varchar(100) DEFAULT NULL,
  `R_F_C` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hotel_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `Hotels`
--

INSERT INTO `Hotels` (`hotel_ID`, `HotelName`, `checkIn`, `checkOut`, `R_F_A`, `R_F_C`) VALUES
(3, NULL, '05/23/2013', '05/24/2013', '4-1', '4-1'),
(4, NULL, '05/23/2013', '05/24/2013', '2-2', '2-2'),
(38, 'i-6', '05/23/2013', '05/31/2013', '4-1', '4-1'),
(39, 'i-7', '', '', '2-1', '2-1'),
(40, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paBook`
--

CREATE TABLE IF NOT EXISTS `paBook` (
  `paBook_id` int(11) NOT NULL AUTO_INCREMENT,
  `plane_choice` varchar(30) DEFAULT NULL,
  `Bfrom` varchar(20) DEFAULT NULL,
  `Bto` varchar(20) DEFAULT NULL,
  `choice_way` varchar(10) DEFAULT NULL,
  `Bdepart` varchar(20) DEFAULT NULL,
  `Breturn` varchar(20) DEFAULT NULL,
  `Btravel` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`paBook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `paBook`
--

INSERT INTO `paBook` (`paBook_id`, `plane_choice`, `Bfrom`, `Bto`, `choice_way`, `Bdepart`, `Breturn`, `Btravel`) VALUES
(37, 'Asian airplane', 'tacloban', 'manila', 'RoundTrip', '05/09/2013', '05/10/2013', '2'),
(38, 'Tiger airplane', 'cebu', 'bacolod', 'One-way', '06/17/2013', '07/17/2013', '4'),
(39, 'international airways', 'bacolod', 'cebu', 'Round-trip', '', '', '1'),
(40, 'Air Asia', 'tacloban', 'cebu', 'Round-trip', '', '', '1'),
(41, 'Asian airplane', 'cebu', 'bacolod', 'Round-trip', '', '', '4'),
(42, 'Tiger airplane', 'cebu', 'bacolod', 'Round-trip', '', '', '6'),
(43, 'South-asian Airplane', 'tacloban', 'manila', 'Round-trip', '05/07/2013', '05/18/2013', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Packages`
--

CREATE TABLE IF NOT EXISTS `Packages` (
  `package_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pfrom` varchar(40) DEFAULT NULL,
  `Pto` varchar(40) DEFAULT NULL,
  `Pdepart` varchar(20) DEFAULT NULL,
  `Preturn` varchar(20) DEFAULT NULL,
  `Ptravel` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`package_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Packages`
--

INSERT INTO `Packages` (`package_ID`, `Pfrom`, `Pto`, `Pdepart`, `Preturn`, `Ptravel`) VALUES
(1, 'cavite', 'manila', '05/09/2013', '4', NULL),
(2, 'sad', 'assd', '05/14/2013', '3', NULL),
(3, 'asdasda', 'sdasd', '05/13/2013', '05/21/2013', '5'),
(4, '', '', '', '', '1'),
(5, '', '', '06/13/2013', '07/10/2013', '1');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `galing_sa` varchar(50) DEFAULT NULL,
  `papuntang` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `galing_sa`, `papuntang`, `price`) VALUES
(1, 'tacloban', 'cebu', 3000),
(2, 'tacloban', 'manila', 2500),
(3, 'bacolod', 'cebu', 3500),
(4, 'bacolod', 'tacloban', 4000),
(5, 'tacloban', 'bacolod', 4000),
(6, 'cebu', 'bacolod', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `plane_id` int(11) NOT NULL AUTO_INCREMENT,
  `plane_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`plane_id`),
  KEY `plane_id` (`plane_id`),
  KEY `plane_id_2` (`plane_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `planes`
--

INSERT INTO `planes` (`plane_id`, `plane_name`) VALUES
(1, 'eroplano!'),
(2, 'Air Asia'),
(3, 'Pacific'),
(4, 'Philippines'),
(5, 'PAL Express'),
(6, 'Manila'),
(7, 'Zest Air'),
(8, 'Tiger');

-- --------------------------------------------------------

--
-- Table structure for table `planes_to_places`
--

CREATE TABLE IF NOT EXISTS `planes_to_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plane_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `planes_to_places`
--

INSERT INTO `planes_to_places` (`id`, `plane_id`, `place_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 2),
(4, 8, 7),
(5, 1, 4),
(6, 2, 5),
(7, 4, 5),
(8, 3, 6);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `combine`
--
ALTER TABLE `combine`
  ADD CONSTRAINT `combine_ibfk_3` FOREIGN KEY (`paBook_id`) REFERENCES `paBook` (`paBook_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `combine_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `Customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `combine_ibfk_2` FOREIGN KEY (`Hotel_ID`) REFERENCES `Hotels` (`hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
