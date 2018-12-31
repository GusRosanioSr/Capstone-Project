-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2018 at 10:47 PM
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
-- Table structure for table `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `id` varchar(20) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `temperature`, `summary`, `longitude`, `latitude`) VALUES
('Atlantic Shore Pines', '58', 'Overcast', '-74.4082389', '39.61115'),
('Big Timber Lake RV C', '57', 'Mostly Cloudy', '-74.8110694', '39.1259611'),
('Cape May KOA', '58', 'Mostly Cloudy', '-74.9007556', '38.9811639'),
('Chestnut Lake RV Cam', '58', 'Overcast', '-74.4692528', '39.5416333'),
('Country Oaks Campgro', '59', 'Overcast', '-74.8360389', '39.4162611'),
('Driftwood RV Resort ', '57', 'Mostly Cloudy', '-74.7644', '39.1500389'),
('Fla-Net Park', '48', 'Foggy', '-74.71035', '40.8889306'),
('Frontier Campground', '58', 'Overcast', '-74.7127806', '39.2426'),
('Holly Shores Camping', '58', 'Mostly Cloudy', '-74.8902694', '39.0012111'),
('Indian Rock RV Park', '59', 'Overcast', '-74.4154889', '40.1004194'),
('Lake and Shore RV Re', '57', 'Mostly Cloudy', '-74.7368306', '39.1986694'),
('Long Beach RV Resort', '58', 'Overcast', '-74.3158889', '39.7612806'),
('Mays Landing RV Reso', '59', 'Overcast', '-74.7990833', '39.4180833'),
('Old Cedar Campground', '56', 'Overcast', '-75.1755556', '39.6408333'),
('Philadelphia South /', '56', 'Overcast', '-75.2372611', '39.8080083'),
('Pomona RV Park', '58', 'Overcast', '-74.5839778', '39.474525'),
('Rent an RV for Your ', '58', 'Mostly Cloudy', '-74.9209778', '38.9710861'),
('Rent an RV for Your ', '57', 'Mostly Cloudy', '-74.4526361', '39.482'),
('Rent an RV for Your ', '59', 'Overcast', '-74.3585583', '40.1086806'),
('Sea Pines RV Resort ', '57', 'Mostly Cloudy', '-74.7768083', '39.1322222'),
('Seashore Campsites &', '58', 'Mostly Cloudy', '-74.9066861', '38.9825639'),
('Shady Pines RV Resor', '57', 'Mostly Cloudy', '-74.50665', '39.4612111'),
('Timberland Lake Camp', '59', 'Overcast', '-74.4574806', '40.1188889'),
('Tip Tam Camping Reso', '58', 'Overcast', '-74.2718806', '40.1006806'),
('TripleBrook Camping ', '48', 'Foggy', '-75.0191', '40.91205');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
