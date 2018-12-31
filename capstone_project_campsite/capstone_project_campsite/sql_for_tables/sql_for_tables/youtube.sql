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
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `video ID` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`video ID`, `description`, `title`) VALUES
('G1EvxTk81Es', 'There are 3 Encore Campgrounds near the Jersey Shore but we chose Lake and Shore for our Atlantic City Adventure. Lake & Shore RV Camping is a family fun ...', 'Jersey Shore RV Resorts and Campgrounds near Atlan'),
('', '', ''),
('uvh4SfhtRaA', 'Cape May KOA formerly Lake Laurie Campground.', 'Cape May KOA - Lake Laurie Rt.9 Cape May NewJersey'),
('XQY9l-Altek', 'For this episode we stayed at the Chestnut Lake RV Campground in Port Republic, NJ. We also visited the Edwin B. Forsythe National Wildlife Refuge and ...', 'CHESTNUT LAKE RV CAMPGROUND REVIEW'),
('YMzwxwPYzbM', 'Full Time RV Living: Season 2 EP073 May 29-30, 2017 Get more of our stuff at http://themotorhomeexperiment.Com/. In this video, we leave the Country Oaks ...', 'Full Time RV Living | Making Our Way To Jekyll Isl'),
('H6nivNCzt_s', 'Drive through review of Driftwood RV Resort and campground Cape May Courthouse New Jersey Shore near Seaisle.', 'Driftwood RV Resort and Campground Cape May Courth'),
('lGV7bwrGc1o', 'Frontier Campground a miracle in the middle of nowhere!', 'Frontier Campground'),
('u-lJc5wLR0Y', 'Indian Rock Camp Grounds Located adjacent to the York Heritage Rail Trail, Indian Rock Campground is easily accessible for many of the historic and popular ...', 'Indian Rock Campground York Pa'),
('', '', ''),
('RC15CHTZ63s', '29JUL18 Long Beach RV Resort Playground Inauguration.', '29JUL18 Long Beach RV Resort Playground Inaugurati'),
('', '', ''),
('9RLoEjMxGlQ', '', 'FATHERS DAY OLD CEDAR CAMPGROUND 2018'),
('pgS5_I7U664', 'Short video all settled down for the winter season while test flying the DJI Mavic Air. Enjoy.', 'Winter @Philadelphia South/Clarksboro KOA Campgrou'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('AoNz9wqCL8c', 'NJ SeashoreCampsites Cape May 740000861.', 'Seashore Campsites - NJ'),
('u9bxnF2bnL8', 'Alive and well in Groveland, CA - Shady Pines RV Resort - Yes we are the youngest ones here!', 'Oct 6 2007 - Day One'),
('', '', 'Timberland Lake Campground'),
('IoheUsHA7M8', 'Tim Tam campground and RV site in Jackson New Jersey.', 'Tim Tam campground and RV site'),
('sMgi873rEyw', 'Day 1 Camping At Triple Brook Camping Resort. Making Marshmallows Yummy! This is our first time camping at Triple Brook Camping Resort in New Jersey.', 'Day 1 Camping At Triple Brook Camping Resort.  Mak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
