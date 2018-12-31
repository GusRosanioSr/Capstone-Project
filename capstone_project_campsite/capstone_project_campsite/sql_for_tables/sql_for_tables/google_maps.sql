-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2018 at 10:46 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `google maps`
--

CREATE TABLE IF NOT EXISTS `google maps` (
  `street` varchar(50) NOT NULL,
  `road` varchar(50) NOT NULL,
  `town` varchar(20) NOT NULL,
  `county` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google maps`
--

INSERT INTO `google maps` (`street`, `road`, `town`, `county`, `state`, `country`, `zip`, `latitude`, `longitude`) VALUES
('450', 'Ishmael Road', 'Tuckerton', 'Burlington County', 'New Jersey', 'United States', '08087', '39.610813', '-74.408337'),
('112', 'Swainton Goshen Road', 'Cape May Court House', 'Middle Township', 'Cape May County', 'New Jersey', 'United States', '39.12625', '-74.8106509'),
('Bennett Crossing', 'Cape May', 'Lower Township', 'Cape May County', 'New Jersey', 'United States', '08204', '38.9788646', '-74.8984749'),
('631', 'Chestnut Neck Road', 'Port Republic', 'Atlantic County', 'New Jersey', 'United States', '08241', '39.541596', '-74.46919'),
('15', 'South Jersey Avenue', 'Dorothy', 'Weymouth', 'Atlantic County', 'New Jersey', 'United States', '39.417195', '-74.835771'),
('1963', 'Shore Road', 'Cape May Court House', 'Dennis', 'Cape May County', 'New Jersey', 'United States', '39.1494916', '-74.7638719'),
('10', 'Flanders Netcong Road', 'Flanders', 'Mount Olive Township', 'Morris County', 'New Jersey', 'United States', '40.888385', '-74.7105196'),
('249', 'New Jersey 50', 'Ocean View', 'Upper Township', 'Cape May County', 'New Jersey', 'United States', '39.242369', '-74.7135827'),
('805', 'Cresse Lane', 'Cape May', 'Lower Township', 'Cape May County', 'New Jersey', 'United States', '39.0010602', '-74.8902069'),
('Indian Rock RV Park & Campground', '920', 'West Veterans Highwa', 'Jackson', 'Ocean County', 'New Jersey', 'United States', '40.1001518', '-74.4153249'),
('515', 'Corsons Tavern Road', 'Ocean View', 'Dennis', 'Cape May County', 'New Jersey', 'United States', '39.198668', '-74.73683'),
('50', 'New Jersey 72', 'Barnegat', 'Barnegat Township', 'Ocean County', 'New Jersey', 'United States', '39.7608586', '-74.3171433'),
('1079', '12th Avenue', 'Mays Landing', 'Estell Manor', 'Atlantic County', 'New Jersey', 'United States', '39.417888', '-74.798736'),
('269', 'Richwood Road', 'Monroeville', 'Upper Pittsgrove', 'Salem County', 'New Jersey', 'United States', '39.640822', '-75.1760842'),
('117', 'Timberlane Road', 'Clarksboro', 'East Greenwich Township', 'Gloucester County', 'New Jersey', 'United States', '39.8080087', '-75.2372607'),
('540', 'South Pomona Road', 'Egg Harbor City', 'Atlantic County', 'New Jersey', 'United States', '08215', '39.4742357', '-74.5840171'),
('836', 'Seashore Road', 'Cape May', 'Lower Township', 'Cape May County', 'New Jersey', 'United States', '38.9707535', '-74.9206488'),
('115A', 'Leeds Point Road', 'Galloway', 'Atlantic County', 'New Jersey', 'United States', '08205', '39.481422', '-74.452624'),
('1', 'Jackson Drive', 'Jackson', 'Ocean County', 'New Jersey', 'United States', '08527', '40.1091778', '-74.3578076'),
('1711', 'U.S. 9', 'Cape May Court House', 'Middle Township', 'Cape May County', 'New Jersey', 'United States', '39.132595', '-74.777571'),
('1', 'Earl Drive', 'Cape May', 'Lower Township', 'Cape May County', 'New Jersey', 'United States', '38.982273', '-74.906749'),
('443', '6th Avenue', 'Galloway', 'Atlantic County', 'New Jersey', 'United States', '08205', '39.4610492', '-74.5066164'),
('550', 'South Hope Chapel Road', 'Jackson', 'Ocean County', 'New Jersey', 'United States', '08527', '40.119667', '-74.458967'),
('295', 'Brewers Bridge Road', 'Jackson', 'Ocean County', 'New Jersey', 'United States', '08527', '40.100471', '-74.27239'),
('58', 'Honey Run Road', 'Blairstown', 'Knowlton Township', 'Warren County', 'New Jersey', 'United States', '40.9120124', '-75.019893');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
