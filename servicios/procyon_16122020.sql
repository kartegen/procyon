-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2020 a las 07:32:45
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

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
  `semana` int(11) NOT NULL,
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

INSERT INTO `bitacora` (`id`, `cliente`, `asignado`, `capturo`, `semana`, `fecha_reg_dia`, `fecha_reg_mes`, `fecha_reg_annio`, `fecha_sistema`, `url_file`, `descripcion`) VALUES
(2, 5, 2, 1, 1, 2, 2, 2021, 2020, '', 'Reporte de celular'),
(3, 2, 2, 1, 0, 19, 12, 2020, 2020, '', 'Contador'),
(4, 2, 2, 1, 0, 3, 3, 2027, 2020, '', 'Documento de la empresa 1'),
(5, 4, 2, 1, 0, 8, 11, 2022, 2020, '', 'Observaciones subir'),
(6, 10, 3, 1, 2, 12, 12, 2020, 2020, '', 'bitacora'),
(7, 10, 19, 1, 1, 0, 0, 0, 2020, './files/bitacora_ut6wswc30_Reporte COVID-19 Zacatecas 9062020 .pdf', 'Reporte'),
(8, 3, 4, 1, 52, 0, 0, 0, 2020, '', 'Documento estadÃ­stica'),
(9, 3, 4, 1, 1, 0, 0, 0, 2020, '', 'Documento estadÃ­stica'),
(10, 3, 4, 1, 1, 0, 0, 0, 2020, './files/bitacora_5bdv1ll3q_INTRODUCCION A LA ESTADIÌSTICA.pdf', 'Documento estadÃ­stica'),
(11, 10, 30, 1, 9, 0, 0, 0, 2020, './files/bitacora_61qir3yjy_ZM ZACATECAS-GUADALUPE.pdf', 'pdf');

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
-- Estructura de tabla para la tabla `semanas`
--

CREATE TABLE `semanas` (
  `id` int(11) NOT NULL,
  `semana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `inicia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fin` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `annio` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semanas`
--

INSERT INTO `semanas` (`id`, `semana`, `inicia`, `fin`, `annio`) VALUES
(1, 'Semana 01', '04-ene-21', '10-ene-21', '2021'),
(2, 'Semana 02', '11-ene-21', '17-ene-21', '2021'),
(3, 'Semana 03', '18-ene-21', '24-ene-21', '2021'),
(4, 'Semana 04', '25-ene-21', '31-ene-21', '2021'),
(5, 'Semana 05', '01-feb-21', '07-feb-21', '2021'),
(6, 'Semana 06', '08-feb-21', '14-feb-21', '2021'),
(7, 'Semana 07', '15-feb-21', '21-feb-21', '2021'),
(8, 'Semana 08', '22-feb-21', '28-feb-21', '2021'),
(9, 'Semana 09', '01-mar-21', '07-mar-21', '2021'),
(10, 'Semana 10', '08-mar-21', '14-mar-21', '2021'),
(11, 'Semana 11', '15-mar-21', '21-mar-21', '2021'),
(12, 'Semana 12', '22-mar-21', '28-mar-21', '2021'),
(13, 'Semana 13', '29-mar-21', '04-abr-21', '2021'),
(14, 'Semana 14', '05-abr-21', '11-abr-21', '2021'),
(15, 'Semana 15', '12-abr-21', '18-abr-21', '2021'),
(16, 'Semana 16', '19-abr-21', '25-abr-21', '2021'),
(17, 'Semana 17', '26-abr-21', '02-may-21', '2021'),
(18, 'Semana 18', '03-may-21', '09-may-21', '2021'),
(19, 'Semana 19', '10-may-21', '16-may-21', '2021'),
(20, 'Semana 20', '17-may-21', '23-may-21', '2021'),
(21, 'Semana 21', '24-may-21', '30-may-21', '2021'),
(22, 'Semana 22', '31-may-21', '06-jun-21', '2021'),
(23, 'Semana 23', '07-jun-21', '13-jun-21', '2021'),
(24, 'Semana 24', '14-jun-21', '20-jun-21', '2021'),
(25, 'Semana 25', '21-jun-21', '27-jun-21', '2021'),
(26, 'Semana 26', '28-jun-21', '04-jul-21', '2021'),
(27, 'Semana 27', '05-jul-21', '11-jul-21', '2021'),
(28, 'Semana 28', '12-jul-21', '18-jul-21', '2021'),
(29, 'Semana 29', '19-jul-21', '25-jul-21', '2021'),
(30, 'Semana 30', '26-jul-21', '01-ago-21', '2021'),
(31, 'Semana 31', '02-ago-21', '08-ago-21', '2021'),
(32, 'Semana 32', '09-ago-21', '15-ago-21', '2021'),
(33, 'Semana 33', '16-ago-21', '22-ago-21', '2021'),
(34, 'Semana 34', '23-ago-21', '29-ago-21', '2021'),
(35, 'Semana 35', '30-ago-21', '05-sep-21', '2021'),
(36, 'Semana 36', '06-sep-21', '12-sep-21', '2021'),
(37, 'Semana 37', '13-sep-21', '19-sep-21', '2021'),
(38, 'Semana 38', '20-sep-21', '26-sep-21', '2021'),
(39, 'Semana 39', '27-sep-21', '03-oct-21', '2021'),
(40, 'Semana 40', '04-oct-21', '10-oct-21', '2021'),
(41, 'Semana 41', '11-oct-21', '17-oct-21', '2021'),
(42, 'Semana 42', '18-oct-21', '24-oct-21', '2021'),
(43, 'Semana 43', '25-oct-21', '31-oct-21', '2021'),
(44, 'Semana 44', '01-nov-21', '07-nov-21', '2021'),
(45, 'Semana 45', '08-nov-21', '14-nov-21', '2021'),
(46, 'Semana 46', '15-nov-21', '21-nov-21', '2021'),
(47, 'Semana 47', '22-nov-21', '28-nov-21', '2021'),
(48, 'Semana 48', '29-nov-21', '05-dic-21', '2021'),
(49, 'Semana 49', '06-dic-21', '12-dic-21', '2021'),
(50, 'Semana 50', '13-dic-21', '19-dic-21', '2021'),
(51, 'Semana 51', '20-dic-21', '26-dic-21', '2021'),
(52, 'Semana 52', '27-dic-21', '02-ene-22', '2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testigos`
--

CREATE TABLE `testigos` (
  `id` int(11) NOT NULL,
  `ruta` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `vinculado` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `testigos`
--

INSERT INTO `testigos` (`id`, `ruta`, `vinculado`, `fecha`) VALUES
(2, './files/testigo_ho35l7h1l_banner_godezac_04122020.jpg', 9, '2020-12-15 23:14:18'),
(3, './files/testigo_aq4ang8z8_semaforo_13112020.jpg', 9, '2020-12-15 23:35:43'),
(4, './files/testigo_pv6oe1fwq_ssp_comision_profesionalizacion_12112020.jpg', 9, '2020-12-15 23:36:53'),
(5, './files/testigo_ncyph3o84_cofepris_vacuna_11122020.jpg', 9, '2020-12-15 23:37:11'),
(6, './files/testigo_ldep5ar6l_chi.jpg', 10, '2020-12-15 23:50:18'),
(7, './files/testigo_wye8reap0_dif_apoyo_06112020.jpg', 11, '2020-12-15 23:53:34');

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
(3, 'Trabajador 1', '1234567', '12345678', 4, 12, 12, 2020, '2020-12-12 18:36:04', 1, ''),
(4, '', '', '', 0, 0, 0, 0, '2020-12-15 22:49:52', 1, ''),
(5, '', '', '', 0, 0, 0, 0, '2020-12-15 22:50:49', 1, ''),
(6, '', '', '', 0, 0, 0, 0, '2020-12-15 22:54:12', 1, ''),
(7, '', '', '', 0, 0, 0, 0, '2020-12-15 22:55:35', 1, ''),
(8, '', '', '', 0, 0, 0, 0, '2020-12-15 22:57:50', 1, ''),
(9, '', '', '', 0, 0, 0, 0, '2020-12-15 22:59:33', 1, '');

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
(4, 'jesusrlv4', '123456789', 4, 'Jesus3', 0, '', '0', '', 1, 1, 2, '2020-12-06 13:59:36', 1, ''),
(5, 'usr1', '987654321', 3, 'Prueba de usuario', 0, '', '0', '', 9, 12, 1, '2020-12-09 13:41:01', 1, ''),
(8, 'jesusrlv2', '2222222222', 2, 'Jesus2', 0, '', '0', '', 3, 1, 2, '2020-12-11 16:27:37', 2, ''),
(9, 'Vinculado1', 'qwerty', 3, 'Usuario Vinculado', 0, '', '0', '', 9, 12, 2027, '2020-12-12 15:18:47', 2, ''),
(10, 'Sanvic', '123456789', 3, 'SANVIC', 0, '', '0', '', 12, 12, 2020, '2020-12-12 18:33:29', 1, ''),
(11, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:20:36', 0, ''),
(12, '', '', 0, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:23:47', 0, ''),
(13, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:23:50', 0, ''),
(14, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:26:46', 0, ''),
(15, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:27:37', 0, ''),
(16, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:36:48', 0, ''),
(17, '', '', 2, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:36:52', 0, ''),
(18, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:38:00', 0, ''),
(20, '', '', 1, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:40:54', 0, ''),
(21, '', '', 2, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:41:09', 0, ''),
(22, '', '', 0, '', 0, '', '0', '', 0, 0, 0, '2020-12-14 13:41:12', 0, ''),
(23, 'Jesus1', '123456789', 3, 'Jesus (PRUEBA 1)', 0, '', '', '', 1, 1, 2020, '2020-12-14 16:48:55', 0, ''),
(24, 'jesus2', '123456789', 0, 'Jesus (PRUEBA 2)', 0, '', '', '', 9, 9, 2027, '2020-12-14 16:52:01', 0, ''),
(25, 'superusr1', '123456789', 1, 'SUPER USR 1', 0, '', '', '', 19, 2, 2021, '2020-12-14 16:54:24', 0, ''),
(26, 'jesus12', '123456789', 1, 'Jesus (PRUEBA 1)', 0, '', '', '', 18, 9, 2027, '2020-12-14 16:57:44', 1, ''),
(27, 'jesusrlv4', '123456789', 2, 'Jesus (PRUEBA 2)', 0, '', '', '', 16, 9, 2027, '2020-12-14 16:58:26', 1, ''),
(28, 'empresa1', '123456789', 3, 'empresa prueba', 0, '', '', '', 9, 9, 2027, '2020-12-14 16:59:07', 1, ''),
(29, 'empresa2', '123456789', 3, 'empresa 2', 0, '', '', 'Conocido 2', 18, 9, 2027, '2020-12-14 17:05:09', 1, ''),
(32, 'Vinculado borrar', '123456789', 3, 'Empresa borrar', 0, '', '', '1', 19, 12, 2027, '2020-12-16 00:09:26', 1, '');

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
-- Indices de la tabla `semanas`
--
ALTER TABLE `semanas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testigos`
--
ALTER TABLE `testigos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `semanas`
--
ALTER TABLE `semanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `testigos`
--
ALTER TABLE `testigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
