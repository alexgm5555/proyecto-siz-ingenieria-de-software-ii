SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE `SIZ`;
CREATE DATABASE `SIZ` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `SIZ`;

-- -----------------------------------------------------
-- Table `mydb`.`Ciudades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Ciudades` (
  `idCiudades` INT NOT NULL AUTO_INCREMENT ,
  `Nombre_Ciudad` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCiudades`) ,
  UNIQUE INDEX `Nombre_Ciudad_UNIQUE` (`Nombre_Ciudad` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`UsuariosParticulares`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`UsuariosParticulares` (
  `Nombres` VARCHAR(45) NOT NULL ,
  `Apellidos` VARCHAR(45) NOT NULL ,
  `Cedula` INT NOT NULL ,
  `Ciudad` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `UserName` VARCHAR(45) NOT NULL ,
  `Password` VARCHAR(45) NOT NULL ,
  UNIQUE INDEX `User_UNIQUE` (`UserName` ASC) ,
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC) ,
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) ,
  PRIMARY KEY (`Cedula`) ,
  INDEX `FK_Ciudades` (`Ciudad` ASC) ,
  CONSTRAINT `FK_Ciudades`
    FOREIGN KEY (`Ciudad` )
    REFERENCES `mydb`.`Ciudades` (`Nombre_Ciudad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TiposUsuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`TiposUsuarios` (
  `idTiposUsuarios` INT NOT NULL AUTO_INCREMENT ,
  `TipoUser` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTiposUsuarios`) ,
  UNIQUE INDEX `TipoUser_UNIQUE` (`TipoUser` ASC) ,
  UNIQUE INDEX `idTiposUsuarios_UNIQUE` (`idTiposUsuarios` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tipos_Animal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Tipos_Animal` (
  `idTipos_Animal` INT NOT NULL AUTO_INCREMENT ,
  `Tipo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTipos_Animal`) ,
  UNIQUE INDEX `Tipo_UNIQUE` (`Tipo` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Estado_Animal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Estado_Animal` (
  `idEstado_Animal` INT NOT NULL AUTO_INCREMENT ,
  `Estado` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idEstado_Animal`) ,
  UNIQUE INDEX `Estado_UNIQUE` (`Estado` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Animal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Animal` (
  `idAnimal` INT NOT NULL AUTO_INCREMENT ,
  `CC_DueÃ±o` INT NOT NULL ,
  `TipoAnimal` VARCHAR(45) NOT NULL ,
  `EstadoAnimal` VARCHAR(45) NOT NULL ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Sexo` VARCHAR(45) NOT NULL ,
  `Raza` VARCHAR(45) NOT NULL ,
  `Color` VARCHAR(45) NOT NULL ,
  `TamaÃ±o` VARCHAR(45) NOT NULL ,
  `Edad` VARCHAR(45) NOT NULL ,
  `Peso` VARCHAR(45) NOT NULL ,
  `Foto` LONGBLOB NULL ,
  `TipoImagen` VARCHAR(255) NULL ,
  `Habilidad` TEXT NULL ,
  PRIMARY KEY (`idAnimal`) ,
  INDEX `FK_Usuarios` (`CC_DueÃ±o` ASC) ,
  INDEX `FK_Tipo_Animal` (`TipoAnimal` ASC) ,
  INDEX `FK_Estado_Animal` (`EstadoAnimal` ASC) ,
  CONSTRAINT `FK_Usuarios`
    FOREIGN KEY (`CC_DueÃ±o` )
    REFERENCES `mydb`.`UsuariosParticulares` (`Cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tipo_Animal`
    FOREIGN KEY (`TipoAnimal` )
    REFERENCES `mydb`.`Tipos_Animal` (`Tipo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Estado_Animal`
    FOREIGN KEY (`EstadoAnimal` )
    REFERENCES `mydb`.`Estado_Animal` (`Estado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Estados_Solicitud`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Estados_Solicitud` (
  `idEstados_Solicitud` INT NOT NULL AUTO_INCREMENT ,
  `Estado` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idEstados_Solicitud`) ,
  UNIQUE INDEX `Estado_UNIQUE` (`Estado` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Solicitud_Adopcion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Solicitud_Adopcion` (
  `idSolicitud_Adopcion` INT NOT NULL AUTO_INCREMENT ,
  `CC_Solicitante` INT NOT NULL ,
  `id_Animal` INT NOT NULL ,
  `Estado_Solicitud` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idSolicitud_Adopcion`) ,
  INDEX `FK_Usuario` (`CC_Solicitante` ASC) ,
  INDEX `FK_Animal` (`id_Animal` ASC) ,
  INDEX `FK_Estados` (`Estado_Solicitud` ASC) ,
  CONSTRAINT `FK_Usuario`
    FOREIGN KEY (`CC_Solicitante` )
    REFERENCES `mydb`.`UsuariosParticulares` (`Cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Animal`
    FOREIGN KEY (`id_Animal` )
    REFERENCES `mydb`.`Animal` (`idAnimal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Estados`
    FOREIGN KEY (`Estado_Solicitud` )
    REFERENCES `mydb`.`Estados_Solicitud` (`Estado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`UsuariosZoonosis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`UsuariosZoonosis` (
  `idUsuariosZoonosis` INT NOT NULL AUTO_INCREMENT ,
  `TipoUsuario` VARCHAR(45) NOT NULL ,
  `Nombres` VARCHAR(45) NOT NULL ,
  `Apellidos` VARCHAR(45) NOT NULL ,
  `Cedula` INT NOT NULL ,
  `Ciudad` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `UserName` VARCHAR(45) NOT NULL ,
  `PassWord` VARCHAR(45) NOT NULL ,
  `SedeLaboral` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idUsuariosZoonosis`) ,
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC) ,
  INDEX `FK_Tipos_de_Usuario` (`TipoUsuario` ASC) ,
  INDEX `FK_Ciudades` (`Ciudad` ASC) ,
  CONSTRAINT `FK_Tipos_de_Usuario`
    FOREIGN KEY (`TipoUsuario` )
    REFERENCES `mydb`.`TiposUsuarios` (`TipoUser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Ciudades`
    FOREIGN KEY (`Ciudad` )
    REFERENCES `mydb`.`Ciudades` (`Nombre_Ciudad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
