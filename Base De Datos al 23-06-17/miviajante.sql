-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2017 a las 06:44:56
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
  `password` varchar(255) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(40) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID`, `nombre_cliente`, `apellido_cliente`, `password`, `correo_electronico`, `direccion`, `telefono`, `activo`) VALUES
(64, 'Sebastian', 'Cardoso', 'c2d628ba98ed491776c9335e988e2e3b', 'seba_cardoso@outlook.com', 'Av sin nombre', 11111, 0),
(65, 'Santiago', 'Lavigna', 'a6f30815a43f38ec6de95b9a9d74da37', 'santiagolavigna1@hotmail.com', 'Calle sin nro', 22222, 0),
(66, 'Gabriel', 'Cancro', '647431b5ca55b04fdf3c2fce31ef1915', 'gabrielcancro@gmail.com', 'calle nn', 33333, 0);

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
(1, 64, '0000-00-00', '0000-00-00', 0, 5689),
(2, 64, '0000-00-00', '0000-00-00', 0, 3210),
(3, 65, '0000-00-00', '0000-00-00', 0, 1520),
(4, 65, '0000-00-00', '0000-00-00', 0, 6780);

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
(6, 1, 'Adaptador WI-FI', 'Modelo del Adaptador', 250, 100, 'img_prod_1.jpg'),
(7, 1, 'Router', 'Velocidad: 300 Mbps', 650, 100, 'img_prod_2.jpg'),
(8, 2, 'Teclado', 'USB', 180, 150, 'img_prod_3.jpg'),
(9, 2, 'Mouse', 'Optico', 120, 180, 'img_prod_4.jpg'),
(10, 3, 'Monitor 19\"', 'LED - VGA', 2500, 50, 'img_prod_5.jpg'),
(11, 3, 'Monitor 23\"', 'LED - VGA - HDMI', 3800, 40, 'img_prod_6.jpg'),
(12, 4, 'Multifuncion', 'Chorro de tinta - Escaner - Fotocopia', 3899, 10, 'img_prod_7.jpg'),
(13, 4, 'Impresora', 'Laser - Solo tinta negra', 4200, 7, 'img_prod_8.jpg');

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
(2, 'Perifericos'),
(3, 'Monitores'),
(4, 'Impresoras');

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
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `nro` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo_producto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `codigo_rubro` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
