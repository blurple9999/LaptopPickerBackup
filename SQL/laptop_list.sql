-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2022 at 10:10 PM
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
('Aspire 1 Laptop - A115-32-C7ZW', 249.99, 'Acer', 'Windows 11', 'Intel Celron', 'N4000', 'Intel UHD', 15.6, '1920 x 1080', 60, '16:9', 'Yes', 4, 64, 'No', 'No', 'Yes', 3, 0, 49, 3.64),
('Samsung Galaxy Book Pro 15', 993, 'Samsung', 'Windows 10', 'Intel Core i7', '1165G7', 'Intel Iris', 15.6, '1920 x 1080', 60, '16:9', 'No', 16, 512, 'Yes', 'Yes', 'No', 1, 1, 68, 2.36),
('Yogi 9i', 1124.99, 'Lenovo', 'Windows 11', 'Intel Core i7', '1185G7', 'Intel Iris', 14, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'Yes', 'No', 'No', 1, 2, 60, 3),
('Alienware x14', 1499.99, 'Dell', 'Windows 11', 'Intel Core i5', '12500H', 'Nvidia RTX 3050', 14, '1920 x 1080', 144, '16:9', 'No', 16, 512, 'Yes', 'Yes', 'No', 1, 3, 80, 4.06),
('HP Envy 16t-h000', 1149.99, 'HP', 'Windows 11', 'Intel Core i5', '12500H', 'Intel Arc A370M', 16, '2560 x 1600', 120, '16:10', 'Yes', 16, 512, 'Yes', 'Yes', 'No', 2, 2, 83, 5.12),
('Asus Vivobook Flip 14 TM420IA-DB71T', 739, 'Asus', 'Windows 10', 'AMD Ryzen 7', '4700U', 'AMD Radeon Vega 7', 14, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'No', 'Yes', 'No', 2, 1, 42, 3.31),
('Acer Aspire 5 Slim', 359, 'Acer', 'Windows 10', 'AMD Ryzen 3', '3200U', 'AMD Radeon Vega 3', 15.6, '1920 x 1080', 60, '16:9', 'No', 4, 128, 'No', 'No', 'Yes', 2, 1, 48, 3.97),
('Lenovo Flex 5i', 1059.99, 'Lenovo', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Iris Xe', 14, '1920 x 1200', 60, '16:10', 'Yes', 8, 512, 'Yes', 'Yes', 'Yes', 2, 1, 52.5, 3.3),
('HP Spectre x360 Convertible', 1369, 'HP', 'Windows 11', 'Intel Core i7', '11390H', 'Intel Iris Xe', 16, '3000 x 2000', 60, '3:2', 'Yes', 16, 512, 'Yes', 'Yes', 'Yes', 1, 4, 41.9, 4.45),
('HP Pavilion Laptop - 15t-eg000', 499, 'HP', 'Windows 11', 'Intel Core i5', '113G7', 'Intel Iris', 15.6, '1366 x 786', 60, '16:9', 'Yes', 16, 512, 'No', 'No', 'No', 2, 1, 41, 3.41),
('XPS 13 2-in-1', 1099, 'Dell', 'Windows 11', 'Intel Core i5', '1230U', 'Intel Iris', 13, '2880 x 1920', 60, '3:2', 'Yes', 8, 512, 'No', 'No', 'No', 0, 4, 49.5, 1.23),
('Galaxy Book2 Pro', 1299.99, 'Samsung', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris', 13, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'Yes', 'No', 'No', 1, 1, 68, 1.92),
('XPS 15', 2349, 'Dell', 'Windows 11', 'Intel Core i9', '1290HK', 'NVIDIA RTX 3050', 15.6, '1920 x 1200', 60, '16:10', 'Yes', 16, 512, 'Yes', 'No', 'No', 0, 2, 86, 4.62),
('Microsoft - Surface Book 2', 849, 'Microsoft', 'Windows 10', 'Intel Core i7', '8650U', 'NVIDIA GTX 1600', 15, '3240 x 2160', 60, '3:2', 'Yes', 16, 256, 'No', 'Yes', 'No', 0, 1, 68, 4.2),
('Vostro 5620', 929, 'Dell', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris', 16, '1920 x 1200', 60, '16:10', 'Yes', 16, 512, 'Yes', 'No', 'Yes', 1, 2, 54, 4.21),
('HP Pavillion 15', 780.99, 'HP', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Iris Xe', 15.6, '1920 x 1080', 60, '16.9', 'No', 16, 512, 'Yes', 'No', 'No', 2, 1, 63, 3.86);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
