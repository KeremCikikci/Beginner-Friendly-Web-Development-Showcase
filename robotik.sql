-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Aug 2022 um 11:29
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `robotik`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `beschreibung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `books`
--

INSERT INTO `books` (`id`, `vorname`, `nachname`, `titel`, `beschreibung`, `created_at`, `updated_at`) VALUES
(1, 'John Ronald Reuel', 'Tolkien', 'Der Herr der Ringe', 'Der Roman erzählt die Geschichte eines Rings, mit dessen Vernichtung die böse Macht in Gestalt des dunklen Herrschers Sauron untergeht. Die Hauptfiguren sind vier Hobbits, die unfreiwillig in ein heroisches Abenteuer hineingezogen werden.', '2021-02-21 19:20:21', NULL),
(2, 'Neuer Vorname', 'Rowling', 'Harry-Potter-Serie', 'Erzählt wird die Geschichte der titelgebenden Figur Harry Potter, der an seinem elften Geburtstag von seiner magischen Herkunft erfährt und fortan Schüler des britischen Zaubererinternats Hogwarts ist.', '2021-02-21 19:20:21', '2022-08-11 08:02:42'),
(3, 'George Raymond Richard ', 'Martin', 'Das Lied von Eis und Feuer', 'Das fiktive Universum der Saga ähnelt dem europäischen Mittelalter, gemischt mit Fantasy-Elementen. Martin legt einen Fokus auf die „dunklere Seite“ von Menschen und Gesellschaft und die moralischen Schattierungen der Charaktere, im Gegensatz zur – in der Fantasyliteratur traditionell deutlichen – Zuschreibung von Gut und Böse.', '2021-02-21 19:20:21', NULL),
(4, 'Christopher', 'Paolini', 'Eragon', 'Die Handlung spielt in einer fiktiven Welt namens Alagaësia und konzentriert sich auf die Abenteuer des Drachenreiters Eragon und seines Drachen Saphira.', '2021-02-21 19:20:21', NULL),
(6, 'Vorname', 'Nachname', 'Titel', 'Beschreibung', '2022-08-11 07:50:48', NULL),
(7, 'Vorname', 'Nachname', 'Titel', 'Beschreibung', '2022-08-11 07:51:02', NULL),
(8, 'Vorname', 'Nachname', 'Titel', 'Beschreibung', '2022-08-11 08:24:17', NULL),
(9, 'Vorname', 'Nachname', 'Titel', 'Beschreibung', '2022-08-11 08:26:44', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `chat`
--

INSERT INTO `chat` (`id`, `username`, `comment`, `created_at`) VALUES
(46, 'root', '\"\"\"', '2022-08-17 09:43:43'),
(47, 'root', 'asdsaasdsaasdsaasdsaasdsaasdsaasdsa', '2022-08-17 09:15:08'),
(48, 'root', 'dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada dsadsada ', '2022-08-18 05:56:36'),
(49, 'newUser2', 'adfasda ', '2022-08-18 07:32:25'),
(50, 'newUser3', 'asdasd sadasd', '2022-08-18 07:51:10');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  `recht` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `passwort`, `recht`, `created_at`, `updated_at`) VALUES
(1, 'root', 'root@root.com', '$2y$10$mdmI/tsci6aSSDDAWX2sF.aNQNDfhfXIu2/jLUDMcDaA713ttA5l6', 'admin', '2022-08-12 07:35:43', '2022-08-16 09:48:30'),
(30, 'newUser2', 'newUser2@gmail.com', '$2y$10$OKYZ2pAbNJJMVaca.wB3guadpTUiAuGiUM9qlEARV1yWeA1sdlUNe', 'admin', '2022-08-18 07:32:11', NULL),
(31, 'newUser', 'newUser@gmail.com', '$2y$10$N4OKx8IFvHXKJvVDgyVhEezqlJ.QKSuMl9q2uh.PM6bObI55QteTW', '', '2022-08-18 07:42:16', NULL),
(34, 'newUser3', 'newUser3@gmail.com', '$2y$10$gDAavBaGEQKvUpDmvbqbUubDglRj0ybn6treBZvT08Sk7EJmtv6Dq', 'admin', '2022-08-18 07:51:44', NULL),
(37, 'user4', 'user4@gmail.com', '$2y$10$sO2K0R2C1JNT6dp7cKNdVOg2oSFBFdDQHvUr4sJFDvJ5IjLUn2jRi', '', '2022-08-18 08:01:56', '2022-08-18 08:36:33'),
(40, 'new', 'new@gmail.com', '$2y$10$7iYtUBfx7UagSNJEEbUBBO5NlkDNd1/C.jGaUh/vNQsJFiYxGSfa2', 'admin', '2022-08-18 08:41:51', '2022-08-18 08:43:02'),
(41, 'user10', 'user10@gmail.com', '$2y$10$0Lk.1Av9eexywSuQ2T6S4upF/Qqw7dsimc25nH2zU85Zdk6niHCSu', 'admin', '2022-08-18 08:49:29', '2022-08-18 08:55:26'),
(42, 'delete', 'delete@gmail.com', '$2y$10$k/BnFj.5fkb3b5XGshqi0.xifge93KnVOfebBCdtc9G2gh8lmpflm', 'admin', '2022-08-18 09:01:46', '2022-08-18 09:15:11'),
(43, 'new15', 'new15@gmail.com', '$2y$10$nmETqf34kkkQetOX3Z/DxO4aBVCFuzI9V3FqEErlR6ZNDDxJ7Nhw.', 'admin', '2022-08-18 09:19:20', '2022-08-18 09:19:50');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mails`
--

CREATE TABLE `mails` (
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `mail_adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `mails`
--

INSERT INTO `mails` (`vorname`, `nachname`, `mail_adresse`, `mail`) VALUES
('asda', 'asd', 'asd@aasdas', 'sadaasd'),
('asdas', 'asdas', 'sadas@asdas', 'asdsadsd'),
('sadas', 'sadas', 'asdas@asd', 'asdasd'),
('asdas', 'sadas', 'asdas@asd', 'asda'),
('asdsa', 'sadas', 'sadas@asdas', 'asdas'),
('asd', 'asd', 'sadas@asdas', 'asd'),
('asd', 'asd', 'asdas@asd', 'asd'),
('fsas', 'sada', 'asdas@asd', 'asdas'),
('ada', 'asda', 'asd@aasdas', 'asd'),
('asda', 'asda', 'sadas@asdasasda', 'asd'),
('asdas', 'asdas', 'asd@aasdas', 'asd');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `explanation` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `menge` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `produkt`
--

INSERT INTO `produkt` (`id`, `explanation`, `name`, `price`, `menge`, `image`, `created_at`) VALUES
(1, 'ex', 'Roboter', '30', 11, 'robotik_background.jpg', '2022-08-19 09:26:36'),
(2, 'ex2', '3D Printer', '200', 73, '3d_printer.jpg', '2022-08-19 09:26:36'),
(3, 'mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv mgv ', 'Transistor', '1', 995, 'transistor.jpg', '2022-08-19 09:26:36'),
(4, 'led led led led led led led led led led led led led led led led led led led led led ', 'Led', '2', 791, 'led.jpg', '2022-08-19 09:26:36'),
(6, 'asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd ', 'Kondansator', '4', 497, 'kondansator.jpg', '2022-08-19 09:26:36');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `strasse` varchar(250) NOT NULL,
  `plz` int(5) NOT NULL,
  `ort` varchar(100) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `dateiname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `profil`
--

INSERT INTO `profil` (`id`, `username`, `vorname`, `nachname`, `strasse`, `plz`, `ort`, `telefon`, `created_at`, `updated_at`, `dateiname`) VALUES
(12, 'root', '1', '1', '1', 1, '1', '1', '2022-08-09 22:00:00', '2022-08-16 22:00:00', 'mechanic_3.jpg'),
(26, 'newUser', 'asdasdasdas', 'dsadas', 'sadasdas', 23123, 'asdas', '23w321312312', '2022-08-18 07:12:03', NULL, 'mechanic_1.jpg'),
(27, 'newUser3', 'asdas', 'dsad', 'sada', 123, 'asd', '23', '2022-08-18 07:51:28', NULL, 'mechanic_6.jpg'),
(28, 'user4', 'dsad', 'asda', 'sa', 23240, 'ort22', '232', '2022-08-17 22:00:00', '0000-00-00 00:00:00', ''),
(29, 'new', '12312', '12312', '123', 123, '213', '213', '2022-08-17 22:00:00', '0000-00-00 00:00:00', 'login_background.jpg'),
(30, 'user10', 'asdas', 'sadasd', 'asdas', 1212, 'sada', '213', '2022-08-17 22:00:00', '0000-00-00 00:00:00', 'led.jpg'),
(31, 'delete', 'asdsa', 'dasda', 'sdasd', 21312, 'asdasd', '1231', '2022-08-17 22:00:00', '0000-00-00 00:00:00', 'elektrisches_bauelement.jpg'),
(32, 'new15', 'sadas', 'dsadas', 'asdas', 3223, 'asd', '213', '2022-08-17 22:00:00', '0000-00-00 00:00:00', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indizes für die Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT für Tabelle `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT für Tabelle `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
