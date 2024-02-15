-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lut 2024, 09:20
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `3ip_02_pracownicy_w_kolorze`
--
CREATE DATABASE IF NOT EXISTS `3ip_02_pracownicy_w_kolorze` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `3ip_02_pracownicy_w_kolorze`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Flo', 'Yurkevich', 'fyurkevich0@liveinternet.ru', 'Female', '90.71.226.121', 'Yellow'),
(2, 'Aindrea', 'Ensor', 'aensor1@mayoclinic.com', 'Female', '102.170.193.207', 'Red'),
(3, 'Maisey', 'Knappen', 'mknappen2@istockphoto.com', 'Female', '38.90.102.73', 'Khaki'),
(4, 'Alla', 'Dowgill', 'adowgill3@accuweather.com', 'Female', '96.178.113.129', 'Khaki'),
(5, 'Matthaeus', 'Antowski', 'mantowski4@indiatimes.com', 'Male', '123.121.59.134', 'Purple'),
(6, 'Neron', 'Waterdrinker', 'nwaterdrinker5@npr.org', 'Male', '230.167.74.31', 'Red'),
(7, 'Robbert', 'Lafflina', 'rlafflina6@opensource.org', '', '61.75.2.135', 'Purple'),
(8, 'Evangelina', 'Merkle', 'emerkle7@1und1.de', 'Female', '210.100.86.136', 'Blue'),
(9, 'Dorise', 'Goacher', 'dgoacher8@techcrunch.com', 'Female', '202.201.180.119', 'Orange'),
(10, 'Andris', 'Honnicott', 'ahonnicott9@google.cn', '', '58.126.47.196', 'Red'),
(11, 'Brewer', 'Rollitt', 'brollitta@t.co', 'Male', '216.200.228.24', 'Mauv'),
(12, 'Otha', 'Cottie', 'ocottieb@yandex.ru', 'Female', '77.40.14.70', 'Khaki'),
(13, 'Bernadette', 'Dufton', 'bduftonc@wix.com', 'Female', '198.227.58.89', 'Orange'),
(14, 'Cristen', 'Gelsthorpe', 'cgelsthorped@census.gov', 'Female', '203.132.14.15', 'Mauv'),
(15, 'Sonja', 'MacPhail', 'smacphaile@slate.com', 'Female', '254.31.46.231', 'Fuscia'),
(16, 'Raddie', 'Sherar', 'rsherarf@noaa.gov', 'Male', '154.37.28.7', 'Turquoise'),
(17, 'Toddy', 'Gass', 'tgassg@behance.net', 'Male', '254.188.177.103', 'Indigo'),
(18, 'Adara', 'Kelling', 'akellingh@google.com.hk', '', '172.45.232.178', 'Violet'),
(19, 'Adelle', 'Tutin', 'atutini@dropbox.com', '', '166.154.232.150', 'Fuscia'),
(20, 'Katee', 'Pautard', 'kpautardj@dyndns.org', 'Female', '117.25.43.213', 'Orange'),
(21, 'Rudie', 'Hanstock', 'rhanstockk@godaddy.com', 'Male', '185.218.17.245', 'Purple'),
(22, 'Gelya', 'Goldman', 'ggoldmanl@cafepress.com', 'Female', '245.71.252.143', 'Orange'),
(23, 'Merrilee', 'Yoodall', 'myoodallm@hubpages.com', 'Female', '135.250.15.192', 'Crimson'),
(24, 'Debbie', 'Wark', 'dwarkn@yahoo.co.jp', 'Female', '171.209.152.13', 'Khaki'),
(25, 'Elton', 'Frears', 'efrearso@unc.edu', 'Male', '208.115.241.112', 'Maroon'),
(26, 'Enrique', 'Shepton', 'esheptonp@blinklist.com', 'Male', '61.233.96.55', 'Pink'),
(27, 'Glenda', 'Piborn', 'gpibornq@sun.com', 'Female', '214.179.28.24', 'Maroon'),
(28, 'Phillipp', 'Fletham', 'pflethamr@pcworld.com', 'Male', '172.91.240.141', 'Pink'),
(29, 'Simeon', 'Nealon', 'snealons@clickbank.net', 'Male', '251.153.185.91', 'Turquoise'),
(30, 'Addie', 'Aleswell', 'aaleswellt@va.gov', 'Male', '90.230.249.228', 'Orange'),
(31, 'Greggory', 'Astlatt', 'gastlattu@xrea.com', 'Male', '209.62.47.117', 'Goldenrod'),
(32, 'Vale', 'Follet', 'vfolletv@eepurl.com', 'Female', '255.14.172.33', 'Purple'),
(33, 'Clim', 'Reynard', 'creynardw@nps.gov', 'Male', '106.210.197.209', 'Purple'),
(34, 'Kelsey', 'Kershaw', 'kkershawx@vk.com', 'Male', '91.150.120.242', 'Turquoise'),
(35, 'Damara', 'Bartalini', 'dbartaliniy@virginia.edu', 'Female', '49.56.173.57', 'Fuscia'),
(36, 'Mackenzie', 'Shortan', 'mshortanz@altervista.org', 'Male', '140.112.137.74', 'Red'),
(37, 'Corby', 'Bettinson', 'cbettinson10@craigslist.org', 'Male', '14.165.246.110', 'Puce'),
(38, 'Ellen', 'Cordsen', 'ecordsen11@who.int', 'Female', '103.143.131.19', 'Fuscia'),
(39, 'Terese', 'Twinborough', 'ttwinborough12@unesco.org', 'Female', '137.51.12.205', 'Yellow'),
(40, 'Nelson', 'Olivera', 'nolivera13@indiegogo.com', 'Male', '39.28.55.169', 'Goldenrod'),
(41, 'Rebecka', 'Spadeck', 'rspadeck14@biblegateway.com', 'Female', '253.175.207.107', 'Maroon'),
(42, 'Mordy', 'Cassedy', 'mcassedy15@usa.gov', 'Male', '231.49.67.205', 'Orange'),
(43, 'Cirillo', 'Brailey', 'cbrailey16@1688.com', '', '38.193.62.200', 'Mauv'),
(44, 'Conant', 'Stuke', 'cstuke17@bandcamp.com', 'Male', '112.211.69.117', 'Crimson'),
(45, 'Hall', 'Vinter', 'hvinter18@liveinternet.ru', 'Male', '197.187.145.209', 'Khaki'),
(46, 'Torrin', 'Manners', 'tmanners19@nytimes.com', 'Male', '160.250.51.157', 'Goldenrod'),
(47, 'Cecile', 'Gilhespy', 'cgilhespy1a@hao123.com', 'Female', '55.249.10.195', 'Blue'),
(48, 'Amaleta', 'Reisenstein', 'areisenstein1b@foxnews.com', '', '243.44.57.237', 'Purple'),
(49, 'Somerset', 'Sivorn', 'ssivorn1c@narod.ru', 'Male', '232.98.81.53', 'Fuscia'),
(50, 'Richard', 'Deyes', 'rdeyes1d@bloglines.com', 'Male', '122.36.103.166', 'Mauv');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
