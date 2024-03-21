-- MySQL Script generated by MySQL Workbench
-- Thu Mar 21 10:41:12 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sigzum
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sigzum
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sigzum` DEFAULT CHARACTER SET utf8 ;
USE `sigzum` ;

-- -----------------------------------------------------
-- Table `sigzum`.`companies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`companies` (
  `id` INT(10) UNSIGNED NOT NULL,
  `full_name` VARCHAR(255) NOT NULL,
  `cnpj` VARCHAR(255) NULL DEFAULT NULL,
  `address` TEXT NULL DEFAULT NULL,
  `phone` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sigzum`.`sectors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`sectors` (
  `id` INT(10) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `abbreviation` VARCHAR(40) NULL DEFAULT NULL,
  `company_id` INT(10) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sectors_companies_idx` (`company_id` ASC) ,
  CONSTRAINT `fk_sectors_companies`
    FOREIGN KEY (`company_id`)
    REFERENCES `sigzum`.`companies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sigzum`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`users` (
  `id` INT(10) UNSIGNED NOT NULL,
  `sector_id` INT(10) UNSIGNED NOT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `level` INT(1) NOT NULL DEFAULT 1,
  `status` INT(1) NULL,
  `avatar` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_users_sectors1_idx` (`sector_id` ASC) ,
  CONSTRAINT `fk_users_sectors1`
    FOREIGN KEY (`sector_id`)
    REFERENCES `sigzum`.`sectors` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sigzum`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`status` (
  `id` INT(10) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `class_color` VARCHAR(255) NOT NULL,
  `company_id` INT(10) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_docs_status_companies1_idx` (`company_id` ASC) ,
  CONSTRAINT `fk_docs_status_companies1`
    FOREIGN KEY (`company_id`)
    REFERENCES `sigzum`.`companies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sigzum`.`publicities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`publicities` (
  `id` INT(10) UNSIGNED NOT NULL,
  `status_id` INT(10) UNSIGNED NOT NULL,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `campaign` VARCHAR(255) NOT NULL,
  `date` DATE NOT NULL,
  `description` TEXT NOT NULL,
  `date_start` DATE NULL,
  `date_end` DATE NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_docs_users1_idx` (`user_id` ASC) ,
  INDEX `fk_publicities_status1_idx` (`status_id` ASC) ,
  CONSTRAINT `fk_docs_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `sigzum`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_publicities_status1`
    FOREIGN KEY (`status_id`)
    REFERENCES `sigzum`.`status` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sigzum`.`publicities_anexos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigzum`.`publicities_anexos` (
  `id` INT(10) UNSIGNED NOT NULL,
  `publicity_id` INT(10) UNSIGNED NOT NULL,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_docs_anexos_users1_idx` (`user_id` ASC) ,
  INDEX `fk_anexos_publicities1_idx` (`publicity_id` ASC) ,
  CONSTRAINT `fk_anexos_publicities1`
    FOREIGN KEY (`publicity_id`)
    REFERENCES `sigzum`.`publicities` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_docs_anexos_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `sigzum`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
