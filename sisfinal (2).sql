-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2020 a las 02:05:53
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nombre`, `apellidos`, `ci`, `celular`, `direccion`, `id_emp`) VALUES
(1, 'leo', 'ventura', 5874896, 77778487, 'ceja - el alto', 1),
(2, 'gabriela', 'chura', 4598715, 77485957, 'ex tranca - el alto', 1),
(3, 'angeles', 'calcina', 2561548, 77848595, 'ex parada 8 - el alto', 2),
(4, 'alberto', 'zuares', 5896847, 77485956, 'parada 8', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_emp` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_emp`, `nombre`, `apellidos`, `ci`, `celular`, `pass`) VALUES
(1, 'juan', 'quispe', 5849785, 1234, '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'jose', 'mamani', 48759875, 12, 'c20ad4d76fe97759aa27a0c99bff6710');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_pre` int(11) NOT NULL,
  `monto` int(11) DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `t_pago` int(11) DEFAULT NULL,
  `cuota` int(11) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_pre`, `monto`, `fecha_ini`, `fecha_fin`, `t_pago`, `cuota`, `id_cli`, `id_emp`) VALUES
(1, 2500, '2020-12-03', '2020-12-03', 4, 250, 1, 1),
(7, 25600, '2020-12-03', '2021-10-03', 10, 2560, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `cargo`, `id_emp`) VALUES
(1, 'administrador', 1),
(2, 'empleado', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_pre`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_emp` (`id_emp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_pre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empleados` (`id_emp`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empleados` (`id_emp`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empleados` (`id_emp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
