-- MySQL Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sodresantoro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sodresantoro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sodresantoro` ;
USE `sodresantoro` ;

-- -----------------------------------------------------
-- Table `sodresantoro`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sodresantoro`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `created` INT NOT NULL,
  `updated` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sodresantoro`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sodresantoro`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categories_id` INT NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `created` INT NOT NULL,
  `updated` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_categories_idx` (`categories_id` ASC) VISIBLE,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE,
  CONSTRAINT `fk_products_categories`
    FOREIGN KEY (`categories_id`)
    REFERENCES `sodresantoro`.`categories` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
