
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2016 at 11:35 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u322920622_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `10001`
--

CREATE TABLE IF NOT EXISTS `10001` (
  `boat_id` int(11) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `battery_state` varchar(10) NOT NULL,
  PRIMARY KEY (`boat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `10001`
--

INSERT INTO `10001` (`boat_id`, `latitude`, `longitude`, `battery_state`) VALUES
(10085, '6.905415', '79.73143', ' 56%'),
(10086, '6.967155', '79.516573', ' 56%'),
(10087, '7.157937', '79.318679', ' 56%'),
(10088, '7.343031', '79.041627', ' 56%'),
(10089, '7.645745', '79.058589', ' 56%'),
(10090, '7.993041', '79.081206', ' 56%'),
(10091, '8.289689', '79.052935', ' 56%'),
(10092, '8.46869', '79.296062', ' 56%'),
(10093, '8.268905', '78.946161', ' 56%'),
(10094, '8.533339', '79.138638', ' 56%'),
(10095, '8.728633', '79.146868', ' 56%'),
(10096, '8.364384', '78.568391', ' 56%'),
(10097, '8.126669', '78.549914', ' 56%'),
(10098, '7.870512', '78.198856', ' 56%'),
(10099, '7.403536', '78.087996', ' 56%'),
(10100, '6.853521', '78.097234', ' 56%'),
(10101, '5.963008', '78.411339', ' 56%'),
(10102, '5.97679', '79.210457', ' 56%'),
(10103, '6.229405', '79.737044', ' 56%'),
(10104, '6.504846', '79.820189', ' 56%');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(19, '6.97779', '79.210467', ' 67%'),
(20, '7.229406', '79.737044', ' 67%'),
(21, '7.604847', '79.820189', ' 67%');

-- --------------------------------------------------------

--
-- Table structure for table `ad_fishery_officer`
--

CREATE TABLE IF NOT EXISTS `ad_fishery_officer` (
  `user_id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `office_tp` varchar(10) DEFAULT NULL,
  `discrict_code` varchar(5) NOT NULL,
  PRIMARY KEY (`user_id`,`service_id`,`discrict_code`),
  KEY `FK_district_ad_idx` (`discrict_code`),
  KEY `FK_servicead_idx` (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boat`
--

CREATE TABLE IF NOT EXISTS `boat` (
  `boat_register_number` varchar(20) NOT NULL,
  `ownerid` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`boat_register_number`,`ownerid`),
  KEY `FK_owner_boat` (`ownerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boat`
--

INSERT INTO `boat` (`boat_register_number`, `ownerid`, `type`) VALUES
('COLO003-555', 'O003', 'small'),
('COLO001-256', 'O001', 'type 2'),
('COLO001-452', 'O001', 'type 3'),
('KATO002-425', 'O002', 'type 2');

-- --------------------------------------------------------

--
-- Table structure for table `boat_owner`
--

CREATE TABLE IF NOT EXISTS `boat_owner` (
  `owner_id` varchar(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `district_code` varchar(10) NOT NULL,
  PRIMARY KEY (`owner_id`,`district_code`),
  KEY `FK_district_owner_idx` (`district_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boat_owner`
--

INSERT INTO `boat_owner` (`owner_id`, `name`, `username`, `password`, `district_code`) VALUES
('O001', 'sandun', 'sandun', '123456', 'COL'),
('O002', 'kumara', 'kumara', '123456', 'KAT'),
('O003', 'imal', 'imal', '12', 'COL');

-- --------------------------------------------------------

--
-- Table structure for table `coast_guard`
--

CREATE TABLE IF NOT EXISTS `coast_guard` (
  `user_id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `point` varchar(40) NOT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `office_tp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `device_id_imei` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL,
  `service_provider` varchar(50) NOT NULL,
  `sim_number` int(11) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `sim_tp_number` varchar(10) NOT NULL,
  `boat_register_number` varchar(45) NOT NULL,
  PRIMARY KEY (`device_id_imei`,`boat_register_number`),
  KEY `FK_boat_register_number_idx` (`boat_register_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id_imei`, `reg_date`, `service_provider`, `sim_number`, `device_type`, `sim_tp_number`, `boat_register_number`) VALUES
('000000000000000', '0000-00-00 00:00:00', 'Mobitel', 2147483647, 'Smart Phone', '0718256773', 'COLO001-452'),
('353424070452854', '0000-00-00 00:00:00', 'Mobitel', 2147483647, 'Smart Phone', '0718256773', 'COLO003-555');

-- --------------------------------------------------------

--
-- Table structure for table `discrict`
--

CREATE TABLE IF NOT EXISTS `discrict` (
  `district_code` varchar(5) NOT NULL,
  `district` varchar(45) NOT NULL,
  PRIMARY KEY (`district_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discrict`
--

INSERT INTO `discrict` (`district_code`, `district`) VALUES
('COL', 'colombo'),
('KAT', 'kalathara');

-- --------------------------------------------------------

--
-- Table structure for table `district_navy_officer`
--

CREATE TABLE IF NOT EXISTS `district_navy_officer` (
  `user_id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `office_address` varchar(100) NOT NULL,
  `office_tp` varchar(10) NOT NULL,
  `rank` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`,`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journy`
--

CREATE TABLE IF NOT EXISTS `journy` (
  `journy_id` varchar(64) NOT NULL,
  `full_path_details` mediumtext NOT NULL,
  `start_date` varchar(25) NOT NULL,
  `start_time` varchar(30) NOT NULL,
  `start_latitude` double NOT NULL,
  `start_longtitude` double NOT NULL,
  `end_date` varchar(30) DEFAULT NULL,
  `end_time` varchar(30) DEFAULT NULL,
  `end_latitude` double DEFAULT NULL,
  `end_longtitude` double DEFAULT NULL,
  `fisherman` varchar(50) DEFAULT NULL,
  `boat_register_number` varchar(40) NOT NULL,
  PRIMARY KEY (`journy_id`,`boat_register_number`),
  KEY `FK_boat_jny_idx` (`boat_register_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journy`
--

INSERT INTO `journy` (`journy_id`, `full_path_details`, `start_date`, `start_time`, `start_latitude`, `start_longtitude`, `end_date`, `end_time`, `end_latitude`, `end_longtitude`, `fisherman`, `boat_register_number`) VALUES
('COLO001-452_23-Jul-2016_02:29:13', '[{"boat_id":"10085","latitude":"6.905415","longitude":"79.73143","battery_state":" 56%"},{"boat_id":"10086","latitude":"6.967155","longitude":"79.516573","battery_state":" 56%"},{"boat_id":"10087","latitude":"7.157937","longitude":"79.318679","battery_state":" 56%"},{"boat_id":"10088","latitude":"7.343031","longitude":"79.041627","battery_state":" 56%"},{"boat_id":"10089","latitude":"7.645745","longitude":"79.058589","battery_state":" 56%"},{"boat_id":"10090","latitude":"7.993041","longitude":"79.081206","battery_state":" 56%"},{"boat_id":"10091","latitude":"8.289689","longitude":"79.052935","battery_state":" 56%"},{"boat_id":"10092","latitude":"8.46869","longitude":"79.296062","battery_state":" 56%"},{"boat_id":"10093","latitude":"8.268905","longitude":"78.946161","battery_state":" 56%"},{"boat_id":"10094","latitude":"8.533339","longitude":"79.138638","battery_state":" 56%"},{"boat_id":"10095","latitude":"8.728633","longitude":"79.146868","battery_state":" 56%"},{"boat_id":"10096","latitude":"8.364384","longitude":"78.568391","battery_state":" 56%"},{"boat_id":"10097","latitude":"8.126669","longitude":"78.549914","battery_state":" 56%"},{"boat_id":"10098","latitude":"7.870512","longitude":"78.198856","battery_state":" 56%"},{"boat_id":"10099","latitude":"7.403536","longitude":"78.087996","battery_state":" 56%"},{"boat_id":"10100","latitude":"6.853521","longitude":"78.097234","battery_state":" 56%"},{"boat_id":"10101","latitude":"5.963008","longitude":"78.411339","battery_state":" 56%"},{"boat_id":"10102","latitude":"5.97679","longitude":"79.210457","battery_state":" 56%"},{"boat_id":"10103","latitude":"6.229405","longitude":"79.737044","battery_state":" 56%"},{"boat_id":"10104","latitude":"6.504846","longitude":"79.820189","battery_state":" 56%"}]', '0000-00-00', '02:29:13', 0, 0, '0000-00-00', '00:00:00', 0, 0, 'dgfg', 'COLO001-452');

-- --------------------------------------------------------

--
-- Table structure for table `launching_point`
--

CREATE TABLE IF NOT EXISTS `launching_point` (
  `point_id` varchar(10) NOT NULL,
  `district_code` varchar(5) NOT NULL,
  `point_name` varchar(25) NOT NULL,
  `point_address` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  PRIMARY KEY (`point_id`),
  KEY `FK_district_idx` (`district_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ministry_officer`
--

CREATE TABLE IF NOT EXISTS `ministry_officer` (
  `user_id` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `office_tp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `old_password` varchar(100) NOT NULL,
  `usercol` varchar(45) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tp_number` varchar(10) NOT NULL,
  `district_code` varchar(5) NOT NULL,
  PRIMARY KEY (`user_id`,`district_code`),
  KEY `FK_district_idx` (`district_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `user_type`, `created_date`, `old_password`, `usercol`, `nic`, `name`, `email`, `tp_number`, `district_code`) VALUES
('U0001', 'nadun', '1234', 'ADOfficer', '2016-06-08 00:00:00', '0000', '1', '922760047v', 'nadun', 'nadun@gmamil.,cpom', '0718256773', 'COL'),
('U0002', 'malinda', '123456', 'Ministary', '2016-06-02 00:00:00', '0000', '1', '922760047v', 'malinda', 'mainda@gmail.com', '0718256775', 'COL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
