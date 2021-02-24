-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2021 at 12:11 PM
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
  `kontaktid` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `meddelande` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`kontaktid`, `namn`, `epost`, `meddelande`) VALUES
(16, 'Emelie Jönsson', 'emelie@hotmail.com', 'Jag tycker att era produkter är i topp kvalité och att ni alltid har en ypperlig service.'),
(18, 'Per Lindqvist', 'per@hotmail.com', 'Hur lång är leveranstiden?'),
(19, 'Anna Andersson', 'anna@hotmail.com', 'Tycker att er våg stämmer mycket bra jämfört med andra.');

-- --------------------------------------------------------

--
-- Table structure for table `kunder`
--

CREATE TABLE `kunder` (
  `kundid` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `telefonnummer` varchar(30) NOT NULL,
  `epostadress` varchar(100) NOT NULL,
  `leveransadress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kunder`
--

INSERT INTO `kunder` (`kundid`, `namn`, `telefonnummer`, `epostadress`, `leveransadress`) VALUES
(86, 'Emelie Jönsson', '0705463723', 'emelie@hotmail.com', 'Skytteholmsvägen 115, 171 63 Solna'),
(91, 'Emma Andersson', '086352436', 'emma@hotmail.com', 'Sveavägen 54, 11518 Stockholm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `kundid` int(11) NOT NULL,
  `produktid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `kundid`, `produktid`) VALUES
(23, 86, 2),
(30, 91, 1);

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
(2, 'Brödrost', 'Starta dagen med nyrostat bröd.', 250, 'Brödrost.jpg', 30),
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
  ADD PRIMARY KEY (`kontaktid`);

--
-- Indexes for table `kunder`
--
ALTER TABLE `kunder`
  ADD PRIMARY KEY (`kundid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `kundid` (`kundid`),
  ADD KEY `produktid` (`produktid`);

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
  MODIFY `kontaktid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kunder`
--
ALTER TABLE `kunder`
  MODIFY `kundid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `kundid` FOREIGN KEY (`kundid`) REFERENCES `kunder` (`kundid`),
  ADD CONSTRAINT `produktid` FOREIGN KEY (`produktid`) REFERENCES `produkt` (`produktid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
