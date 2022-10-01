-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2022 at 08:51 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19651989_laptoplist`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop_list`
--

CREATE TABLE `laptop_list` (
  `Laptop` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Manufacturer` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `OS` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `CPU Series` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `GPU` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Size` float NOT NULL,
  `Resolution` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Refresh Rate` int(11) NOT NULL,
  `Aspect Ratio` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Touchscreen` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `RAM Size (GB)` int(11) NOT NULL,
  `Storage Size (GB)` int(11) NOT NULL,
  `Thunderbolt` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Micro SD` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `RJ45` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `USB-A Slots` int(11) NOT NULL,
  `USB-C Slots` int(11) NOT NULL,
  `Battery Capacity` float NOT NULL,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laptop_list`
--

INSERT INTO `laptop_list` (`Laptop`, `Price`, `Manufacturer`, `OS`, `CPU Series`, `CPU`, `GPU`, `Size`, `Resolution`, `Refresh Rate`, `Aspect Ratio`, `Touchscreen`, `RAM Size (GB)`, `Storage Size (GB)`, `Thunderbolt`, `Micro SD`, `RJ45`, `USB-A Slots`, `USB-C Slots`, `Battery Capacity`, `Weight`) VALUES
('Aspire 1 Laptop - A115-32-C7ZW', 249.99, 'Acer', 'Windows 11', 'Intel Celron', 'N4000', 'Intel UHD', 15.6, '1920 x 1080', 60, '16:9', 'Yes', 4, 64, 'No', 'No', 'Yes', 3, 0, 49, 3.64);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
