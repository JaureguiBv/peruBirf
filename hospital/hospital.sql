-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 14:43:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `pacienteID` int(11) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `peso` decimal(5,1) NOT NULL,
  `altura` decimal(5,2) NOT NULL,
  `vacunado` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`pacienteID`, `apellidos`, `nombre`, `fecha`, `sexo`, `peso`, `altura`, `vacunado`) VALUES
(15223, 'Smitt', 'Deniz', '0000-00-00', 'F', 21.4, 29.20, 'Y'),
(15224, 'Aganwal', 'Arjun', '0000-00-00', 'M', 28.1, 34.20, 'Y'),
(15225, 'Adams', 'Poppy', '0000-00-00', 'F', 34.0, 39.20, 'N'),
(15226, 'Jhonson', 'Tierra', '0000-00-00', 'F', 14.6, 24.50, 'Y'),
(15227, 'Khouri', 'Mohammed', '0000-00-00', 'M', 41.5, 44.10, 'Y'),
(15228, 'Jones', 'Ben', '0000-00-00', 'M', 70.1, 52.20, 'Y'),
(15229, 'Rojas', 'Alexandra', '0000-00-00', 'F', 15.2, 23.90, 'Y'),
(20205, 'reynoso', 'gerardo', '2024-03-12', 'M', 12.3, 32.70, 'Y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`pacienteID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `pacienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
