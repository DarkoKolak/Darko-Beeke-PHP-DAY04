-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Sep 2019 um 13:49
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_darko_kolak_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `authorId` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `birthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `author`
--

INSERT INTO `author` (`authorId`, `name`, `surname`, `birthDate`) VALUES
(2, 'Darko', 'Kolak', '2019-09-01'),
(3, 'Goran', 'Stevic', '2019-09-02'),
(4, 'Christoph', 'Aigner', '2019-09-03'),
(5, 'Lionel', 'Messi', '2019-09-04'),
(6, 'Cristiano', 'Ronaldo', '2019-09-05'),
(7, 'Usain', 'Bolt', '2019-09-06'),
(8, 'Daniel', 'Kahneman', '2019-09-07'),
(9, 'Arnold', 'Schwarzeneger', '2019-09-08'),
(10, 'Luka', 'Modric', '2019-09-09'),
(11, 'Michael', 'Phelps', '2019-09-12'),
(16, 'Darko', 'Darko', '2019-09-01'),
(17, 'Kolak', 'Kolak', '2019-09-03'),
(18, 'Beeke', 'Beeke', '2019-09-03'),
(19, 'Doni', 'Doni', '2019-09-10');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `ISBN` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `publishdate` date DEFAULT NULL,
  `publisherId` int(10) UNSIGNED DEFAULT NULL,
  `authorId` int(10) UNSIGNED DEFAULT NULL,
  `type` enum('CD','DVD','Book','E-Book') DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`ISBN`, `title`, `image`, `description`, `publishdate`, `publisherId`, `authorId`, `type`, `status`) VALUES
('01', 'Darko\'s Magic', 'https://pixabay.com/illustrations/book-old-clouds-tree-birds-bank-863418/', 'A book based on rhe magic from Darko', '2019-09-30', 1, 2, 'Book', 1),
('02', 'Ana Karenina', 'https://thegreatestbooks.org/lists/44', 'Anna Karenina tells of the doomed love affair between the sensuous and rebellious Anna and the dashing officer, Count Vronsky. Tragedy unfolds as Anna rejects her passionless marriage and must endu...', '2019-08-01', 2, 8, 'Book', 1),
('03', 'Godfather', 'http://mentalfloss.com/article/93739/when-mob-protested-godfather', 'Mafia Boss', '2019-09-11', 4, 9, 'CD', 1),
('04', 'Game of Thrones', 'https://www.hbo.com/game-of-thrones', 'Life in 5 different Kongdoms', '2019-09-01', 5, 7, 'E-Book', 1),
('05', 'Life of Luka Mordic', NULL, 'Boigraphy of Luka Modric', '2019-09-02', 7, 10, 'DVD', 1),
('06', 'The life of Arnold Schwarzeneger', NULL, 'The mentallity of Arnold Schwarzeneger', '2019-09-01', 3, 9, 'Book', 1),
('07', 'Leo Mesii', NULL, 'The story of the football player Lionel Messi', '2019-09-02', 7, 5, 'E-Book', 1),
('08', 'Cristiano Ronaldo', NULL, 'The sotry of Cristiano Ronaldo', '2019-09-13', 1, 6, 'Book', 1),
('09', 'PHP for dummies', NULL, 'PHP for dummies', '2019-09-09', 3, 3, 'CD', 1),
('10', 'Mysql for dummies', NULL, 'Baisc understandig of mysql', '2019-09-01', 2, 3, 'Book', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mediatype`
--

CREATE TABLE `mediatype` (
  `mediaTypeId` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mediatype`
--

INSERT INTO `mediatype` (`mediaTypeId`, `type`) VALUES
(1, 'Cd'),
(2, 'DVD'),
(3, 'Book'),
(4, 'Ebook');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisherId` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `size` enum('Big','Medium','Small','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisherId`, `name`, `adress`, `size`) VALUES
(1, 'DarkoPrint', 'Brigittaplatz 14', 'Big'),
(2, 'Factory', 'Stephansplatz 1', 'Medium'),
(3, 'XXXL Factory', 'Karlsplatz 12', 'Big'),
(4, 'XS Factory', 'Ottakringer Strasse 2', 'Small'),
(5, 'PrintIt', 'Kettenbrückengasse 2', 'Medium'),
(6, 'BookIt', 'Jägerstrasse 11', 'Big'),
(7, 'The Book', 'Schwedenplatz 1', 'Small');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorId`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `publisherId` (`publisherId`),
  ADD KEY `authorId` (`authorId`);

--
-- Indizes für die Tabelle `mediatype`
--
ALTER TABLE `mediatype`
  ADD PRIMARY KEY (`mediaTypeId`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `author`
--
ALTER TABLE `author`
  MODIFY `authorId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT für Tabelle `mediatype`
--
ALTER TABLE `mediatype`
  MODIFY `mediaTypeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`publisherId`) REFERENCES `publisher` (`publisherId`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`authorId`) REFERENCES `author` (`authorId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
