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

-- Volcando estructura para tabla realty.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_2` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `comentario` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_usuario` int(10) unsigned zerofill NOT NULL,
  `contestado` int NOT NULL DEFAULT '0',
  `llamado` int NOT NULL DEFAULT '0',
  `interesado` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cliente`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla realty.clientes: ~10 rows (aproximadamente)
INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido_1`, `apellido_2`, `correo`, `telefono`, `comentario`, `id_usuario`, `contestado`, `llamado`, `interesado`) VALUES
	(0000000007, 'Amira', 'Bujdud', 'Solano', 'amir_dbuj@unipolidgo.edu.com', '6187652391', NULL, 0000000004, 1, 1, 1),
	(0000000008, 'Adriana', 'Mijares', 'de Castro', 'adrimik8723@outlook.com', '6189807463', NULL, 0000000004, 1, 1, 0),
	(0000000009, 'Fernando', 'Morales', 'Araujo', 'fer-chop1998@gmail.com', '6182893331', NULL, 0000000004, 1, 1, 0),
	(0000000010, 'Sofia', 'de la Parra', 'Palermo', 'sofia.parra@hotmail.com', '6188870021', NULL, 0000000004, 0, 1, 0),
	(0000000011, 'Mariela', 'Díaz', 'Salazar', 'mariela_diaz.ss@hotmail.com', '6184470001', NULL, 0000000004, 0, 0, 0),
	(0000000012, 'Gerardo', 'Medina', 'Müller', 'gera_magico@gmail.com', '6188889381', NULL, 0000000004, 0, 0, 0),
	(0000000013, 'Marco', 'Patiño', 'Jair', 'markk98@gmail.com', '6182893812', NULL, 0000000004, 1, 1, 1),
	(0000000014, 'Salma Sabrina', 'Fernandez', 'Haro', 'salma.sab1980@gmail.com', '6189983247', NULL, 0000000004, 1, 1, 0),
	(0000000015, 'Martina', 'Sierra', 'de Liz', 'mar_deliz@outlook.com', '6558372891', NULL, 0000000004, 0, 0, 0),
	(0000000016, 'Diego', 'Rosales', 'Salas', 'Diego@hotmail.com', '6181000000', NULL, 0000000004, 0, 0, 0);

-- Volcando estructura para tabla realty.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id_propiedad` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codigo_postal` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `numero` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `tipo_inmueble` set('comercial','casa','departamento','loft','duplex') COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_contrato` set('venta','renta') COLLATE utf8mb4_general_ci NOT NULL,
  `precio` bigint unsigned NOT NULL DEFAULT '0',
  `area` int unsigned NOT NULL,
  `pisos` tinyint unsigned NOT NULL,
  `recamaras` tinyint unsigned DEFAULT '0',
  `banos` tinyint unsigned DEFAULT '0',
  `cocheras` tinyint unsigned DEFAULT '0',
  `jardin` set('si','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jardin_area` int unsigned DEFAULT '0',
  `piscina` set('si','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_usuario` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_propiedad`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla realty.propiedades: ~20 rows (aproximadamente)
INSERT INTO `propiedades` (`id_propiedad`, `titulo`, `pais`, `estado`, `municipio`, `codigo_postal`, `calle`, `colonia`, `numero`, `tipo_inmueble`, `tipo_contrato`, `precio`, `area`, `pisos`, `recamaras`, `banos`, `cocheras`, `jardin`, `jardin_area`, `piscina`, `descripcion`, `id_usuario`) VALUES
	(0000000006, 'Hermosa Casa en las Montañas', 'México', 'Jalisco', 'Guadalajara', '45050', 'Avenida de las Flores', 'Valle Verde', '123', 'casa', 'venta', 1200000, 180, 2, 3, 3, 1, 'si', 50, 'no', 'Encantadora casa con hermoso jardín, ubicada en una zona tranquila cerca de la naturaleza.', 0000000006),
	(0000000012, 'Oficina en Renta en el Centro', 'México', 'Ciudad de México', 'Cuauhtémoc', '06010', 'Calle de la Reforma', 'Centro Histórico', '456', 'comercial', 'renta', 25000, 120, 1, 0, 1, 0, 'no', 0, 'no', 'Espaciosa oficina en el corazón del Centro Histórico, ideal para negocios y emprendedores.', 0000000006),
	(0000000014, 'Departamento con Vista al Mar', 'México', 'Baja California', 'Ensenada', '22800', 'Paseo de las Olas', 'Playa azul', '789', 'departamento', 'venta', 2500000, 100, 8, 2, 2, 1, 'no', 0, 'si', 'Moderno departamento con impresionante vista al mar, ubicado en una zona exclusiva y segura.', 0000000006),
	(0000000015, 'Residencia de Lujo en Zona Exclusiva', 'España', 'Cataluña', 'Barcelona', '08001', 'Paseo de Gracia', 'Colonia Laureles', '787', 'casa', 'venta', 2000000, 300, 3, 5, 4, 2, 'si', 150, 'si', 'Residencia elegante con acabados de lujo, ubicada en una de las áreas más prestigiosas de Barcelona.', 0000000007),
	(0000000016, 'Casa en la Sierra', 'España', 'Aragón', 'Jaca', '22700', 'Camino de los Pinares', 'Rural', '834', 'casa', 'venta', 3500000, 280, 2, 3, 2, 2, 'si', 250, 'no', 'Encantadora casa con vistas panorámicas a las montañas, perfecta para amantes de la naturaleza.', 0000000010),
	(0000000017, 'Loft de Diseño en Zona Trendy', 'México', 'Querétaro', 'Santiago de Querétaro', '76000', 'Callejón de los Artistas', 'Barrio Antiguo', '234', 'loft', 'renta', 15000, 804, 1, 1, 1, 1, 'no', 0, 'no', 'Loft vanguardista en el corazón de la ciudad, con diseño único y acceso a las mejores atracciones.', 0000000006),
	(0000000018, 'Dúplex con Patio Trasero', 'México', 'Nuevo León', 'Monterrey', '64000', 'Avenida de los Laureles', 'Residencial San Agustín', '567', 'duplex', 'venta', 1800000, 150, 2, 4, 3, 2, 'si', 80, 'no', 'Dúplex amplio y acogedor con patio trasero, ideal para familias, en una zona residencial exclusiva.', 0000000006),
	(0000000019, 'Loft Moderno con Vistas Panorámicas', 'México', 'Jalisco', 'Zapopan', '45010', 'Avenida de las Américas', 'Puerta de Hierro', '456', 'loft', 'renta', 20000, 1, 1, 1, 1, 1, 'no', NULL, 'no', 'Loft de diseño contemporáneo con amplias ventanas y vistas impresionantes de la ciudad.', 0000000007),
	(0000000020, 'Departamento con Terraza Privada', 'Argentina', 'Buenos Aires', 'Palermo', '61425', 'Calle Scalabrini Ortiz', 'Palermo Soho', '789', 'departamento', 'venta', 2200000, 90, 5, 2, 2, 1, 'no', 0, 'no', 'Encantador departamento con terraza privada, ubicado en la vibrante zona de Palermo Soho.', 0000000007),
	(0000000021, 'Oficina Ejecutiva en Edificio Corporativo', 'México', 'Ciudad de México', 'Santa Fe', '01219', 'Prolongación Paseo de la Reforma', 'Santa Fe', '234', 'comercial', 'renta', 30000, 80, 1, 0, 1, 1, 'no', 0, 'no', 'Casa muy Oficina ejecutiva en edificio corporativo, ideal para empresas en crecimiento.', 0000000007),
	(0000000023, 'Casa Familiar con Amplio Jardín', 'México', 'Nuevo León', 'San Pedro Garza García', '66269', 'Privada de las Cumbres', 'Cumbres del Valle', '567', 'casa', 'venta', 4000000, 250, 2, 4, 4, 2, 'si', 200, 'no', 'Acogedora casa familiar con amplio jardín, perfecta para disfrutar con la familia.', 0000000007),
	(0000000025, 'Penthouse de Lujo con Vistas al Mar', 'España', 'Cataluña', 'Sitges', '08870', 'Paseo Marítimo', 'Vinyet', '123', 'departamento', 'venta', 58000000, 350, 2, 4, 4, 3, 'no', 0, 'si', 'Exclusivo penthouse con diseño de vanguardia y amplias terrazas con vistas panorámicas al mar.', 0000000005),
	(0000000026, 'Casa de Ensueño con Piscina Infinita', 'México', 'Quintana Roo', 'Tulum', '77760', 'Avenida de la Playa', 'Aldea Zama', '456', 'casa', 'venta', 8500000, 280, 1, 3, 3, 2, 'si', 64, 'si', 'Casa de ensueño con diseño eco-chic, piscina infinita y exuberantes jardines, ideal para el estilo de vida tropical.', 0000000005),
	(0000000027, 'Loft Moderno en el Corazón de la Ciudad', 'Argentina', 'Buenos Aires', 'Palermo', '14114', 'Malabia', 'Palermo Hollywood', '789', 'loft', 'renta', 30000, 110, 1, 2, 2, 1, 'no', 0, 'no', 'Loft de diseño con acabados modernos y ubicación privilegiada en una de las zonas más trendy de Palermo.', 0000000005),
	(0000000028, 'Mansión Elegante con Vinoteca', 'México', 'Ciudad de México', 'Lomas de Chapultepec', '81039', 'Paseo de la Reforma', 'Lomas Virreyes', '532', 'casa', 'venta', 15000000, 500, 3, 6, 6, 4, 'si', 200, 'no', 'Majestuosa mansión con detalles de lujo, vinoteca, y amplias áreas sociales para entretenimiento.', 0000000005),
	(0000000029, 'Departamento de Alta Tecnología', 'México', 'Nuevo León', 'San Pedro Garza García', '66220', 'Avenida Morones Prieto', 'Del Valle', '567', 'departamento', 'renta', 25000, 150, 2, 3, 3, 2, 'no', 0, 'no', 'Departamento de alta tecnología con sistemas inteligentes y diseño futurista en una ubicación privilegiada.', 0000000005),
	(0000000030, 'Loft Industrial en el Centro Urba', 'México', 'Ciudad de México', 'Cuauhtémoc', '87562', 'Calle de la Condensa', 'Condensa', '745', 'loft', 'renta', 18000, 120, 1, 2, 2, 1, 'no', 0, 'no', 'Loft de estilo industrial en el corazón de la ciudad, con diseño vanguardista y espacios abiertos.', 0000000010),
	(0000000031, 'Exclusivo Loft en la Sierra', 'España', 'Aragón', 'Jaca', '22700', 'Camino de los Alamos', 'Rural', '789', 'loft', 'venta', 6000000, 500, 2, 4, 3, 2, 'si', 350, 'no', 'Loft exclusivo en un entorno boscoso, con diseño elegante y comodidades modernas.', 0000000010),
	(0000000032, 'Departamento con Terraza en Entorno Natural', 'México', 'Estado de México', 'Valle de Bravo', '51200', 'Bosque de los Pinos', 'Valle Escondido', '234', 'departamento', 'renta', 22000, 100, 1, 2, 2, 1, 'no', 0, 'no', 'Departamento con terraza privada en un entorno natural, ideal para disfrutar de la tranquilidad.', 0000000010),
	(0000000033, 'Casa de Campo con Jardín en Puebla', 'México', 'Puebla', 'Atlixco', '74200', 'Camino a las Flores', 'Campo Sereno', '567', 'casa', 'venta', 2800000, 180, 1, 3, 2, 2, 'si', 250, 'si', 'Casa de campo con amplio jardín y piscina, perfecta para disfrutar de la vida al aire libre en Puebla.', 0000000010);

-- Volcando estructura para tabla realty.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'realty',
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_2` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `rol` int NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla realty.usuarios: ~8 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `correo`, `contrasena`, `nombre`, `apellido_1`, `apellido_2`, `telefono`, `rol`) VALUES
	(0000000004, 'cristian@hotmail.com', 'realty', 'Cristian', 'Ritcher', 'Chávez', '618000015', 1),
	(0000000005, 'estefania@hotmail.com', 'realty', 'Estefania', 'Silva', 'Erfkamp', '618000014', 0),
	(0000000006, 'sergio@hotmail.com', 'realty', 'Sergio', 'Soto', 'Cervantes', '618000012', 0),
	(0000000007, 'raul@hotmail.com', 'realty', 'Raúl', 'Meraz', 'Reyes', '618000009', 0),
	(0000000008, 'diego@hotmail.com', 'realty', 'Diego Arturo', 'Arteaga', 'Ávila', '618000008', 1),
	(0000000009, 'jose@hotmail.com', 'realty', 'José', 'Rodriguez', 'Luna', '618000006', 1),
	(0000000010, 'homero@hotmail.com', 'realty', 'Homero', 'Puga', NULL, '618000004', 0),
	(0000000011, 'marco@hotmail.com', 'realty', 'Marco', 'Rosas', 'Aguirre', '618000002', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
