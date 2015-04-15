SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema graph_engine_test
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `graph_engine_test`;
CREATE SCHEMA IF NOT EXISTS `graph_engine_test`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_general_ci;
USE `graph_engine_test`;

-- -----------------------------------------------------
-- Table `graph_engine_test`.`types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `graph_engine_test`.`types`;

CREATE TABLE IF NOT EXISTS `graph_engine_test`.`types` (
  `id`   INT         NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `type_UNIQUE` (`name` ASC)
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `graph_engine_test`.`nodes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `graph_engine_test`.`nodes`;

CREATE TABLE IF NOT EXISTS `graph_engine_test`.`nodes` (
  `id`      INT         NOT NULL AUTO_INCREMENT,
  `name`    VARCHAR(45) NOT NULL,
  `type_id` INT         NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vertices_1_idx` (`type_id` ASC),
  CONSTRAINT `fk_vertices_1`
  FOREIGN KEY (`type_id`)
  REFERENCES `graph_engine_test`.`types` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `graph_engine_test`.`edges`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `graph_engine_test`.`edges`;

CREATE TABLE IF NOT EXISTS `graph_engine_test`.`edges` (
  `id`      INT NOT NULL AUTO_INCREMENT,
  `from_id` INT NOT NULL,
  `to_id`   INT NOT NULL,
  INDEX `fk_edges_2_idx` (`to_id` ASC),
  INDEX `fk_edges_1_idx` (`from_id` ASC),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `from_to_unique` (`from_id` ASC, `to_id` ASC),
  CONSTRAINT `fk_edges_1`
  FOREIGN KEY (`from_id`)
  REFERENCES `graph_engine_test`.`nodes` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_edges_2`
  FOREIGN KEY (`to_id`)
  REFERENCES `graph_engine_test`.`nodes` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
  ENGINE = InnoDB;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `graph_engine_test`.`types`
-- -----------------------------------------------------
START TRANSACTION;
USE `graph_engine_test`;
INSERT INTO `graph_engine_test`.`types` (`id`, `name`) VALUES (NULL, 'type_1');
INSERT INTO `graph_engine_test`.`types` (`id`, `name`) VALUES (NULL, 'type_2');

COMMIT;


-- -----------------------------------------------------
-- Data for table `graph_engine_test`.`nodes`
-- -----------------------------------------------------
START TRANSACTION;
USE `graph_engine_test`;
INSERT INTO `graph_engine_test`.`nodes` (`id`, `name`, `type_id`) VALUES (NULL, 'node_1', 1);
INSERT INTO `graph_engine_test`.`nodes` (`id`, `name`, `type_id`) VALUES (NULL, 'node_2', 2);
INSERT INTO `graph_engine_test`.`nodes` (`id`, `name`, `type_id`) VALUES (NULL, 'node_3', 1);
INSERT INTO `graph_engine_test`.`nodes` (`id`, `name`, `type_id`) VALUES (NULL, 'node_4', 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `graph_engine_test`.`edges`
-- -----------------------------------------------------
START TRANSACTION;
USE `graph_engine_test`;
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 1, 2);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 1, 3);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 1, 4);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 2, 1);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 2, 3);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 2, 4);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 3, 1);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 3, 2);
INSERT INTO `graph_engine_test`.`edges` (`id`, `from_id`, `to_id`) VALUES (NULL, 3, 4);

COMMIT;

