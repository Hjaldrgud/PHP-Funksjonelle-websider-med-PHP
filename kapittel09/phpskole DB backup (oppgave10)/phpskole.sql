-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpskole`
--

-- --------------------------------------------------------

--
-- Table structure for table `bøker`
--

CREATE TABLE `bøker` (
  `ID` int(3) NOT NULL,
  `tittel` varchar(40) NOT NULL,
  `fk_forfID` int(3) NOT NULL,
  `utgivelsesår` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bøker`
--

INSERT INTO `bøker` (`ID`, `tittel`, `fk_forfID`, `utgivelsesår`) VALUES
(1, 'Ringenes Herre', 1, 1954),
(2, 'Silmarillion', 1, 1977),
(3, 'Harry Potter og de vises stein', 2, 1997),
(4, 'Harry Potter og mysteriekammeret', 2, 1998),
(5, 'Sult', 3, 1890),
(6, 'Markens grøde', 3, 1917),
(7, 'Gymnaslærer Pedersens beretning', 5, 1982),
(8, 'Harry Potter og fangen fra Azkaban', 2, 1999),
(9, 'Harry Potter og ildbegeret', 2, 2000),
(10, 'Den siste revejakta', 11, 1983),
(14, 'Kongsemnerne', 4, 1864);

-- --------------------------------------------------------

--
-- Table structure for table `forfattere`
--

CREATE TABLE `forfattere` (
  `ID` int(3) NOT NULL,
  `fornavn` varchar(20) NOT NULL,
  `etternavn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forfattere`
--

INSERT INTO `forfattere` (`ID`, `fornavn`, `etternavn`) VALUES
(1, 'John', 'Tolkien'),
(2, 'Joanne', 'Rowling'),
(3, 'Knut', 'Hamsun'),
(4, 'Henrik', 'Ibsen'),
(5, 'Dag', 'Solstad'),
(11, 'Ingvar', 'Ambjørnsen');

-- --------------------------------------------------------

--
-- Table structure for table `medlemmer`
--

CREATE TABLE `medlemmer` (
  `ID` int(11) NOT NULL,
  `aktivt` tinyint(1) NOT NULL DEFAULT 1,
  `datoOpprettet` timestamp NULL DEFAULT current_timestamp(),
  `datoEndret` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `fnavn` varchar(100) NOT NULL,
  `enavn` varchar(100) NOT NULL,
  `gateadresse` varchar(100) DEFAULT NULL,
  `postnr` smallint(4) DEFAULT NULL,
  `epost` varchar(100) DEFAULT NULL,
  `mobil` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postadresser`
--

CREATE TABLE `postadresser` (
  `postnr` int(11) DEFAULT NULL,
  `poststed` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postadresser`
--

INSERT INTO `postadresser` (`postnr`, `poststed`) VALUES
(9409, 'Harstad'),
(9411, 'Harstad'),
(9420, 'Lundenes'),
(9475, 'Kvæfjord');

-- --------------------------------------------------------

--
-- Table structure for table `tabell1`
--

CREATE TABLE `tabell1` (
  `felt1` varchar(50) DEFAULT NULL,
  `felt2` varchar(50) DEFAULT NULL,
  `felt3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabell1`
--

INSERT INTO `tabell1` (`felt1`, `felt2`, `felt3`) VALUES
('verdi1', 'verdi2', NULL),
('verdi4', 'verdi5', 'verdi3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bøker`
--
ALTER TABLE `bøker`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_forfID` (`fk_forfID`);

--
-- Indexes for table `forfattere`
--
ALTER TABLE `forfattere`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medlemmer`
--
ALTER TABLE `medlemmer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bøker`
--
ALTER TABLE `bøker`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `forfattere`
--
ALTER TABLE `forfattere`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medlemmer`
--
ALTER TABLE `medlemmer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bøker`
--
ALTER TABLE `bøker`
  ADD CONSTRAINT `bøker_ibfk_1` FOREIGN KEY (`fk_forfID`) REFERENCES `forfattere` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
