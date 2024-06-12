-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mai 2024 um 13:27
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `user_mangement`
--

-- --------------------------------------------------------

-- Tabelle `users` löschen

DROP TABLE IF EXISTS `users`;

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(8) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Max', 'Mustermann', 'max@example.com', 'password', 'admin', '2023-01-15 08:30:00', '2023-02-20 10:45:00'),
(2, 'Anna', 'Schmidt', 'anna@example.com', 'pass123', 'user', '2023-02-10 11:20:00', '2023-03-05 09:15:00'),
(3, 'Peter', 'Müller', 'peter@example.com', 'p@ssw0rd', 'user', '2023-03-20 14:50:00', '2023-04-18 12:30:00'),
(4, 'Julia', 'Wagner', 'julia@example.com', 'secure12', 'inactive', '2023-04-05 09:10:00', '2023-04-20 16:55:00'),
(5, 'Thomas', 'Fischer', 'thomas@example.com', 'mypass', 'admin', '2023-05-08 10:25:00', '2023-05-25 14:20:00'),
(6, 'Sarah', 'Becker', 'sarah@example.com', '123456', 'user', '2023-06-12 13:40:00', '2023-06-30 17:10:00'),
(7, 'Michael', 'Schulz', 'michael@example.com', 'testpass', 'user', '2023-07-15 16:55:00', '2023-07-28 10:05:00'),
(8, 'Laura', 'Hoffmann', 'laura@example.com', 'secret', 'inactive', '2023-08-20 18:20:00', '2023-09-05 11:25:00'),
(9, 'Kevin', 'Richter', 'kevin@example.com', 'abc123', 'admin', '2023-09-25 20:45:00', '2023-10-15 13:40:00'),
(10, 'Maria', 'Lehmann', 'maria@example.com', 'passpass', 'user', '2023-10-30 22:00:00', '2023-11-20 15:50:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
