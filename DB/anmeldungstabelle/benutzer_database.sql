-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Jun 2019 um 22:12
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
-- Datenbank: `anmeldungstabelle`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer_database`
--

CREATE TABLE `benutzer_database` (
  `id` int(12) NOT NULL,
  `benutzername` varchar(255) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `strasse` varchar(255) NOT NULL,
  `stadt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `benutzer_database`
--

INSERT INTO `benutzer_database` (`id`, `benutzername`, `vorname`, `nachname`, `strasse`, `stadt`, `password`, `email`) VALUES
(1, 'memo', 'dd', 'alkhleif', '22', '3', '03c7c0ace395d80182db07ae2c30f034', 'mazen@mail.com'),
(2, 'memos', 'dd', 'alkhleif', '22', '3', '3691308f2a4c2f6983f2880d32e29c84', 'mazsen@mail.com'),
(3, 'memoss', 'dd', 'alkhleif', '22', '3', '3691308f2a4c2f6983f2880d32e29c84', 'mazsesn@mail.com'),
(4, 'mama', 'a', 'aa', '22', '3', '4124bc0a9335c27f086f24ba207a4912', 'aa@mail.com'),
(5, 'ggg', 'memo1', 'memo2', 'mddjdu', 'sdgzdbb', '3691308f2a4c2f6983f2880d32e29c84', 'memoee@mail.com'),
(7, 'mxp', 'mazennn', 'mazennnmazennn', 'dfeiee', 'eeeeee', '9c59153d22d9f7cc021b17b425cc31c5', 'mazefffffffffffffffn@mail.com'),
(8, 'mazen', 'nXM', 'asd', 'adade', 'efaf', '099b3b060154898840f0ebdfb46ec78f', 'mazffasden@mail.com'),
(9, 'nmq11111', 'dd11111', 'dfffff', '221111', '311111', '6512bd43d9caa6e02c990b0a82652dca', 'maze111111n@mail.com'),
(10, 'mazenssa', 'dd', 'mazennnmazennn', '22', '3', '099b3b060154898840f0ebdfb46ec78f', 'mazyxen@mail.com'),
(11, '', 'dd', 'mazennnmazennn', '22', '3', '099b3b060154898840f0ebdfb46ec78f', 'mazbben@mail.com'),
(12, 'mazenb', 'mazen', 'Alkhleif', 'stuttgartstr', 'bietiegheim', 'b3cd915d758008bd19d0f2428fbb354a', 'mcazcen@mail.com'),
(13, 'mazen2', 'sdfs', 'sdfsdf', 'sdfsdf', 'sdf', 'mazenmazen', 'mazen@gmail.com'),
(14, 'admin', 'AdminName', 'AdminNachname', 'adminstrasse', 'stutgart', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com'),
(16, 'mazen2', 'mazen', 'alkhleif', 'stuttgart', '11', '8cd16082cfc2cd67aadf2c5b185347c8', 'alkhleif.mazen@gmail.com'),
(17, 'admin1', 'admin1', 'ad', 'ddfd', 'dkfj', 'e00cf25ad42683b3df678c61f42c6bda', 'inf17115@lehre.dhbw-stuttgart.de');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer_database`
--
ALTER TABLE `benutzer_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer_database`
--
ALTER TABLE `benutzer_database`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
