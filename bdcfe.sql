-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 02:42:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcfe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `no_cliente` int(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `apellido_p`, `apellido_m`, `no_cliente`, `tel`, `correo`, `fecha`) VALUES
('Tanya', 'Mimbela', 'Moreno', 128, 2147483647, 'tanya@hola.com', '2000-04-04'),
('Angelica', 'Moreno', 'Soto', 129, 2147483647, 'angelica@hola.com', '1978-06-05'),
('Tanya', 'Mimbela', 'Moreno', 130, 2147483647, 'tanya@hola.com', '2004-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `no_empleado` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`no_empleado`, `nombre`, `apellido_p`, `apellido_m`, `tel`, `correo`, `fecha`) VALUES
(100, 'Pedro', 'Perez', 'Lopez', 2147483647, 'pepe@hola.com', '1987-05-21'),
(101, 'Marco Antonio', 'LÃ³pez', 'Moreno', 2147483647, 'marco@hola.com', '2004-04-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nombre` varchar(50) NOT NULL,
  `no_factura` int(50) NOT NULL,
  `fecha` date NOT NULL,
  `no_servicio` int(50) NOT NULL,
  `no_medidor` int(50) NOT NULL,
  `total` double NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nombre`, `no_factura`, `fecha`, `no_servicio`, `no_medidor`, `total`, `direccion`) VALUES
('Tanya', 100, '2021-11-20', 1, 1, 345, 'Pueblito perdido 5212'),
('Tanya', 101, '2020-12-30', 2, 2, 345, 'Pueblito perdido 5212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `tel` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `especificacion` text NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `sugerencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`tel`, `correo`, `tipo`, `especificacion`, `direccion`, `propietario`, `sugerencia`) VALUES
(0, '', '', '', '', '', ''),
(654998365, 'tanya@hola.com', 'Luz', 'Quiero solicitar el servicio', 'pueblito perdido 4567', 'Pepe Lopez', 'Contestar mas rapido'),
(2147483647, 'alfredo@hola.com', 'Corte', 'Se fue la luz', 'Pueblito perdido 5212', 'Tanya Mimbela', 'No cortar la luz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`no_cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`no_empleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`no_factura`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`tel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
