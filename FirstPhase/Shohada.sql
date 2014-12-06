-- MySQL Script generated by MySQL Workbench
-- 12/04/14 20:28:45
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Shohada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Shohada` (
  `Id` INT NOT NULL,
  `FirstName` VARCHAR(45) NULL,
  `LastName` VARCHAR(45) NULL,
  `OperationId` INT NOT NULL,
  `Image` VARCHAR(100) NULL,
  `State` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `BirthDay` DATE NULL,
  `BirthPlace` VARCHAR(45) NULL,
  `Education` VARCHAR(45) NULL,
  `FatherName` VARCHAR(45) NULL,
  `SingOrMar` BIT NULL,
  `Job` VARCHAR(45) NULL,
  `ShahadatDate` DATE NULL,
  `ShahadatPlace` VARCHAR(45) NULL,
  `NoeOzviat` VARCHAR(45) NULL,
  `Delneveshte` TEXT NULL,
  `Khaterat` TEXT NULL,
  `Description` TEXT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;