-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 10:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cle3`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
                             `id` int(10) UNSIGNED NOT NULL,
                             `name` varchar(255) NOT NULL,
                             `city` varchar(255) NOT NULL,
                             `street` varchar(255) NOT NULL,
                             `number` int(10) UNSIGNED NOT NULL,
                             `postalCode` varchar(255) NOT NULL,
                             `picture` varchar(255) NOT NULL,
                             `map` varchar(255) NOT NULL,
                             `mapText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `city`, `street`, `number`, `postalCode`, `picture`, `map`, `mapText`) VALUES
                                                                                                                  (1, 'Bartiméus', 'Rotterdam', 'Maasstadweg', 150, '3079DZ', 'Bartiméus.png', 'BartiméusMap.png', 'Kamer 1: <br> Om bij kamer 1 te komen vanaf de ingang moet je bij de eerste kruising van paden rechtdoor, na de kruising is het de eerste deur links.  <br> Kamer 2: <br>Om bij kamer 2 te komen vanaf de ingang moet je bij de eerste kruising van paden rechtdoor, na de kruising is het de eerste deur rechts.  <br>Kamer 3: <br>Om bij kamer 3 te komen vanaf de ingang moet je bij de eerste kruising van paden naar rechts, dan moet je de eerste links nemen en is het de eerste deur links.  <br>Kamer 4: <br>Om bij kamer 4 te komen vanaf de ingang moet je bij de eerste kruising van paden naar rechts, dan moet je de eerste links nemen en is het de eerste deur rechts.  <br>Kamer 5: <br>Om bij kamer 5 te komen vanaf de ingang is het gelijk de eerste deur links.  <br>Kamer 6: <br>Om bij kamer 6 te komen vanaf de ingang is het gelijk de eerste deur rechts.'),
                                                                                                                  (2, 'Visio', 'Rotterdam', 'Schiedamse Vest', 158, '3011BH', 'Visio.png', 'VisioMap.png', ''),
                                                                                                                  (3, 'Stichting Beter Zien Anders Kijken', 'Rotterdam', 'Kipstraat', 37, '3011RS', 'StichtingBeterZienAndersKijken.png', 'StichtingBeterZienAndersKijkenMap.png', ''),
                                                                                                                  (4, 'Erasmus MC', 'Rotterdam', 'Dr. Molewaterplein', 40, '3015GD', 'Erasmus.png', 'ErasmusMap.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
