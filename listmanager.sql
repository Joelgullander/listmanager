-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 06 okt 2016 kl 15:54
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `listmanager`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `listentrys`
--

CREATE TABLE IF NOT EXISTS `listentrys` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userID` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `listid` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumpning av Data i tabell `listentrys`
--

INSERT INTO `listentrys` (`id`, `userID`, `firstname`, `lastname`, `amount`, `approved`, `listid`) VALUES
(1, 1, 'Lena', 'Gullander', 5, 0, 1),
(2, 1, 'Adam', 'Gustavsson', 3, 1, 1),
(3, 1, 'TEST', 'TESTAR', 2, 0, 0),
(4, 1, 'Dennis', 'Hansen', 3, 0, 0),
(5, 1, 'Johanna', 'Karlsson', 5, 0, 0),
(6, 1, '', '', 1, 0, 0),
(7, 1, 'Hanna', 'Kalleballe', 1, 0, 0),
(8, 1, 'Joel', 'Gullander', 1, 0, 0),
(9, 1, 'Kenny', 'Wahlström', 1, 0, 0),
(10, 1, 'Lisa', 'Möller', 4, 0, 0),
(11, 1, 'Amanda', 'Bergström', 3, 0, 0),
(12, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(13, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(14, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(15, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(16, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(17, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(18, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(19, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(20, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(21, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(22, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(23, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(24, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(25, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(26, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(27, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(28, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(29, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(30, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(31, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(32, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(33, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(34, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(35, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(36, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(37, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(38, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(39, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(40, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(41, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(42, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(43, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(44, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(45, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(46, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(47, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(48, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(49, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(50, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(51, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(52, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(53, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(54, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(55, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(56, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(57, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(58, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(59, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(60, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(61, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(62, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(63, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(64, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(65, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(66, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(67, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(68, 1, 'Jakob', 'Fritzon', 1, 0, 0),
(69, 1, 'Hannes', 'Möller', 2, 0, 0),
(70, 1, 'Sara', 'Larsson', 5, 0, 0),
(71, 1, 'Sara', 'Larsson', 5, 0, 0),
(72, 1, 'Sara', 'Larsson', 5, 0, 0),
(73, 1, 'Sara', 'Larsson', 5, 0, 0),
(74, 1, 'Brisse', 'Brisse', 5, 0, 0),
(75, 1, 'Brisse', 'Suger', 2, 0, 0),
(76, 1, 'Henkesokokoko', 'Gullander', 4, 0, 0),
(77, 9, 'Joel', 'Gull', 2, 0, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Joel', 'Gullander', 'Joelgullander', '232efc6f4db0d0fd1e1d0dec09098b81dd48634999ecdfa69f36c4acf2b31eee'),
(9, '', '', 'Andreasbrisse', '232efc6f4db0d0fd1e1d0dec09098b81dd48634999ecdfa69f36c4acf2b31eee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
