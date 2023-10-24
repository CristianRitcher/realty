-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2023 a las 03:19:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `realty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(10) UNSIGNED ZEROFILL NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL DEFAULT 'realty',
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) DEFAULT NULL,
  `telefono` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `correo`, `contrasena`, `nombre`, `apellido_1`, `apellido_2`, `telefono`) VALUES
(0000000001, 'cristian.ritcher@outlook.com', 'realty', 'Cristian', 'Ritcher', 'Chávez', '6182672162');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `id_agente` int(10) UNSIGNED ZEROFILL NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL DEFAULT 'realty',
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) DEFAULT NULL,
  `telefono` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id_agente`, `correo`, `contraseña`, `nombre`, `apellido_1`, `apellido_2`, `telefono`) VALUES
(0000000001, 'cris', 'realty', 'cris', 'rit', 'cha', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` char(10) NOT NULL,
  `id_agente` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido_1`, `apellido_2`, `correo`, `telefono`, `id_agente`) VALUES
(0000000004, 's', 's', 's', 'c.s@outlook.com', '1234567789', 0000000001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id_propiedad` int(10) UNSIGNED ZEROFILL NOT NULL,
  `pais` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `codigo_postal` char(10) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `numero` char(10) NOT NULL,
  `tipo_inmueble` set('comercial','casa','departamento','loft','duplex') NOT NULL,
  `tipo_contrato` set('venta','renta') NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `area` int(10) UNSIGNED NOT NULL,
  `pisos` tinyint(3) UNSIGNED NOT NULL,
  `recamaras` tinyint(3) UNSIGNED DEFAULT NULL,
  `banos` tinyint(3) UNSIGNED DEFAULT NULL,
  `cocheras` tinyint(3) UNSIGNED DEFAULT NULL,
  `jardin` set('si','no') DEFAULT NULL,
  `jardin_area` int(10) UNSIGNED DEFAULT NULL,
  `piscina` set('si','no') DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `id_agente` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id_agente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_agente` (`id_agente`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id_propiedad`),
  ADD KEY `id_agente` (`id_agente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `id_agente` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id_propiedad` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_agente`) REFERENCES `agentes` (`id_agente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`id_agente`) REFERENCES `agentes` (`id_agente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
