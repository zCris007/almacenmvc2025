-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2025 a las 16:38:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_prod` int(4) NOT NULL,
  `nom_prod` varchar(30) NOT NULL,
  `ref_prod` varchar(30) NOT NULL,
  `ide_usu` int(15) NOT NULL,
  `precio_prod` decimal(12,2) NOT NULL,
  `cant_pedida` int(4) NOT NULL,
  `cant_minima` int(4) NOT NULL,
  `cant_stok` int(4) NOT NULL,
  `img_prod` varchar(200) NOT NULL,
  `est_prod` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_prod`, `nom_prod`, `ref_prod`, `ide_usu`, `precio_prod`, `cant_pedida`, `cant_minima`, `cant_stok`, `img_prod`, `est_prod`) VALUES
(1458, 'vestido', 'mujer', 531234568, '80000.00', 12, 20, 12, 'vestido_dama.jpg', 'A'),
(10104, 'Camisa', 'MangaLarga', 417824754, '120000.00', 12, 10, 20, 'manga_larga.jpg', 'A'),
(10105, 'Camisa', 'MangaCorta', 417824754, '105000.00', 12, 10, 20, 'manga_corta.jpg', 'A'),
(11115, 'Pantalon', 'JeanAzul', 531234568, '240000.00', 12, 10, 20, 'pano_ingles.jpg', 'I'),
(11116, 'Pantalon', 'PanoIngles', 531234568, '115000.00', 12, 10, 20, 'pano_ingles.jpg', 'A'),
(12565455, 'chaqueta', 'CueroHombre', 417824754, '150000.00', 20, 20, 20, 'chaqueta_cuero.jpg', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ide_usu` int(15) NOT NULL,
  `nom_usu` varchar(30) NOT NULL,
  `ape_usu` varchar(30) NOT NULL,
  `correo_usu` varchar(30) NOT NULL,
  `tel_usu` bigint(15) NOT NULL,
  `dir_usu` varchar(30) NOT NULL,
  `est_usu` varchar(1) NOT NULL,
  `tip_usu` int(1) NOT NULL,
  `pass_usu` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ide_usu`, `nom_usu`, `ape_usu`, `correo_usu`, `tel_usu`, `dir_usu`, `est_usu`, `tip_usu`, `pass_usu`) VALUES
(111222333, 'Camilo', 'Gonzales', 'Gonzales@gmail.com', 30204511223, '27 carrera 42 sur', 'A', 2, '22223'),
(112345678, 'Jaime', 'Rodriguez', 'jaime@gmail.com', 3208011940, 'Calle 71 Bis N° 91 - 69', 'A', 1, 'jaime123'),
(123456789, 'Edwin', 'Shelby', 'edwin@gmail.com', 302257666, '29 Carrera 47A 69K S', 'I', 2, '11123'),
(417824754, 'FlorAlicia', 'Triana', 'alicia@gmail.com', 3137894152, 'Carrera 5 N° 67 - 45', 'A', 4, 'floralicia45'),
(531234568, 'PedroNel', 'Martinez', 'pedro@gmail.com', 3214567891, 'Calle 69 Sur N° 75 - 28', 'A', 4, 'pedro890'),
(1033105632, 'Camilo', 'Bejarano', 'camilo@gmail.com', 3022776698, '25 carrera 42 sur', 'A', 2, '147852'),
(1104459785, 'LuisAntonio', 'Castelblanco', 'luis@gmail.com', 3124598723, 'Carrera 56 N° 5A - 32', 'A', 3, 'luis789'),
(1931078969, 'Alberto', 'Garzon', 'alberto@gmail.com', 3115200885, 'Calle 140 N° 19B - 56', 'A', 2, 'alberto456'),
(2147483647, 'Camilo', 'Gonzales', 'Gonzales@gmail.com', 3006960555, '27 Carrera 45 sur', 'I', 2, '222223');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ide_ventas` int(4) NOT NULL,
  `cod_prod` int(4) NOT NULL,
  `ide_usu` int(15) NOT NULL,
  `cant_venta` int(4) NOT NULL,
  `vlr_venta` decimal(12,2) NOT NULL,
  `fech_venta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ide_ventas`, `cod_prod`, `ide_usu`, `cant_venta`, `vlr_venta`, `fech_venta`) VALUES
(4, 10104, 417824754, 3, '360000.00', '2024-05-28'),
(5, 11115, 531234568, 2, '480000.00', '2024-05-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_prod`),
  ADD KEY `ide_usu` (`ide_usu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ide_usu`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ide_ventas`),
  ADD KEY `ide_usu` (`ide_usu`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ide_ventas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ide_usu`) REFERENCES `usuario` (`ide_usu`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ide_usu`) REFERENCES `usuario` (`ide_usu`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `producto` (`cod_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
