-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2018 at 10:45 PM
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
-- Table structure for table `campground`
--

CREATE TABLE IF NOT EXISTS `campground` (
  `counter` int(11) NOT NULL,
  `state` varchar(3) NOT NULL,
  `facilityName` varchar(60) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `sitesWithAmps` varchar(1) NOT NULL,
  `sitesWithPetsAllowed` varchar(1) NOT NULL,
  `sitesWithSewerHookup` varchar(1) NOT NULL,
  `sitesWithWaterHookup` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campground`
--

INSERT INTO `campground` (`counter`, `state`, `facilityName`, `latitude`, `longitude`, `sitesWithAmps`, `sitesWithPetsAllowed`, `sitesWithSewerHookup`, `sitesWithWaterHookup`) VALUES
(1, 'NJ', 'Atlantic Shore Pines Campground', '39.61115', '-74.4082389', 'Y', 'Y', 'N', 'N'),
(2, 'NJ', 'Big Timber Lake RV Camping Resort', '39.1259611', '-74.8110694', 'Y', 'Y', 'N', 'N'),
(3, 'NJ', 'Cape May KOA', '38.9811639', '-74.9007556', 'N', 'N', 'N', 'N'),
(4, 'NJ', 'Chestnut Lake RV Campground', '39.5416333', '-74.4692528', 'N', 'N', 'N', 'N'),
(5, 'NJ', 'Country Oaks Campground', '39.4162611', '-74.8360389', 'Y', 'Y', 'N', 'N'),
(6, 'NJ', 'Driftwood RV Resort &amp; Campground', '39.1500389', '-74.7644', 'Y', 'Y', 'N', 'N'),
(7, 'NJ', 'Fla-Net Park', '40.8889306', '-74.71035', 'Y', 'Y', 'N', 'N'),
(8, 'NJ', 'Frontier Campground', '39.2426', '-74.7127806', 'Y', 'Y', 'N', 'N'),
(9, 'NJ', 'Holly Shores Camping Resort', '39.0012111', '-74.8902694', 'Y', 'Y', 'N', 'N'),
(10, 'NJ', 'Indian Rock RV Park', '40.1004194', '-74.4154889', 'Y', 'Y', 'N', 'N'),
(11, 'NJ', 'Lake and Shore RV Resort', '39.1986694', '-74.7368306', 'N', 'N', 'N', 'N'),
(12, 'NJ', 'Long Beach RV Resort', '39.7612806', '-74.3158889', 'Y', 'Y', 'N', 'N'),
(13, 'NJ', 'Mays Landing RV Resort', '39.4180833', '-74.7990833', 'N', 'N', 'N', 'N'),
(14, 'NJ', 'Old Cedar Campground', '39.6408333', '-75.1755556', 'Y', 'Y', 'Y', 'Y'),
(15, 'NJ', 'Philadelphia South / Clarksboro KOA', '39.8080083', '-75.2372611', 'N', 'N', 'N', 'N'),
(16, 'NJ', 'Pomona RV Park', '39.474525', '-74.5839778', 'Y', 'Y', 'N', 'N'),
(17, 'NJ', 'Rent an RV for Your Next Adventure', '38.9710861', '-74.9209778', 'Y', 'Y', 'N', 'N'),
(18, 'NJ', 'Rent an RV for Your Next Adventure', '39.482', '-74.4526361', 'Y', 'Y', 'N', 'N'),
(19, 'NJ', 'Rent an RV for Your Next Adventure', '40.1086806', '-74.3585583', 'Y', 'Y', 'N', 'N'),
(20, 'NJ', 'Sea Pines RV Resort and Campground', '39.1322222', '-74.7768083', 'N', 'N', 'N', 'N'),
(21, 'NJ', 'Seashore Campsites &amp; RV Resort', '38.9825639', '-74.9066861', 'Y', 'Y', 'N', 'N'),
(22, 'NJ', 'Shady Pines RV Resort', '39.4612111', '-74.50665', 'Y', 'Y', 'N', 'N'),
(23, 'NJ', 'Timberland Lake Campground', '40.1188889', '-74.4574806', 'Y', 'Y', 'N', 'N'),
(24, 'NJ', 'Tip Tam Camping Resort', '40.1006806', '-74.2718806', 'Y', 'Y', 'N', 'N'),
(25, 'NJ', 'TripleBrook Camping Resort', '40.91205', '-75.0191', 'Y', 'Y', 'N', 'N'),
(26, 'NJ', 'Winding River Campground', '39.49235', '-74.7711889', 'Y', 'Y', 'N', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campground`
--
ALTER TABLE `campground`
  ADD PRIMARY KEY (`counter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campground`
--
ALTER TABLE `campground`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
