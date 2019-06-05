-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Jun 2019 um 22:15
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
-- Datenbank: `produkt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt_tabelle`
--

CREATE TABLE `produkt_tabelle` (
  `id` int(11) NOT NULL,
  `kategorie` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `serenNum` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `preis` float NOT NULL,
  `beschreib` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `anzahl` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `produkt_tabelle`
--

INSERT INTO `produkt_tabelle` (`id`, `kategorie`, `name`, `serenNum`, `preis`, `beschreib`, `foto`, `anzahl`) VALUES
(37, 'man', 'test.app', 'sfw', 234, 'sdsd', 'BrUoQZzu8tJdnNi.jpg', 19),
(38, 'man', 'jduud', 'sfwisud', 77, 'asjdi', 'haccp-food.jpg', 31),
(123, 'kinder', 'Schlafanzug', '81244693', 20, 'Klitzeklein Schlafanzug im 2er Pack!\r\nMit langer Knopfleiste zum leichten An- und Ausziehen\r\nEinmal geringelt und einmal in melierter Optik mit lustigen Sprüchen\r\nWeiche Jersey-Qualität in reiner Baumwolle', '17928330.jpg', 114),
(124, 'kinder', 'Arizona T-Shirt ', 'Nr. 5047616511', 38, 'T-Shirt für Jungen von Arizona\r\nMit großem Druck vorn\r\nBequeme Basicform', '15324605.jpg', 21),
(213, 'kinder', 'Klitzeklein', 'Nr. 71803593', 100, 'Passt perfekt für Jungen und Mädchen, Top aktuell mit lustigen Sprüche- Motiven', '17928303.jpg', 3),
(382, 'kinder', 'Arizona Sweatshirt', 'Nr. 6152930411', 54, 'Sweatshirt von Kidsworld für Jungen\r\nMit coolem Spruch vorn\r\nBequeme Basic-Form', '26653843.jpg', 22),
(677, 'frauen', 'Laura Scott Longblazer', '26158479', 67, 'Blazer aus leicht strukturierter Qualität, mit Innenfutter\r\nMit Elasthan für tollen Tragekomfort\r\nGekonnte Schnittführung macht eine gute Figur\r\nBlazer mit Hakenverschluß', '26158479.jpg', 29),
(678, 'frauen', 'Arizona Jeansjacke ', '21923880', 46, 'Trendstyle für den angesagten Lagenlook\r\nKernige Used-Waschung\r\nFigurbetonte, extra kurze Jeansjacke\r\nSuperbequemer Stretch-Denim', '21923880.jpg', 14),
(679, 'frauen', '	\r\nThe North Face Funktionsjacke', '32164694', 69, 'Wetterfeste Wind- & Regenjacke von The North Face\r\nAbsolut wasser-/ winddicht und wasserdampfdurchlässig\r\nVerschweißte Nähte\r\nÄrmelbündchen mit Gummizug', '32164694.jpg', 11),
(681, 'frauen', 'Vero Moda Jeansjacke', '30493210', 80, 'Coole Jeansjacke von VERO MODA\r\nAus extra softer Baumwollmix-Qualität\r\nTaillierte Form\r\nMit markanten Teilungsnähten und Metallknöpfen', '30493210.jpg', 5),
(682, 'frauen', 'Kent Jeansjacke', '31252474', 40, 'Modische Auswascheffekte\r\nSchöne Perlendekoration\r\nDekorative Kontrastnähte\r\nPflegeleichte Qualität\r\nBequeme Stretch-Qualität', '31252474.jpg', 9),
(685, 'man', 'Banani Anzug', '20273585', 123, 'Anzug inklusive Fliege und Einstecktuch\r\nMaterialmix, formstabil durch Elasthan\r\nModern-fit/ moderne schlanke Form\r\nSakko leicht tailliert, schmales Bein, niedrigere Leibhöhe\r\n2-Knopf-Form', '20273585.jpg', 13),
(687, 'man', 'Coletti Businesshemd', '15552331', 23, 'Businesshemd von Studio Coletti\r\nKnitterarmes Material\r\nRegular-fit/normale Form\r\nKentkragen\r\nPflegeleicht', '15552331.jpg', 200),
(689, 'man', 'Island Chinohose', '25338279', 37, 'Chinohose inkl. Gürtel\r\nHoher Tragekomfort durch Elasthan-Anteil\r\nRegular-fit/ normale Form\r\ngerades Bein, niedrigere Leibhöhe\r\nPerfekt für Job und Freizeit', '25338279.jpg', 28),
(691, 'man', 'Devin Chinohose', '316192899', 30, 'In klassischer Form\r\nTrageangenehm aus reiner Baumwolle\r\nSlim-fit/schmale Form\r\nSchmales gerades Bein, niedrigere Leibhöhe\r\nGesäßtaschen mit Paspel und Knopf', '31619281.jpg', 43),
(751, 'kinder', 'Scout Regen', 'Nr. 228805W', 19, 'Regen- und Matschjacke von SCOUT für Kinder\r\nPraktische Kapuze mit Schild, Reißverschluss mit Kinnschutz\r\nProduziert mit Bionic Finish Eco von Rudolf Chemie – (PFC Alternative)\r\nSaum und Ärmelsaum mit Gummizug\r\nWind- und wasserdicht', '19270694.jpg', 19),
(754, 'kinder', 'Icepeak Blouson', 'Nr. 7277922988', 50, 'Sportlicher Blouson von Icepeak\r\nObermaterial wasser- und winddicht, atmungsaktiv\r\nAlle kritischen Nähte zusätzlich verschweißt\r\nKontrastfarbene & reflektierende Details', '27835635.jpg', 11),
(784, 'frauen', 'YONG Schlupfbluse', '30156538', 37, 'Bluse \"Hilda\" von JdY\r\nMit Taillengürtel zum Binden\r\nTrendiges Blütendesign\r\nAus fließender Web-Qualität', '30156538.jpg', 21),
(986, 'kinder', ' NITTAX Slim Fit Jeans', '2499591699', 21, 'Jeans mit verstellbarer Taille\r\nStretch-Denim mit Wohlfühlfaktor\r\nTaillenbund: Slim Fit', '30431948.jpg', 5),
(2221, 'kinder', 'Arizona Latzjeans', '358059W', 19, 'Latzjeans von ARIZONA für kleine Jungen\r\nTräger 2-fach verstellbar\r\nseitliche Druckknöpfe und innen verstellbarer Gummizug\r\nused Waschung\r\nMaschinenwäsche', '20887031.jpg', 29),
(2224, 'man', 'mazen', 'zej', 299, 'sfkjk', '18-sm0017-roter-anzug-herren-suitmeister_df952594b1_1.jpg', 888),
(2232, 'kinder', 'mazenmmmmmm', 'sadndsa', 234, 'ada', 'ka-bc-061.jpg', 22),
(2233, 'kleidung', 'testmatennnd', '87abd', 22, 'asd', 'ka-bc-061.jpg', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkt_tabelle`
--
ALTER TABLE `produkt_tabelle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkt_tabelle`
--
ALTER TABLE `produkt_tabelle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
