-- -----------------------------------------------------
-- Require: ---
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Drops
-- -----------------------------------------------------

DROP TABLE IF EXISTS aros_acos;
DROP TABLE IF EXISTS acos;
DROP TABLE IF EXISTS aros;


-- -----------------------------------------------------
-- Table acos
-- -----------------------------------------------------

CREATE TABLE acos (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  parent_id INT UNSIGNED DEFAULT NULL,
  model VARCHAR(255) DEFAULT '',
  foreign_key INT UNSIGNED DEFAULT NULL,
  alias VARCHAR(255) DEFAULT '',
  lft INT DEFAULT NULL,
  rght INT DEFAULT NULL,
  PRIMARY KEY  (id)
);


-- -----------------------------------------------------
-- Table aros
-- -----------------------------------------------------

CREATE TABLE aros (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  parent_id INT UNSIGNED DEFAULT NULL,
  model VARCHAR(255) DEFAULT '',
  foreign_key INT UNSIGNED DEFAULT NULL,
  alias VARCHAR(255) DEFAULT '',
  lft INT DEFAULT NULL,
  rght INT DEFAULT NULL,
  PRIMARY KEY  (id)
);


-- -----------------------------------------------------
-- Table aros_acos
-- -----------------------------------------------------

CREATE TABLE aros_acos (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  aro_id INT UNSIGNED NOT NULL,
  aco_id INT UNSIGNED NOT NULL,
  _create CHAR(2) NOT NULL DEFAULT 0,
  _read CHAR(2) NOT NULL DEFAULT 0,
  _update CHAR(2) NOT NULL DEFAULT 0,
  _delete CHAR(2) NOT NULL DEFAULT 0,
  PRIMARY KEY(id)
);

ALTER TABLE aros_acos ADD INDEX aroaco_aro_idx (aro_id ASC);
ALTER TABLE aros_acos ADD INDEX aroaco_aco_idx (aco_id ASC);


-- -----------------------------------------------------
-- Constraints
-- -----------------------------------------------------

ALTER TABLE aros_acos ADD
CONSTRAINT aroaco_aro_fk FOREIGN KEY (aro_id) REFERENCES aros (id) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE aros_acos ADD
CONSTRAINT aroaco_aco_fk FOREIGN KEY (aco_id) REFERENCES acos (id) ON DELETE NO ACTION ON UPDATE NO ACTION;