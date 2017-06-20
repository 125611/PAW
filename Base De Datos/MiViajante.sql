-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2017 a las 23:11:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miviajante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(5) NOT NULL,
  `nombre_cliente` varchar(25) NOT NULL,
  `apellido_cliente` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(40) NOT NULL,
  `estado_cliente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID`, `nombre_cliente`, `apellido_cliente`, `password`, `correo_electronico`, `direccion`, `telefono`, `estado_cliente`) VALUES
(30, 'holsa', 'holsa', '', 'holsa', 'holsa', 1, 1),
(38, 'asd', 'asd', '1234', 'santiago@123', 'qwe', 123, 0),
(39, 'hola', 'chau', 'qwe', 'jej@jej', 'dir', 444, 0),
(40, 'hola', 'chau', 'qwe', 'jej@jej', 'dir', 444, 0),
(41, 'asd', 'qwe', 'asd', '123@qwe', 'ddd', 222, 0),
(42, 'abcde', 'abc', 'test', 'test@test', 'dr', 444, 0),
(43, 'asd', 'qwe', 'asd', '123@qwe', 'ddd', 222, 0),
(44, 'asd', 'qwe', 'asd', '123@qwe', 'ddd', 222, 0),
(45, 'asd', 'qwe', 'asd', '123@qwe', 'ddd', 222, 0),
(46, 'hola', 'chau', 'chau', 'chau@chau', 'qwe', 233, 0),
(47, 'hola', 'chau', 'chau', 'chau@chau', 'qwe', 233, 0),
(48, 'hola', 'chau', 'chau', 'chau@chau', 'qwe', 233, 0),
(49, 'santiago', 'asd', 'test', 'hola@test', 'puey', 123, 0),
(50, 'asd', 'asd', '123', 'asd@asd', 'puey', 97, 0),
(51, 'hola', 'hola', 'hola', 'hola@hola', 'hola', 123, 0),
(52, 'seba', 'cardoso', 'seba', 'seba@seba', 'seba', 123, 0),
(53, 'jj', 'jj', 'j', 'j@j', 'j', 1, 0),
(54, 'qwe', 'qwe', 'q', 'q@q', 'qwe', 123, 0),
(55, 'y', 'y', 'y', 'y@y', 'y', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `nro_pedido` int(20) NOT NULL,
  `codigo_producto` int(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `nro` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `fecha_de_inicio` date NOT NULL,
  `fecha_de_entrega` date NOT NULL,
  `estado_pedido` tinyint(1) NOT NULL,
  `precio_total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`nro`, `id_cliente`, `fecha_de_inicio`, `fecha_de_entrega`, `estado_pedido`, `precio_total`) VALUES
(1, 30, '0000-00-00', '0000-00-00', 3, 1),
(2, 30, '0000-00-00', '0000-00-00', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo_producto` int(15) NOT NULL,
  `codigo_rubro` int(25) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio_unitario` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `rutaImagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo_producto`, `codigo_rubro`, `titulo`, `descripcion`, `precio_unitario`, `stock`, `rutaImagen`) VALUES
(1, 1, 'Router', 'Router tp link', 300, 7, ''),
(2, 1, 'linksys', 'switch linksys', 450, 3, ''),
(3, 2, 'Teclado y mouse inalambrico', 'genius kit', 600, 10, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro`
--

CREATE TABLE `rubro` (
  `codigo_rubro` int(15) NOT NULL,
  `nombre_rubro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rubro`
--

INSERT INTO `rubro` (`codigo_rubro`, `nombre_rubro`) VALUES
(1, 'Conectividad'),
(2, 'Perifericos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD KEY `nro_pedido` (`nro_pedido`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`nro`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `codigo_rubro` (`codigo_rubro`);

--
-- Indices de la tabla `rubro`
--
ALTER TABLE `rubro`
  ADD PRIMARY KEY (`codigo_rubro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `nro` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo_producto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `PED-DES` FOREIGN KEY (`nro_pedido`) REFERENCES `pedido` (`nro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PROD-DESC` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `CL-PE` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `RU-PRO` FOREIGN KEY (`codigo_rubro`) REFERENCES `rubro` (`codigo_rubro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
