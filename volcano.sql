-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2020 a las 17:58:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `volcano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idreserva` int(11) NOT NULL,
  `nombreusuario` varchar(100) NOT NULL,
  `fechareserva` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`idreserva`, `nombreusuario`, `fechareserva`, `telefono`, `correo`) VALUES
(10, 'nombrecompleto', '03/25/2020', '2497249', '03/25/2020'),
(11, 'nombrecompleto', '03/28/2020', '2497249', 'magico@carella.cl'),
(12, 'nombrecompleto', '03/28/2020', '2497249', 'magico@carella.cl'),
(13, '', '03/26/2020', '', ''),
(14, 'nombrecompleto', '03/28/2020', '2497249', 'magico@carella.cl'),
(15, 'nombrecompleto', '03/28/2020', '2497249222', 'magico@carella.clss'),
(16, 'nombrecompleto', '03/28/2020', '2497249222', 'magico@carella.clss'),
(17, 'aaaa', '03/28/2020', 'aaa', 'aa'),
(18, 'aa', '03/26/2020', '123', 'sd'),
(19, 'sd', '03/30/2020', 'sd', 'sd'),
(20, 'sd', '03/29/2020', 'sd', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idreserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
