-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
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
  `id_admin` int DEFAULT NULL,
  `id_agente` int DEFAULT NULL,
  `id_cliente` int DEFAULT NULL,
  `id_propiedad` int DEFAULT NULL,
  `nombre` int DEFAULT NULL,
  `apellido` int DEFAULT NULL,
  `correo` int DEFAULT NULL,
  `contrasena` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.administrador: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.agentes
CREATE TABLE IF NOT EXISTS `agentes` (
  `id_agente` int DEFAULT NULL,
  `id_propiedad` int DEFAULT NULL,
  `id_cliente` int DEFAULT NULL,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `telefono` text,
  `correo` text,
  `apellido` text,
  `contrasena` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.agentes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla realty.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id_propiedad` int DEFAULT NULL,
  `id_agente` int DEFAULT NULL,
  `venta_renta` int DEFAULT NULL,
  `pais` int DEFAULT NULL,
  `estado` int DEFAULT NULL,
  `municipio` int DEFAULT NULL,
  `codigo_post` int DEFAULT NULL,
  `colonia` int DEFAULT NULL,
  `calle` int DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `tipo_inm` int DEFAULT NULL,
  `banos` int DEFAULT NULL,
  `cocheras` int DEFAULT NULL,
  `plantas` int DEFAULT NULL,
  `recamaras` int DEFAULT NULL,
  `mt_cuad` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla realty.propiedades: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
