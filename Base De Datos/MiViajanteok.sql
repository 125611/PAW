-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2017 a las 17:53:50
-- Versión del servidor: 5.5.55-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `MiViajante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(25) NOT NULL,
  `apellido_cliente` varchar(25) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(40) NOT NULL,
  `estado_cliente` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`ID`, `nombre_cliente`, `apellido_cliente`, `correo_electronico`, `direccion`, `telefono`, `estado_cliente`) VALUES
(16, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(22, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(24, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(25, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(26, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(28, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(29, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(30, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(32, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(33, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(34, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1),
(36, 'holsa', 'holsa', 'holsa', 'holsa', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Descripcion`
--

CREATE TABLE IF NOT EXISTS `Descripcion` (
  `nro_pedido` int(20) NOT NULL,
  `codigo_producto` int(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` int(20) NOT NULL,
  KEY `nro_pedido` (`nro_pedido`),
  KEY `codigo_producto` (`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE IF NOT EXISTS `Pedido` (
  `nro` int(15) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(15) NOT NULL,
  `fecha_de_inicio` date NOT NULL,
  `fecha_de_entrega` date NOT NULL,
  `estado_pedido` tinyint(1) NOT NULL,
  `precio_total` int(15) NOT NULL,
  PRIMARY KEY (`nro`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`nro`, `id_cliente`, `fecha_de_inicio`, `fecha_de_entrega`, `estado_pedido`, `precio_total`) VALUES
(1, 30, '0000-00-00', '0000-00-00', 3, 1),
(2, 30, '0000-00-00', '0000-00-00', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `codigo_producto` int(15) NOT NULL,
  `codigo_rubro` int(25) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio_unitario` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  PRIMARY KEY (`codigo_producto`),
  KEY `codigo_rubro` (`codigo_rubro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rubro`
--

CREATE TABLE IF NOT EXISTS `Rubro` (
  `codigo_rubro` int(15) NOT NULL,
  `nombre_rubro` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo_rubro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Descripcion`
--
ALTER TABLE `Descripcion`
  ADD CONSTRAINT `PED-DES` FOREIGN KEY (`nro_pedido`) REFERENCES `Pedido` (`nro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PROD-DESC` FOREIGN KEY (`codigo_producto`) REFERENCES `Producto` (`codigo_producto`);

--
-- Filtros para la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `CL-PE` FOREIGN KEY (`id_cliente`) REFERENCES `Cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `RU-PRO` FOREIGN KEY (`codigo_rubro`) REFERENCES `Rubro` (`codigo_rubro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
