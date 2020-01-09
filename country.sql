-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: d82651.mysql.zonevs.eu
-- Loomise aeg: Dets 12, 2019 kell 04:29 PL
-- Serveri versioon: 10.3.20-MariaDB-log
-- PHP versioon: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `d82651sd340088`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `order_nr` int(11) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `country`
--

INSERT INTO `country` (`id`, `name`, `order_nr`, `time_added`) VALUES
(3, 'Europa', 100, '2019-12-12 08:10:12'),
(7, 'Narnia', 100, '2019-12-12 09:03:49'),
(8, 'Jahaatia', 100, '2019-12-12 11:42:07'),
(10, 'Kodu', 100, '2019-12-12 11:42:53');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=255 USING BTREE;

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
