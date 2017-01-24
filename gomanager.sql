-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2017 a las 20:29:47
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gomanager`
--
CREATE DATABASE IF NOT EXISTS `gomanager` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `gomanager`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `pokemon_id` int(11) NOT NULL AUTO_INCREMENT,
  `necesary_candys` int(3) DEFAULT NULL,
  `pokemon_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pokemon_evolution` int(3) DEFAULT NULL,
  `pokemon_preevolution` int(3) DEFAULT NULL,
  PRIMARY KEY (`pokemon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`pokemon_id`, `necesary_candys`, `pokemon_name`, `pokemon_evolution`, `pokemon_preevolution`) VALUES
(1, 25, 'Bulbasaur', 2, NULL),
(2, 100, 'Ivysaur', 3, 1),
(3, 0, 'Venusaur', NULL, 2),
(4, 25, 'Charmander', 5, NULL),
(5, 100, 'Charmeleon', 6, 4),
(6, 0, 'Charizard', NULL, 5),
(7, 25, 'Squirtle', 8, NULL),
(8, 100, 'Wartortle', 9, 7),
(9, 0, 'Blastoise', NULL, 8),
(10, 12, 'Caterpie', 11, NULL),
(11, 50, 'Metapod', 12, 10),
(12, 0, 'Butterfree', NULL, 11),
(13, 12, 'Weedle', 14, NULL),
(14, 50, 'Kakuna', 15, 13),
(15, 0, 'Beedrill', NULL, 14),
(16, 12, 'Pidgey', 17, NULL),
(17, 50, 'Pidgeotto', 18, 16),
(18, 0, 'Pidgeot', NULL, 17),
(19, 25, 'Rattata', 20, NULL),
(20, 0, 'Raticate', NULL, 19),
(21, 50, 'Spearow', 22, NULL),
(22, 0, 'Fearow', NULL, 21),
(23, 50, 'Ekans', 24, NULL),
(24, 0, 'Arbok', NULL, 23),
(25, 50, 'Pikachu', 26, 172),
(26, 0, 'Raichu', NULL, 25),
(27, 50, 'Sandshrew', 28, NULL),
(28, 0, 'Sandslash', NULL, 27),
(29, 25, 'Nidoran F', 30, NULL),
(30, 100, 'Nidorina', 31, 29),
(31, 0, 'Nidoqueen', NULL, 30),
(32, 25, 'Nidoran M', 33, NULL),
(33, 100, 'Nidorino', 34, 32),
(34, 0, 'Nidoking', NULL, 33),
(35, 50, 'Clefairy', 36, 173),
(36, 0, 'Clefable', NULL, 35),
(37, 50, 'Vulpix', 38, NULL),
(38, 0, 'Ninetales', NULL, 37),
(39, 50, 'Gigglypuff', 40, 174),
(40, 0, 'Wigglytuff', NULL, 39),
(41, 50, 'Zubat', 42, NULL),
(42, 0, 'Golbat', NULL, 41),
(43, 25, 'Oddish', 44, NULL),
(44, 100, 'Gloom', 45, 43),
(45, 0, 'Vileplume', NULL, 44),
(46, 50, 'Paras', 47, NULL),
(47, 0, 'Parasect', NULL, 46),
(48, 50, 'Venonat', 49, NULL),
(49, 0, 'Venomoth', NULL, 48),
(50, 50, 'Diglett', 51, NULL),
(51, 0, 'Dugtrio', NULL, 50),
(52, 50, 'Meowth', 53, NULL),
(53, 0, 'Persian', NULL, 52),
(54, 50, 'Psyduck', 55, NULL),
(55, 0, 'Golduck', NULL, 54),
(56, 50, 'Mankey', 57, NULL),
(57, 0, 'Primeape', NULL, 56),
(58, 50, 'Growlithe', 59, NULL),
(59, 0, 'Arcanine', NULL, 58),
(60, 25, 'Poliwag', 61, NULL),
(61, 100, 'Poliwhirl', 62, 60),
(62, 0, 'Poliwrath', NULL, 61),
(63, 25, 'Abra', 64, NULL),
(64, 100, 'Kadabra', 65, 63),
(65, 0, 'Alakazam', NULL, 64),
(66, 25, 'Machop', 67, NULL),
(67, 100, 'Machoke', 68, 66),
(68, 0, 'Machamp', NULL, 67),
(69, 25, 'Bellsprout', 70, NULL),
(70, 100, 'Weepinbell', 71, 69),
(71, 0, 'Victreebel', NULL, 70),
(72, 50, 'Tentacool', 73, NULL),
(73, 0, 'Tentacruel', NULL, 72),
(74, 25, 'Geodude', 75, NULL),
(75, 100, 'Graveler', 76, 74),
(76, 0, 'Golem', NULL, 75),
(77, 50, 'Ponyta', 78, NULL),
(78, 0, 'Rapidash', NULL, 77),
(79, 50, 'Slowpoke', 80, NULL),
(80, 0, 'Slowbro', NULL, 79),
(81, 50, 'Magnemite', 82, NULL),
(82, 0, 'Magneton', NULL, 81),
(83, 0, 'Farfetch d', NULL, NULL),
(84, 50, 'Doduo', 85, NULL),
(85, 0, 'Dodrio', NULL, 84),
(86, 50, 'Seel', 87, NULL),
(87, 0, 'Dewgong', NULL, 86),
(88, 50, 'Grimer', 89, NULL),
(89, 0, 'Muk', NULL, 88),
(90, 50, 'Shellder', 91, NULL),
(91, 0, 'Cloyster', NULL, 90),
(92, 25, 'Gastly', 93, NULL),
(93, 100, 'Haunter', 94, 92),
(94, 0, 'Gengar', NULL, 93),
(95, 0, 'Onyx', NULL, NULL),
(96, 50, 'Drowzee', 97, NULL),
(97, 0, 'Hypno', NULL, 96),
(98, 50, 'Krabby', 99, NULL),
(99, 0, 'Kingler', NULL, 98),
(100, 50, 'Voltorb', 101, NULL),
(101, 0, 'Electrode', NULL, 100),
(102, 50, 'Exeggcute', 103, NULL),
(103, 0, 'Exeggcutor', NULL, 102),
(104, 50, 'Cubone', 105, NULL),
(105, 0, 'Marowak', NULL, 104),
(106, 0, 'Hitmonlee', NULL, NULL),
(107, 0, 'Hitmonchan', NULL, NULL),
(108, 0, 'Lickitung', NULL, NULL),
(109, 50, 'Koffing', 110, NULL),
(110, 0, 'Weezing', NULL, 109),
(111, 50, 'Rhyhorn', 112, NULL),
(112, 0, 'Rhydon', NULL, 111),
(113, 0, 'Chansey', NULL, NULL),
(114, 0, 'Tangela', NULL, NULL),
(115, 0, 'Kangaskhan', NULL, NULL),
(116, 50, 'Horsea', 117, NULL),
(117, 0, 'Seadra', NULL, 116),
(118, 50, 'Goldeen', 119, NULL),
(119, 0, 'Seaking', NULL, 118),
(120, 50, 'Staryu', 121, NULL),
(121, 0, 'Starmie', NULL, 120),
(122, 0, 'Mr.Mime', NULL, NULL),
(123, 0, 'Scyther', NULL, NULL),
(124, 0, 'Jynx', NULL, 238),
(125, 0, 'Electabuzz', NULL, 239),
(126, 0, 'Magmar', NULL, 240),
(127, 0, 'Pinsir', NULL, NULL),
(128, 0, 'Tauros ', NULL, NULL),
(129, 400, 'Magikarp', 130, NULL),
(130, 0, 'Gyarados', NULL, 129),
(131, 0, 'Lapras', NULL, NULL),
(132, 0, 'Ditto ', NULL, NULL),
(133, 25, 'Eevee', 134, NULL),
(134, 0, 'Vaporeon', 135, 133),
(135, 0, 'Jolteon', 136, 134),
(136, 0, 'Flareon', NULL, 135),
(137, 0, 'Porygon', NULL, NULL),
(138, 50, 'Omanyte', 139, NULL),
(139, 0, 'Omastar', NULL, 138),
(140, 50, 'Kabuto', 141, NULL),
(141, 0, 'Kabutops', NULL, 140),
(142, 0, 'Aerodactyl', NULL, NULL),
(143, 0, 'Snorlax', NULL, NULL),
(144, 0, 'Articuno ', NULL, NULL),
(145, 0, 'Zapdos', NULL, NULL),
(146, 0, 'Moltres ', NULL, NULL),
(147, 25, 'Dratini', 148, NULL),
(148, 100, 'Dragonair', 149, 147),
(149, 0, 'Dragonite', NULL, 148),
(150, 0, 'Mewtwo ', NULL, NULL),
(151, 0, 'Mew', NULL, NULL),
(172, 25, 'Pichu', 25, NULL),
(173, 25, 'Cleffa', 35, NULL),
(174, 25, 'Igglybuff', 39, NULL),
(175, 25, 'Togepi', 176, NULL),
(176, 25, 'Togetic', NULL, 175),
(238, 25, 'Smoochum', 124, NULL),
(239, 25, 'Elekid', 125, NULL),
(240, 25, 'Magby', 126, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `record_id` int(11) NOT NULL,
  `record_user` int(3) NOT NULL,
  `record_candys` int(3) NOT NULL DEFAULT '0',
  `record_pokedex` tinyint(1) NOT NULL DEFAULT '0',
  `record_pokemon` int(4) NOT NULL,
  `record_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `user_pass` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'santii810', 'gvs689');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
