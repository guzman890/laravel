SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinica` DEFAULT CHARACTER SET utf8 ;
USE `clinica` ;

-- -----------------------------------------------------
-- Table `clinica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`paciente` (
  `dni` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `edad` INT NOT NULL,
  `userid` BIGINT(20) NOT NULL,
  PRIMARY KEY (`dni`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`medico` (
  `idmedico` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmedico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica`.`especialidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`especialidad` (
  `idespecialidad` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idespecialidad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica`.`consultorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`consultorio` (
  `idconsultorio` INT NOT NULL AUTO_INCREMENT,
  `piso` INT NOT NULL,
  `numero` INT NOT NULL,
  PRIMARY KEY (`idconsultorio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica`.`citas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`citas` (
  `idcitas` INT NOT NULL,
  `consultorio_idconsultorio` INT NOT NULL,
  `medico_idmedico` INT NOT NULL,
  `especialidad_idespecialidad` INT NOT NULL,
  `paciente_dni` INT NOT NULL,
  `fecha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcitas`),
  INDEX `fk_citas_consultorio_idx` (`consultorio_idconsultorio` ASC),
  INDEX `fk_citas_medico1_idx` (`medico_idmedico` ASC),
  INDEX `fk_citas_especialidad1_idx` (`especialidad_idespecialidad` ASC),
  INDEX `fk_citas_paciente1_idx` (`paciente_dni` ASC),
  CONSTRAINT `fk_citas_consultorio`
    FOREIGN KEY (`consultorio_idconsultorio`)
    REFERENCES `clinica`.`consultorio` (`idconsultorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_medico1`
    FOREIGN KEY (`medico_idmedico`)
    REFERENCES `clinica`.`medico` (`idmedico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_especialidad1`
    FOREIGN KEY (`especialidad_idespecialidad`)
    REFERENCES `clinica`.`especialidad` (`idespecialidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_paciente1`
    FOREIGN KEY (`paciente_dni`)
    REFERENCES `clinica`.`paciente` (`dni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
