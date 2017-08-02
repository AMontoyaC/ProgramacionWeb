-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2015 a las 15:41:15
-- Versión del servidor: 5.5.46-0+deb8u1
-- Versión de PHP: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda_autos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarUsuario`(IN `n` VARCHAR(30), IN `ap` VARCHAR(30), IN `am` VARCHAR(30), IN `d` VARCHAR(35), IN `t` INT, IN `em` VARCHAR(50), IN `ps` VARCHAR(32))
insert into usuario (nombre,apellido_pat,apellido_mat,domicilio,telefono,email,password) values (n,ap,am,d,t,em,ps)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verUsuario`(IN `n` VARCHAR(30), IN `ap` VARCHAR(30), IN `am` VARCHAR(30), IN `d` VARCHAR(35), IN `t` INT, IN `em` VARCHAR(50), IN `ps` VARCHAR(32), OUT `op` INT)
SELECT id_usuario from usuario where nombre = n and apellido_pat = ap and apellido_mat = am and domicilio = d and telefono = t and email = em and password = ps into op$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro_compra`
--

CREATE TABLE IF NOT EXISTS `carro_compra` (
  `id_usuario` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carro_compra`
--

INSERT INTO `carro_compra` (`id_usuario`, `id_vehiculo`) VALUES
(1, 1),
(1, 3),
(1, 5),
(1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido_pat` varchar(30) DEFAULT NULL,
  `apellido_mat` varchar(30) DEFAULT NULL,
  `domicilio` varchar(35) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_pat`, `apellido_mat`, `domicilio`, `telefono`, `email`, `password`) VALUES
(1, 'Andrea', 'Montoya', 'Cárdenas', 'Trojes', 6142801, 'amc@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Francisco', 'Ortega', 'Jimenez', 'Fuentes', 123456, 'foj@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
`id_vehiculo` int(11) NOT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `disponibilidad` varchar(1) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `marca`, `modelo`, `color`, `precio`, `observaciones`, `disponibilidad`, `id_vendedor`) VALUES
(1, 'Chevrolet', 'Chevy', 'Rojo', 99, 'abc', '0', 1),
(2, 'Nissan', 'Tiida', 'Rojo', 10000, 'abc', '1', 1),
(3, 'Nissan', 'Sentra', 'Gris Oxford', 20000, 'abc', '1', 1),
(4, 'Volkswagen', 'Bocho', 'Azul Rey', 20000, 'abc', '1', 1),
(5, 'Chevrolet', 'Aveo', 'Blanco', 98000, NULL, '1', 1),
(6, 'Jeep', 'Liberty', 'Vino', 243000, NULL, '1', 1),
(7, 'Mercedes Benz', 'Clase C 300', 'Arena', 269000, NULL, '1', 1),
(15, 'Nissan', 'Sentra', 'Negro', 120000, '', '1', 5),
(16, 'Chevrolet', 'Chevy', 'Rojo', 80000, '', '1', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro_compra`
--
ALTER TABLE `carro_compra`
 ADD PRIMARY KEY (`id_usuario`,`id_vehiculo`), ADD KEY `fk_carro2` (`id_vehiculo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
 ADD PRIMARY KEY (`id_vehiculo`), ADD KEY `fk_vehiculo` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carro_compra`
--
ALTER TABLE `carro_compra`
ADD CONSTRAINT `fk_carro1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
ADD CONSTRAINT `fk_carro2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
ADD CONSTRAINT `fk_vehiculo` FOREIGN KEY (`id_vendedor`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
