-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema peleja
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema peleja
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `peleja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `peleja` ;

-- -----------------------------------------------------
-- Table `peleja`.`Credencial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Credencial` (
  `id` VARCHAR(36) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `facebook` VARCHAR(255) NULL,
  `twitter` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Organizador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Organizador` (
  `Credencial_id` VARCHAR(36) NOT NULL,
  PRIMARY KEY (`Credencial_id`),
  CONSTRAINT `fk_Organizador_Credencial`
    FOREIGN KEY (`Credencial_id`)
    REFERENCES `peleja`.`Credencial` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Participante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Participante` (
  `Credencial_id` VARCHAR(36) NOT NULL,
  PRIMARY KEY (`Credencial_id`),
  CONSTRAINT `fk_Participante_Credencial1`
    FOREIGN KEY (`Credencial_id`)
    REFERENCES `peleja`.`Credencial` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Palestrante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Palestrante` (
  `Credencial_id` VARCHAR(36) NOT NULL,
  PRIMARY KEY (`Credencial_id`),
  CONSTRAINT `fk_Palestrante_Credencial1`
    FOREIGN KEY (`Credencial_id`)
    REFERENCES `peleja`.`Credencial` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Evento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `dataInicioInscricao` DATETIME NULL,
  `dataFimInscricao` DATETIME NULL,
  `dataEvento` DATETIME NULL,
  `limiteParticipantes` INT NULL,
  `localEvento` VARCHAR(255) NULL,
  `logradouro` VARCHAR(255) NULL,
  `numero` VARCHAR(255) NULL,
  `bairro` VARCHAR(255) NULL,
  `cidade` VARCHAR(255) NULL,
  `estado` VARCHAR(255) NULL,
  `cep` INT NULL,
  `Organizador_Credencial_id` VARCHAR(36) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Evento_Organizador1_idx` (`Organizador_Credencial_id` ASC),
  CONSTRAINT `fk_Evento_Organizador1`
    FOREIGN KEY (`Organizador_Credencial_id`)
    REFERENCES `peleja`.`Organizador` (`Credencial_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Inscricao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Inscricao` (
  `Participante_Credencial_id` VARCHAR(36) NOT NULL,
  `Evento_id` INT NOT NULL,
  PRIMARY KEY (`Participante_Credencial_id`, `Evento_id`),
  INDEX `fk_Inscricao_Evento_idx` (`Evento_id` ASC),
  INDEX `fk_Inscricao_Participante_idx` (`Participante_Credencial_id` ASC),
  CONSTRAINT `fk_Participante_has_Evento_Participante1`
    FOREIGN KEY (`Participante_Credencial_id`)
    REFERENCES `peleja`.`Participante` (`Credencial_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participante_has_Evento_Evento1`
    FOREIGN KEY (`Evento_id`)
    REFERENCES `peleja`.`Evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Palestra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Palestra` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NULL,
  `resumo` BLOB NULL,
  `Palestrante_Credencial_id` VARCHAR(36) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Palestra_Palestrante_idx` (`Palestrante_Credencial_id` ASC),
  CONSTRAINT `fk_Palestra_Palestrante1`
    FOREIGN KEY (`Palestrante_Credencial_id`)
    REFERENCES `peleja`.`Palestrante` (`Credencial_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `peleja`.`Submissao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `peleja`.`Submissao` (
  `Palestra_id` INT NOT NULL,
  `Evento_id` INT NOT NULL,
  `Aceita` TINYINT(1) NULL,
  `Votos` INT NULL,
  PRIMARY KEY (`Palestra_id`, `Evento_id`),
  INDEX `fk_Submisao_Evento_idx` (`Evento_id` ASC),
  INDEX `fk_Submisao_Palestra_idx` (`Palestra_id` ASC),
  CONSTRAINT `fk_Palestra_has_Evento_Palestra1`
    FOREIGN KEY (`Palestra_id`)
    REFERENCES `peleja`.`Palestra` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Palestra_has_Evento_Evento1`
    FOREIGN KEY (`Evento_id`)
    REFERENCES `peleja`.`Evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
