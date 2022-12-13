-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2022 at 02:56 AM
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
  `Weight` float NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laptop_list`
--

INSERT INTO `laptop_list` (`Laptop`, `Price`, `Manufacturer`, `OS`, `CPU Series`, `CPU`, `GPU`, `Size`, `Resolution`, `Refresh Rate`, `Aspect Ratio`, `Touchscreen`, `RAM Size (GB)`, `Storage Size (GB)`, `Thunderbolt`, `Micro SD`, `RJ45`, `USB-A Slots`, `USB-C Slots`, `Battery Capacity`, `Weight`, `Link`) VALUES
('Acer - Nitro 5', 849.99, 'Acer', 'Windows 11', 'Intel Core i5', '12500H', 'Nvidia RTX 3050', 15.6, '1920 x 1080', 144, '16.9', 'No', 16, 512, 'Yes', 'No', 'Yes', 3, 0, 57.5, 5.51, 'https://www.bestbuy.com/site/acer-nitro-5-15-6-fhd-gaming-laptop-intel-core-i5-nvidia-geforce-rtx-3050-ti-16gb-ddr4-512gb-gen-4-ssd-black/6504566.p?skuId=6504566'),
('Acer Aspire 5 Slim', 372.29, 'Acer', 'Windows 10', 'AMD Ryzen 3', '3200U', 'AMD Radeon Vega 3', 15.6, '1920 x 1080', 60, '16:9', 'No', 4, 128, 'No', 'No', 'Yes', 2, 1, 48, 3.97, 'https://www.amazon.com/Acer-Display-Graphics-Keyboard-A515-43-R19L/dp/B07RF1XD36'),
('Alienware x14', 1499.99, 'Dell', 'Windows 11', 'Intel Core i5', '12500H', 'Nvidia RTX 3050', 14, '1920 x 1080', 144, '16:9', 'No', 16, 512, 'Yes', 'Yes', 'No', 1, 3, 80, 4.06, 'https://www.dell.com/en-us/shop/dell-laptops/alienware-x14-gaming-laptop/spd/alienware-x14-r1-laptop'),
('Aspire 1 Laptop - A115-32-C7ZW', 249.99, 'Acer', 'Windows 11', 'Intel Celron', 'N4000', 'Intel UHD', 15.6, '1920 x 1080', 60, '16:9', 'Yes', 4, 64, 'No', 'No', 'Yes', 3, 0, 49, 3.64, 'https://store.acer.com/en-us/aspire-1-laptop-a115-32-c7zw'),
('ASUS - ROG Strix G15 Advantage Edition', 1699.99, 'Asus', 'Windows 11', 'AMD Ryzen 9', '5980HX', 'AMD Radeon RX 6800M', 15.6, '2560 x 1440', 165, '16:9', 'No', 16, 512, 'No', 'No', 'No', 2, 0, 90, 5.29, 'https://www.bestbuy.com/site/asus-rog-strix-g15-advantage-edition-15-6-qhd-gaming-laptop-amd-ryzen-9-5980hx-16gb-memory-radeonrx-6800m-512gb-ssd/6486485.p?skuId=6486485'),
('ASUS VivoBook 15 F515', 348.88, 'Asus', 'Windows 10', 'Intel Core i3', '1005G1', 'Intel UHD', 15.6, '1920 x 1080', 60, '16:9', 'No', 4, 128, 'No', 'Yes', 'No', 3, 1, 37, 3.97, 'https://www.amazon.com/ASUS-i3-1005G1-Processor-Fingerprint-F515JA-AH31/dp/B08H4YTTLP'),
('Asus Vivobook Flip 14 TM420IA-DB71T', 712.27, 'Asus', 'Windows 10', 'AMD Ryzen 7', '4700U', 'AMD Radeon Vega 7', 14, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'No', 'Yes', 'No', 2, 1, 42, 3.31, 'https://www.amazon.com/ASUS-VivoBook-Display-Fingerprint-TM420IA-DB71T/dp/B08D69XNG1?th=1'),
('ASUS VivoBook S 15 S3502RA-DB94', 999.99, 'Asus', 'Windows 11', 'AMD Ryzen 9', '6900HX', 'AMD Radeon', 15.6, '1920 x 1080', 60, '16:9', 'No', 16, 1024, 'No', 'No', 'No', 2, 2, 50, 3.97, 'https://www.amazon.com/ASUS-VivoBook-Graphics-Fingerprint-S3502RA-DB94/dp/B0BHV6HWWH'),
('Dell - Inspiron 2-in-1', 799.99, 'Dell', 'Windows 11', 'AMD Ryzen 5', '5625U', 'AMD Radeon', 14, '1920 x 1200', 60, '16:10', 'Yes', 8, 512, 'No', 'Yes', 'No', 1, 2, 65, 3.61, 'https://www.bestbuy.com/site/dell-inspiron-2-in-1-14-fhd-touch-laptop-amd-ryzen-5-8gb-memory-512gb-ssd-pebble-green/6503229.p?skuId=6503229'),
('Dell Inspiron 2-in-1', 1249.99, 'Dell', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris Xe', 16, '1920 x 1200', 60, '16:10', 'Yes', 16, 512, 'Yes', 'Yes', 'No', 2, 2, 65, 4.62, 'https://www.bestbuy.com/site/dell-inspiron-2-in-1-16-fhd-touch-laptop-12th-gen-intel-evo-i7-16gb-memory-512gb-ssd-platinum-silver/6504380.p?skuId=6504380'),
('Dell Vostro 5620', 929, 'Dell', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris', 16, '1920 x 1200', 60, '16:10', 'Yes', 16, 512, 'Yes', 'No', 'Yes', 1, 2, 54, 4.21, 'https://www.dell.com/en-us/shop/dell-laptops/vostro-5620-laptop/spd/vostro-16-5620-laptop/smv165w11p1c1707'),
('Dell XPS 13 2-in-1', 1099, 'Dell', 'Windows 11', 'Intel Core i5', '1230U', 'Intel Iris', 13, '2880 x 1920', 60, '3:2', 'Yes', 8, 512, 'No', 'No', 'No', 0, 4, 49.5, 2.59, 'https://www.dell.com/en-us/shop/dell-laptops/xps-13-laptop/spd/xps-13-9315-laptop/smx13pw11p1c1101'),
('Dell XPS 15', 2349, 'Dell', 'Windows 11', 'Intel Core i9', '1290HK', 'Nvidia RTX 3050', 15.6, '1920 x 1200', 60, '16:10', 'Yes', 16, 512, 'Yes', 'No', 'No', 0, 2, 86, 4.62, 'https://www.dell.com/en-us/shop/dell-laptops/xps-15-laptop/spd/xps-15-9520-laptop/ctox15w11p1c4004'),
('HP - 15.6\"', 479.99, 'HP', 'Windows 11', 'Intel Pentium', '7505', 'Intel UHD', 15.6, '1366 x 768', 60, '16:9', 'Yes', 4, 256, 'No', 'Yes', 'No', 2, 1, 45, 3.74, 'https://www.bestbuy.com/site/hp-15-6-touch-screen-laptop-intel-pentium-gold-7505-4gb-memory-256gb-ssd-spruce-blue/6507409.p?skuId=6507409'),
('HP - 15.6\" Touch-Screen', 629.99, 'HP', 'Windows 11', 'Intel Core i5', '1155G7', 'Intel Iris Xe', 15.6, '1366 x 786', 60, '16:9', 'Yes', 12, 256, 'No', 'Yes', 'No', 2, 1, 50, 3.75, 'https://www.bestbuy.com/site/hp-15-6-touch-screen-laptop-intel-core-i5-12gb-memory-256gb-ssd-natural-silver/6510531.p?skuId=6510531'),
('HP - ENVY 2-in-1 13.3', 1049.99, 'HP', 'Windows 11', 'Intel Core i7', '1250U', 'Intel Iris Xe', 13.3, '1920 x 1200', 60, '16:10', 'Yes', 8, 512, 'Yes', 'Yes', 'No', 2, 2, 43, 3.05, 'https://www.bestbuy.com/site/hp-envy-2-in-1-13-3-touch-screen-laptop-intel-core-i7-8gb-memory-512gb-ssd-natural-silver/6505903.p?skuId=6505903'),
('HP - Spectre 2-in-1 16\" 3K+', 1649.99, 'HP', 'Windows 11', 'Intel Core i7', '12700H', 'Intel Iris Xe', 16, '3072 x 1920', 60, '16:10', 'Yes', 16, 512, 'Yes', 'Yes', 'No', 1, 1, 45, 4.45, 'https://www.bestbuy.com/site/hp-spectre-2-in-1-16-3k-touch-screen-laptop-intel-evo-platform-core-i7-16gb-memory-512gb-ssd-pen-included-nocturne-blue/6501274.p?skuId=6501274'),
('HP Envy 16t-h000', 1399.99, 'HP', 'Windows 11', 'Intel Core i5', '12500H', 'Intel Arc A370M', 16, '2560 x 1600', 120, '16:10', 'Yes', 16, 512, 'Yes', 'Yes', 'No', 2, 2, 83, 5.12, 'https://www.hp.com/us-en/shop/pdp/hp-envy-laptop-16t-h000-534c9av-1'),
('HP Pavilion Laptop - 15t-eg000', 499, 'HP', 'Windows 11', 'Intel Core i5', '113G7', 'Intel Iris', 15.6, '1366 x 786', 60, '16:9', 'Yes', 16, 512, 'No', 'No', 'No', 2, 1, 41, 3.41, 'https://www.hp.com/us-en/shop/ConfigureView?langId=-1&storeId=10151&catalogId=10051&catEntryId=3074457345619767824&urlLangId=&quantity=1&color=natural%20silver&configCatentryId=3074457345620175318'),
('HP Pavillion 15', 780.99, 'HP', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Iris Xe', 15.6, '1920 x 1080', 60, '16:9', 'No', 16, 512, 'Yes', 'No', 'No', 2, 1, 63, 3.86, 'https://www.amazon.com/dp/B09T513YCJ?psc=1&smid=ALRCM4V8HQR4F&ref_=chk_typ_imgToDp'),
('HP Spectre x360 Convertible', 1419.99, 'HP', 'Windows 11', 'Intel Core i7', '11390H', 'Intel Iris Xe', 16, '3072 x 1920', 60, '16:9', 'Yes', 16, 512, 'Yes', 'Yes', 'Yes', 1, 4, 41.9, 4.45, 'https://www.amazon.com/HP-Spectre-x360-Convertible-Laptop/dp/B09ZBGKCJD'),
('Lenovo Flex 5i', 799, 'Lenovo', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Iris Xe', 14, '1920 x 1200', 60, '16:10', 'Yes', 8, 512, 'Yes', 'Yes', 'Yes', 2, 1, 52.5, 3.3, 'https://www.walmart.com/ip/Lenovo-Ideapad-Flex-5i-14-2-in-1-Touchscreen-Laptop-Intel-Core-i7-1255U-8GB-RAM-512GB-SSD-Windows-11-Home-Cloud-Grey-82R70004US/360667387'),
('Lenovo Yoga 9i', 1124.99, 'Lenovo', 'Windows 11', 'Intel Core i7', '1185G7', 'Intel Iris', 14, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'Yes', 'No', 'No', 1, 2, 60, 3, 'https://www.lenovo.com/us/en/p/laptops/yoga/yoga-2-in-1-series/yoga-9-14itl5/88ygc901455'),
('Microsoft - Surface Book 2', 849, 'Microsoft', 'Windows 10', 'Intel Core i7', '8650U', 'Nvidia GTX 1600', 15, '3240 x 2160', 60, '3:2', 'Yes', 16, 256, 'No', 'Yes', 'No', 0, 1, 68, 4.2, 'https://www.amazon.com/Microsoft-Surface-Book-Laptop-JJQ-00001/dp/B07VST6Y8X'),
('Microsoft - Surface Laptop Go 2', 699.99, 'Microsoft', 'Windows 11', 'Intel Core i5', '1135G7', 'Intel Iris Xe', 12.4, '1536 x 1024', 60, '3:2', 'Yes', 8, 128, 'No', 'Yes', 'No', 1, 1, 78, 2.48, 'https://www.bestbuy.com/site/microsoft-surface-laptop-go-2-12-4-touch-screen-intel-core-i5-8gb-memory-128gb-ssd-latest-model-sage/6505200.p?skuId=6505200'),
('Microsoft - Surface Pro 9', 1399.99, 'Microsoft', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Iris Xe', 13, '2880 x 1920', 120, '3:2', 'Yes', 16, 256, 'No', 'Yes', 'No', 0, 2, 75, 1.98, 'https://www.bestbuy.com/site/microsoft-surface-pro-9-13-touch-screen-intel-evo-platform-core-i7-16gb-memory-256gb-ssd-device-only-latest-model-forest/6517649.p?skuId=6517649'),
('MSI - Sword', 1349.99, 'MSI', 'Windows 11', 'Intel Core i7', '12650H', 'Nvidia RTX 3060', 15.6, '1920 x 1080', 144, '16:9', 'No', 16, 1024, 'No', 'No', 'Yes', 3, 1, 53.5, 4.63, 'https://www.bestbuy.com/site/msi-sword-15-6-144hz-gaming-laptop-intel-core-i7-nvidia-geforce-rtx-3060-1tb-ssd-16gb-memory-black/6496176.p?skuId=6496176'),
('MSI Alpha 17 A4DEK-006', 1279.28, 'MSI', 'Windows 10', 'AMD Ryzen 7', '4800H', 'AMD Radeon RX 5600M', 17.3, '1920 x 1080', 144, '16:9', 'No', 16, 512, 'No', 'No', 'Yes', 2, 2, 53, 4, 'https://www.walmart.com/ip/MSI-Alpha-17-A4DEK-006-ALPHA17A006-17-3-Gaming-Notebook-AMD-Ryzen-7-4800H-2-9GHz-16GB-RAM-512GB-SSD-Radeon-RX5600M-Windows-10-Home-1920-x-1080-Alumin/916234499'),
('MSI Alpha 17 B5EEK', 1149, 'MSI', 'Windows 10', 'AMD Ryzen 7', '5800H', 'AMD Radeon RX 6600M', 17.3, '1920 x 1080', 144, '16:9', 'No', 16, 512, 'No', 'No', 'Yes', 3, 1, 53, 4, 'https://www.walmart.com/ip/MSI-Alpha-17-B5EEK-B5EEK-022-17-3-Gaming-Notebook-Full-HD-1920-x-1080-AMD-Ryzen-7-5800H-Octa-core-8-Core-3-20-GHz-16-GB-Total-RAM-512-SSD-Aluminum-Bl/860024447'),
('MSI Bravo 15 A4DDR-022', 929, 'MSI', 'Windows 10', 'AMD Ryzen 5', '4600H', 'AMD Radeon RX 5500M', 15.6, '1920 x 1080', 144, '16:9', 'No', 8, 512, 'No', 'No', 'Yes', 2, 2, 53, 4, 'https://www.walmart.com/ip/MSI-Bravo-15-A4DDR-022-15-6-Gaming-Notebook-AMD-Ryzen-5-4600H-8GB-512GB-SSD-AMD-Radeon-RX5500M-Windows-10-Aluminum-Black/690713188'),
('MSI Bravo 15 B5DD-010', 799.99, 'MSI', 'Windows 10', 'AMD Ryzen 5', '5600H', 'AMD Radeon RX 5500M', 15.6, '1920 x 1080', 144, '16:9', 'No', 16, 512, 'No', 'No', 'Yes', 3, 1, 53, 4.63, 'https://us-store.msi.com/Bravo-15-B5DD-010'),
('MSI Creator Z17 A12UHST-046', 4499.99, 'MSI', 'Windows 11', 'Intel Core i9', '12900H', 'Nvidia RTX A5500', 17, '2560 x 1600', 165, '16:10', 'Yes', 64, 1024, 'Yes', 'No', 'No', 1, 2, 90, 5.48, 'https://us-store.msi.com/CreatorPro-Z17-A12UMST-097'),
('MSI CreatorPro Z16P B12UMST-089', 4399.99, 'MSI', 'Windows 11', 'Intel Core i9', '12900H', 'Nvidia RTX A5500', 16, '2560 x 1600', 165, '16:10', 'Yes', 64, 1024, 'Yes', 'No', 'No', 1, 2, 90, 5.26, 'https://us-store.msi.com/CreatorPro-Z16P-B12UMST-089'),
('MSI Delta 15001', 1599.99, 'MSI', 'Windows 10', 'AMD Ryzen 7', '5800H', 'AMD Radeon RX 6700M', 15.6, '1920 x 1080', 240, '16:9', 'No', 16, 1024, 'No', 'No', 'No', 2, 2, 53, 4.19, 'https://www.bestbuy.com/site/msi-delta-15-6-fhd-240hz-gaming-laptop-ryzen-r7-5800-radeon-rx6700m-1tb-ssd-16gb-memory-black/6468118.p'),
('MSI Laptop Modern 15', 999, 'MSI', 'Windows 11', 'Intel Core i7', '1255U', 'Intel Arc A370M', 15.6, '1920 x 1080', 60, '16:9', 'No', 16, 512, 'No', 'Yes', 'No', 3, 1, 52, 3.85, 'https://www.newegg.com/black-msi-modern-15-b12hw-001-work-business/p/N82E16834156288'),
('MSI Summit E16FlipEvo A12MT-009', 1149.99, 'MSI', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris Xe', 16, '1920 x 1200', 165, '16:10', 'Yes', 16, 512, 'Yes', 'Yes', 'No', 2, 2, 82, 4.62, 'https://us-store.msi.com/Summit-E16FlipEvo-A12MT-009'),
('Samsung - Galaxy Book2 Pro 360 2-in-1', 1649.99, 'Samsung', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris Xe', 15.6, '1920 x 1080', 60, '16:9', 'Yes', 16, 1024, 'Yes', 'Yes', 'No', 0, 3, 84, 3.06, 'https://www.bestbuy.com/site/samsung-galaxy-book2-pro-360-2-in-1-15-6-amoled-touch-screen-laptop-intel-12th-gen-evo-core-i7-16gb-ddr5-memory-1tb-ssd-silver/6501593.p?skuId=6501593'),
('Samsung Galaxy Book Pro 15', 993, 'Samsung', 'Windows 10', 'Intel Core i7', '1165G7', 'Intel Iris', 15.6, '1920 x 1080', 60, '16:9', 'No', 16, 512, 'Yes', 'Yes', 'No', 1, 1, 68, 2.36, 'https://www.amazon.com/SAMSUNG-Platform-Computer-Processor-Long-Lasting/dp/B0932KMR1G'),
('Samsung Galaxy Book2 Pro', 1299.99, 'Samsung', 'Windows 11', 'Intel Core i7', '1260P', 'Intel Iris', 13, '1920 x 1080', 60, '16:9', 'Yes', 8, 512, 'Yes', 'No', 'No', 1, 1, 68, 1.92, 'https://www.samsung.com/us/computing/galaxy-books/galaxy-book2-pro/galaxy-book2-pro-13-intel-core-i7-512gb-silver-np930xed-kf1us/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop_list`
--
ALTER TABLE `laptop_list`
  ADD PRIMARY KEY (`Laptop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
