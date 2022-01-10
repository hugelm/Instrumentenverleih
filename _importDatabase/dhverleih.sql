-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Jan 2022 um 16:03
-- Server-Version: 8.0.27
-- PHP-Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dhverleih`
--

CREATE DATABASE IF NOT EXISTS dhverleih DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE dhverleih;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'testmail@newsletter.de'),
(2, 'peter@mail.com'),
(3, 'albertguhn@gmail.com'),
(4, 'felixhammer@gmx.de'),
(5, 'Tamaramail@gmail.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orderinstruments`
--

CREATE TABLE `orderinstruments` (
  `id` int NOT NULL,
  `firstName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `housenumber` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ccHolder` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `ccNumber` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `ccExpire` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `ccCVV` int NOT NULL,
  `instrument` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `timestamp` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `orderinstruments`
--

INSERT INTO `orderinstruments` (`id`, `firstName`, `lastName`, `street`, `housenumber`, `zipcode`, `city`, `phone`, `email`, `ccHolder`, `ccNumber`, `ccExpire`, `ccCVV`, `instrument`, `timestamp`) VALUES
(1, 'Peter', 'Altmaier', 'Traubenstraße', '5', '45232', 'Kleinfeld', '', 'peter@mail.com', 'Peter Altmaier', '4345343453453', '03/56', 567, '7/8 Konzertgitarren', '2022-01-02 20:40:45'),
(2, 'Peter', 'Altmaier', 'Traubenstraße', '5', '45232', 'Kleinfeld', '', 'peter@mail.com', 'Peter Altmaier', '453543534534645', '01/56', 656, 'Fame Ukulele Koa Bariton', '2022-01-07 13:18:06'),
(3, 'Sandra', 'Zuse', 'Weidenstraße', '9', '68165', 'Mannheim', '', 'sandra99@web.de', 'Sandra Zuse', '6543654646346', '04/65', 657, 'J & D AP-5 Parlo', '2022-01-07 17:53:56'),
(4, 'Annika', 'Lohr', 'Gerdturm', '87', '46424', 'Hasseln', '0144 3274753', 'annikalohr@gmx.de', 'Annika Lohr', '4535345345345', '12/77', 765, 'Tama RM50YH6-GXS', '2022-01-08 16:03:19');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `gender` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `birth` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `housenumber` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `gender`, `firstName`, `lastName`, `birth`, `street`, `housenumber`, `zipcode`, `city`, `phone`, `email`, `pwd`) VALUES
(1, 'M', 'Peter', 'Altmaier', '2021-11-30', 'Traubenstraße', '5', '45232', 'Kleinfeld', '', 'peter@mail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(2, 'F', 'Annika', 'Lohr', '2021-11-30', 'Gerdturm', '87', '46424', 'Hasseln', '0144 3274753', 'annikalohr@gmx.de', '57fff6975774d81adad24ce15d31f83792a7db82'),
(3, '-', 'Norbert', 'Kuhn', '2021-12-08', 'Waldalle', '1', '53356', 'Kurbeln', '', 'nobbert98@gmail.com', 'a4c3dd592625f5c5712b277823f17d7c11e3a6ff'),
(4, '-', 'Christian', 'Olleg', '2021-12-07', 'Feldweg', '99', '85455', 'Fuchserde', '0138 4237492', 'chrisi@t-online.de', '964c9cb22ff201635e6de842ed5056ee169fb200'),
(5, 'F', 'Klara', 'Heunagel', '2022-01-12', 'Kleeweg', '92', '24345', 'Hammeln', '', 'klara21@web.de', 'a7fb044e925bb7002d1c665b7fa8fee6fe672420'),
(6, '-', 'Tamara', 'Jansen', '2022-01-06', 'Seestraße', '92', '56422', 'Ufershausen', '', 'Tamaramail@gmail.com', 'a7fb044e925bb7002d1c665b7fa8fee6fe672420'),
(7, 'M', 'Jakob', 'Till', '2022-01-13', 'Lealee', '32', '45578', 'Wisseln', '0536 3173971', 'jakobtill@mail.com', '9a766d1dfbef4cf7553d3b549dc2a3ef87e3ac96'),
(8, '-', 'Sandra', 'Zuse', '', 'Weidenstraße', '9', '68165', 'Mannheim', '', 'sandra99@web.de', '182128e10bba200cf466cccd68681bb0a5855a5b'),
(9, 'M', 'Gilbert', 'Schnösel', '', 'Kantstraße', '2', '65754', 'Mannheim', '0123 2832113321', 'gilbert87@posteo.com', 'ec0db7aadd4ee13c4f0e2151316e02c3b40b8d1c');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orderinstruments`
--
ALTER TABLE `orderinstruments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `1` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `orderinstruments`
--
ALTER TABLE `orderinstruments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
