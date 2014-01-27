-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 dec 2013 om 15:43
-- Serverversie: 5.5.14
-- PHP-versie: 5.4.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `ontwikomg_rooster`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `docenten`
--

CREATE TABLE IF NOT EXISTS `docenten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docent` varchar(255) NOT NULL,
  `docent_nick` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `docent` (`docent`,`docent_nick`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Gegevens worden uitgevoerd voor tabel `docenten`
--

INSERT INTO `docenten` (`id`, `docent`, `docent_nick`) VALUES
(9, 'Emiel Kaarsbaan', 'eka'),
(3, 'Eric Sips', 'esi'),
(10, 'Frieda Heijkoop', 'fhe'),
(11, 'Johan den Dekker', 'jde'),
(4, 'Karin Onstein', 'kon'),
(7, 'Kees Schouten', 'ksc'),
(8, 'Lukas Stroomer', 'lst'),
(6, 'Marieke Kleinhesselink', 'mkl'),
(1, 'Peter Bijker', 'pbi'),
(2, 'Peter Dreijer', 'pdr'),
(5, 'Sander de Bont', 'sbo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
