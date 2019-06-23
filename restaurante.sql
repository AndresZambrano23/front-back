-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2019 a las 00:40:05
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restarante`
--

CREATE TABLE `restarante` (
  `id_restaurante` int(11) NOT NULL,
  `nombre_restaurante` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `tipo_restaurante` varchar(45) NOT NULL,
  `horario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restarante`
--

INSERT INTO `restarante` (`id_restaurante`, `nombre_restaurante`, `direccion`, `tipo_restaurante`, `horario`) VALUES
(4, 'macdonald', 'Centro Mayor', 'Comidas Rapida', '10 am a 9 pm'),
(9, 'jenos pizza ', 'Cl. 17 Sur ##17 53', 'Comidas Rapida', '8 am a 6 pm'),
(10, 'Juan Valdez', 'Avenida Caracas 29-56', 'Restaurante Gourmet', '9 am a 9 pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `restarante`
--
ALTER TABLE `restarante`
  ADD PRIMARY KEY (`id_restaurante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `restarante`
--
ALTER TABLE `restarante`
  MODIFY `id_restaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
