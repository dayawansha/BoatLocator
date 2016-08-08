-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2016 at 03:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boatlocator`
--

-- --------------------------------------------------------

--
-- Table structure for table `10001`
--

CREATE TABLE IF NOT EXISTS `10001` (
  `boat_id` int(15) NOT NULL AUTO_INCREMENT,
  `longitude` varchar(15) NOT NULL,
  `battery_state` varchar(15) NOT NULL,
  `latitude` varchar(15) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10105 ;

--
-- Dumping data for table `10001`
--

INSERT INTO `10001` (`boat_id`, `longitude`, `battery_state`, `latitude`) VALUES
(2, '79.393144 ', '55%', '8.075000 '),
(3, '80.001412', '22%', '9.377270'),
(10085, '79.73143', ' 56%', '6.905415'),
(10086, '79.516573', ' 56%', '6.967155'),
(10087, '79.318679', ' 56%', '7.157937'),
(10088, '79.041627', ' 56%', '7.343031'),
(10089, '79.058589', ' 56%', '7.645745'),
(10090, '79.081206', ' 56%', '7.993041'),
(10091, '79.052935', ' 56%', '8.289689'),
(10092, '79.296062', ' 56%', '8.46869'),
(10093, '78.946161', ' 56%', '8.268905'),
(10094, '79.138638', ' 56%', '8.533339'),
(10095, '79.146868', ' 56%', '8.728633'),
(10096, '78.568391', ' 56%', '8.364384'),
(10097, '78.549914', ' 56%', '8.126669'),
(10098, '78.198856', ' 56%', '7.870512'),
(10099, '78.087996', ' 56%', '7.403536'),
(10100, '78.097234', ' 56%', '6.853521'),
(10101, '78.411339', ' 56%', '5.963008'),
(10102, '79.210457', ' 56%', '5.97679'),
(10103, '79.737044', ' 56%', '6.229405'),
(10104, '79.820189', ' 56%', '6.504846');

-- --------------------------------------------------------

--
-- Table structure for table `10002`
--

CREATE TABLE IF NOT EXISTS `10002` (
  `boat_id` int(11) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `battery_state` varchar(10) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `10002`
--

INSERT INTO `10002` (`boat_id`, `latitude`, `longitude`, `battery_state`) VALUES
(2, '7.906416', '79.73143', ' 67%'),
(3, '7.977166', '79.617673', ' 67%'),
(4, '7.167937', '79.318779', ' 67%'),
(5, '7.343031', '79.041727', ' 67%'),
(6, '7.746746', '79.068689', ' 67%'),
(7, '7.993041', '79.081207', ' 67%'),
(8, '8.289789', '79.062936', ' 67%'),
(9, '8.47879', '79.297072', ' 67%'),
(10, '8.278906', '78.947171', ' 67%'),
(11, '8.633339', '79.138738', ' 67%'),
(12, '8.728733', '79.147878', ' 67%'),
(13, '8.374384', '78.678391', ' 67%'),
(14, '8.127779', '78.649914', ' 67%'),
(15, '7.870612', '78.198867', ' 67%'),
(16, '7.403637', '78.087997', ' 67%'),
(17, '7.863621', '78.097234', ' 67%'),
(18, '6.973008', '78.411339', ' 67%'),
(19, '9.095063', '79.542668', ' 67%');

-- --------------------------------------------------------

--
-- Table structure for table `10003`
--

CREATE TABLE IF NOT EXISTS `10003` (
  `boat_id` int(11) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `battery_state` varchar(10) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `10003`
--

INSERT INTO `10003` (`boat_id`, `latitude`, `longitude`, `battery_state`) VALUES
(11008, '5.311589', '79.965819', '55%'),
(11009, '6.971867', '78.208006', '88%'),
(11010, '9.190678', '80.317381', '89%'),
(11011, '9.341123', '86.997070', '66'),
(11012, '8.972349', '80.526123', '69'),
(11013, '9.015754', '75.527343', '19'),
(11014, '6.665062', '79.152832', '34');

-- --------------------------------------------------------

--
-- Table structure for table `boat_details`
--

CREATE TABLE IF NOT EXISTS `boat_details` (
  `boat_id` varchar(50) NOT NULL,
  `owner_id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boat_owner`
--

CREATE TABLE IF NOT EXISTS `boat_owner` (
  `owner_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `distric` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `device_id` varchar(20) NOT NULL,
  `owner_id` varchar(20) NOT NULL,
  `boat_id` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `service_provider` varchar(20) NOT NULL,
  `sim_number` varchar(20) NOT NULL,
  `device_type` varchar(20) NOT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district_code`
--

CREATE TABLE IF NOT EXISTS `district_code` (
  `district` varchar(30) NOT NULL,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journy`
--

CREATE TABLE IF NOT EXISTS `journy` (
  `path_id` varchar(20) NOT NULL,
  `boat_id` varchar(20) NOT NULL,
  `full_path_details` mediumtext NOT NULL,
  `started_location` float NOT NULL,
  `end_location` float NOT NULL,
  `started_date` date NOT NULL,
  `end_date` date NOT NULL,
  `error` varchar(100) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journy`
--

INSERT INTO `journy` (`path_id`, `boat_id`, `full_path_details`, `started_location`, `end_location`, `started_date`, `end_date`, `error`) VALUES
('TEST', 'TEST', '[{"boat_id":"10085","latitude":"6.905415","longitude":"79.73143","battery_state":" 56%"},{"boat_id":"10086","latitude":"6.967155","longitude":"79.516573","battery_state":" 56%"},{"boat_id":"10087","latitude":"7.157937","longitude":"79.318679","battery_state":" 56%"},{"boat_id":"10088","latitude":"7.343031","longitude":"79.041627","battery_state":" 56%"},{"boat_id":"10089","latitude":"7.645745","longitude":"79.058589","battery_state":" 56%"},{"boat_id":"10090","latitude":"7.993041","longitude":"79.081206","battery_state":" 56%"},{"boat_id":"10091","latitude":"8.289689","longitude":"79.052935","battery_state":" 56%"},{"boat_id":"10092","latitude":"8.46869","longitude":"79.296062","battery_state":" 56%"},{"boat_id":"10093","latitude":"8.268905","longitude":"78.946161","battery_state":" 56%"},{"boat_id":"10094","latitude":"8.533339","longitude":"79.138638","battery_state":" 56%"},{"boat_id":"10095","latitude":"8.728633","longitude":"79.146868","battery_state":" 56%"},{"boat_id":"10096","latitude":"8.364384","longitude":"78.568391","battery_state":" 56%"},{"boat_id":"10097","latitude":"8.126669","longitude":"78.549914","battery_state":" 56%"},{"boat_id":"10098","latitude":"7.870512","longitude":"78.198856","battery_state":" 56%"},{"boat_id":"10099","latitude":"7.403536","longitude":"78.087996","battery_state":" 56%"},{"boat_id":"10100","latitude":"6.853521","longitude":"78.097234","battery_state":" 56%"},{"boat_id":"10101","latitude":"5.963008","longitude":"78.411339","battery_state":" 56%"},{"boat_id":"10102","latitude":"5.97679","longitude":"79.210457","battery_state":" 56%"},{"boat_id":"10103","latitude":"6.229405","longitude":"79.737044","battery_state":" 56%"},{"boat_id":"10104","latitude":"6.504846","longitude":"79.820189","battery_state":" 56%"}]', 111, 111, '2016-06-04', '2016-06-05', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `sri lankan inner border`
--

CREATE TABLE IF NOT EXISTS `sri lankan inner border` (
  `boat_id` int(11) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `battery_state` varchar(10) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sri lankan inner border`
--

INSERT INTO `sri lankan inner border` (`boat_id`, `latitude`, `longitude`, `battery_state`) VALUES
(2, '84.2868615', '10.1429573', ''),
(3, '84.5307775', '9.61474936', ''),
(4, '84.5619705', '9.49534136', ''),
(5, '84.6354315', '9.38977436', ''),
(6, '84.6361525', '9.38821036', ''),
(7, '84.6362225', '9.38810936', ''),
(8, '84.6367765', '9.38690736', ''),
(9, '84.6371125', '9.38642436', ''),
(10, '84.6378335', '9.38485936', ''),
(11, '84.6379035', '9.38475936', ''),
(12, '84.6386545', '9.38313036', ''),
(13, '84.6386865', '9.38308336', ''),
(14, '84.6436055', '9.37241136', ''),
(15, '84.6577225', '9.35211736', ''),
(16, '84.6590525', '9.34923136', ''),
(17, '84.6594035', '9.34872636', ''),
(18, '84.6594485', '9.34862936', ''),
(19, '84.6651605', '9.34041736', ''),
(20, '84.6664345', '9.33765236', ''),
(21, '84.6668415', '9.33706736', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_code`
--

CREATE TABLE IF NOT EXISTS `user_code` (
  `user_type` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
