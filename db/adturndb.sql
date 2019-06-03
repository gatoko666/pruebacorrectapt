-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 06:35:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adturndb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalletipoturno`
--

CREATE TABLE `detalletipoturno` (
  `IdDetalleTipoTurno` int(11) NOT NULL,
  `HoraInicioTurno` time DEFAULT NULL,
  `HoraTerminoTurno` time DEFAULT NULL,
  `AbreviacionTurno` varchar(100) DEFAULT NULL,
  `DescripcionDetalleTipoTurno` mediumtext,
  `IdTurnos` int(11) DEFAULT NULL,
  `IdAdministrador` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalletipoturno`
--

INSERT INTO `detalletipoturno` (`IdDetalleTipoTurno`, `HoraInicioTurno`, `HoraTerminoTurno`, `AbreviacionTurno`, `DescripcionDetalleTipoTurno`, `IdTurnos`, `IdAdministrador`) VALUES
(14, '08:00:00', '17:00:00', 'TM', 'Turno Manaña', NULL, 1),
(15, '22:00:00', '08:00:00', 'TN', 'Turno Noche', NULL, 1),
(16, NULL, NULL, 'Dia Libre', 'Turno Libre', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `RutOperador` varchar(45) NOT NULL,
  `NombreOperador` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `TelefonoOperador` varchar(45) DEFAULT NULL,
  `FechaAltaOperador` date DEFAULT NULL,
  `IdAdministrador` int(20) UNSIGNED NOT NULL,
  `LocalizacionOperador` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`RutOperador`, `NombreOperador`, `Password`, `Correo`, `TelefonoOperador`, `FechaAltaOperador`, `IdAdministrador`, `LocalizacionOperador`, `created_at`, `updated_at`) VALUES
('19.383.853-7', 'gabriel', 'as', 'pedro@pedro.cl', '324', '2019-06-03', 1, '23', '2019-06-03 04:55:31', '2019-06-03 04:55:31'),
('193838537', 'Pedro', '123456789', 'pedro@pedro.cl', '123', '2019-06-02', 1, 'Casa 1', '2019-06-03 02:42:27', '2019-06-03 02:42:27'),
('9279825-9', 'Israel C', '123', 'isra@isra.cl', '123', '2019-06-03', 1, 'sad', '2019-06-03 04:51:21', '2019-06-03 04:51:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'administrador', NULL, NULL),
(2, 'User', 'usuario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnoregistroasignado`
--

CREATE TABLE `turnoregistroasignado` (
  `idturnoregistroasignado` int(11) NOT NULL,
  `RutOperador` varchar(45) DEFAULT NULL,
  `fechacreacion` timestamp NULL DEFAULT NULL,
  `nombreturnol` varchar(45) NOT NULL,
  `nombreturnom` varchar(45) NOT NULL,
  `nombreturnomm` varchar(45) NOT NULL,
  `nombreturnoj` varchar(45) NOT NULL,
  `nombreturnov` varchar(45) NOT NULL,
  `nombreturnos` varchar(45) NOT NULL,
  `nombreturnod` varchar(45) NOT NULL,
  `NumeroSemana` varchar(45) DEFAULT NULL,
  `MesDeLaSemanaAsignado` varchar(45) DEFAULT NULL,
  `AnoDeLaSemanaAsignado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnoregistroasignado`
--

INSERT INTO `turnoregistroasignado` (`idturnoregistroasignado`, `RutOperador`, `fechacreacion`, `nombreturnol`, `nombreturnom`, `nombreturnomm`, `nombreturnoj`, `nombreturnov`, `nombreturnos`, `nombreturnod`, `NumeroSemana`, `MesDeLaSemanaAsignado`, `AnoDeLaSemanaAsignado`) VALUES
(28, '193838537', '2019-06-03 04:49:55', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana1', 'Enero', '2019'),
(29, '193838537', '2019-06-03 04:50:11', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana1', 'Enero', '2019'),
(30, '19.383.853-7', '2019-06-03 06:55:51', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana1', 'Enero', '2019'),
(31, '193838537', '2019-06-03 06:55:51', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana1', 'Enero', '2019'),
(32, '9279825-9', '2019-06-03 06:55:51', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana1', 'Enero', '2019'),
(33, '19.383.853-7', '2019-06-03 07:08:00', 'TN', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana3', 'Marzo', '2019'),
(34, '193838537', '2019-06-03 07:08:00', 'Dia Libre', 'TM', 'TN', 'TN', 'TN', 'Dia Libre', 'Dia Libre', 'Semana3', 'Marzo', '2019'),
(35, '9279825-9', '2019-06-03 07:08:00', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Dia Libre', 'Semana3', 'Marzo', '2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Millaquien', 'pedro@pedro.cl', NULL, '$2y$10$rKb63M5GNRkWFHc1uA56EOxp0Tv41q/WztjAv3agvGoZS6ItIz.8C', NULL, '2019-06-03 01:07:23', '2019-06-03 01:07:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  ADD PRIMARY KEY (`IdDetalleTipoTurno`),
  ADD KEY `IdAdministrador FK_idx` (`IdAdministrador`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`RutOperador`),
  ADD KEY `fkadministrador_operador_idx` (`IdAdministrador`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userfkRole_user_idx` (`user_id`),
  ADD KEY `rolesfkRole_user_idx` (`role_id`);

--
-- Indices de la tabla `turnoregistroasignado`
--
ALTER TABLE `turnoregistroasignado`
  ADD PRIMARY KEY (`idturnoregistroasignado`),
  ADD KEY `fkrutoperador_idx` (`RutOperador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  MODIFY `IdDetalleTipoTurno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turnoregistroasignado`
--
ALTER TABLE `turnoregistroasignado`
  MODIFY `idturnoregistroasignado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  ADD CONSTRAINT `iduserfkdetalletipoturno` FOREIGN KEY (`IdAdministrador`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `operador`
--
ALTER TABLE `operador`
  ADD CONSTRAINT `fkadministrador_operador` FOREIGN KEY (`IdAdministrador`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `rolesfkRole_user` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userfkRole_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turnoregistroasignado`
--
ALTER TABLE `turnoregistroasignado`
  ADD CONSTRAINT `fkrutoperador` FOREIGN KEY (`RutOperador`) REFERENCES `operador` (`RutOperador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
