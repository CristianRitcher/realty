-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.17 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para realty
CREATE DATABASE IF NOT EXISTS `realty` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `realty`;

-- Volcando estructura para tabla realty.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_p` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_m` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` int(10) NOT NULL,
  PRIMARY KEY (`id_administrador`),
  UNIQUE KEY `id_administrador` (`id_administrador`),
  UNIQUE KEY `contraseña` (`contraseña`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `telefono` (`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.administrador: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.agentes
CREATE TABLE IF NOT EXISTS `agentes` (
  `id_agente` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_p` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_m` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` int(10) NOT NULL,
  PRIMARY KEY (`id_agente`),
  UNIQUE KEY `id_agente` (`id_agente`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `contraseña` (`contraseña`),
  UNIQUE KEY `telefono` (`telefono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.agentes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_p` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_m` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_agnt` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `telefono` (`telefono`),
  UNIQUE KEY `correo` (`correo`),
  KEY `agente-cliente` (`id_agnt`),
  CONSTRAINT `agente-cliente` FOREIGN KEY (`id_agnt`) REFERENCES `agentes` (`id_agente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.cliente: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id_propiedad` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codigo_postal` char(10) NOT NULL DEFAULT '',
  `calle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `colonia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `num_ext` char(10) NOT NULL,
  `num_int` char(10) DEFAULT NULL,
  `tipo_inmueble` set('REsidencia','Departamento','Duplex','loft','comercial') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `tipo_contrato` set('Venta','Renta') DEFAULT NULL,
  `precio` int(10) unsigned NOT NULL DEFAULT '0',
  `area_m2` int(10) unsigned NOT NULL DEFAULT '0',
  `pisos` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `recamaras` tinyint(3) unsigned DEFAULT NULL,
  `banos` tinyint(3) unsigned DEFAULT '0',
  `cochera` tinyint(3) unsigned DEFAULT '0',
  `jardin` set('Si','No') NOT NULL DEFAULT '',
  `jardin_area` int(10) unsigned NOT NULL,
  `piscina` set('Si','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dsecripcion` varchar(500) NOT NULL DEFAULT '',
  `id_agente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_propiedad`),
  UNIQUE KEY `id_propiedad` (`id_propiedad`),
  KEY `prop-agente` (`id_agente`),
  CONSTRAINT `prop-agente` FOREIGN KEY (`id_agente`) REFERENCES `agentes` (`id_agente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.propiedades: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
