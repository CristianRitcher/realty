-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2023 a las 19:21:29
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` char(10) NOT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `id_usuario` int(10) UNSIGNED ZEROFILL NOT NULL,
  `contestado` int(1) NOT NULL DEFAULT 0,
  `llamado` int(1) NOT NULL DEFAULT 0,
  `interesado` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido_1`, `apellido_2`, `correo`, `telefono`, `comentario`, `id_usuario`, `contestado`, `llamado`, `interesado`) VALUES
(0000000006, 'Alberto', 'Muñoz', 'Pineda', 'albertomunoz@hotmail.com', '618273654', NULL, 0000000004, 0, 1, 0),
(0000000007, 'Amira', 'Bujdud', 'Solano', 'amir_dbuj@unipolidgo.edu.com', '6187652391', NULL, 0000000004, 1, 1, 1),
(0000000008, 'Adriana', 'Mijares', 'de Castro', 'adrimik8723@outlook.com', '6189807463', NULL, 0000000004, 1, 1, 0),
(0000000009, 'Fernando', 'Morales', 'Araujo', 'fer-chop1998@gmail.com', '6182893331', NULL, 0000000004, 1, 1, 0),
(0000000010, 'Sofia', 'de la Parra', 'Palermo', 'sofia.parra@hotmail.com', '6188870021', NULL, 0000000004, 0, 1, 0),
(0000000011, 'Mariela', 'Díaz', 'Salazar', 'mariela_diaz.ss@hotmail.com', '6184470001', NULL, 0000000004, 0, 0, 0),
(0000000012, 'Gerardo', 'Medina', 'Müller', 'gera_magico@gmail.com', '6188889381', NULL, 0000000004, 0, 0, 0),
(0000000013, 'Marco', 'Patiño', 'Jair', 'markk98@gmail.com', '6182893812', NULL, 0000000004, 1, 1, 1),
(0000000014, 'Salma Sabrina', 'Fernandez', 'Haro', 'salma.sab1980@gmail.com', '6189983247', NULL, 0000000004, 1, 1, 0),
(0000000015, 'Martina', 'Sierra', 'de Liz', 'mar_deliz@outlook.com', '6558372891', NULL, 0000000004, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id_propiedad` int(10) UNSIGNED ZEROFILL NOT NULL,
  `titulo` varchar(100) NOT NULL,
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
  `id_usuario` int(10) UNSIGNED ZEROFILL NOT NULL,
  `foto1` varchar(50) DEFAULT NULL,
  `foto2` varchar(50) DEFAULT NULL,
  `foto3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id_propiedad`, `titulo`, `pais`, `estado`, `municipio`, `codigo_postal`, `calle`, `colonia`, `numero`, `tipo_inmueble`, `tipo_contrato`, `precio`, `area`, `pisos`, `recamaras`, `banos`, `cocheras`, `jardin`, `jardin_area`, `piscina`, `descripcion`, `id_usuario`, `foto1`, `foto2`, `foto3`) VALUES
(0000000001, 'Casa de playa en Los Angeles, California', 'Estados Unidos', 'California', 'Los Angeles', '30290', 'Rivers Hill', 'Mountain Bell', '4399', 'casa', 'venta', 2000000, 450, 2, 4, 5, 2, 'si', 80, 'si', 'Hermosa casa en venta en Los Angeles California, cuenta con piscina y un amplio jardín. Una morada adecuada para cualquier familia.', 0000000006, 'quinta_habitacion_mzt_1.png', 'quinta_habitacion_mzt_2.png', 'quinta_habitacion_mzt_3.png'),
(0000000002, 'Casa 100% de madera en las montañas', 'México', 'Durango', 'Durango', '34000', 'Carretera 24', 'Manzanales', '711', 'casa', 'venta', 4000000, 700, 2, 8, 12, 3, 'si', 200, 'no', 'Casa acogedora en medio de los bosques de Durango, excelente para pasar fines de semana y vacaciones.', 0000000006, 'octava_habitacion_mzt_1.png', 'octava_habitacion_mzt_2.png', 'octava_habitacion_mzt_3.png'),
(0000000003, 'Casa de estilo moderno con vistas increíbles al mar ', 'Mexico', 'Mazatlan', 'Sinaloa', '498392', 'Vaimas', 'Villa Nueva', '1017', 'casa', 'venta', 2500000, 320, 1, 4, 5, 2, 'no', NULL, 'si', 'Una hermosa casa justo a la orilla del mar.', 0000000006, 'habitacio_mazatlan_1.png', 'habitacio_mazatlan_2.png', 'habitacio_mazatlan_3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED ZEROFILL NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL DEFAULT 'realty',
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) DEFAULT NULL,
  `telefono` char(10) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `contrasena`, `nombre`, `apellido_1`, `apellido_2`, `telefono`, `rol`) VALUES
(0000000004, 'cristian@hotmail.com', 'realty', 'Cristian', 'Ritcher', 'Chávez', '618000015', 1),
(0000000005, 'estefania@hotmail.com', 'realty', 'Estefania', 'Silva', 'Erfkamp', '618000014', 0),
(0000000006, 'sergio@hotmail.com', 'realty', 'Sergio', 'Soto', 'Cervantes', '618000012', 0),
(0000000007, 'raul@hotmail.com', 'realty', 'Raúl', 'Meraz', 'Reyes', '618000009', 0),
(0000000008, 'diego@hotmail.com', 'realty', 'Diego Arturo', 'Arteaga', 'Ávila', '618000008', 1),
(0000000009, 'jose@hotmail.com', 'realty', 'José', 'Rodriguez', 'Luna', '618000006', 1),
(0000000010, 'homero@hotmail.com', 'realty', 'Homero', 'Puga', NULL, '618000004', 0),
(0000000011, 'marco@hotmail.com', 'realty', 'Marco', 'Rosas', 'Aguirre', '618000002', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id_propiedad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id_propiedad` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
