-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 06:48 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `combine`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Cruises`
--


-- --------------------------------------------------------

--
-- Table structure for table `CustHotel`
--

CREATE TABLE IF NOT EXISTS `CustHotel` (
  `idh` int(11) NOT NULL AUTO_INCREMENT,
  `fnameH` varchar(30) DEFAULT NULL,
  `mnameH` varchar(20) DEFAULT NULL,
  `lnameH` varchar(20) DEFAULT NULL,
  `ageH` varchar(20) DEFAULT NULL,
  `E_O_N_H` varchar(30) DEFAULT NULL,
  `codeH` varchar(30) DEFAULT NULL,
  `C_numberH` int(30) DEFAULT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `CustHotel`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Cust_id`, `fname`, `mname`, `lname`, `age`, `E_O_N`, `code`, `C_number`) VALUES
(76, 'sadasd', 'asd', 'asd', 0, 'sdasd', 'asda', 0),
(77, 'sdf', 'sdfsdf', 'sdf', 0, 'sdfdsf', '23', 2323);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Hotels`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `paBook`
--

INSERT INTO `paBook` (`paBook_id`, `plane_choice`, `Bfrom`, `Bto`, `choice_way`, `Bdepart`, `Breturn`, `Btravel`) VALUES
(37, 'international airways', 'tacloban', 'cebu', NULL, '06/12/2013', '', '1'),
(38, 'international airways', 'tacloban', 'cebu', NULL, '06/04/2013', '', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Packages`
--


-- --------------------------------------------------------

--
-- Table structure for table `Passengers_Plane`
--

CREATE TABLE IF NOT EXISTS `Passengers_Plane` (
  `pas_plane_id` int(50) NOT NULL AUTO_INCREMENT,
  `customer_id` int(50) NOT NULL,
  `Plane` varchar(50) NOT NULL,
  PRIMARY KEY (`pas_plane_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Passengers_Plane`
--

INSERT INTO `Passengers_Plane` (`pas_plane_id`, `customer_id`, `Plane`) VALUES
(11, 68, 'Air Asia'),
(12, 69, 'Air Asia'),
(13, 71, 'Zest-Airplane'),
(14, 74, 'Zest-Airplane'),
(15, 75, 'South-asian Airplane'),
(16, 76, 'international airways'),
(17, 77, 'international airways');

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
  ADD CONSTRAINT `combine_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `Customer` (`Cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `combine_ibfk_2` FOREIGN KEY (`Hotel_ID`) REFERENCES `Hotels` (`hotel_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `combine_ibfk_3` FOREIGN KEY (`paBook_id`) REFERENCES `paBook` (`paBook_id`) ON DELETE CASCADE ON UPDATE CASCADE;
