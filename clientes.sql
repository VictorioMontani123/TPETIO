-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 00:04:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(225) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `cuit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `email`, `telefono`, `cuit`) VALUES
(2, '123123', '123123123', '1233123123', '123123@gmail.com', '123123123', 12),
(66, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdas@gmai.com', '134231243', 1233123),
(22332, 'aaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa@aaaaaaa.com', '222222', 22222222),
(123123, 'pedro', 'el esccamoso', 'sdasdasdasd 123', 'pedrito@pedtrito@gmasodasd.com', '11233123', 123123),
(2349892, 'Jeremias', 'Lescano', 'tapalque 222', 'jere@tpq.com', '9328492', 29384239),
(24352354, 'Javier', 'Archuby', 'san martin 222', 'archuvyster@javi.com', '12344235256', 2147483647),
(123123124, 'Victorio ', 'Montani', 'san lorenzo 231231123', 'viti@viti.com', '9231492348293', 2147483647),
(212212212, 'jona', 'fernandez', 'labarlasmdaisdnmaoiksdmaskldmalksd 321', 'almdslasda@goansd.com', '123123123', 22),
(1474836466, 'asdasd3123', '1212311233', '1123123331233123', 'jonaafernandez02@gmail.com', '12312', 31233123),
(2147483647, 'Sergio', 'Fino', 'Santos Bega 3498', 'sergito@finito.com', '891479', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
