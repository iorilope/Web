-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Piraguismo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Piraguismo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Piraguismo` DEFAULT CHARACTER SET utf8 ;
USE `Piraguismo` ;

-- -----------------------------------------------------
-- Table `Piraguismo`.`Erabiltzailea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Erabiltzailea` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Izena` VARCHAR(20) NOT NULL,
  `Abizena` VARCHAR(25) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Pasahitza` VARCHAR(20) NOT NULL,
  `Mota` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Taldea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Taldea` (
  `Kodea` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Herria` VARCHAR(20) NOT NULL,
  `Izena` VARCHAR(30) NOT NULL,
  `Generoa` CHAR(1) NULL,
  PRIMARY KEY (`Kodea`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Entrenatzailea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Entrenatzailea` (
  `Nan` CHAR(9) NOT NULL,
  `Izena` VARCHAR(30) NOT NULL,
  `Abizena` VARCHAR(30) NOT NULL,
  `Telefonoa` CHAR(9) NULL,
  `Taldea_Kodea` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Nan`),
  INDEX `fk_Entrenatzailea_Taldea1_idx` (`Taldea_Kodea` ASC) VISIBLE,
  CONSTRAINT `fk_Entrenatzailea_Taldea1`
    FOREIGN KEY (`Taldea_Kodea`)
    REFERENCES `Piraguismo`.`Taldea` (`Kodea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Modalitatea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Modalitatea` (
  `ID_M` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Mota` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID_M`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Txapelketa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Txapelketa` (
  `ID_T` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Data_Hasi` DATE NOT NULL,
  `Data_Bukatu` DATE NULL,
  `Kokapena` VARCHAR(30) NOT NULL,
  `Izena` VARCHAR(50) NOT NULL,
  `Zailtasun_Maila` VARCHAR(3) NULL,
  `Modalitatea_ID_M` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ID_T`),
  INDEX `fk_Txapelketa_Modalitatea1_idx` (`Modalitatea_ID_M` ASC) VISIBLE,
  CONSTRAINT `fk_Txapelketa_Modalitatea1`
    FOREIGN KEY (`Modalitatea_ID_M`)
    REFERENCES `Piraguismo`.`Modalitatea` (`ID_M`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Piraguista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Piraguista` (
  `Nan` CHAR(9) NOT NULL,
  `Izena` VARCHAR(30) NOT NULL,
  `Abizena` VARCHAR(30) NOT NULL,
  `Generoa` CHAR(1) NULL,
  `Telefonoa` CHAR(9) NULL,
  `Herria` VARCHAR(20) NOT NULL,
  `Taldea_Kodea` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Nan`),
  INDEX `fk_Piraguista_Taldea1_idx` (`Taldea_Kodea` ASC) VISIBLE,
  CONSTRAINT `fk_Piraguista_Taldea1`
    FOREIGN KEY (`Taldea_Kodea`)
    REFERENCES `Piraguismo`.`Taldea` (`Kodea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Lehiatu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Lehiatu` (
  `Piraguista_Nan` CHAR(9) NOT NULL,
  `Txapelketa_ID_T` INT UNSIGNED NOT NULL,
  `Denbora` TIME NOT NULL,
  PRIMARY KEY (`Piraguista_Nan`, `Txapelketa_ID_T`),
  INDEX `fk_Piraguista_has_Txapelketa_Txapelketa1_idx` (`Txapelketa_ID_T` ASC) VISIBLE,
  INDEX `fk_Piraguista_has_Txapelketa_Piraguista_idx` (`Piraguista_Nan` ASC) VISIBLE,
  CONSTRAINT `fk_Piraguista_has_Txapelketa_Piraguista`
    FOREIGN KEY (`Piraguista_Nan`)
    REFERENCES `Piraguismo`.`Piraguista` (`Nan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Piraguista_has_Txapelketa_Txapelketa1`
    FOREIGN KEY (`Txapelketa_ID_T`)
    REFERENCES `Piraguismo`.`Txapelketa` (`ID_T`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Parte_hartu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Parte_hartu` (
  `Txapelketa_ID_T` INT UNSIGNED NOT NULL,
  `Taldea_Kodea` INT UNSIGNED NOT NULL,
  `Denbora` TIME NOT NULL,
  PRIMARY KEY (`Txapelketa_ID_T`, `Taldea_Kodea`),
  INDEX `fk_Txapelketa_has_Taldea_Taldea1_idx` (`Taldea_Kodea` ASC) VISIBLE,
  INDEX `fk_Txapelketa_has_Taldea_Txapelketa1_idx` (`Txapelketa_ID_T` ASC) VISIBLE,
  CONSTRAINT `fk_Txapelketa_has_Taldea_Txapelketa1`
    FOREIGN KEY (`Txapelketa_ID_T`)
    REFERENCES `Piraguismo`.`Txapelketa` (`ID_T`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Txapelketa_has_Taldea_Taldea1`
    FOREIGN KEY (`Taldea_Kodea`)
    REFERENCES `Piraguismo`.`Taldea` (`Kodea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Sprin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Sprin` (
  `Distantzia` INT UNSIGNED NOT NULL,
  `Modalitatea_ID_M` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Sprin_Modalitatea1`
    FOREIGN KEY (`Modalitatea_ID_M`)
    REFERENCES `Piraguismo`.`Modalitatea` (`ID_M`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Eslalon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Eslalon` (
  `Saiakerak` INT NOT NULL,
  `Modalitatea_ID_M` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Eslalon_Modalitatea1`
    FOREIGN KEY (`Modalitatea_ID_M`)
    REFERENCES `Piraguismo`.`Modalitatea` (`ID_M`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Piraguismo`.`Dragoi_Barkua`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Piraguismo`.`Dragoi_Barkua` (
  `Partaideak` INT UNSIGNED NOT NULL,
  `Modalitatea_ID_M` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Dragoi_Barkua_Modalitatea1`
    FOREIGN KEY (`Modalitatea_ID_M`)
    REFERENCES `Piraguismo`.`Modalitatea` (`ID_M`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
