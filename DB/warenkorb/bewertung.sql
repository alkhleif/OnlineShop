-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Jun 2019 um 22:17
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
-- Datenbank: `warenkorb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bewertung`
--

CREATE TABLE `bewertung` (
  `id` int(100) NOT NULL,
  `kunde` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Produkt_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sterne` int(100) NOT NULL,
  `komentare` varchar(1200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `bewertung`
--

INSERT INTO `bewertung` (`id`, `kunde`, `Produkt_ID`, `sterne`, `komentare`) VALUES
(1, 'mazen2', 'sfw', 3, 'zunächst waren wir sehr zufrieden mit dem Ninja. Die mitgelieferten Teile sind durchdacht und hochwertig ver'),
(2, 'mazen', 'sfw', 1, 'Einen Designpreis gewinnt er nicht, seine Funktion aber erfüllt er mit Bravour. Die Saugnäpfe am Boden halten das Gerät fest auf der'),
(5, 'ds', 'sfw', 1, 'Ich hab mir den Nutri Ninja vor rund drei Monaten, nach endlos langen Überlegungen, gekauft. Für mich war wi\r\n'),
(6, 'sdf', 'sfw', 4, 'Ich habe mich sehr schwer damit getan diefür dieses Gerät mit Sternen zusammenzufassen, da es in den unterschiedlichen Einsatzgebieten sehr unterschi'),
(9, 'sd', 'sfwisud', 3, 'Grüne Smoothies : Grüne Smoothies gelingen nur in den kleinen Mixbechern relativ gut. Im großen Behälter werdeier unten angebracht is'),
(11, 'asd', 'sfwisud', 4, 'Grüne Smoothies (**): Grüne Smoothies gelingen nur in den kleinen Mixbechern relativ gut. Im großen Behälter werden sie sehr f'),
(35, 'mazen2', '3425', 1, 'jkj'),
(36, 'mazen2', 'mm', 3, 'lklk'),
(37, 'admin', '3425', 4, 'jjhjhhh'),
(38, 'admin', 'sfw', 1, 'bewertung admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
