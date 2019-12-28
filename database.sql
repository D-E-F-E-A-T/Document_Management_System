-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Gegenereerd op: 27 dec 2019 om 23:03
-- Serverversie: 8.0.18
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dms_log_signin`
--

CREATE TABLE `dms_log_signin` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dt_last` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dms_note`
--

CREATE TABLE `dms_note` (
  `id` int(255) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `dt_created` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dt_last_edit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dms_users`
--

CREATE TABLE `dms_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dt_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `dms_users`
--

INSERT INTO `dms_users` (`id`, `username`, `password`, `email`, `firstname`, `surname`, `dt_created`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin@yourmail.com', 'Administrator', 'of the System', 'null');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dms_log_signin`
--
ALTER TABLE `dms_log_signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dms_note`
--
ALTER TABLE `dms_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dms_users`
--
ALTER TABLE `dms_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dms_log_signin`
--
ALTER TABLE `dms_log_signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `dms_note`
--
ALTER TABLE `dms_note`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `dms_users`
--
ALTER TABLE `dms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
