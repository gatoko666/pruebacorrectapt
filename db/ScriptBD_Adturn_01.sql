-- MySQL Script generated by MySQL Workbench
-- Wed May 29 00:34:47 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema adturndb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adturndb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adturndb` DEFAULT CHARACTER SET utf8 ;
USE `adturndb` ;

-- -----------------------------------------------------
-- Table `adturndb`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`administrador` (
  `IdAdministrador` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreAdministrador` VARCHAR(45) NOT NULL,
  `CorreoAdministrador` VARCHAR(45) NOT NULL,
  `PasswordAdministrador` VARCHAR(45) NOT NULL,
  `RutAdministrador` VARCHAR(45) NOT NULL,
  `TelefonoAdministrador` VARCHAR(45) NULL DEFAULT NULL,
  `ImagenPerfilAdministrador` VARCHAR(45) NULL DEFAULT NULL,
  `EstadoCuenta` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`IdAdministrador`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`operadorexterno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`operadorexterno` (
  `IdOperadorExterno` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreOperadorEx` VARCHAR(45) NULL DEFAULT NULL,
  `Password` VARCHAR(45) NULL DEFAULT NULL,
  `Correo` VARCHAR(45) NULL DEFAULT NULL,
  `TelefonoOperadorEX` VARCHAR(45) NULL DEFAULT NULL,
  `EstadoCuentaOperadorEX` TINYINT(4) NULL DEFAULT NULL,
  `FechaAltaOperadorEX` DATE NULL DEFAULT NULL,
  `FechaBajaOperadorEX` DATE NULL DEFAULT NULL,
  `IdAdministrador` INT(11) NULL DEFAULT NULL,
  `RutOperadorExterno` VARCHAR(45) NULL DEFAULT NULL,
  `LocalizacionExterno` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`IdOperadorExterno`),
  INDEX `IdAdministrador_idx` (`IdAdministrador` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`operador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`operador` (
  `IdOperador` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreOperador` VARCHAR(45) NULL DEFAULT NULL,
  `Password` VARCHAR(45) NULL DEFAULT NULL,
  `Correo` VARCHAR(45) NULL DEFAULT NULL,
  `TelefonoOperador` VARCHAR(45) NULL DEFAULT NULL,
  `ImagenPerfilOperador` VARCHAR(45) NULL DEFAULT NULL,
  `EstadoCuentaOperador` TINYINT(4) NULL DEFAULT NULL,
  `FechaAltaOperador` DATE NULL DEFAULT NULL,
  `FechaBajaOperador` DATE NULL DEFAULT NULL,
  `IdAdministrador` BIGINT(20) NULL DEFAULT NULL,
  `RutOperador` VARCHAR(45) NULL DEFAULT NULL,
  `LocacionOperador` VARCHAR(45) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`IdOperador`))
ENGINE = InnoDB
AUTO_INCREMENT = 36
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`turnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`turnos` (
  `IdTurnos` INT(11) NOT NULL AUTO_INCREMENT,
  `FechaPublicacion` DATE NOT NULL,
  `FechaModificacion` DATE NOT NULL,
  `DiaSemana` VARCHAR(45) NULL DEFAULT NULL,
  `TurnoAsignado` VARCHAR(45) NULL DEFAULT NULL,
  `IdOperador` INT(11) NULL DEFAULT NULL,
  `TurnoBorrador` VARCHAR(45) NULL DEFAULT NULL,
  `IdRegistroVacaciones` INT(11) NULL DEFAULT NULL,
  `IdOperadorExterno` INT(11) NULL DEFAULT NULL,
  `IdNotificacion` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdTurnos`),
  INDEX `IdOperadorExterno_idx` (`IdOperadorExterno` ASC),
  INDEX `Idoperador_idx` (`IdOperador` ASC),
  CONSTRAINT `IdOperadorExternoFKTurnos`
    FOREIGN KEY (`IdOperadorExterno`)
    REFERENCES `adturndb`.`operadorexterno` (`IdOperadorExterno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdoperadorFKTurnos`
    FOREIGN KEY (`IdOperador`)
    REFERENCES `adturndb`.`operador` (`IdOperador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`cambiodeturno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`cambiodeturno` (
  `IdCambiodeTurno` INT(11) NOT NULL AUTO_INCREMENT,
  `IdOperador1` VARCHAR(45) NULL DEFAULT NULL,
  `IdOperador2` VARCHAR(45) NULL DEFAULT NULL,
  `LocalizacionCambioTurno` VARCHAR(45) NULL DEFAULT NULL,
  `FechaRegistroSolicitud` DATE NULL DEFAULT NULL,
  `TipodeTurnoCambiar` VARCHAR(45) NULL DEFAULT NULL,
  `TipodeTurnoDevolver` VARCHAR(45) NULL DEFAULT NULL,
  `FechaARealizarCambio` DATE NULL DEFAULT NULL,
  `FechadevolucionTurno` DATE NULL DEFAULT NULL,
  `Tipodeturnoarealizar` VARCHAR(45) NULL DEFAULT NULL,
  `ComentarioCambiodeTurno` MEDIUMTEXT NULL DEFAULT NULL,
  `IdTurnos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdCambiodeTurno`),
  INDEX `IdTurnos_idx` (`IdTurnos` ASC),
  CONSTRAINT `IdTurnosFkCambiodeTurno`
    FOREIGN KEY (`IdTurnos`)
    REFERENCES `adturndb`.`turnos` (`IdTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`detalletipoturno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`detalletipoturno` (
  `IdDetalleTipoTurno` INT(11) NOT NULL AUTO_INCREMENT,
  `HoraInicioTurno` TIME NULL DEFAULT NULL,
  `HoraTerminoTurno` TIME NULL DEFAULT NULL,
  `AbreviacionTurno` VARCHAR(100) NULL DEFAULT NULL,
  `DescripcionDetalleTipoTurno` MEDIUMTEXT NULL DEFAULT NULL,
  `IdTurnos` INT(11) NULL DEFAULT NULL,
  `IdAdministrador` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`IdDetalleTipoTurno`),
  INDEX `IdTurnos_idx` (`IdTurnos` ASC),
  INDEX `IdAdministrador FK_idx` (`IdAdministrador` ASC),
  CONSTRAINT `IdTurnosFkDetalleTipoTurno`
    FOREIGN KEY (`IdTurnos`)
    REFERENCES `adturndb`.`turnos` (`IdTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `adturndb`.`documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`documentos` (
  `IdDocumentos` INT(11) NOT NULL AUTO_INCREMENT,
  `RutaDocumento` VARCHAR(100) NOT NULL,
  `DescripcionDocumento` VARCHAR(80) NOT NULL,
  `IdAdministrador` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`IdDocumentos`),
  INDEX `IdAdministradorFkDocumentos_idx` (`IdAdministrador` ASC),
  CONSTRAINT `IdAdministradorFkDocumentos`
    FOREIGN KEY (`IdAdministrador`)
    REFERENCES `adturndb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `adturndb`.`solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`solicitudes` (
  `IdSolicitudes` INT(11) NOT NULL AUTO_INCREMENT,
  `TipoSolicitud` VARCHAR(45) NULL DEFAULT NULL,
  `DetalleSolicitud` MEDIUMTEXT NULL DEFAULT NULL,
  `FechaEmisionSoli` DATE NULL DEFAULT NULL,
  `FechaRechazoSoli` DATE NULL DEFAULT NULL,
  `FechaAprobacionSoli` DATE NULL DEFAULT NULL,
  `IdAdministrador` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdSolicitudes`),
  INDEX `IdAdministrador_idx` (`IdAdministrador` ASC),
  CONSTRAINT `IdAdministradorFkSolicitudes`
    FOREIGN KEY (`IdAdministrador`)
    REFERENCES `adturndb`.`administrador` (`IdAdministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`notificacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`notificacion` (
  `IdNotificacion` INT(11) NOT NULL AUTO_INCREMENT,
  `DetalleNotificacion` MEDIUMTEXT NULL DEFAULT NULL,
  `FechaEmisionNotificacion` DATE NULL DEFAULT NULL,
  `IdTurnos` INT(11) NULL DEFAULT NULL,
  `IdCambiodeTurno` INT(11) NULL DEFAULT NULL,
  `IdSolicitudes` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdNotificacion`),
  INDEX `IdTurnos_idx` (`IdTurnos` ASC),
  INDEX `IdCambiodeTurnos_idx` (`IdCambiodeTurno` ASC),
  INDEX `IdSolicitudes_idx` (`IdSolicitudes` ASC),
  CONSTRAINT `IdCambiodeTurnosFkNotificacion`
    FOREIGN KEY (`IdCambiodeTurno`)
    REFERENCES `adturndb`.`cambiodeturno` (`IdCambiodeTurno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdSolicitudesFkNotificacion`
    FOREIGN KEY (`IdSolicitudes`)
    REFERENCES `adturndb`.`solicitudes` (`IdSolicitudes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdTurnosFkNotificacion`
    FOREIGN KEY (`IdTurnos`)
    REFERENCES `adturndb`.`turnos` (`IdTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`registrodeturno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`registrodeturno` (
  `IdRegistroDeTurno` INT(11) NOT NULL AUTO_INCREMENT,
  `IdOperador` INT(11) NULL DEFAULT NULL,
  `IdAdministradorAsignante` INT(11) NULL DEFAULT NULL,
  `IdOperadorExterno` INT(11) NULL DEFAULT NULL,
  `Idturnos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdRegistroDeTurno`),
  INDEX `IdTurnos_idx` (`Idturnos` ASC),
  INDEX `IdOperador_idx` (`IdOperador` ASC),
  INDEX `IdOperadorExterno_idx` (`IdOperadorExterno` ASC),
  CONSTRAINT `IdOperadorExternoFkRegistroDeTurno`
    FOREIGN KEY (`IdOperadorExterno`)
    REFERENCES `adturndb`.`operadorexterno` (`IdOperadorExterno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdOperadorFkRegistroDeTurno`
    FOREIGN KEY (`IdOperador`)
    REFERENCES `adturndb`.`operador` (`IdOperador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdTurnosFkRegistroDeTurno`
    FOREIGN KEY (`Idturnos`)
    REFERENCES `adturndb`.`turnos` (`IdTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`registrovacaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`registrovacaciones` (
  `IdRegistroVacaciones` INT(11) NOT NULL,
  `LocalizacionTrabajador` VARCHAR(45) NULL DEFAULT NULL,
  `FechaDesde` DATE NULL DEFAULT NULL,
  `FechaHasta` DATE NULL DEFAULT NULL,
  `ComentarioSolicitudVacaciones` MEDIUMTEXT NULL DEFAULT NULL,
  `IdTurnos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdRegistroVacaciones`),
  INDEX `IdTurnos_idx` (`IdTurnos` ASC),
  CONSTRAINT `IdTurnosFkRegistroVacaciones`
    FOREIGN KEY (`IdTurnos`)
    REFERENCES `adturndb`.`turnos` (`IdTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adturndb`.`role_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`role_user` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` INT(10) UNSIGNED NOT NULL,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `adturndb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`roles` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `adturndb`.`OperadorConTurno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`OperadorConTurno` (
  `IdOperadorConTurno` INT NOT NULL AUTO_INCREMENT,
  `NombreTrabajador` VARCHAR(45) NOT NULL,
  `IdAdministrador` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`IdOperadorConTurno`),
  INDEX `IdOperadorConTurnoFkUsers_idx` (`IdAdministrador` ASC),
  CONSTRAINT `IdOperadorConTurnoFkUsers`
    FOREIGN KEY (`IdAdministrador`)
    REFERENCES `adturndb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adturndb`.`TurnoDiaAsignado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`TurnoDiaAsignado` (
  `IdTurnoDiaAsignado` INT NOT NULL AUTO_INCREMENT,
  `DiaDeLaSemanaAsignado` VARCHAR(45) NULL,
  `MesDeLaSemanaAsignado` VARCHAR(45) NULL,
  `AnoDeLaSemanaAsignado` VARCHAR(45) NULL,
  PRIMARY KEY (`IdTurnoDiaAsignado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adturndb`.`Operador_Turno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adturndb`.`Operador_Turno` (
  `idOperador_Turno` INT NOT NULL AUTO_INCREMENT,
  `IdOperadorConTurno` INT NOT NULL,
  `IdTurnoDiaAsignado` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` VARCHAR(45) NULL,
  PRIMARY KEY (`idOperador_Turno`),
  INDEX `IdTurnoDiaAsignadoFK_idx` (`IdTurnoDiaAsignado` ASC),
  INDEX `IdOperadorConTurno_idx` (`IdOperadorConTurno` ASC),
  CONSTRAINT `IdTurnoDiaAsignadoFK`
    FOREIGN KEY (`IdTurnoDiaAsignado`)
    REFERENCES `adturndb`.`TurnoDiaAsignado` (`IdTurnoDiaAsignado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdOperadorConTurno`
    FOREIGN KEY (`IdOperadorConTurno`)
    REFERENCES `adturndb`.`OperadorConTurno` (`IdOperadorConTurno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;