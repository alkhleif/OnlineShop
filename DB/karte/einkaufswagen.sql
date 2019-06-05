-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Jun 2019 um 22:14
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `karte`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `einkaufswagen`
--

CREATE TABLE `einkaufswagen` (
  `id` int(11) NOT NULL,
  `benutzer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produktsname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `preis` float NOT NULL,
  `anzahl` int(11) NOT NULL,
  `produktsnummer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `einkaufswagen`
--

INSERT INTO `einkaufswagen` (`id`, `benutzer`, `produktsname`, `preis`, `anzahl`, `produktsnummer`, `image`) VALUES
(1, 'admin', 'Schlafanzug', 20, 1, '81244693', '17928330.jpg'),
(2, 'admin', 'Devin Chinohose', 30, 1, '316192899', '31619281.jpg'),
(3, 'admin', 'Coletti Businesshemd', 23, 1, '15552331', '15552331.jpg'),
(4, 'admin', 'Laura Scott Longblazer', 67, 1, '26158479', '26158479.jpg'),
(5, 'mazen.k', 'Schlafanzug', 20, 2, '81244693', '17928330.jpg'),
(6, 'mazen.k', 'Klitzeklein', 100, 1, 'Nr. 71803593', '17928303.jpg'),
(7, 'mazen.k', 'Arizona T-Shirt ', 38, 1, 'Nr. 5047616511', '15324605.jpg'),
(8, 'admin1', 'test.app', 234, 1, 'sfw', 'BrUoQZzu8tJdnNi.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `einkaufswagen`
--
ALTER TABLE `einkaufswagen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `einkaufswagen`
--
ALTER TABLE `einkaufswagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
