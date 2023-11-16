CREATE DATABASE poketrash CHARACTER SET 'utf8';

USE poketrash;

CREATE TABLE `pokedex` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pkmName` VARCHAR(255) NOT NULL,
  `type1` VARCHAR(255) NOT NULL,
  `type2` VARCHAR(255),
  `evolution1` SMALLINT,
  `evolution2` SMALLINT,
  `bio` VARCHAR(65535) NOT NULL,
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
  `bio` VARCHAR(65535) NOT NULL,
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (Id)
);

INSERT INTO `users` (`id`,`username`,`password`,`email`)
VALUES ('1','DracaufeuDu69','SouleveurDeTortank','Sachatte@gmail.com');

INSERT INTO `pokedex` (`id`,`pkmName`,`type1`,`type2`,`evolution1`,`evolution2`,`bio`,`img`)
VALUES ('1','Bulbizarre','Plante','Poison','2','3',"Bulbizarre est un petit Pokémon quadrupède vert. Il possède une grande fleur sur le dos qui grandit en même temps que lui. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Il possède une queue courte et épaisse. Ses pattes sont munies de trois griffes. Il possède une tache jaune sur le ventre. Il est le premier Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/2/21/Bulbizarre-RFVF.png/250px-Bulbizarre-RFVF.png'),
('2','Herbizarre','Plante','Poison','1','3',"Herbizarre est un Pokémon quadrupède vert. Il possède une grande fleur sur le dos qui grandit en même temps que lui. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Il possède une queue courte et épaisse. Ses pattes sont munies de trois griffes. Il possède une tache jaune sur le ventre. Il est le premier Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/7/73/Herbizarre-RFVF.png/250px-Herbizarre-RFVF.png
'),
('3','Florizarre','Plante','Poison','1','2',"Florizarre est un Pokémon quadrupède vert. Il possède une grande fleur sur le dos qui grandit en même temps que lui. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Il possède une queue courte et épaisse. Ses pattes sont munies de trois griffes. Il possède une tache jaune sur le ventre. Il est le premier Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/4/4b/Florizarre-RFVF.png/250px-Florizarre-RFVF.png
'),
('4','Salamèche','Feu','NULL','5','6',"Salamèche est un Pokémon bipède de couleur orange. Il possède une crête de feu sur la tête ainsi qu'une flamme au bout de la queue. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le quatrième Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/7/73/Salam%C3%A8che-RFVF.png/250px-Salam%C3%A8che-RFVF.png
'),
('5','Reptincel','Feu','NULL','4','6',"Reptincel est un Pokémon bipède de couleur orange. Il possède une crête de feu sur la tête ainsi qu'une flamme au bout de la queue. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le quatrième Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/4/4a/Reptincel-RFVF.png/250px-Reptincel-RFVF.png
'),
('6','Dracaufeu','Feu','Vol','4','5',"Dracaufeu est un Pokémon bipède de couleur orange. Il possède une crête de feu sur la tête ainsi qu'une flamme au bout de la queue. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le quatrième Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/7/7e/Dracaufeu-RFVF.png/250px-Dracaufeu-RFVF.png
'),
('7','Carapuce','Eau','NULL','8','9',"Carapuce est un Pokémon bipède de couleur bleue. Il possède une carapace de couleur brune sur le dos. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le septième Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/4/4e/Carapuce-RFVF.png/250px-Carapuce-RFVF.png
'),
('8','Carabaffe','Eau','NULL','7','9',"Carabaffe est un Pokémon bipède de couleur bleue. Il possède une carapace de couleur brune sur le dos. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le septième Pokémon du Pokédex de Kanto.",'https://www.pokepedia.fr/images/thumb/9/98/Carabaffe-RFVF.png/250px-Carabaffe-RFVF.png
'),
('9','Tortank','Eau', 'NULL','7','8','Tortank est un Pokémon bipède de couleur bleue. Il possède une carapace de couleur brune sur le dos. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le septième Pokémon du Pokédex de Kanto.','https://www.pokepedia.fr/images/thumb/0/0c/Tortank-RFVF.png/250px-Tortank-RFVF.png')