-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-07-2017 a las 17:30:50
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
  `password` varchar(255) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(40) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`ID`, `nombre_cliente`, `apellido_cliente`, `password`, `correo_electronico`, `direccion`, `telefono`, `activo`) VALUES
(64, 'Sebastian', 'Cardoso', 'c2d628ba98ed491776c9335e988e2e3b', 'seba_cardoso@outlook.com', 'Av sin nombre', 11111, 0),
(65, 'Santiago', 'Lavigna', 'a6f30815a43f38ec6de95b9a9d74da37', 'santiagolavigna1@hotmail.com', 'Calle sin nro', 22222, 0),
(66, 'Gabriel', 'Cancro', '647431b5ca55b04fdf3c2fce31ef1915', 'gabrielcancro@gmail.com', 'calle nn', 33333, 0),
(71, 'Javier', 'Echaiz', '6dfbb59fa75ac6c5e8b5e24c5d1acadc', 'jechaiz@gmail.com', 'Paso Condor 667', 2147483647, 0);

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
-- Estructura de tabla para la tabla `google_users`
--

CREATE TABLE IF NOT EXISTS `google_users` (
  `google_id` decimal(21,0) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `google_link` varchar(60) NOT NULL,
  `google_picture_link` varchar(60) NOT NULL,
  PRIMARY KEY (`google_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `google_users`
--

INSERT INTO `google_users` (`google_id`, `google_name`, `google_email`, `google_link`, `google_picture_link`) VALUES
(110914757675209567874, 'Santiago Lavigna', 'santiagolavigna1@gmail.com', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE IF NOT EXISTS `Pedido` (
  `nro` int(15) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(255) NOT NULL,
  `fecha_de_inicio` date NOT NULL,
  `fecha_de_entrega` date NOT NULL,
  `estado_pedido` tinyint(1) NOT NULL,
  `precio_total` int(15) NOT NULL,
  PRIMARY KEY (`nro`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000 ;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`nro`, `id_cliente`, `fecha_de_inicio`, `fecha_de_entrega`, `estado_pedido`, `precio_total`) VALUES
(1, '64', '0000-00-00', '0000-00-00', 0, 5689),
(2, '64', '0000-00-00', '0000-00-00', 0, 3210),
(3, '65', '0000-00-00', '0000-00-00', 0, 1520),
(4, '65', '0000-00-00', '0000-00-00', 0, 6780),
(999, '110914757675209567874', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `codigo_producto` int(15) NOT NULL AUTO_INCREMENT,
  `codigo_rubro` int(25) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio_unitario` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `rutaImagen` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo_producto`),
  KEY `codigo_rubro` (`codigo_rubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`codigo_producto`, `codigo_rubro`, `titulo`, `descripcion`, `precio_unitario`, `stock`, `rutaImagen`) VALUES
(6, 1, 'Adaptador WI-FI', 'Modelo del Adaptador', 250, 100, 'img_prod_1.jpg'),
(7, 1, 'Router', 'Velocidad: 300 Mbps', 650, 100, 'img_prod_2.jpg'),
(8, 2, 'Teclado', 'USB', 180, 150, 'img_prod_3.jpg'),
(9, 2, 'Mouse', 'Optico', 120, 180, 'img_prod_4.jpg'),
(10, 3, 'Monitor 19"', 'LED - VGA', 2500, 50, 'img_prod_5.jpg'),
(11, 3, 'Monitor 23"', 'LED - VGA - HDMI', 3800, 40, 'img_prod_6.jpg'),
(12, 4, 'Multifuncion', 'Chorro de tinta - Escaner - Fotocopia', 3899, 10, 'img_prod_7.jpg'),
(13, 4, 'Impresora', 'Laser - Solo tinta negra', 4200, 7, 'img_prod_8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rubro`
--

CREATE TABLE IF NOT EXISTS `Rubro` (
  `codigo_rubro` int(15) NOT NULL AUTO_INCREMENT,
  `nombre_rubro` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo_rubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Rubro`
--

INSERT INTO `Rubro` (`codigo_rubro`, `nombre_rubro`) VALUES
(1, 'Conectividad'),
(2, 'Perifericos'),
(3, 'Monitores'),
(4, 'Impresoras');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Descripcion`
--
ALTER TABLE `Descripcion`
  ADD CONSTRAINT `PED-DES` FOREIGN KEY (`nro_pedido`) REFERENCES `Pedido` (`nro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PROD-DESC` FOREIGN KEY (`codigo_producto`) REFERENCES `Producto` (`codigo_producto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
