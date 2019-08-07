CREATE SCHEMA IF NOT EXISTS `clinica` DEFAULT CHARACTER SET latin1 ;
USE `clinica` ;

-- -----------------------------------------------------
-- Table `clinica`.`especialidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`especialidad` (
  `idespecialidad` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `estado` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idespecialidad`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinica`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`medico` (
  `idmedico` INT(11) NOT NULL AUTO_INCREMENT,
  `dni` INT(11) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `estado` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idmedico`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinica`.`medico_has_especialidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`medico_has_especialidad` (
  `medico_idmedico` INT(11) NOT NULL,
  `especialidad_idespecialidad` INT(11) NOT NULL,
  PRIMARY KEY (`medico_idmedico`, `especialidad_idespecialidad`),
  INDEX `fk_medico_has_especialidad_especialidad1_idx` (`especialidad_idespecialidad` ASC),
  INDEX `fk_medico_has_especialidad_medico_idx` (`medico_idmedico` ASC),
  CONSTRAINT `fk_medico_has_especialidad_especialidad1`
    FOREIGN KEY (`especialidad_idespecialidad`)
    REFERENCES `clinica`.`especialidad` (`idespecialidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medico_has_especialidad_medico`
    FOREIGN KEY (`medico_idmedico`)
    REFERENCES `clinica`.`medico` (`idmedico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`paciente` (
  `dni` INT(11) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `edad` INT(11) NOT NULL,
  `talla` DECIMAL(10,0) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `estado` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`dni`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;
