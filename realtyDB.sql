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
  `id_administrador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(10) unsigned NOT NULL,
  `id_clnt` int(10) unsigned NOT NULL,
  `id_agnt` int(10) unsigned NOT NULL,
  `id_prop` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_administrador`),
  KEY `Admin-Prop` (`id_prop`),
  KEY `Admin-Agente` (`id_agnt`),
  KEY `Admin-Cliente` (`id_clnt`),
  CONSTRAINT `Admin-Agente` FOREIGN KEY (`id_agnt`) REFERENCES `agentes` (`id_agente`),
  CONSTRAINT `Admin-Cliente` FOREIGN KEY (`id_clnt`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `Admin-Prop` FOREIGN KEY (`id_prop`) REFERENCES `propiedades` (`id_propiedad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.administrador: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.agentes
CREATE TABLE IF NOT EXISTS `agentes` (
  `id_agente` int(11) unsigned NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_cln` int(10) unsigned NOT NULL,
  `id_admin` int(10) unsigned NOT NULL,
  `id_prop` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_agente`),
  KEY `Agente-Admin` (`id_admin`),
  KEY `Agente-Cliente` (`id_cln`),
  KEY `Agente-Prop` (`id_prop`),
  CONSTRAINT `Agente-Admin` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_administrador`),
  CONSTRAINT `Agente-Cliente` FOREIGN KEY (`id_cln`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `Agente-Prop` FOREIGN KEY (`id_prop`) REFERENCES `propiedades` (`id_propiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.agentes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `codigo_postal` int(10) unsigned NOT NULL,
  `id_agente` int(10) unsigned NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(10) unsigned NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `status` set('Renta','Venta') NOT NULL DEFAULT 'Venta',
  `fecha_de_corte` date NOT NULL,
  `abono/pago` double unsigned DEFAULT '0',
  `total_deuda` double unsigned DEFAULT NULL,
  `credito` double unsigned DEFAULT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `id_agnt` int(10) unsigned NOT NULL,
  `id_admin` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `Cliente-Agente` (`id_agnt`),
  KEY `Cliente-Admin` (`id_admin`),
  CONSTRAINT `Cliente-Admin` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_administrador`),
  CONSTRAINT `Cliente-Agente` FOREIGN KEY (`id_agnt`) REFERENCES `agentes` (`id_agente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.cliente: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id_propiedad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colonia` varchar(30) NOT NULL,
  `calle_num` varchar(30) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `tipo_inmueble` varchar(30) NOT NULL,
  `recamaras` int(11) NOT NULL,
  `cochera` set('No','Si') NOT NULL,
  `baños` int(11) NOT NULL,
  `medios_baños` int(11) NOT NULL,
  `m2` double unsigned NOT NULL,
  `piscina` set('No','Si') NOT NULL,
  `precio_vnta_o_rnta` double unsigned NOT NULL,
  `vnta_o_rnta` set('Renta','Venta') NOT NULL,
  `pais` varchar(50) NOT NULL,
  `id_agnt` int(10) unsigned NOT NULL,
  `id_admin` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_propiedad`),
  KEY `Prop-Agente` (`id_agnt`),
  KEY `Prop-Admin` (`id_admin`),
  CONSTRAINT `Prop-Admin` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_administrador`),
  CONSTRAINT `Prop-Agente` FOREIGN KEY (`id_agnt`) REFERENCES `agentes` (`id_agente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.propiedades: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
