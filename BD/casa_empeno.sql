-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 22:20:36
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casa_empeno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` varchar(12) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cedula` varchar(12) NOT NULL,
  `Nombres` varchar(150) NOT NULL,
  `Apellidos` varchar(150) NOT NULL,
  `Celular` varchar(12) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(20) NOT NULL,
  `idC` varchar(12) CHARACTER SET utf8 NOT NULL,
  `idA` varchar(12) NOT NULL,
  `nombre_producto` varchar(200) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `costo` int(20) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empeno`
--

CREATE TABLE `empeno` (
  `id` int(20) NOT NULL,
  `idC` varchar(12) CHARACTER SET utf8 NOT NULL,
  `idA` varchar(12) NOT NULL,
  `producto` varchar(300) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `precio` int(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(20) NOT NULL,
  `idC` varchar(12) CHARACTER SET utf8 NOT NULL,
  `idA` varchar(12) NOT NULL,
  `tipo_servicio` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `monton` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(20) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` varchar(120) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(20) NOT NULL,
  `idC` varchar(12) CHARACTER SET utf8 NOT NULL,
  `idA` varchar(12) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id` int(20) NOT NULL,
  `idV` int(20) NOT NULL,
  `idP` int(20) NOT NULL,
  `monton` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cedula`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idC` (`idC`),
  ADD KEY `idA` (`idA`);

--
-- Indices de la tabla `empeno`
--
ALTER TABLE `empeno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idC` (`idC`),
  ADD KEY `idA` (`idA`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idC` (`idC`),
  ADD KEY `idA` (`idA`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idC` (`idC`),
  ADD KEY `idA` (`idA`);

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idV` (`idV`),
  ADD KEY `idP` (`idP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empeno`
--
ALTER TABLE `empeno`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idC`) REFERENCES `cliente` (`Cedula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idA`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empeno`
--
ALTER TABLE `empeno`
  ADD CONSTRAINT `empeno_ibfk_1` FOREIGN KEY (`idA`) REFERENCES `admin` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empeno_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `cliente` (`Cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`idC`) REFERENCES `cliente` (`Cedula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`idA`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idC`) REFERENCES `cliente` (`Cedula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idA`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `venta_detalle_ibfk_1` FOREIGN KEY (`idV`) REFERENCES `venta` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_detalle_ibfk_2` FOREIGN KEY (`idP`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
