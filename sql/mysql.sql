# SQL Dump for wgtestui module
# PhpMyAdmin Version: 4.0.4
# https://www.phpmyadmin.net
#
# Host: localhost
# Generated on: Wed Mar 01, 2023 to 06:40:15
# Server version: 5.5.5-10.4.12-MariaDB
# PHP Version: 8.0.0

#
# Structure table for `wgtestui_tests` 9
#

CREATE TABLE `wgtestui_tests` (
  `test_id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_url` VARCHAR(500) NOT NULL DEFAULT '',
  `test_module` VARCHAR(255) NOT NULL DEFAULT '',
  `test_area` INT(10) NOT NULL DEFAULT '0',
  `test_type` INT(10) NOT NULL DEFAULT '0',
  `test_resultcode` VARCHAR(255) NOT NULL DEFAULT '',
  `test_resulttext` VARCHAR(255) NOT NULL DEFAULT '',
  `test_infotext` TEXT NOT NULL ,
  `test_datetest` INT(11) NOT NULL DEFAULT '0',
  `test_datecreated` INT(11) NOT NULL DEFAULT '0',
  `test_submitter` INT(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`test_id`),
  UNIQUE KEY `idxurl` (`test_url`)
) ENGINE=InnoDB;

