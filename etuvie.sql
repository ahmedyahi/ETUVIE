-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 31, 2021 alle 19:05
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etuvie`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `crous`
--

CREATE TABLE `crous` (
  `Ville` varchar(16) DEFAULT NULL,
  `Restaurant` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `crous`
--

INSERT INTO `crous` (`Ville`, `Restaurant`) VALUES
('Aix', 17),
('Bordeaux', 18),
('Clermont-Ferrand', 25),
('Grenoble', 27),
('Lille', 22),
('Lyon', 31),
('Marseille', 21),
('Montpellier', 19),
('Nancy', 8),
('Nantes', 29),
('Nice', 13),
('Paris', 68),
('Rennes', 10),
('Strasbourg', 17),
('Toulouse', 42),
('Tours', 13);

-- --------------------------------------------------------

--
-- Struttura della tabella `culture`
--

CREATE TABLE `culture` (
  `Ville` varchar(16) DEFAULT NULL,
  `nbCinema` int(2) DEFAULT NULL,
  `nbFestival` int(3) DEFAULT NULL,
  `nbBiblio` int(2) DEFAULT NULL,
  `nbMusee` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `culture`
--

INSERT INTO `culture` (`Ville`, `nbCinema`, `nbFestival`, `nbBiblio`, `nbMusee`) VALUES
('Aix', 4, 15, 3, 126),
('Bordeaux', 4, 26, 11, 126),
('Clermont-Ferrand', 6, 17, 10, 54),
('Grenoble', 5, 20, 14, 108),
('Lille', 4, 22, 10, 54),
('Lyon', 15, 47, 18, 216),
('Marseille', 13, 56, 10, 232),
('Montpellier', 6, 21, 8, 80),
('Nancy', 3, 13, 4, 72),
('Nantes', 5, 33, 8, 72),
('Nice', 8, 11, 17, 221),
('Paris', 82, 185, 67, 934),
('Rennes', 4, 37, 15, 54),
('Strasbourg', 3, 29, 8, 173),
('Toulouse', 6, 42, 22, 126),
('Tours', 4, 11, 8, 90);

-- --------------------------------------------------------

--
-- Struttura della tabella `loyer`
--

CREATE TABLE `loyer` (
  `id_loyer` int(2) DEFAULT NULL,
  `Code_postal` varchar(5) DEFAULT NULL,
  `Ville` varchar(16) DEFAULT NULL,
  `Nbre_pièces` decimal(2,1) DEFAULT NULL,
  `Loyer_moyen` int(4) DEFAULT NULL,
  `Surface_moyenne` int(3) DEFAULT NULL,
  `Nbre_observations` int(5) DEFAULT NULL,
  `Nbre_logements` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `loyer`
--

INSERT INTO `loyer` (`id_loyer`, `Code_postal`, `Ville`, `Nbre_pièces`, `Loyer_moyen`, `Surface_moyenne`, `Nbre_observations`, `Nbre_logements`) VALUES
(1, 'B1300', 'Aix', '0.1', 451, 28, 38819, 170270),
(2, 'B1300', 'Aix', '0.2', 595, 44, 77310, 360910),
(3, 'B1300', 'Aix', '0.3', 753, 66, 69600, 365280),
(4, 'B1300', 'Aix', '0.4', 929, 89, 27701, 180458),
(5, 'B1300', 'Aix', '0.5', 1181, 107, 9032, 101422),
(6, 'B1300', 'Aix', '0.5', 746, 67, 4689, 86034),
(7, 'B3300', 'Bordeaux', '0.1', 423, 28, 6549, 91208),
(8, 'B3300', 'Bordeaux', '0.2', 539, 45, 27884, 118128),
(9, 'B3300', 'Bordeaux', '0.3', 698, 67, 20152, 73870),
(10, 'B3300', 'Bordeaux', '0.4', 856, 92, 4713, 33980),
(11, 'B3300', 'Bordeaux', '0.5', 980, 107, 4571, 23404),
(12, 'B3300', 'Bordeaux', '0.5', 700, 68, 2668, 16844),
(13, 'B6300', 'Clermont-Ferrand', '0.1', 323, 27, 3342, 27352),
(14, 'B6300', 'Clermont-Ferrand', '0.2', 431, 45, 8720, 78591),
(15, 'B6300', 'Clermont-Ferrand', '0.3', 541, 65, 7328, 71382),
(16, 'B6300', 'Clermont-Ferrand', '0.4', 671, 94, 3155, 35870),
(17, 'B6300', 'Clermont-Ferrand', '0.5', 788, 105, 2106, 32475),
(18, 'B6300', 'Clermont-Ferrand', '0.5', 504, 61, 1016, 11686),
(19, 'B3800', 'Grenoble', '0.1', 405, 28, 28884, 51751),
(20, 'B3800', 'Grenoble', '0.2', 544, 46, 34780, 95134),
(21, 'B3800', 'Grenoble', '0.3', 676, 66, 33826, 100135),
(22, 'B3800', 'Grenoble', '0.4', 854, 90, 20602, 69681),
(23, 'B3800', 'Grenoble', '0.5', 1046, 113, 3462, 21666),
(24, 'B3800', 'Grenoble', '0.5', 630, 58, 733, 6224),
(25, 'B5900', 'Lille', '0.1', 410, 27, 10936, 73668),
(26, 'B5900', 'Lille', '0.2', 536, 44, 20824, 128680),
(27, 'B5900', 'Lille', '0.3', 680, 66, 13128, 82050),
(28, 'B5900', 'Lille', '0.4', 831, 90, 3184, 40930),
(29, 'B5900', 'Lille', '0.5', 870, 100, 7074, 88960),
(30, 'B5900', 'Lille', '0.5', 612, 63, 2534, 24616),
(31, 'B6900', 'Lyon', '0.1', 446, 29, 31512, 167234),
(32, 'B6900', 'Lyon', '0.2', 572, 46, 71080, 383060),
(33, 'B6900', 'Lyon', '0.3', 713, 67, 66152, 351877),
(34, 'B6900', 'Lyon', '0.4', 941, 94, 37728, 222131),
(35, 'B1300', 'Marseille', '0.1', 451, 28, 38819, 170270),
(36, 'B1300', 'Marseille', '0.2', 595, 44, 77310, 360910),
(37, 'B1300', 'Marseille', '0.3', 753, 66, 69600, 365280),
(38, 'B1300', 'Marseille', '0.4', 929, 89, 27701, 180458),
(39, 'B1300', 'Marseille', '0.5', 1181, 107, 9032, 101422),
(40, 'B1300', 'Marseille', '0.5', 746, 67, 4689, 86034),
(41, 'B3400', 'Montpellier', '0.1', 415, 26, 22901, 102735),
(42, 'B3400', 'Montpellier', '0.2', 558, 43, 37876, 153669),
(43, 'B3400', 'Montpellier', '0.3', 711, 67, 21601, 104541),
(44, 'B3400', 'Montpellier', '0.4', 878, 94, 6683, 50580),
(45, 'B3400', 'Montpellier', '0.5', 1047, 108, 3367, 37724),
(46, 'B3400', 'Montpellier', '0.5', 697, 64, 683, 10162),
(47, 'B5400', 'Nancy', '0.1', 357, 31, 9718, 53256),
(48, 'B5400', 'Nancy', '0.2', 456, 47, 20016, 85542),
(49, 'B5400', 'Nancy', '0.3', 558, 68, 17520, 69149),
(50, 'B5400', 'Nancy', '0.4', 680, 94, 8905, 40054),
(51, 'B5400', 'Nancy', '0.5', 831, 113, 2042, 13643),
(52, 'B4400', 'Nantes', '0.1', 380, 28, 21800, 78540),
(53, 'B4400', 'Nantes', '0.2', 504, 44, 53354, 161716),
(54, 'B4400', 'Nantes', '0.3', 639, 65, 36831, 102239),
(55, 'B4400', 'Nantes', '0.4', 852, 90, 7232, 44784),
(56, 'B4400', 'Nantes', '0.5', 958, 104, 4083, 39717),
(57, 'B4400', 'Nantes', '0.5', 624, 64, 964, 14100),
(58, 'B0600', 'Nice', '0.1', 492, 29, 52928, 160051),
(59, 'B0600', 'Nice', '0.2', 648, 46, 86968, 291772),
(60, 'B0600', 'Nice', '0.3', 826, 67, 58144, 219923),
(61, 'B0600', 'Nice', '0.4', 1015, 91, 16707, 73495),
(62, 'B0600', 'Nice', '0.5', 1234, 107, 951, 11547),
(63, 'B0600', 'Nice', '0.5', 824, 63, 520, 14632),
(64, 'B7500', 'Paris', '0.1', 600, 27, 26846, 190566),
(65, 'B7500', 'Paris', '0.2', 770, 38, 53350, 390777),
(66, 'B7500', 'Paris', '0.3', 1030, 57, 44173, 395573),
(67, 'B7500', 'Paris', '0.4', 1530, 93, 17403, 210722),
(68, 'B7500', 'Paris', '0.5', 1499, 109, 887, 120843),
(69, 'B7500', 'Paris', '0.5', 866, 59, 639, 89382),
(70, 'B3500', 'Rennes', '0.1', 372, 26, 19422, 72297),
(71, 'B3500', 'Rennes', '0.2', 478, 44, 35505, 125722),
(72, 'B3500', 'Rennes', '0.3', 600, 64, 29307, 100304),
(73, 'B3500', 'Rennes', '0.4', 773, 87, 12759, 46889),
(74, 'B3500', 'Rennes', '0.5', 971, 115, 4631, 42394),
(75, 'B3500', 'Rennes', '0.5', 568, 62, 378, 12340),
(76, 'B6700', 'Strasbourg', '0.1', 380, 27, 21376, 70429),
(77, 'B6700', 'Strasbourg', '0.2', 516, 48, 33592, 133803),
(78, 'B6700', 'Strasbourg', '0.3', 647, 71, 29856, 141420),
(79, 'B6700', 'Strasbourg', '0.4', 827, 100, 17840, 95968),
(80, 'B6700', 'Strasbourg', '0.5', 984, 126, 441, 7306),
(81, 'B3100', 'Toulouse', '0.1', 397, 28, 24375, 146760),
(82, 'B3100', 'Toulouse', '0.2', 497, 44, 49540, 303286),
(83, 'B3100', 'Toulouse', '0.3', 629, 66, 39811, 237137),
(84, 'B3100', 'Toulouse', '0.4', 822, 92, 10142, 96626),
(85, 'B3100', 'Toulouse', '0.5', 923, 104, 9912, 114933),
(86, 'B3100', 'Toulouse', '0.5', 655, 66, 2478, 25061),
(87, 'B3700', 'Tours', '0.1', 341, 27, 15630, 44076),
(88, 'B3700', 'Tours', '0.2', 466, 45, 24590, 68346),
(89, 'B3700', 'Tours', '0.3', 599, 65, 15674, 47790),
(90, 'B3700', 'Tours', '0.4', 750, 92, 5226, 23988),
(91, 'B3700', 'Tours', '0.5', 899, 105, 4072, 26940),
(92, 'B3700', 'Tours', '0.5', 618, 59, 1082, 9936);

-- --------------------------------------------------------

--
-- Struttura della tabella `meteo`
--

CREATE TABLE `meteo` (
  `Ville` varchar(16) DEFAULT NULL,
  `Temp_min` decimal(3,1) DEFAULT NULL,
  `Temp_max` decimal(3,1) DEFAULT NULL,
  `Pluviometrie` int(3) DEFAULT NULL,
  `Ensoleillement` int(4) DEFAULT NULL,
  `Jours_orage` decimal(3,1) DEFAULT NULL,
  `Jours_neige` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `meteo`
--

INSERT INTO `meteo` (`Ville`, `Temp_min`, `Temp_max`, `Pluviometrie`, `Ensoleillement`, `Jours_orage`, `Jours_neige`) VALUES
('Aix', '10.6', '20.1', 515, 2858, '20.1', '1.3'),
('Bordeaux', '9.1', '18.5', 944, 2036, '29.7', '3.9'),
('Clermont-Ferrand', '6.6', '16.8', 579, 1913, '28.7', '19.5'),
('Grenoble', '6.3', '16.2', 934, 2066, '31.2', '28.2'),
('Lille', '7.1', '14.5', 741, 1618, '18.7', '17.7'),
('Lyon', '8.1', '16.9', 832, 2002, '28.2', '15.5'),
('Marseille', '10.8', '20.2', 515, 2858, '20.1', '1.3'),
('Montpellier', '10.4', '19.9', 629, 2668, '23.2', '1.1'),
('Nancy', '6.0', '14.9', 775, 1665, '27.6', '29.6'),
('Nantes', '8.3', '16.7', 820, 1791, '14.3', '4.8'),
('Nice', '12.4', '19.6', 733, 2724, '28.6', '0.9'),
('Paris', '8.9', '16.0', 637, 1662, '17.9', '12.2'),
('Rennes', '8.2', '17.6', 628, 1701, '23.3', '18.2'),
('Strasbourg', '6.6', '15.3', 665, 1709, '28.9', '28.8'),
('Toulouse', '9.1', '18.5', 638, 2031, '25.9', '6.3'),
('Tours', '7.5', '16.1', 696, 1833, '19.3', '8.7');

-- --------------------------------------------------------

--
-- Struttura della tabella `securite`
--

CREATE TABLE `securite` (
  `crimes` varchar(16) DEFAULT NULL,
  `1` int(2) DEFAULT NULL,
  `2` int(1) DEFAULT NULL,
  `3` int(2) DEFAULT NULL,
  `4` int(1) DEFAULT NULL,
  `5` int(3) DEFAULT NULL,
  `6` int(2) DEFAULT NULL,
  `7` int(5) DEFAULT NULL,
  `8` int(1) DEFAULT NULL,
  `9` int(1) DEFAULT NULL,
  `10` int(3) DEFAULT NULL,
  `11` int(3) DEFAULT NULL,
  `12` int(4) DEFAULT NULL,
  `13` int(4) DEFAULT NULL,
  `14` int(3) DEFAULT NULL,
  `15` int(1) DEFAULT NULL,
  `16` int(2) DEFAULT NULL,
  `17` int(1) DEFAULT NULL,
  `18` int(2) DEFAULT NULL,
  `19` int(2) DEFAULT NULL,
  `20` int(2) DEFAULT NULL,
  `21` int(2) DEFAULT NULL,
  `22` int(3) DEFAULT NULL,
  `23` int(2) DEFAULT NULL,
  `24` int(2) DEFAULT NULL,
  `25` int(4) DEFAULT NULL,
  `26` int(4) DEFAULT NULL,
  `27` int(5) DEFAULT NULL,
  `28` int(3) DEFAULT NULL,
  `29` int(4) DEFAULT NULL,
  `30` int(4) DEFAULT NULL,
  `31` int(3) DEFAULT NULL,
  `32` int(4) DEFAULT NULL,
  `33` int(4) DEFAULT NULL,
  `34` int(1) DEFAULT NULL,
  `35` int(4) DEFAULT NULL,
  `36` int(4) DEFAULT NULL,
  `37` int(5) DEFAULT NULL,
  `38` int(4) DEFAULT NULL,
  `39` int(3) DEFAULT NULL,
  `40` int(2) DEFAULT NULL,
  `41` int(4) DEFAULT NULL,
  `42` int(5) DEFAULT NULL,
  `43` int(5) DEFAULT NULL,
  `44` int(4) DEFAULT NULL,
  `45` int(2) DEFAULT NULL,
  `46` int(3) DEFAULT NULL,
  `47` int(3) DEFAULT NULL,
  `48` int(3) DEFAULT NULL,
  `49` int(3) DEFAULT NULL,
  `50` int(3) DEFAULT NULL,
  `51` int(2) DEFAULT NULL,
  `52` int(4) DEFAULT NULL,
  `53` int(4) DEFAULT NULL,
  `54` int(3) DEFAULT NULL,
  `55` int(3) DEFAULT NULL,
  `56` int(4) DEFAULT NULL,
  `57` int(4) DEFAULT NULL,
  `58` int(2) DEFAULT NULL,
  `59` int(2) DEFAULT NULL,
  `60` int(1) DEFAULT NULL,
  `61` int(2) DEFAULT NULL,
  `62` int(3) DEFAULT NULL,
  `63` int(4) DEFAULT NULL,
  `64` int(2) DEFAULT NULL,
  `65` int(2) DEFAULT NULL,
  `66` int(4) DEFAULT NULL,
  `67` int(4) DEFAULT NULL,
  `68` int(4) DEFAULT NULL,
  `69` int(3) DEFAULT NULL,
  `70` int(3) DEFAULT NULL,
  `71` int(3) DEFAULT NULL,
  `72` int(4) DEFAULT NULL,
  `73` int(4) DEFAULT NULL,
  `74` int(4) DEFAULT NULL,
  `75` int(2) DEFAULT NULL,
  `76` int(1) DEFAULT NULL,
  `77` int(3) DEFAULT NULL,
  `78` int(3) DEFAULT NULL,
  `79` int(2) DEFAULT NULL,
  `80` int(2) DEFAULT NULL,
  `81` int(3) DEFAULT NULL,
  `82` int(3) DEFAULT NULL,
  `83` int(3) DEFAULT NULL,
  `84` int(2) DEFAULT NULL,
  `85` int(3) DEFAULT NULL,
  `86` int(3) DEFAULT NULL,
  `87` int(3) DEFAULT NULL,
  `88` int(2) DEFAULT NULL,
  `89` int(4) DEFAULT NULL,
  `90` int(4) DEFAULT NULL,
  `91` int(5) DEFAULT NULL,
  `92` int(2) DEFAULT NULL,
  `93` int(3) DEFAULT NULL,
  `94` int(3) DEFAULT NULL,
  `95` int(1) DEFAULT NULL,
  `96` int(2) DEFAULT NULL,
  `97` int(2) DEFAULT NULL,
  `98` int(1) DEFAULT NULL,
  `99` int(2) DEFAULT NULL,
  `100` int(2) DEFAULT NULL,
  `101` int(2) DEFAULT NULL,
  `102` int(3) DEFAULT NULL,
  `103` int(4) DEFAULT NULL,
  `104` int(2) DEFAULT NULL,
  `105` int(3) DEFAULT NULL,
  `106` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `securite`
--

INSERT INTO `securite` (`crimes`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`, `101`, `102`, `103`, `104`, `105`, `106`) VALUES
('nice', 1, 0, 8, 1, 40, 2, 2958, 0, 2, 42, 206, 1342, 556, 196, 2, 6, 1, 0, 5, 6, 5, 44, 4, 20, 338, 543, 2331, 232, 247, 681, 72, 2650, 441, 2, 591, 682, 2052, 491, 74, 4, 524, 1724, 3953, 308, 11, 80, 64, 107, 111, 111, 0, 365, 100, 59, 188, 206, 1233, 11, 37, 4, 0, 35, 195, 1, 6, 242, 1204, 620, 495, 226, 142, 343, 460, 402, 18, 3, 22, 15, 4, 0, 313, 35, 31, 5, 84, 22, 3, 2, 239, 1056, 2265, 30, 90, 46, 0, 16, 3, 0, 12, 26, 11, 242, 1401, 11, 242, 1401),
('aix', 11, 2, 19, 3, 75, 4, 3873, 1, 1, 82, 232, 2099, 747, 261, 2, 55, 1, 25, 20, 4, 6, 41, 11, 24, 348, 461, 3214, 205, 956, 925, 120, 1431, 1255, 3, 1135, 625, 3622, 894, 163, 5, 854, 2519, 4401, 452, 23, 134, 120, 168, 199, 155, 0, 745, 270, 100, 142, 300, 2409, 16, 86, 5, 5, 145, 478, 1, 0, 433, 1310, 1375, 32, 119, 69, 582, 614, 737, 5, 0, 21, 42, 15, 0, 262, 53, 57, 11, 106, 44, 6, 12, 654, 999, 3425, 27, 188, 97, 0, 25, 16, 0, 31, 11, 8, 45, 1943, 8, 45, 1943),
('marseille', 11, 2, 19, 3, 75, 4, 3873, 1, 1, 82, 232, 2099, 747, 261, 2, 55, 1, 25, 20, 4, 6, 41, 11, 24, 348, 461, 3214, 205, 956, 925, 120, 1431, 1255, 3, 1135, 625, 3622, 894, 163, 5, 854, 2519, 4401, 452, 23, 134, 120, 168, 199, 155, 0, 745, 270, 100, 142, 300, 2409, 16, 86, 5, 5, 145, 478, 1, 0, 433, 1310, 1375, 32, 119, 69, 582, 614, 737, 5, 0, 21, 42, 15, 0, 262, 53, 57, 11, 106, 44, 6, 12, 654, 999, 3425, 27, 188, 97, 0, 25, 16, 0, 31, 11, 8, 45, 1943, 8, 45, 1943),
('bordeaux', 0, 0, 2, 0, 11, 1, 1526, 0, 2, 14, 59, 535, 215, 84, 0, 5, 0, 2, 3, 4, 3, 13, 4, 10, 94, 218, 424, 33, 231, 173, 37, 473, 441, 0, 189, 186, 1224, 251, 33, 1, 335, 1030, 1569, 157, 1, 83, 42, 77, 55, 77, 0, 257, 115, 30, 30, 133, 767, 5, 1, 1, 0, 48, 275, 0, 0, 282, 948, 1039, 6, 33, 49, 190, 191, 199, 2, 0, 39, 10, 8, 0, 22, 4, 12, 3, 29, 5, 9, 2, 199, 462, 1103, 18, 34, 28, 1, 5, 1, 0, 9, 7, 1, 8, 532, 1, 8, 532),
('montpellier', 3, 0, 2, 0, 6, 0, 504, 0, 0, 5, 28, 273, 125, 41, 0, 6, 0, 0, 4, 0, 0, 2, 1, 0, 28, 41, 82, 12, 56, 42, 7, 125, 45, 0, 131, 180, 126, 159, 14, 0, 39, 252, 362, 45, 0, 15, 17, 22, 26, 38, 0, 82, 37, 23, 5, 21, 305, 2, 5, 0, 2, 28, 154, 0, 0, 46, 212, 532, 0, 89, 10, 39, 52, 99, 3, 0, 1, 10, 6, 1, 24, 5, 23, 3, 26, 2, 0, 0, 48, 56, 476, 1, 74, 66, 5, 12, 1, 0, 2, 18, 2, 17, 288, 2, 17, 288),
('rennes', 0, 0, 3, 0, 23, 0, 1398, 0, 1, 18, 36, 683, 216, 85, 1, 3, 0, 1, 6, 0, 4, 22, 1, 6, 189, 190, 1112, 49, 293, 319, 32, 211, 376, 0, 624, 277, 1274, 544, 42, 1, 303, 1175, 2022, 154, 4, 33, 37, 60, 54, 63, 1, 222, 122, 51, 64, 106, 569, 5, 21, 0, 2, 35, 250, 1, 2, 205, 695, 563, 13, 92, 43, 218, 283, 228, 1, 1, 4, 14, 1, 0, 118, 12, 38, 6, 40, 9, 4, 0, 127, 423, 1082, 4, 78, 74, 1, 5, 0, 0, 5, 3, 1, 12, 633, 1, 12, 633),
('tours', 4, 1, 17, 1, 47, 1, 3495, 4, 3, 62, 212, 1679, 655, 265, 0, 6, 0, 3, 12, 9, 10, 85, 4, 14, 666, 724, 4085, 157, 750, 904, 101, 4531, 509, 2, 844, 962, 7054, 1239, 113, 1, 700, 2868, 5596, 501, 6, 203, 112, 216, 127, 156, 0, 558, 236, 45, 243, 851, 1481, 14, 94, 0, 5, 48, 629, 0, 0, 450, 2392, 955, 15, 3, 40, 365, 607, 551, 4, 1, 19, 9, 13, 1, 13, 13, 21, 14, 80, 22, 7, 6, 1097, 1748, 2931, 15, 27, 0, 0, 22, 7, 0, 7, 14, 12, 98, 2165, 12, 98, 2165),
('grenoble', 0, 0, 2, 1, 2, 1, 223, 0, 0, 3, 8, 76, 39, 4, 1, 2, 0, 0, 1, 0, 3, 0, 0, 4, 13, 12, 96, 5, 53, 17, 6, 69, 73, 0, 49, 46, 150, 48, 7, 2, 381, 149, 269, 37, 1, 5, 4, 9, 27, 12, 0, 47, 10, 3, 30, 18, 147, 15, 2, 0, 5, 8, 22, 0, 0, 30, 77, 44, 0, 55, 21, 34, 41, 40, 2, 0, 0, 2, 0, 0, 59, 8, 22, 1, 22, 2, 5, 1, 38, 46, 276, 3, 36, 42, 1, 20, 3, 1, 4, 1, 5, 21, 158, 5, 21, 158),
('nantes', 0, 0, 2, 0, 9, 1, 1117, 0, 0, 13, 55, 555, 153, 57, 0, 1, 0, 4, 3, 1, 3, 11, 2, 8, 95, 128, 608, 104, 222, 214, 55, 412, 278, 0, 318, 242, 905, 206, 30, 2, 170, 938, 1317, 183, 1, 37, 22, 37, 36, 46, 0, 210, 89, 37, 16, 87, 769, 2, 5, 0, 2, 42, 90, 1, 1, 117, 682, 396, 13, 31, 64, 181, 184, 177, 1, 0, 4, 15, 7, 1, 52, 46, 10, 2, 41, 4, 6, 0, 117, 312, 832, 10, 28, 25, 1, 5, 1, 1, 2, 22, 0, 5, 396, 0, 5, 396),
('nancy', 1, 0, 3, 0, 17, 1, 2979, 0, 0, 37, 140, 1588, 589, 120, 1, 5, 0, 1, 7, 5, 3, 38, 20, 30, 304, 446, 2022, 57, 884, 988, 103, 1391, 1070, 1, 1191, 411, 2555, 975, 82, 9, 817, 2209, 2955, 479, 1, 121, 91, 132, 154, 139, 1, 556, 156, 66, 65, 178, 2228, 4, 14, 1, 0, 124, 922, 2, 0, 649, 2659, 1168, 10, 33, 16, 500, 471, 412, 8, 0, 4, 21, 16, 0, 71, 9, 29, 8, 83, 31, 0, 5, 446, 792, 2708, 32, 71, 34, 0, 16, 16, 0, 12, 16, 3, 34, 1324, 3, 34, 1324),
('lille', 0, 0, 13, 0, 28, 3, 4334, 0, 0, 72, 172, 2037, 780, 179, 0, 4, 0, 4, 13, 13, 11, 47, 12, 15, 367, 620, 2083, 52, 799, 843, 177, 1488, 1218, 1, 891, 623, 3000, 1127, 125, 11, 1022, 2724, 4064, 575, 5, 200, 172, 254, 326, 216, 1, 973, 376, 96, 86, 537, 2883, 21, 10, 2, 4, 117, 668, 1, 1, 464, 2551, 2079, 28, 110, 49, 591, 616, 728, 8, 0, 21, 26, 24, 2, 91, 34, 37, 28, 112, 47, 7, 6, 638, 1016, 3877, 39, 57, 40, 0, 17, 18, 1, 5, 16, 6, 45, 2057, 6, 45, 2057),
('clermont-ferrand', 0, 0, 5, 0, 1, 1, 1347, 1, 2, 12, 60, 725, 301, 81, 0, 3, 0, 1, 4, 4, 4, 10, 6, 7, 55, 91, 904, 37, 208, 407, 49, 306, 319, 0, 354, 107, 858, 250, 59, 1, 218, 772, 952, 74, 0, 28, 34, 41, 78, 80, 0, 272, 99, 72, 43, 103, 678, 4, 9, 1, 1, 38, 229, 0, 2, 225, 830, 819, 4, 1, 3, 191, 176, 152, 2, 0, 5, 15, 10, 0, 5, 6, 11, 7, 29, 14, 4, 0, 570, 178, 1179, 2, 17, 0, 0, 3, 3, 0, 3, 3, 2, 9, 524, 2, 9, 524),
('strasbourg', 1, 0, 4, 3, 26, 0, 1471, 0, 1, 40, 84, 839, 242, 71, 0, 15, 0, 2, 9, 4, 2, 25, 8, 2, 123, 204, 593, 26, 205, 282, 22, 569, 484, 1, 503, 115, 762, 505, 63, 0, 356, 856, 1006, 230, 1, 55, 60, 72, 78, 57, 0, 373, 74, 24, 57, 117, 1246, 5, 3, 0, 1, 76, 408, 1, 0, 154, 678, 451, 15, 48, 38, 255, 280, 217, 4, 2, 14, 13, 6, 1, 85, 18, 49, 3, 43, 12, 171, 0, 368, 243, 988, 4, 54, 27, 0, 5, 1, 0, 1, 7, 2, 23, 688, 2, 23, 688),
('lyon', 1, 1, 13, 0, 41, 5, 6127, 1, 2, 77, 194, 2394, 1002, 236, 1, 19, 0, 8, 15, 3, 18, 54, 19, 43, 327, 608, 3761, 150, 1067, 1541, 148, 1273, 981, 4, 1507, 543, 5201, 1152, 305, 14, 1107, 3138, 3652, 501, 1, 201, 249, 233, 503, 333, 2, 1890, 430, 155, 85, 379, 3134, 10, 8, 4, 3, 153, 1227, 2, 1, 567, 3038, 2223, 22, 13, 38, 645, 730, 594, 7, 1, 11, 106, 29, 1, 47, 28, 38, 15, 126, 54, 30, 19, 954, 1097, 3655, 24, 66, 9, 0, 20, 12, 0, 13, 40, 12, 30, 3384, 12, 30, 3384),
('paris', 7, 1, 40, 4, 145, 11, 16109, 1, 4, 295, 855, 7335, 2779, 644, 3, 67, 1, 19, 47, 43, 28, 271, 65, 89, 1854, 2555, 10521, 344, 3189, 5455, 435, 6567, 4603, 9, 4077, 2341, 15763, 3915, 470, 54, 3127, 10423, 27109, 2722, 33, 557, 370, 825, 685, 620, 2, 3080, 1036, 448, 637, 1329, 9035, 55, 67, 8, 62, 559, 2996, 5, 3, 2150, 7049, 4712, 192, 362, 290, 2069, 2647, 2448, 27, 3, 110, 86, 52, 0, 713, 201, 255, 31, 412, 175, 109, 14, 2280, 5241, 12679, 78, 340, 195, 2, 74, 36, 4, 65, 35, 28, 465, 6851, 28, 465, 6851),
('Coefficient', 4, 8, 9, 7, 7, 10, 9, 6, 7, 8, 3, 4, 5, 5, 6, 6, 6, 8, 6, 6, 8, 7, 5, 6, 9, 6, 9, 3, 5, 5, 6, 2, 1, 3, 4, 4, 4, 3, 2, 2, 2, 3, 2, 4, 8, 10, 10, 9, 9, 9, 10, 8, 7, 7, 5, 5, 1, 2, 5, 9, 9, 6, 8, 10, 10, 8, 8, 7, 3, 3, 3, 2, 5, 6, 6, 7, 5, 8, 9, 10, 7, 7, 7, 6, 6, 8, 9, 4, 6, 6, 8, 5, 3, 3, 5, 10, 7, 2, 8, 9, 10, 10, 5, 10, 10, 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `sport`
--

CREATE TABLE `sport` (
  `Ville` varchar(16) DEFAULT NULL,
  `nbInstallations` int(3) DEFAULT NULL,
  `nbEquipements` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `sport`
--

INSERT INTO `sport` (`Ville`, `nbInstallations`, `nbEquipements`) VALUES
('Aix', 142, 410),
('Bordeaux', 99, 323),
('Clermont-Ferrand', 147, 397),
('Grenoble', 163, 29),
('Lille', 148, 341),
('Lyon', 346, 764),
('Marseille', 510, 1153),
('Montpellier', 208, 490),
('Nancy', 92, 211),
('Nantes', 284, 672),
('Nice', 136, 344),
('Paris', 898, 2645),
('Rennes', 101, 312),
('Strasbourg', 250, 539),
('Toulouse', 440, 1251),
('Tours', 117, 292);

-- --------------------------------------------------------

--
-- Struttura della tabella `transport`
--

CREATE TABLE `transport` (
  `Ville` varchar(16) DEFAULT NULL,
  `nombre_arrets` int(5) DEFAULT NULL,
  `prix/an` decimal(4,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `transport`
--

INSERT INTO `transport` (`Ville`, `nombre_arrets`, `prix/an`) VALUES
('Aix', 719, '100.0'),
('Bordeaux', 5353, '244.8'),
('Clermont-Ferrand', 510, '261.6'),
('Grenoble', 1438, '150.0'),
('Lille', 3600, '250.6'),
('Lyon', 4754, '325.0'),
('Marseille', 1301, '230.0'),
('Montpellier', 1222, '196.0'),
('Nancy', 1068, '220.0'),
('Nantes', 1116, '280.0'),
('Nice', 1977, '153.0'),
('Paris', 26783, '250.0'),
('Rennes', 2459, '227.0'),
('Strasbourg', 978, '276.0'),
('Toulouse', 1330, '202.0'),
('Tours', 1429, '102.0');

-- --------------------------------------------------------

--
-- Struttura della tabella `villes`
--

CREATE TABLE `villes` (
  `Ville` varchar(16) DEFAULT NULL,
  `Superficie` decimal(4,1) DEFAULT NULL,
  `Habitants` int(7) DEFAULT NULL,
  `Dep` int(2) DEFAULT NULL,
  `Prop_dEtudiant` int(6) DEFAULT NULL,
  `url_photo` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `villes`
--

INSERT INTO `villes` (`Ville`, `Superficie`, `Habitants`, `Dep`, `Prop_dEtudiant`, `url_photo`) VALUES
('Aix', '186.1', 146282, 13, 37305, 'images/aix_en_provence.jpg'),
('Bordeaux', '49.4', 260352, 33, 132604, 'images/bordeaux.jpg'),
('Clermont-Ferrand', '42.7', 149464, 63, 47457, 'images/clermont_ferrand.jpg'),
('Grenoble', '18.1', 159855, 38, 95295, 'images/grenoble.jpg'),
('Lille', '34.8', 235189, 59, 179126, 'images/lille.jpg'),
('Lyon', '47.9', 525236, 69, 199860, 'images/lyon.jpg'),
('Marseille', '240.6', 874619, 13, 109684, 'images/marseille.jpg'),
('Montpellier', '56.9', 293410, 34, 112031, 'images/montpellier.jpg'),
('Nancy', '15.0', 106330, 54, 84123, 'images/nancy.jpg'),
('Nantes', '65.2', 319284, 44, 46826, 'images/nantes.jpg'),
('Nice', '71.9', 343889, 6, 61629, 'images/nice.jpg'),
('Paris', '105.4', 2175601, 75, 352588, 'images/paris.jpg'),
('Rennes', '50.4', 221898, 35, 128567, 'images/rennes.jpg'),
('Strasbourg', '78.3', 287532, 67, 81034, 'images/strasbourg.jpg'),
('Toulouse', '118.3', 479553, 31, 118000, 'images/toulouse.jpg'),
('Tours', '34.4', 139230, 37, 30412, 'images/tours.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
