-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2021 at 01:11 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasoadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `meddelande` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kunder`
--

CREATE TABLE `kunder` (
  `id` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `telefonnummer` varchar(30) NOT NULL,
  `epostadress` varchar(100) NOT NULL,
  `leveransadress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `produktid` int(11) NOT NULL,
  `produkt` varchar(100) NOT NULL,
  `beskrivning` varchar(250) NOT NULL,
  `pris` int(11) NOT NULL,
  `bild` varchar(255) NOT NULL,
  `lagersaldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`produktid`, `produkt`, `beskrivning`, `pris`, `bild`, `lagersaldo`) VALUES
(1, 'Blender', 'En enkel blender som kommer att göra din vardag sundare.', 200, 'Blender.jpg', 20),
(2, 'Brödrost', 'Starta dagen med nyrostat bröd', 250, 'Brödrost.jpg', 30),
(3, 'Citrusjuicer', 'C-vitamin är bra för kropp och själ.', 350, 'CitrusJuicer.jpg', 15),
(4, 'Gjutjärnsgryta', 'Robust gryta som passar till alla hushåll, små som stora. Grytan är tillverkad i emaljerat gjutjärn med jämn värmefördelning som bevarar värmen ända upp till kanten.', 600, 'Gjutjärnsgryta.jpg', 10),
(5, 'Köksvåg', 'Väg maten du tillagar för att kunna räkna kalorier.', 220, 'Köksvåg.jpg', 7),
(6, 'Liten kastrull', 'Perfekt till att koka vatten.', 250, 'LitenKastrull.jpg', 12),
(7, 'Lökblender', 'Undvik att gråta varje gång du har med lök att göra.', 180, 'Lökblender.jpg', 25),
(8, 'Smörgåsgrill', 'Perfekt till mackor.', 220, 'Smörgåsgrill.jpg', 8),
(9, 'Stor kastrull', 'Laga mat till hela familjen.', 600, 'StorKastrull.jpg', 3),
(10, 'Vattenkokare', 'Bäst prestanda i marknaden enligt Ahmed och Omar.', 210, 'Vattenkokare.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunder`
--
ALTER TABLE `kunder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produktid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunder`
--
ALTER TABLE `kunder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
