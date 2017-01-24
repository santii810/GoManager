-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2017 a las 17:38:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gomanager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `pokemon_id` int(11) NOT NULL,
  `necesary_candys` int(3) DEFAULT NULL,
  `pokemon_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pokemon_evolution` int(3) DEFAULT NULL,
  `pokemon_preevolution` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `record`
--

CREATE TABLE `record` (
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

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `user_pass` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`pokemon_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `pokemon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
