CREATE DATABASE poketrash CHARACTER SET 'utf8';

USE poketrash;

CREATE TABLE `pokedex` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pkmName` VARCHAR(255) NOT NULL,
  `type1` VARCHAR(255) NOT NULL,
  `type2` VARCHAR(255) NOT NULL,
  `evolution1` SMALLINT NOT NULL,
  `evolution2` SMALLINT NOT NULL,
  `bio` VARCHAR(255) NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  PRIMARY KEY (Id)
);

CREATE TABLE `users` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (Id)
);

CREATE TABLE `profile` (
  `avatar` VARCHAR(255) NOT NULL,
  `bio` VARCHAR(255) NOT NULL,
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (Id)
);

INSERT INTO `users` (`id`,`username`,`password`,`email`)
VALUES ('1','DracaufeuDu69','SouleveurDeTortank','Sachatte@gmail.com')