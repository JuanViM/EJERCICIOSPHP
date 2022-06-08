-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 10-11-2021 a las 13:30:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`numero`, `nombre`, `ciudad`) VALUES
(10, 'Contabilidad', 'Málaga'),
(20, 'Desarrollo', 'Madrid'),
(30, 'Ventas', 'Sevilla'),
(40, 'Operaciones', 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `jefe` int(11) DEFAULT NULL,
  `fechaalta` date NOT NULL,
  `salario` int(11) NOT NULL,
  `comision` int(11) DEFAULT NULL,
  `dnumero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`numero`, `nombre`, `puesto`, `jefe`, `fechaalta`, `salario`, `comision`, `dnumero`) VALUES
(7934, 'Muñoz', 'Administrativo', 8082, '1982-02-23', 1300, NULL, 10),
(8002, 'Forte', 'Analista', 8066, '1981-03-21', 3000, NULL, 20),
(8021, 'Santos', 'Vendedor', 8098, '1984-01-15', 1250, 500, 30),
(8039, 'Reyes', 'Presidente', NULL, '1979-11-01', 5000, NULL, 10),
(8054, 'Pérez', 'Vendedor', 8098, '2008-01-11', 1500, NULL, 30),
(8066, 'Jiménez', 'Director', 8039, '1981-12-14', 2975, NULL, 20),
(8069, 'Pérez', 'Administrativo', 8002, '1980-12-23', 800, NULL, 20),
(8082, 'Gutiérrez', 'Director', 8039, '1981-12-01', 2450, NULL, 10),
(8098, 'Corral', 'Director', 8039, '1980-05-08', 2800, NULL, 30),
(8099, 'Sancho', 'Vendedor', 8098, '1983-06-08', 1600, 300, 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
