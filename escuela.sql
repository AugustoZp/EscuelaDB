-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 21:06:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `licenciatura` varchar(30) NOT NULL,
  `cuatrimestre` int(1) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `telefono`, `correo`, `licenciatura`, `cuatrimestre`, `estatus`) VALUES
(1, 'Augusto Misael', 'Zamudio Ponce', 9983117006, 'ForzaByCats888@gmail.com', 'Ing. Software & Sistemas', 6, 1),
(2, 'Antonio de Jesús', 'Luna Acosta', 9984001356, 'Asabercuales@gmail.com', 'Ing. Software & Sistemas', 6, 1),
(3, 'Moana', 'Rivera Padilla', 9999999999, 'Nomelose@gmail.com', 'Ing. Software & Sistemas', 6, 1),
(4, 'David Israel', 'Villalobos Sánchez', 9983565388, 'elvillalobos3000@gmail.com', 'Ing. Software & Sistemas', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cuatrimestre` int(1) NOT NULL,
  `licenciatura` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(1, 'Gestión de servidores', 6, 'Ing. Software & Sistemas'),
(2, 'POO', 6, 'Ing. Software & Sistemas'),
(3, 'Proyecto de transformación', 6, 'Ing. Software & Sistemas'),
(4, 'Filosofía', 4, 'Pedagogía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `estatus`) VALUES
(1, 'Alexander', 'Castillo', 9983212212, 'LexCastillo@gmail.com', 0),
(2, 'Abraham', 'Pech', 9984567812, 'Abrahamama@gmail.com', 1),
(3, 'Profesor', 'Utonio', 7328391234, 'utoniosaltadilla@gmail.com', 0),
(4, 'Moisés', 'Ortega Zetina', 9083455612, 'ZatinaNoPlatina@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
