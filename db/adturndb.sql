-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 06:38:52
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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `IdAdministrador` int(11) NOT NULL,
  `NombreAdministrador` varchar(45) NOT NULL,
  `CorreoAdministrador` varchar(45) NOT NULL,
  `PasswordAdministrador` varchar(45) NOT NULL,
  `RutAdministrador` varchar(45) NOT NULL,
  `TelefonoAdministrador` varchar(45) DEFAULT NULL,
  `ImagenPerfilAdministrador` varchar(45) DEFAULT NULL,
  `EstadoCuenta` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambiodeturno`
--

CREATE TABLE `cambiodeturno` (
  `IdCambiodeTurno` int(11) NOT NULL,
  `IdOperador1` varchar(45) DEFAULT NULL,
  `IdOperador2` varchar(45) DEFAULT NULL,
  `LocalizacionCambioTurno` varchar(45) DEFAULT NULL,
  `FechaRegistroSolicitud` date DEFAULT NULL,
  `TipodeTurnoCambiar` varchar(45) DEFAULT NULL,
  `TipodeTurnoDevolver` varchar(45) DEFAULT NULL,
  `FechaARealizarCambio` date DEFAULT NULL,
  `FechadevolucionTurno` date DEFAULT NULL,
  `Tipodeturnoarealizar` varchar(45) DEFAULT NULL,
  `ComentarioCambiodeTurno` mediumtext,
  `IdTurnos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `IdAdministrador` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalletipoturno`
--

INSERT INTO `detalletipoturno` (`IdDetalleTipoTurno`, `HoraInicioTurno`, `HoraTerminoTurno`, `AbreviacionTurno`, `DescripcionDetalleTipoTurno`, `IdTurnos`, `IdAdministrador`) VALUES
(12, '08:00:00', '17:30:00', 'TM', 'Turno Manaña', NULL, 1),
(13, '14:00:00', '22:30:00', 'TT', 'Turno Manaña', NULL, 1),
(14, '22:30:00', '08:00:00', 'TN', 'Turno Noche', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `IdDocumentos` int(11) NOT NULL,
  `RutaDocumento` varchar(100) NOT NULL,
  `DescripcionDocumento` varchar(80) NOT NULL,
  `IdAdministrador` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_05_23_224850_create_roles_table', 1),
(3, '2019_05_23_225917_create_role_user_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `IdNotificacion` int(11) NOT NULL,
  `DetalleNotificacion` mediumtext,
  `FechaEmisionNotificacion` date DEFAULT NULL,
  `IdTurnos` int(11) DEFAULT NULL,
  `IdCambiodeTurno` int(11) DEFAULT NULL,
  `IdSolicitudes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `IdOperador` int(11) NOT NULL,
  `NombreOperador` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `TelefonoOperador` varchar(45) DEFAULT NULL,
  `EstadoCuentaOperador` tinyint(4) DEFAULT NULL,
  `FechaAltaOperador` date DEFAULT NULL,
  `IdAdministrador` bigint(20) DEFAULT NULL,
  `RutOperador` varchar(45) DEFAULT NULL,
  `LocacionOperador` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`IdOperador`, `NombreOperador`, `Password`, `Correo`, `TelefonoOperador`, `EstadoCuentaOperador`, `FechaAltaOperador`, `IdAdministrador`, `RutOperador`, `LocacionOperador`, `created_at`, `updated_at`) VALUES
(32, 'Dios', 'dslkjjlk', 'kl', 'jhkl', 1, '2019-05-25', 2, 'Dios', 'kljh', '2019-05-25 04:59:54', '2019-05-25 04:59:54'),
(33, 'Pipe', 'asdas', 'dasd', 'asd', 1, '2019-05-25', 2, 'asd', 'asdasd', '2019-05-25 08:06:19', '2019-05-25 08:06:19'),
(38, 'Pipoe Zamorano', '123456', 'felipe@felipe.cl', '999999999', 1, '2019-05-26', 1, '13627165-2', 'Luna', '2019-05-26 22:44:19', '2019-05-27 02:44:19'),
(39, 'Josefa Zamorano', '123456789', 'josefa@josefa.cl', '888888888', 1, '2019-05-26', 1, '13627165-2', 'Casa', '2019-05-27 02:03:37', '2019-05-27 02:03:37'),
(40, 'Benjamin Rivas', '565454665', 'benja@benja.cl', '123132123132132', 1, '2019-05-26', 1, '13627165-2', 'Tobalaba', '2019-05-27 02:05:26', '2019-05-27 02:05:26'),
(41, 'Brayn Suarez', '999999999999999', 'brayn@brayn.cl', '99999999', 1, '2019-05-26', 1, '5354905-5', 'Casa', '2019-05-27 02:28:21', '2019-05-27 02:28:21'),
(42, 'gabriel', '123456789', 'g.millaquiensuarez@gmail.com', '9999999999999999', 1, '2019-05-27', 1, '19796466-9', 'nasa', '2019-05-28 00:46:51', '2019-05-28 00:46:51'),
(43, 'gabriel', 'awsdasdasd', 'test@test', '3333', 1, '2019-05-27', 2, '10593209-k', 'nasa', '2019-05-28 00:55:59', '2019-05-28 00:55:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadorconturno`
--

CREATE TABLE `operadorconturno` (
  `IdOperadorConTurno` int(11) NOT NULL,
  `NombreTrabajador` varchar(45) NOT NULL,
  `IdAdministrador` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadorexterno`
--

CREATE TABLE `operadorexterno` (
  `IdOperadorExterno` int(11) NOT NULL,
  `NombreOperadorEx` varchar(45) DEFAULT NULL,
  `ApellidoOperadorEX` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `TelefonoOperadorEX` varchar(45) DEFAULT NULL,
  `EstadoCuentaOperadorEX` tinyint(4) DEFAULT NULL,
  `FechaAltaOperadorEX` date DEFAULT NULL,
  `FechaBajaOperadorEX` date DEFAULT NULL,
  `IdAdministrador` int(11) DEFAULT NULL,
  `RutOperadorExterno` varchar(45) DEFAULT NULL,
  `LocalizacionExterno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operadorexterno`
--

INSERT INTO `operadorexterno` (`IdOperadorExterno`, `NombreOperadorEx`, `ApellidoOperadorEX`, `Password`, `Correo`, `TelefonoOperadorEX`, `EstadoCuentaOperadorEX`, `FechaAltaOperadorEX`, `FechaBajaOperadorEX`, `IdAdministrador`, `RutOperadorExterno`, `LocalizacionExterno`) VALUES
(19, 'Gabriel Externo', NULL, '123456789', 'gabrielexterno@externo.cl', '5555555555', 1, '2019-05-26', NULL, 1, '5354905-5', 'pieza2'),
(20, 'Pedro Externpo', NULL, 'asdsdaasd', 'pedro@externo.cl', '435345', 2, '2019-05-26', NULL, 1, '5354905-5', 'pieza 3'),
(21, 'Josefa Externo', NULL, '2132131231', 'josefa@josefa.cl', '5464654', 2, '2019-05-26', NULL, 1, '5354905-5', '56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador_turno`
--

CREATE TABLE `operador_turno` (
  `idOperador_Turno` int(11) NOT NULL,
  `IdOperadorConTurno` int(11) NOT NULL,
  `IdTurnoDiaAsignado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrodeturno`
--

CREATE TABLE `registrodeturno` (
  `IdRegistroDeTurno` int(11) NOT NULL,
  `IdOperador` int(11) DEFAULT NULL,
  `IdAdministradorAsignante` int(11) DEFAULT NULL,
  `IdOperadorExterno` int(11) DEFAULT NULL,
  `Idturnos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovacaciones`
--

CREATE TABLE `registrovacaciones` (
  `IdRegistroVacaciones` int(11) NOT NULL,
  `LocalizacionTrabajador` varchar(45) DEFAULT NULL,
  `FechaDesde` date DEFAULT NULL,
  `FechaHasta` date DEFAULT NULL,
  `ComentarioSolicitudVacaciones` mediumtext,
  `IdTurnos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-05-24 03:26:19', '2019-05-24 03:26:19'),
(2, 'user', 'User', '2019-05-24 03:26:19', '2019-05-24 03:26:19'),
(3, 'operador', 'Operador', '2019-05-24 03:26:19', '2019-05-24 03:26:19'),
(4, 'admin', 'Administrator', '2019-05-24 04:01:44', '2019-05-24 04:01:44'),
(5, 'user', 'User', '2019-05-24 04:01:44', '2019-05-24 04:01:44'),
(6, 'operador', 'Operador', '2019-05-24 04:01:44', '2019-05-24 04:01:44'),
(7, 'admin', 'Administrator', '2019-05-24 04:03:42', '2019-05-24 04:03:42'),
(8, 'user', 'User', '2019-05-24 04:03:42', '2019-05-24 04:03:42'),
(9, 'operador', 'Operador', '2019-05-24 04:03:42', '2019-05-24 04:03:42'),
(10, 'test', 'Para testear', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, '2019-05-24 04:03:42', '2019-05-24 04:03:42'),
(3, 1, 5, '2019-05-24 04:03:42', '2019-05-24 04:03:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `IdSolicitudes` int(11) NOT NULL,
  `TipoSolicitud` varchar(45) DEFAULT NULL,
  `DetalleSolicitud` mediumtext,
  `FechaEmisionSoli` date DEFAULT NULL,
  `FechaRechazoSoli` date DEFAULT NULL,
  `FechaAprobacionSoli` date DEFAULT NULL,
  `IdAdministrador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnodiaasignado`
--

CREATE TABLE `turnodiaasignado` (
  `IdTurnoDiaAsignado` int(11) NOT NULL,
  `DiaDeLaSemanaAsignado` varchar(45) DEFAULT NULL,
  `MesDeLaSemanaAsignado` varchar(45) DEFAULT NULL,
  `AnoDeLaSemanaAsignado` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `IdTurnos` int(11) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `FechaModificacion` date NOT NULL,
  `DiaSemana` varchar(45) DEFAULT NULL,
  `TurnoAsignado` varchar(45) DEFAULT NULL,
  `IdOperador` int(11) DEFAULT NULL,
  `TurnoBorrador` varchar(45) DEFAULT NULL,
  `IdOperadorExterno` int(11) DEFAULT NULL,
  `IdNotificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'gabo', 'g.millaquiensuarez@gmail.com', NULL, '$2y$10$euJyzpmo0ev5l438/SZTW.lo4ixNjsqyHQstKijtmAGk9Gw39GfMC', NULL, '2019-05-22 07:51:52', '2019-05-22 07:51:52'),
(2, 'Pedro millaquien', 'pedro@pedro.cl', NULL, '$2y$10$lGFerbsO4JyOviyZBso1mOlZ5DQxBxZNL45NIwe.zouwpUWLysS2m', NULL, '2019-05-23 09:05:19', '2019-05-23 09:05:19'),
(3, 'Felipe Zamorano', 'felipe@felipe.cl', NULL, '$2y$10$ZX8qsc7v8dnQoWR/Jim39.muna.3UgFC9F5tkmTqvpOTGQGRebGSe', NULL, '2019-05-23 21:36:50', '2019-05-23 21:36:50'),
(4, 'User', 'user@example.com', NULL, '$2y$10$hAIjz5Rv8Cap.iE8lYs5Y.m4BF7K0XDePMOrCPp4yMrh0IEdEuOWe', NULL, '2019-05-24 04:03:42', '2019-05-24 04:03:42'),
(5, 'Admin', 'admin@example.com', NULL, '$2y$10$o.VOakOV0nG3o4MYOwSu1eEEUbDB5k0JkrS1tqRzoOzO5ODUpr8Ty', NULL, '2019-05-24 04:03:42', '2019-05-24 04:03:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdministrador`);

--
-- Indices de la tabla `cambiodeturno`
--
ALTER TABLE `cambiodeturno`
  ADD PRIMARY KEY (`IdCambiodeTurno`),
  ADD KEY `IdTurnos_idx` (`IdTurnos`);

--
-- Indices de la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  ADD PRIMARY KEY (`IdDetalleTipoTurno`),
  ADD KEY `IdTurnos_idx` (`IdTurnos`),
  ADD KEY `IdAdministrador FK_idx` (`IdAdministrador`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`IdDocumentos`),
  ADD KEY `IdAdministradorFkDocumentos_idx` (`IdAdministrador`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`IdNotificacion`),
  ADD KEY `IdTurnos_idx` (`IdTurnos`),
  ADD KEY `IdCambiodeTurnos_idx` (`IdCambiodeTurno`),
  ADD KEY `IdSolicitudes_idx` (`IdSolicitudes`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`IdOperador`);

--
-- Indices de la tabla `operadorconturno`
--
ALTER TABLE `operadorconturno`
  ADD PRIMARY KEY (`IdOperadorConTurno`),
  ADD KEY `IdOperadorConTurnoFkUsers_idx` (`IdAdministrador`);

--
-- Indices de la tabla `operadorexterno`
--
ALTER TABLE `operadorexterno`
  ADD PRIMARY KEY (`IdOperadorExterno`),
  ADD KEY `IdAdministrador_idx` (`IdAdministrador`);

--
-- Indices de la tabla `operador_turno`
--
ALTER TABLE `operador_turno`
  ADD PRIMARY KEY (`idOperador_Turno`),
  ADD KEY `IdTurnoDiaAsignadoFK_idx` (`IdTurnoDiaAsignado`),
  ADD KEY `IdOperadorConTurno_idx` (`IdOperadorConTurno`);

--
-- Indices de la tabla `registrodeturno`
--
ALTER TABLE `registrodeturno`
  ADD PRIMARY KEY (`IdRegistroDeTurno`),
  ADD KEY `IdTurnos_idx` (`Idturnos`),
  ADD KEY `IdOperador_idx` (`IdOperador`),
  ADD KEY `IdOperadorExterno_idx` (`IdOperadorExterno`);

--
-- Indices de la tabla `registrovacaciones`
--
ALTER TABLE `registrovacaciones`
  ADD PRIMARY KEY (`IdRegistroVacaciones`),
  ADD KEY `IdTurnos_idx` (`IdTurnos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`IdSolicitudes`),
  ADD KEY `IdAdministrador_idx` (`IdAdministrador`);

--
-- Indices de la tabla `turnodiaasignado`
--
ALTER TABLE `turnodiaasignado`
  ADD PRIMARY KEY (`IdTurnoDiaAsignado`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`IdTurnos`),
  ADD KEY `IdOperadorExterno_idx` (`IdOperadorExterno`),
  ADD KEY `Idoperador_idx` (`IdOperador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cambiodeturno`
--
ALTER TABLE `cambiodeturno`
  MODIFY `IdCambiodeTurno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  MODIFY `IdDetalleTipoTurno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `IdDocumentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `IdNotificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operador`
--
ALTER TABLE `operador`
  MODIFY `IdOperador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `operadorconturno`
--
ALTER TABLE `operadorconturno`
  MODIFY `IdOperadorConTurno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operadorexterno`
--
ALTER TABLE `operadorexterno`
  MODIFY `IdOperadorExterno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `operador_turno`
--
ALTER TABLE `operador_turno`
  MODIFY `idOperador_Turno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrodeturno`
--
ALTER TABLE `registrodeturno`
  MODIFY `IdRegistroDeTurno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `IdSolicitudes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turnodiaasignado`
--
ALTER TABLE `turnodiaasignado`
  MODIFY `IdTurnoDiaAsignado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `IdTurnos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cambiodeturno`
--
ALTER TABLE `cambiodeturno`
  ADD CONSTRAINT `IdTurnosFkCambiodeTurno` FOREIGN KEY (`IdTurnos`) REFERENCES `turnos` (`IdTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalletipoturno`
--
ALTER TABLE `detalletipoturno`
  ADD CONSTRAINT `IdTurnosFkDetalleTipoTurno` FOREIGN KEY (`IdTurnos`) REFERENCES `turnos` (`IdTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `IdCambiodeTurnosFkNotificacion` FOREIGN KEY (`IdCambiodeTurno`) REFERENCES `cambiodeturno` (`IdCambiodeTurno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdSolicitudesFkNotificacion` FOREIGN KEY (`IdSolicitudes`) REFERENCES `solicitudes` (`IdSolicitudes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdTurnosFkNotificacion` FOREIGN KEY (`IdTurnos`) REFERENCES `turnos` (`IdTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `operadorconturno`
--
ALTER TABLE `operadorconturno`
  ADD CONSTRAINT `IdOperadorConTurnoFkUsers` FOREIGN KEY (`IdAdministrador`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `operador_turno`
--
ALTER TABLE `operador_turno`
  ADD CONSTRAINT `IdOperadorConTurno` FOREIGN KEY (`IdOperadorConTurno`) REFERENCES `operadorconturno` (`IdOperadorConTurno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdTurnoDiaAsignadoFK` FOREIGN KEY (`IdTurnoDiaAsignado`) REFERENCES `turnodiaasignado` (`IdTurnoDiaAsignado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrodeturno`
--
ALTER TABLE `registrodeturno`
  ADD CONSTRAINT `IdOperadorExternoFkRegistroDeTurno` FOREIGN KEY (`IdOperadorExterno`) REFERENCES `operadorexterno` (`IdOperadorExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdOperadorFkRegistroDeTurno` FOREIGN KEY (`IdOperador`) REFERENCES `operador` (`IdOperador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdTurnosFkRegistroDeTurno` FOREIGN KEY (`Idturnos`) REFERENCES `turnos` (`IdTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrovacaciones`
--
ALTER TABLE `registrovacaciones`
  ADD CONSTRAINT `IdTurnosFkRegistroVacaciones` FOREIGN KEY (`IdTurnos`) REFERENCES `turnos` (`IdTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `IdAdministradorFkSolicitudes` FOREIGN KEY (`IdAdministrador`) REFERENCES `administrador` (`IdAdministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `IdOperadorExternoFKTurnos` FOREIGN KEY (`IdOperadorExterno`) REFERENCES `operadorexterno` (`IdOperadorExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdoperadorFKTurnos` FOREIGN KEY (`IdOperador`) REFERENCES `operador` (`IdOperador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
