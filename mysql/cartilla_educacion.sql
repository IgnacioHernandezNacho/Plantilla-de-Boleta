-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2017 a las 00:52:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartilla_educacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciencias naturales`
--

CREATE TABLE `ciencias naturales` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos personales`
--

CREATE TABLE `datos personales` (
  `pri_ape` varchar(24) NOT NULL,
  `seg_ape` varchar(24) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `grup` varchar(10) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `nom_esc` varchar(60) NOT NULL,
  `cct` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion artisticas`
--

CREATE TABLE `educacion artisticas` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion fisica`
--

CREATE TABLE `educacion fisica` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `español`
--

CREATE TABLE `español` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion civica y etica`
--

CREATE TABLE `formacion civica y etica` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencia`
--

CREATE TABLE `inasistencia` (
  `pri_bime` int(2) NOT NULL,
  `seg_bime` int(2) NOT NULL,
  `ter_bime` int(2) NOT NULL,
  `cua_bime` int(2) NOT NULL,
  `qui_bime` int(2) NOT NULL,
  `total` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la entidad donde vive`
--

CREATE TABLE `la entidad donde vive` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematicas`
--

CREATE TABLE `matematicas` (
  `pri_bime` int(3) NOT NULL,
  `seg_bime` int(3) NOT NULL,
  `ter_bime` int(3) NOT NULL,
  `cua_bime` int(3) NOT NULL,
  `qui_bime` int(3) NOT NULL,
  `prom_final` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
