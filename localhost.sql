-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Nov 2019 um 13:40
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `telefonbuch2`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `addressbook_contacts`
--

CREATE TABLE `addressbook_contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_group` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `addressbook_contacts`
--

INSERT INTO `addressbook_contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `zipcode`, `notes`, `contact_group`, `date_added`) VALUES
(17, 'Mahmoud', 'Ahmad', 'Mahmoudahmad32@gmail.com', '01715158349', 'Markt. 20', '', 'Dippoldiswalde', 'Sachsen', '01744', '', 'Friends', '2019-11-21 12:16:49'),
(18, 'Ahmad', 'Kahï¿½ed', 'mamamo@gmail.com', '01987547376', 'muster Straï¿½e 23', 'Markt 20', 'Aleppo', 'Aleppo', '93377', '', 'Business', '2019-11-21 12:39:40'),
(19, 'Mysar', 'fkdfhuigh', 'Myasarjfnfnh@gmail.com', '0100185354', 'Damaskus', 'Alraga', 'alzabdani', 'Damaskus', '0909098', '', 'Freunde', '2019-11-21 12:38:58'),
(20, 'Mamao', 'Ahmad', 'mamamoahmad@gmail.com', '0909087', 'prager straße 25', '', 'Dresden', 'Sachsen', '01099', '', 'Freunde', '2019-11-21 12:38:58'),
(21, 'Alahamad', 'Kahled', 'alahmadkahled@gmail.com', '019783653', 'sharie alfrn', '', 'darra', 'Alazkia', '90889089', '', 'Familie', '2019-11-21 12:38:58'),
(22, 'jasm', 'alhmar', 'jasmalhmar@gmail.com', '01919825626', 'Homs straße', '', 'Aleppo', 'Aleppo', '906876890', '', 'Freunde', '2019-11-21 12:38:58'),
(23, 'Jabr', 'Alkalf', 'jaberalkalf@gmail.com', '09886432445', 'najhar Strï¿½e. 34', '', 'Njha', 'Damskus suburb', '0101918355', '', 'Business', '2019-11-21 12:39:48'),
(24, 'Kahled', 'Almajeli', 'Kahlllll@gmail.com', '01887564544', 'Karl straße', '', 'Bremen', 'Bremen', '009098', '', 'Freunde', '2019-11-21 12:38:58'),
(25, 'Ralf', 'Eisenmann', 'RalfEisenmann@gmail.com', '09309380927', 'Forest Straße.96', '', 'Dresden', 'Sachsen', '01009', '', 'Familie', '2019-11-21 12:38:58'),
(26, 'Mohammad', 'Abo shella', 'aboshella705@gmail.com', '015213627844', 'Markt.20 ', '', 'Dippoldiswalde', 'Sachsen', '01744', '', 'Familie', '2019-11-21 12:38:58'),
(27, 'Laith', 'Frijy', 'mahmla@gmail.com', '01010187565', 'Hauptstr.20', '', 'Glashï¿½tte', 'sachsen', '01778', '', 'Business', '2019-11-21 12:39:58'),
(28, 'Hadi', 'Aljaasm', 'Hadialjaasm@gmail.com', '017865548904', 'Altenberger straße.35', '', 'Reichstädte', 'Berlin', '12901', '', 'Freunde', '2019-11-21 12:38:58'),
(29, 'Christian', 'Peter', 'christianpe@gmail.com', '01165243377', 'Budapester straße.55', '', 'Dresden', 'Sachsen', '01099', '', 'Familie', '2019-11-21 12:38:58'),
(30, 'Ahmad ', 'Alhasan', 'ahmad1456@gmail.com', '017897654676', 'Chmnitzer straï¿½e.45', '', 'Dresden', 'sachsen', '017765', '', 'Business', '2019-11-21 12:40:05');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `addressbook_contacts`
--
ALTER TABLE `addressbook_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `addressbook_contacts`
--
ALTER TABLE `addressbook_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
