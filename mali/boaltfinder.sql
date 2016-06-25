-- MySQL Script generated by MySQL Workbench
-- 06/11/16 02:27:53
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema boattracker_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema boattracker_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `boattracker_db` DEFAULT CHARACTER SET utf8 ;
USE `boattracker_db` ;

-- -----------------------------------------------------
-- Table `boattracker_db`.`discrict`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`discrict` (
  `district_code` VARCHAR(5) NOT NULL,
  `district` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`district_code`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`user` (
  `user_id` VARCHAR(20) NOT NULL,
  `user_name` VARCHAR(50) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `user_type` VARCHAR(20) NOT NULL,
  `created_date` DATETIME NOT NULL,
  `old_password` VARCHAR(100) NOT NULL,
  `usercol` VARCHAR(45) NOT NULL,
  `nic` VARCHAR(12) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `tp_number` VARCHAR(10) NOT NULL,
  `district_code` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`user_id`, `district_code`),
  INDEX `FK_district_idx` (`district_code` ASC),
  CONSTRAINT `FK_district`
    FOREIGN KEY (`district_code`)
    REFERENCES `boattracker_db`.`discrict` (`district_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`district_navy_officer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`district_navy_officer` (
  `user_id` VARCHAR(20) NOT NULL,
  `service_id` VARCHAR(20) NOT NULL,
  `office_address` VARCHAR(100) NOT NULL,
  `office_tp` VARCHAR(10) NOT NULL,
  `rank` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`user_id`, `service_id`),
  CONSTRAINT `FK_user_district_navy_officer`
    FOREIGN KEY (`user_id`)
    REFERENCES `boattracker_db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`coast_guard`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`coast_guard` (
  `user_id` VARCHAR(20) NOT NULL,
  `service_id` VARCHAR(20) NOT NULL,
  `point` VARCHAR(40) NOT NULL,
  `office_address` VARCHAR(100) NULL,
  `office_tp` VARCHAR(10) NULL,
  PRIMARY KEY (`user_id`, `service_id`),
  CONSTRAINT `FK_user_coast`
    FOREIGN KEY (`user_id`)
    REFERENCES `boattracker_db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`ministry_officer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`ministry_officer` (
  `user_id` VARCHAR(20) NOT NULL,
  `service_id` VARCHAR(20) NOT NULL,
  `office_address` VARCHAR(100) NULL,
  `office_tp` VARCHAR(10) NULL,
  PRIMARY KEY (`user_id`, `service_id`),
  CONSTRAINT `FK_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `boattracker_db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`ad_fishery_officer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`ad_fishery_officer` (
  `user_id` VARCHAR(20) NOT NULL,
  `service_id` VARCHAR(20) NOT NULL,
  `office_address` VARCHAR(100) NULL,
  `office_tp` VARCHAR(10) NULL,
  `discrict_code` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`user_id`, `service_id`, `discrict_code`),
  INDEX `FK_district_ad_idx` (`discrict_code` ASC),
  INDEX `FK_servicead_idx` (`service_id` ASC),
  CONSTRAINT `FK_userad`
    FOREIGN KEY (`user_id`)
    REFERENCES `boattracker_db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_districtad`
    FOREIGN KEY (`discrict_code`)
    REFERENCES `boattracker_db`.`discrict` (`district_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_servicead`
    FOREIGN KEY (`service_id`)
    REFERENCES `boattracker_db`.`ministry_officer` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`launching_point`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`launching_point` (
  `point_id` VARCHAR(10) NOT NULL,
  `district_code` VARCHAR(5) NOT NULL,
  `point_name` VARCHAR(25) NOT NULL,
  `point_address` VARCHAR(100) NOT NULL,
  `latitude` DOUBLE NOT NULL,
  `longtitude` DOUBLE NOT NULL,
  PRIMARY KEY (`point_id`),
  INDEX `FK_district_idx` (`district_code` ASC),
  CONSTRAINT `FK_districtLanching`
    FOREIGN KEY (`district_code`)
    REFERENCES `boattracker_db`.`discrict` (`district_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`boat_owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`boat_owner` (
  `owner_id` VARCHAR(20) NOT NULL,
  `name` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `district_code` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`owner_id`, `district_code`),
  INDEX `FK_district_owner_idx` (`district_code` ASC),
  CONSTRAINT `FK_district_owner`
    FOREIGN KEY (`district_code`)
    REFERENCES `boattracker_db`.`discrict` (`district_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`boat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`boat` (
  `boat_register_number` VARCHAR(20) NOT NULL,
  `ownerid` VARCHAR(20) NOT NULL,
  `type` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`boat_register_number`, `ownerid`),
  CONSTRAINT `FK_owner_boat`
    FOREIGN KEY (`ownerid`)
    REFERENCES `boattracker_db`.`boat_owner` (`owner_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`device`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`device` (
  `device_id_imei` VARCHAR(50) NOT NULL,
  `reg_date` DATETIME NOT NULL,
  `service_provider` VARCHAR(50) NOT NULL,
  `sim_number` INT NOT NULL,
  `device_type` VARCHAR(50) NOT NULL,
  `sim_tp_number` VARCHAR(10) NOT NULL,
  `boat_register_number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`device_id_imei`, `boat_register_number`),
  INDEX `FK_boat_register_number_idx` (`boat_register_number` ASC),
  CONSTRAINT `FK_boat_register_number`
    FOREIGN KEY (`boat_register_number`)
    REFERENCES `boattracker_db`.`boat` (`boat_register_number`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boattracker_db`.`journy`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boattracker_db`.`journy` (
  `journy_id` INT NOT NULL,
  `start_date` DATE NOT NULL,
  `start_time` TIME NOT NULL,
  `start_latitude` DOUBLE NOT NULL,
  `start_longtitude` DOUBLE NOT NULL,
  `end_date` DATE NULL,
  `end_time` TIME NULL,
  `end_latitude` DOUBLE NULL,
  `end_longtitude` DOUBLE NULL,
  `fisherman` DOUBLE NULL,
  `boat_register_number` VARCHAR(40) NOT NULL,
  `point_id` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`journy_id`, `boat_register_number`, `point_id`),
  INDEX `FK_boat_jny_idx` (`boat_register_number` ASC),
  INDEX `FK_point_jny_idx` (`point_id` ASC),
  CONSTRAINT `FK_boat_jny`
    FOREIGN KEY (`boat_register_number`)
    REFERENCES `boattracker_db`.`boat` (`boat_register_number`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_point_jny`
    FOREIGN KEY (`point_id`)
    REFERENCES `boattracker_db`.`launching_point` (`point_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;