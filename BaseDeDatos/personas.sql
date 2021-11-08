-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 14:35:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `dni` int(9) UNSIGNED NOT NULL,
  `edad` int(3) UNSIGNED NOT NULL,
  `genero` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `maneja` varchar(20) NOT NULL DEFAULT '''No expecifica''',
  `lentes` varchar(20) NOT NULL DEFAULT '''No expecifica''',
  `diabetico` varchar(20) NOT NULL DEFAULT '''No expecifica''',
  `enfermedad` varchar(20) NOT NULL DEFAULT '''No expecifica''',
  `qenfermedad` varchar(20) NOT NULL DEFAULT '''No expecifica''',
  `nombrecompleto` varchar(20) NOT NULL DEFAULT '''No expecifica'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `dni`, `edad`, `genero`, `estado`, `maneja`, `lentes`, `diabetico`, `enfermedad`, `qenfermedad`, `nombrecompleto`) VALUES
(41161640, 41161479, 23, 'Hombre', 'Activo', 'Si', 'No', 'No', 'Si', 'Tendinitis', 'Mariano Salvador'),
(41161641, 24253635, 54, 'Mujer', 'Fuera de servicio', 'No', 'Si', 'Si', 'No', '', 'Claudia Mabel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41161642;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
