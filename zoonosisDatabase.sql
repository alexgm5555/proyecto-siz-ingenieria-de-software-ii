SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `Zoonosis` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Zoonosis` ;

-- -----------------------------------------------------
-- Table `Zoonosis`.`Ciudades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Ciudades` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Ciudades` (
  `idCiudades` INT NOT NULL AUTO_INCREMENT ,
  `Nombre_Ciudad` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCiudades`) ,
  UNIQUE INDEX `Nombre_Ciudad_UNIQUE` (`Nombre_Ciudad` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`TiposUsuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`TiposUsuarios` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`TiposUsuarios` (
  `idTiposUsuarios` INT NOT NULL AUTO_INCREMENT ,
  `TipoUser` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTiposUsuarios`) ,
  UNIQUE INDEX `TipoUser_UNIQUE` (`TipoUser` ASC) ,
  UNIQUE INDEX `idTiposUsuarios_UNIQUE` (`idTiposUsuarios` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Sedes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Sedes` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Sedes` (
  `idSedes` INT NOT NULL AUTO_INCREMENT ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Ciudad` VARCHAR(45) NOT NULL ,
  `Direccion` VARCHAR(45) NOT NULL ,
  `Telefono` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idSedes`) ,
  UNIQUE INDEX `Direccion_UNIQUE` (`Direccion` ASC) ,
  UNIQUE INDEX `Nombre_UNIQUE` (`Nombre` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Usuarios` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Usuarios` (
  `idUsuarioParticulares` INT NOT NULL AUTO_INCREMENT ,
  `TipoUsuario` VARCHAR(45) NULL DEFAULT 'Particular' ,
  `Nombres` VARCHAR(45) NOT NULL ,
  `Apellidos` VARCHAR(45) NOT NULL ,
  `Cedula` BIGINT NOT NULL ,
  `Ciudad` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `Telefono_Fij` VARCHAR(45) NULL ,
  `Telefono_Cel` VARCHAR(45) NULL ,
  `Contrato` VARCHAR(45) NULL DEFAULT 'Particular',
  `SedeLaboral` VARCHAR(45) NULL DEFAULT 'Particular',
  `FechaInicio` DATETIME NULL DEFAULT now(),
  `SuelDevengado` VARCHAR(45) NULL DEFAULT 'Particular',
  `UserName` VARCHAR(45) NOT NULL ,  
  `Password` VARCHAR(45) NOT NULL ,
 
  UNIQUE INDEX `User_UNIQUE` (`UserName` ASC) ,
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC) ,
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) ,
  INDEX `FK_Ciudades` (`Ciudad` ASC) ,
  UNIQUE INDEX `idUsuarioParticulares_UNIQUE` (`idUsuarioParticulares` ASC) ,
  PRIMARY KEY (`idUsuarioParticulares`) ,
  INDEX `FK_Tipo_Usuario` (`TipoUsuario` ASC) ,
  INDEX `FK_Sede_Laboral` (`SedeLaboral` ASC) ,
  CONSTRAINT `FK_Ciudades`
    FOREIGN KEY (`Ciudad` )
    REFERENCES `Zoonosis`.`Ciudades` (`Nombre_Ciudad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tipo_Usuario`
    FOREIGN KEY (`TipoUsuario` )
    REFERENCES `Zoonosis`.`TiposUsuarios` (`TipoUser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Sede_Laboral`
    FOREIGN KEY (`SedeLaboral` )
    REFERENCES `Zoonosis`.`Sedes` (`Nombre` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Tipos_Animal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Tipos_Animal` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Tipos_Animal` (
  `idTipos_Animal` INT NOT NULL AUTO_INCREMENT ,
  `Tipo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTipos_Animal`) ,
  UNIQUE INDEX `Tipo_UNIQUE` (`Tipo` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Estado_Animal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Estado_Animal` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Estado_Animal` (
  `idEstado_Animal` INT NOT NULL AUTO_INCREMENT ,
  `Estado` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idEstado_Animal`) ,
  UNIQUE INDEX `Estado_UNIQUE` (`Estado` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Animal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Animal` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Animal` (
  `idAnimal` INT NOT NULL AUTO_INCREMENT ,
  `Tipo_Dueño` VARCHAR(45) NOT NULL ,
  `CC_Dueño` BIGINT NOT NULL ,
  `TipoAnimal` VARCHAR(45) NOT NULL ,
  `EstadoAnimal` VARCHAR(45) NOT NULL ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Sexo` VARCHAR(45) NOT NULL ,
  `Raza` VARCHAR(45) NOT NULL ,
  `Color` VARCHAR(45) NOT NULL ,
  `Tamaño` VARCHAR(45) NOT NULL ,
  `Edad` VARCHAR(45) NOT NULL ,
  `Peso` VARCHAR(45) NOT NULL ,
  `Foto` VARCHAR(255) NULL ,
  `TipoImagen` VARCHAR(255) NULL ,
  `Habilidad` TEXT NULL ,
  PRIMARY KEY (`idAnimal`) ,
  INDEX `FK_Usuarios` (`CC_Dueño` ASC) ,
  INDEX `FK_Tipo_Animal` (`TipoAnimal` ASC) ,
  INDEX `FK_Estado_Animal` (`EstadoAnimal` ASC) ,
  CONSTRAINT `FK_Usuarios`
    FOREIGN KEY (`CC_Dueño` )
    REFERENCES `Zoonosis`.`Usuarios` (`Cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tipo_Animal`
    FOREIGN KEY (`TipoAnimal` )
    REFERENCES `Zoonosis`.`Tipos_Animal` (`Tipo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Estado_Animal`
    FOREIGN KEY (`EstadoAnimal` )
    REFERENCES `Zoonosis`.`Estado_Animal` (`Estado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Estados_Solicitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Estados_Solicitud` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Estados_Solicitud` (
  `idEstados_Solicitud` INT NOT NULL AUTO_INCREMENT ,
  `Estado` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idEstados_Solicitud`) ,
  UNIQUE INDEX `Estado_UNIQUE` (`Estado` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Solicitud_Adopcion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Solicitud_Adopcion` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Solicitud_Adopcion` (
  `idSolicitud_Adopcion` INT NOT NULL AUTO_INCREMENT ,
  `CC_Solicitante` BIGINT NOT NULL ,
  `id_Animal` INT NOT NULL ,
  `Estado_Solicitud` VARCHAR(45) NOT NULL DEFAULT 'En Espera' ,
  `Dueño_Animal` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idSolicitud_Adopcion`) ,
  INDEX `FK_Usuario` (`CC_Solicitante` ASC) ,
  INDEX `FK_Animal` (`id_Animal` ASC) ,
  INDEX `FK_Estados` (`Estado_Solicitud` ASC) ,
  CONSTRAINT `FK_Usuario`
    FOREIGN KEY (`CC_Solicitante` )
    REFERENCES `Zoonosis`.`Usuarios` (`Cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Animal`
    FOREIGN KEY (`id_Animal` )
    REFERENCES `Zoonosis`.`Animal` (`idAnimal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Estados`
    FOREIGN KEY (`Estado_Solicitud` )
    REFERENCES `Zoonosis`.`Estados_Solicitud` (`Estado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Seguimiento_Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Seguimiento_Usuarios` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Seguimiento_Usuarios` (
  `idBitacora_Seguimiento` INT NOT NULL AUTO_INCREMENT ,
  `Fecha` DATETIME NOT NULL ,
  `Tipo_de_Operacion` VARCHAR(45) NOT NULL ,
  `Tipo_de_Usuario` VARCHAR(45) NOT NULL ,
  `Nombre_de_Usuario` VARCHAR(45) NOT NULL ,
  `Descripcion_de_Operacion` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`idBitacora_Seguimiento`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Zoonosis`.`Seguimiento_Animales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Zoonosis`.`Seguimiento_Animales` ;

CREATE  TABLE IF NOT EXISTS `Zoonosis`.`Seguimiento_Animales` (
  `idSeguimiento_Animales` INT NOT NULL AUTO_INCREMENT ,
  `Fecha` DATETIME NOT NULL ,
  `Tipo_de_Operacion` VARCHAR(45) NOT NULL ,
  `Tipo_de_Animal` VARCHAR(45) NOT NULL ,
  `Dueño` VARCHAR(45) NOT NULL ,
  `Motivo_de_Operacion` VARCHAR(45) NOT NULL ,
  `Descripcion_de_Operacion` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`idSeguimiento_Animales`) )
ENGINE = InnoDB;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`registro_usuario` $$
USE `Zoonosis`$$


create trigger registro_usuario before insert on Usuarios
for each row
insert into Seguimiento_Usuarios (Fecha, Tipo_de_Operacion, Tipo_de_Usuario, Nombre_de_Usuario, Descripcion_de_Operacion) 
values (now(), "Insert", new.TipoUsuario, new.UserName, "Un nuevo usuario se ha registrado en el sistema");

$$


DELIMITER ;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`borrado_usuario` $$
USE `Zoonosis`$$

create trigger borrado_usuario after delete on Usuarios
for each row
insert into Seguimiento_Usuarios (Fecha, Tipo_de_Operacion, Tipo_de_Usuario, Nombre_de_Usuario, Descripcion_de_Operacion) 
values (now(), "Delete", old.TipoUsuario, old.UserName, "Este Usuario ha sido eliminado del sistema");

$$


DELIMITER ;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`modificado_usuario` $$
USE `Zoonosis`$$

create trigger modificado_usuario after update on Usuarios
for each row
insert into Seguimiento_Usuarios (Fecha, Tipo_de_Operacion, Tipo_de_Usuario, Nombre_de_Usuario, Descripcion_de_Operacion) 
values (now(), "Update", old.TipoUsuario, old.UserName, "Los datos de este usuario han sido modificados");

$$


DELIMITER ;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`registro_animal` $$
USE `Zoonosis`$$

create trigger registro_animal before insert on Animal
for each row
insert into Seguimiento_Animales (Fecha, Tipo_de_Operacion, Tipo_de_Animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "Insert", new.TipoAnimal, new.Tipo_Dueño, "Operación", "Un nuevo animal se ha registrado en el sistema");

$$


DELIMITER ;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`borrado_animal` $$
USE `Zoonosis`$$

create trigger borrado_animal after delete on Animal
for each row
insert into Seguimiento_Animales (Fecha, Tipo_de_Operacion, Tipo_de_Animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "Delete", old.TipoAnimal, old.Tipo_Dueño, "Operación", "Este animal ha sido eliminado del sistema");

$$


DELIMITER ;

USE `Zoonosis`;

DELIMITER $$

USE `Zoonosis`$$
DROP TRIGGER IF EXISTS `Zoonosis`.`modificado_animal` $$
USE `Zoonosis`$$

create trigger modificado_animal after update on Animal
for each row
insert into Seguimiento_Animales (Fecha, Tipo_de_Operacion, Tipo_de_Animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "Update", old.TipoAnimal, old.Tipo_Dueño, "Operación", "Los datos de este animal han sido modificados");

$$


DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Ciudades`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Ciudades` (`idCiudades`, `Nombre_Ciudad`) VALUES (NULL, 'Bogotá');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`TiposUsuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`TiposUsuarios` (`idTiposUsuarios`, `TipoUser`) VALUES (NULL, 'Particular');
INSERT INTO `Zoonosis`.`TiposUsuarios` (`idTiposUsuarios`, `TipoUser`) VALUES (NULL, 'Empleado');
INSERT INTO `Zoonosis`.`TiposUsuarios` (`idTiposUsuarios`, `TipoUser`) VALUES (NULL, 'Administrador');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Sedes`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Sedes` (`idSedes`, `Nombre`, `Ciudad`, `Direccion`, `Telefono`, `Email`) VALUES (NULL, 'Sede Principal', 'Bogotá', 'Carrera 106A No 67 - 02 - Vía Engativá', '440 89 96 - 440 89 98', 'SedePrincipal@gmail.com');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Usuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Usuarios` (`idUsuarioParticulares`, `TipoUsuario`, `Nombres`, `Apellidos`, `Cedula`, `Ciudad`, `Email`, `Telefono_Fij`, `Telefono_Cel`, `UserName`, `Password`, `SedeLaboral`) VALUES (NULL, 'Administrador', 'Administrador', 'Administrador', 0, 'Bogotá', 'administrador@gmail.com', '0000000', '0000000000', 'admin', 'siz', 'Sede Principal');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Tipos_Animal`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Tipos_Animal` (`idTipos_Animal`, `Tipo`) VALUES (NULL, 'Perro');
INSERT INTO `Zoonosis`.`Tipos_Animal` (`idTipos_Animal`, `Tipo`) VALUES (NULL, 'Gato');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Estado_Animal`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Estado_Animal` (`idEstado_Animal`, `Estado`) VALUES (NULL, 'En Adopcion');
INSERT INTO `Zoonosis`.`Estado_Animal` (`idEstado_Animal`, `Estado`) VALUES (NULL, 'Perdido');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Zoonosis`.`Estados_Solicitud`
-- -----------------------------------------------------
START TRANSACTION;
USE `Zoonosis`;
INSERT INTO `Zoonosis`.`Estados_Solicitud` (`idEstados_Solicitud`, `Estado`) VALUES (NULL, 'En Espera');
INSERT INTO `Zoonosis`.`Estados_Solicitud` (`idEstados_Solicitud`, `Estado`) VALUES (NULL, 'Aceptada');
INSERT INTO `Zoonosis`.`Estados_Solicitud` (`idEstados_Solicitud`, `Estado`) VALUES (NULL, 'Rechazada');

COMMIT;