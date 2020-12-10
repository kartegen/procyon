-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2020 a las 00:39:28
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `procyon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `asignado` int(11) NOT NULL,
  `capturo` int(11) NOT NULL,
  `fecha_reg_dia` int(11) NOT NULL,
  `fecha_reg_mes` int(11) NOT NULL,
  `fecha_reg_annio` int(11) NOT NULL,
  `fecha_sistema` int(11) NOT NULL,
  `url_file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `cliente`, `asignado`, `capturo`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `url_file`, `descripcion`) VALUES
(1, 2, 1, 1, 2, 4, 4, 2020, '../files/bitacora_pagw3fvw1_1.VeroÌnica Pichardo.pdf', 'qqqq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg_dia` int(11) NOT NULL,
  `fecha_reg_mes` int(11) NOT NULL,
  `fecha_reg_annio` int(11) NOT NULL,
  `fecha_sistema` datetime NOT NULL,
  `status_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `domicilio`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `status_sistema`) VALUES
(1, 'EMpresa 1', 'DOMiciÃ±io', 1, 1, 2, '0000-00-00 00:00:00', 1),
(2, 'EMpresa 2', 'DOMiciÃ±io', 1, 1, 2, '2020-12-06 00:00:00', 2),
(3, 'EMpresa 3', 'DOMicilio', 1, 1, 2, '2020-12-06 14:18:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nss` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` int(11) NOT NULL,
  `fecha_reg_dia` int(11) NOT NULL,
  `fecha_reg_mes` int(11) NOT NULL,
  `fecha_reg_annio` int(11) NOT NULL,
  `fecha_sistema` datetime NOT NULL,
  `status_sistema` int(11) NOT NULL,
  `url_foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombre`, `curp`, `nss`, `tipo_sangre`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `status_sistema`, `url_foto`) VALUES
(1, 'Rodolfo', '123456789', 'qwe123456ert', 1, 1, 9, 2027, '2020-12-06 14:31:13', 1, '../../img/fotos/img_profile.png'),
(2, 'Rodolfo 2', '123456789', 'qwe123456ert', 3, 1, 9, 2025, '2020-12-06 14:34:20', 2, '../../img/fotos/zacatecas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `priv` int(11) NOT NULL,
  `nombre_completo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg_dia` int(11) NOT NULL,
  `fecha_reg_mes` int(11) NOT NULL,
  `fecha_reg_annio` int(11) NOT NULL,
  `fecha_sistema` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usr`, `pwd`, `priv`, `nombre_completo`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`) VALUES
(1, 'jesusrlv', '123456789', 1, 'Jesus', 1, 1, 2, '2020-12-06 13:57:41'),
(2, 'jesusrlv2', '123456789', 2, 'Jesus2', 1, 1, 2, '2020-12-06 13:58:29'),
(3, 'jesusrlv3', '123456789', 3, 'Jesus3', 1, 1, 2, '2020-12-06 13:58:56'),
(4, 'jesusrlv4', '123456789', 4, 'Jesus3', 1, 1, 2, '2020-12-06 13:59:36'),
(5, 'usr1', '123456789', 1, 'Prueba de usuario', 9, 12, 1, '2020-12-09 13:41:01'),
(6, 'usr2', 'qwertyyyy', 1, 'Prueba de usuario 2', 9, 12, 1, '2020-12-09 13:42:30'),
(7, 'usr3', '123456789', 3, 'Prueba de usuario 3', 9, 12, 2027, '2020-12-09 13:44:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
