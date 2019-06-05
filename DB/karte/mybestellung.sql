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
-- Tabellenstruktur für Tabelle `mybestellung`
--

CREATE TABLE `mybestellung` (
  `id` int(100) NOT NULL,
  `K_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `k_Id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Produkt_Id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produkt_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menge` int(100) NOT NULL,
  `preis` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `mybestellung`
--

INSERT INTO `mybestellung` (`id`, `K_name`, `k_Id`, `Produkt_Id`, `produkt_name`, `image`, `menge`, `preis`) VALUES
(1, 'mazen2', '123', '3425', 'shuhe', 'adidas-superstar-suede-schuhe-grau-130-zoom-0.jpg', 5, 463),
(2, 'admin', '123', 'sfw', 'sad', 'BrUoQZzu8tJdnNi.jpg', 2, 223);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mybestellung`
--
ALTER TABLE `mybestellung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mybestellung`
--
ALTER TABLE `mybestellung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
