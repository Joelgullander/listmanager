-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 okt 2016 kl 01:59
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
  `comment` varchar(2000) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `listid` int(20) NOT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumpning av Data i tabell `listentrys`
--

INSERT INTO `listentrys` (`id`, `userID`, `firstname`, `lastname`, `amount`, `comment`, `approved`, `listid`, `age`, `status`) VALUES
(1, 9, 'SDA', 'ADS', 5, 'Testar', 1, 0, 1, 1),
(2, 9, 'Bärta', 'Svensson', 5, 'Testarsdasdsa', 1, 0, 1, 1),
(3, 9, 'Daniel', 'Svensson', 3, 'Testarsdada', 1, 0, 0, 1),
(4, 9, 'Flabbe', 'Karlsson', 4, 'Nä, de var för fulla.', 1, 0, 1, 2),
(5, 1, 'Kim', 'Själlberg', 4, 'Haha', 1, 0, 1, 0),
(6, 1, 'Robert', 'Karlsson', 4, ':D ', 1, 0, 0, 0),
(7, 9, 'Arne', 'Bengtsson', 5, '4242', 1, 0, 0, 0);

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
