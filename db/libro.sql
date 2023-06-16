-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2014 a las 21:57:48
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--


CREATE TABLE IF NOT EXISTS `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `estado` boolean(true) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `libro` (`id`, `titulo`, `editorial`, `isbn`, `autor`, `categoria`, `estado`, `descripcion`) VALUES
(1, 'harry potter', 'mundo', '156ae21c', 'jkr', 'fantasia', 'true', 'una secta'),
(2, 'harry potter 2', 'mundo', 'sdfa2131', 'jkr', 'fantasia', 'true', 'una secta'),
(3, 'harry potter 3', 'mundo', 'sdaf115654', 'jkr', 'fantasia', 'true', 'una secta'),
(4, 'harry potter 4', 'mundo', '15asdfa2ae21c', 'jkr', 'fantasia', 'true', 'una secta'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
