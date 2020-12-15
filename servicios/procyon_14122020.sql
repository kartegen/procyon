-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2020 a las 01:07:25
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
(2, 2, 2, 1, 2, 2, 2021, 2020, '', 'Reporte de celular'),
(3, 2, 2, 1, 19, 12, 2020, 2020, '', 'Contador'),
(4, 2, 2, 1, 3, 3, 2027, 2020, '', 'Documento de la empresa 1'),
(5, 4, 2, 1, 8, 11, 2022, 2020, '', 'Observaciones subir'),
(6, 6, 3, 1, 12, 12, 2020, 2020, '', 'bitacora');

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
  `status_sistema` int(11) NOT NULL,
  `usr_vinculado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `domicilio`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `status_sistema`, `usr_vinculado`) VALUES
(2, 'Empresa 1', '3', 14, 9, 2025, '2020-12-06 00:00:00', 1, 9),
(3, 'Empresa 2', '2', 18, 7, 2022, '2020-12-06 14:18:31', 1, 5),
(4, 'Empresa #3', 'Domicilio conocido #3', 10, 11, 2020, '2020-12-12 02:47:36', 1, 4),
(5, 'Empresa #4', 'Domicilio conocido #4', 5, 5, 2027, '2020-12-12 13:31:02', 1, 5),
(6, 'SANVIC SA de CV', 'Domicilio conocido', 12, 12, 2020, '2020-12-12 18:34:46', 1, 5);

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
(1, 'JesÃºs', '123456789000', 'qwe123456ert----', 7, 24, 24, 2020, '2020-12-06 14:31:13', 2, '../../img/fotos/img_profile.png'),
(2, 'JesÃºs Rodolfo LeaÃ±os', 'qwerty12345678900000', 'qwerty123456789qwerty', 1, 24, 24, 2027, '2020-12-06 14:34:20', 2, '../../img/fotos/zacatecas.jpg'),
(3, 'Trabajador 1', '1234567', '12345678', 4, 12, 12, 2020, '2020-12-12 18:36:04', 1, '');

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
  `tipo_sangre` int(11) NOT NULL,
  `curp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg_dia` int(11) NOT NULL,
  `fecha_reg_mes` int(11) NOT NULL,
  `fecha_reg_annio` int(11) NOT NULL,
  `fecha_sistema` datetime NOT NULL,
  `status_sistema` int(11) NOT NULL,
  `url_foto` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usr`, `pwd`, `priv`, `nombre_completo`, `tipo_sangre`, `curp`, `nss`, `domicilio`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `status_sistema`, `url_foto`) VALUES
(1, 'jesusrlv', '123456789', 1, 'Jesus', 0, '', '0', '', 1, 1, 2, '2020-12-06 13:57:41', 1, ''),
(2, 'jesusrlv2', '2222222222', 2, 'Jesus2', 0, '', '0', '', 1, 1, 2, '2020-12-06 13:58:29', 1, ''),
(3, 'jesusrlv3', '33333333333', 3, 'Jesus 123', 0, '', '0', '', 18, 9, 2027, '2020-12-06 13:58:56', 1, ''),
(4, 'jesusrlv4', '123456789', 4, 'Jesus3', 0, '', '0', '', 1, 1, 2, '2020-12-06 13:59:36', 2, ''),
(5, 'usr1', '987654321', 3, 'Prueba de usuario', 0, '', '0', '', 9, 12, 1, '2020-12-09 13:41:01', 1, ''),
(8, 'jesusrlv2', '2222222222', 2, 'Jesus2', 0, '', '0', '', 3, 1, 2, '2020-12-11 16:27:37', 2, ''),
(9, 'Vinculado1', 'qwerty', 3, 'Usuario Vinculado', 0, '', '0', '', 9, 12, 2027, '2020-12-12 15:18:47', 1, ''),
(10, 'Sanvic', '123456789', 3, 'SANVIC', 0, '', '0', '', 12, 12, 2020, '2020-12-12 18:33:29', 0, ''),
(11, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:20:36', 0, ''),
(12, '', '', 0, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:23:47', 0, ''),
(13, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:23:50', 0, ''),
(14, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:26:46', 0, ''),
(15, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:27:37', 0, ''),
(16, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:36:48', 0, ''),
(17, '', '', 2, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:36:52', 0, ''),
(18, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:38:00', 0, ''),
(19, '', '', 4, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:38:04', 0, ''),
(20, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:40:54', 0, ''),
(21, '', '', 2, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:41:09', 0, ''),
(22, '', '', 0, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:41:12', 0, ''),
(23, 'Jesus1', '123456789', 3, 'Jesus (PRUEBA 1)', 0, '', '', '', 1, 1, 2020, '2020-12-14 16:48:55', 0, ''),
(24, 'jesus2', '123456789', 0, 'Jesus (PRUEBA 2)', 0, '', '', '', 9, 9, 2027, '2020-12-14 16:52:01', 0, ''),
(25, 'superusr1', '123456789', 1, 'SUPER USR 1', 0, '', '', '', 19, 2, 2021, '2020-12-14 16:54:24', 0, ''),
(26, 'jesus12', '123456789', 1, 'Jesus (PRUEBA 1)', 0, '', '', '', 18, 9, 2027, '2020-12-14 16:57:44', 1, ''),
(27, 'jesusrlv4', '123456789', 2, 'Jesus (PRUEBA 2)', 0, '', '', '', 16, 9, 2027, '2020-12-14 16:58:26', 1, ''),
(28, 'empresa', '123456789', 3, 'empresa 1', 0, '', '', '', 9, 9, 2027, '2020-12-14 16:59:07', 1, ''),
(29, 'empresa2', '123456789', 3, 'empresa 2', 0, '', '', 'Conocido 2', 18, 9, 2027, '2020-12-14 17:05:09', 1, ''),
(30, '', '', 4, 'Trabajador1', 6, '', '', '', 18, 9, 2027, '2020-12-14 17:23:44', 1, './files/bitacora_6rl7cx520_banner_godezac_03062020_01.jpg'),
(31, '', '', 4, 'Trabajador1', 8, 'LEVJ810924HZSXLS04', '1234567ertdfgh456', '', 18, 12, 2021, '2020-12-14 17:37:16', 1, './files/bitacora_vby8tsf8v_maquinita.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
