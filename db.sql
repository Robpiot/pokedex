CREATE DATABASE poketrash CHARACTER SET 'utf8';

USE poketrash;

CREATE TABLE `pokedex` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pkmName` VARCHAR(255) NOT NULL,
  `type1` VARCHAR(255),
  `type2` VARCHAR(255),
  `evolution1` SMALLINT,
  `evolution2` SMALLINT,
  `bio` MEDIUMTEXT,
  `img` VARCHAR(255),
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
  `avatar` VARCHAR(255),
  `bio` MEDIUMTEXT,
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
('9','Tortank','Eau', 'NULL','7','8','Tortank est un Pokémon bipède de couleur bleue. Il possède une carapace de couleur brune sur le dos. Ses yeux sont toujours fermés, et il est endormi la plupart du temps. Ses pattes sont munies de trois griffes. Il est le septième Pokémon du Pokédex de Kanto.','https://www.pokepedia.fr/images/thumb/0/0c/Tortank-RFVF.png/250px-Tortank-RFVF.png'),
('10', 'Chenipan', 'Insecte', NULL, '11', '12', "Chenipan est un Pokémon rampant de couleur verte. Il se nourrit de feuilles et possède une corne sur la tête. Il est le dixième Pokémon du Pokédex de Kanto.", ''),
  ('11', 'Chrysacier', 'Insecte', NULL, '10', '12', "Chrysacier est la forme évoluée de Chenipan. Il est de couleur vert clair et possède une carapace dure. Il est le onzième Pokémon du Pokédex de Kanto.", ''),
  ('12', 'Papilusion', 'Insecte', 'Vol', '10', '11', "Papilusion est un Pokémon ailé aux couleurs vives. Ses ailes sont recouvertes de poussière d'aile qui donne des couleurs différentes en fonction de l'angle de la lumière. Il est le douzième Pokémon du Pokédex de Kanto.", ''),
  ('13', 'Aspicot', 'Insecte', 'Poison', '14', NULL, "Aspicot est un Pokémon rampant de couleur violet. Il possède une corne sur la tête et peut libérer des poisons. Il est le treizième Pokémon du Pokédex de Kanto.", ''),
  ('14', 'Coconfort', 'Insecte', 'Poison', '13', '15', "Coconfort est la forme évoluée d'Aspicot. Il est enveloppé dans un cocon protecteur. Il est le quatorzième Pokémon du Pokédex de Kanto.", ''),
  ('15', 'Dardargnan', 'Insecte', 'Poison', '13', '14', "Dardargnan est un Pokémon ailé de grande taille. Il possède des aiguillons toxiques sur ses pattes et son abdomen. Il est le quinzième Pokémon du Pokédex de Kanto.", ''),
  ('16', 'Roucool', 'Normal', 'Vol', '17', '18', "Roucool est un petit Pokémon volant. Il a un plumage marron et blanc et peut atteindre des vitesses élevées en volant. Il est le seizième Pokémon du Pokédex de Kanto.", ''),
  ('17', 'Roucoups', 'Normal', 'Vol', '16', '19', "Roucoups est la forme évoluée de Roucool. Il a un plumage plus développé et est capable de voler sur de longues distances. Il est le dix-septième Pokémon du Pokédex de Kanto.", ''),
  ('18', 'Roucarnage', 'Normal', 'Vol', '16', '17', "Roucarnage est un Pokémon majestueux avec un grand envergure. Il est le dix-huitième Pokémon du Pokédex de Kanto.", ''),
  ('19', 'Rattata', 'Normal', NULL, '20', NULL, "Rattata est un petit Pokémon rongeur. Il est actif la nuit et peut être trouvé dans de nombreux habitats. Il est le dix-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('20', 'Rattatac', 'Normal', NULL, '19', NULL, "Rattatac est la forme évoluée de Rattata. Il est plus grand et plus fort que sa forme précédente. Il est le vingtième Pokémon du Pokédex de Kanto.", ''),
('21', 'Mélofée', 'Fée', NULL, '22', NULL, "Mélofée est un Pokémon de type Fée. Il est connu pour sa douceur et son apparence mignonne. Il est le vingt-et-unième Pokémon du Pokédex de Kanto.", ''),
  ('22', 'Mélodelfe', 'Fée', NULL, '21', NULL, "Mélodelfe est la forme évoluée de Mélofée. Il continue de répandre la joie et la douceur. Il est le vingt-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('23', 'Goupix', 'Feu', NULL, '24', NULL, "Goupix est un Pokémon de type Feu. Il possède une fourrure chaude qui le protège du froid. Il est le vingt-troisième Pokémon du Pokédex de Kanto.", ''),
  ('24', 'Feunard', 'Feu', NULL, '23', NULL, "Feunard est la forme évoluée de Goupix. Sa fourrure devient plus épaisse et il gagne en puissance. Il est le vingt-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('25', 'Rondoudou', 'Normal', 'Fée', '26', NULL, "Rondoudou est un Pokémon rond et rose de type Normal et Fée. Il aime chanter des berceuses. Il est le vingt-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('26', 'Grodoudou', 'Normal', 'Fée', '25', NULL, "Grodoudou est la forme évoluée de Rondoudou. Il continue de répandre de la joie avec sa musique. Il est le vingt-sixième Pokémon du Pokédex de Kanto.", ''),
  ('27', 'Nosferapti', 'Poison', 'Vol', '28', NULL, "Nosferapti est un Pokémon de type Poison et Vol. Il est actif la nuit et se nourrit du sang de ses proies. Il est le vingt-septième Pokémon du Pokédex de Kanto.", ''),
  ('28', 'Nosferalto', 'Poison', 'Vol', '27', NULL, "Nosferalto est la forme évoluée de Nosferapti. Il est plus grand et plus redoutable dans les airs. Il est le vingt-huitième Pokémon du Pokédex de Kanto.", ''),
  ('29', 'Mystherbe', 'Plante', 'Poison', '30', NULL, "Mystherbe est un Pokémon de type Plante et Poison. Il dégage une odeur apaisante. Il est le vingt-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('30', 'Ortide', 'Plante', 'Poison', '29', '31', "Ortide est la forme évoluée de Mystherbe. Il a des pétales qui peuvent libérer des spores toxiques. Il est le trentième Pokémon du Pokédex de Kanto.", ''),
 ('31', 'Nidoran♀', 'Poison', NULL, '32', NULL, "Nidoran♀ est un Pokémon de type Poison. Il possède une corne empoisonnée. Il est le trente et unième Pokémon du Pokédex de Kanto.", ''),
  ('32', 'Nidorina', 'Poison', NULL, '31', '33', "Nidorina est la forme évoluée de Nidoran♀. Elle possède une corne plus développée et est plus puissante. Elle est le trente-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('33', 'Nidoqueen', 'Poison', 'Sol', '31', '34', "Nidoqueen est la forme évoluée de Nidorina. Elle est de type Poison et Sol. Elle est le trente-troisième Pokémon du Pokédex de Kanto.", ''),
  ('34', 'Nidoran♂', 'Poison', NULL, '35', NULL, "Nidoran♂ est un Pokémon de type Poison. Il possède une corne empoisonnée. Il est le trente-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('35', 'Nidorino', 'Poison', NULL, '34', '36', "Nidorino est la forme évoluée de Nidoran♂. Il possède une corne plus développée et est plus puissant. Il est le trente-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('36', 'Nidoking', 'Poison', 'Sol', '34', NULL, "Nidoking est la forme évoluée de Nidorino. Il est de type Poison et Sol. Il est le trente-sixième Pokémon du Pokédex de Kanto.", ''),
  ('37', 'Mélofée', 'Fée', NULL, '38', NULL, "Mélofée est un Pokémon de type Fée. Il est connu pour sa douceur et son apparence mignonne. Il est le trente-septième Pokémon du Pokédex de Kanto.", ''),
  ('38', 'Mélodelfe', 'Fée', NULL, '37', NULL, "Mélodelfe est la forme évoluée de Mélofée. Il continue de répandre la joie et la douceur. Il est le trente-huitième Pokémon du Pokédex de Kanto.", ''),
  ('39', 'Goupix', 'Feu', NULL, '40', NULL, "Goupix est un Pokémon de type Feu. Il possède une fourrure chaude qui le protège du froid. Il est le trente-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('40', 'Feunard', 'Feu', NULL, '39', NULL, "Feunard est la forme évoluée de Goupix. Sa fourrure devient plus épaisse et il gagne en puissance. Il est le quarantième Pokémon du Pokédex de Kanto.", ''),
  ('41', 'Nidoran♂', 'Poison', NULL, '42', '43', "Nidoran♂ est un Pokémon de type Poison. Il possède une corne empoisonnée. Il est le quarante et unième Pokémon du Pokédex de Kanto.", ''),
  ('42', 'Nidorino', 'Poison', NULL, '41', '44', "Nidorino est la forme évoluée de Nidoran♂. Il possède une corne plus développée et est plus puissant. Il est le quarante-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('43', 'Nidoking', 'Poison', 'Sol', '41', '44', "Nidoking est la forme évoluée de Nidorino. Il est de type Poison et Sol. Il est le quarante-troisième Pokémon du Pokédex de Kanto.", ''),
  ('44', 'Mélofée', 'Fée', NULL, '45', NULL, "Mélofée est un Pokémon de type Fée. Il est connu pour sa douceur et son apparence mignonne. Il est le quarante-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('45', 'Mélodelfe', 'Fée', NULL, '44', NULL, "Mélodelfe est la forme évoluée de Mélofée. Il continue de répandre la joie et la douceur. Il est le quarante-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('46', 'Goupix', 'Feu', NULL, '47', NULL, "Goupix est un Pokémon de type Feu. Il possède une fourrure chaude qui le protège du froid. Il est le quarante-sixième Pokémon du Pokédex de Kanto.", ''),
  ('47', 'Feunard', 'Feu', NULL, '46', NULL, "Feunard est la forme évoluée de Goupix. Sa fourrure devient plus épaisse et il gagne en puissance. Il est le quarante-septième Pokémon du Pokédex de Kanto.", ''),
  ('48', 'Rondoudou', 'Normal', 'Fée', '49', NULL, "Rondoudou est un Pokémon rond et rose de type Normal et Fée. Il aime chanter des berceuses. Il est le quarante-huitième Pokémon du Pokédex de Kanto.", ''),
  ('49', 'Grodoudou', 'Normal', 'Fée', '48', NULL, "Grodoudou est la forme évoluée de Rondoudou. Il continue de répandre de la joie avec sa musique. Il est le quarante-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('50', 'Nosferapti', 'Poison', 'Vol', '51', NULL, "Nosferapti est un Pokémon de type Poison et Vol. Il est actif la nuit et se nourrit du sang de ses proies. Il est le cinquantième Pokémon du Pokédex de Kanto.", ''),
  
  ('101', 'Electrode', 'Électrik', NULL, '100', NULL, "Electrode est la forme évoluée de Voltorbe. Il est de type Électrik. Il est le cent-unième Pokémon du Pokédex de Kanto.", ''),
  ('102', 'Noeunoeuf', 'Plante', 'Psy', '103', NULL, "Noeunoeuf est un Pokémon de type Plante et Psy. Il a des graines sur le dos. Il est le cent-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('103', 'Noadkoko', 'Plante', 'Psy', '102', NULL, "Noadkoko est la forme évoluée de Noeunoeuf. Il est de type Plante et Psy. Il est le cent-troisième Pokémon du Pokédex de Kanto.", ''),
  ('104', 'Osselait', 'Sol', NULL, '105', NULL, "Osselait est un Pokémon de type Sol. Il porte le crâne de sa mère comme un casque. Il est le cent-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('105', 'Ossatueur', 'Sol', NULL, '104', NULL, "Ossatueur est la forme évoluée de Osselait. Il manie un os massif comme arme. Il est le cent-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('106', 'Kicklee', 'Combat', NULL, '236', NULL, "Kicklee est une évolution spécifique de Tygnon lorsqu'il est échangé. Il est de type Combat. Il est le cent-sixième Pokémon du Pokédex de Kanto.", ''),
  ('107', 'Tygnon', 'Combat', NULL, '237', NULL, "Tygnon est une évolution spécifique de Kicklee lorsqu'il est échangé. Il est de type Combat. Il est le cent-septième Pokémon du Pokédex de Kanto.", ''),
  ('108', 'Excelangue', 'Normal', NULL, '463', NULL, "Excelangue est la forme évoluée de Léchouille. Il est de type Normal. Il est le cent-huitième Pokémon du Pokédex de Kanto.", ''),
  ('109', 'Smogo', 'Poison', NULL, '110', NULL, "Smogo est un Pokémon de type Poison. Il dégage des gaz toxiques. Il est le cent-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('110', 'Smogogo', 'Poison', NULL, '109', NULL, "Smogogo est la forme évoluée de Smogo. Il est de type Poison. Il est le cent-dixième Pokémon du Pokédex de Kanto.", ''),
    ('111', 'Rapasdepic', 'Normal', 'Vol', '110', NULL, "Rapasdepic est la forme évoluée de Doduo. Il a trois têtes et peut voler à des vitesses incroyables. Il est le cent-onzième Pokémon du Pokédex de Kanto.", ''),
  ('112', 'Abo', 'Poison', NULL, '113', NULL, "Abo est un Pokémon de type Poison. Il possède une morsure venimeuse. Il est le cent-douzième Pokémon du Pokédex de Kanto.", ''),
  ('113', 'Arbok', 'Poison', NULL, '112', NULL, "Arbok est la forme évoluée de Abo. Il a une tête en forme de cobra et peut cracher du venin. Il est le cent-treizième Pokémon du Pokédex de Kanto.", ''),
  ('114', 'Pikachu', 'Électrik', NULL, '25', '26', "Pikachu est un Pokémon de type Électrik. Il est le partenaire emblématique de la franchise Pokémon. Il est le cent-quatorzième Pokémon du Pokédex de Kanto.", ''),
  ('115', 'Raichu', 'Électrik', NULL, '114', NULL, "Raichu est la forme évoluée de Pikachu. Il est de type Électrik. Il est le cent-quinzième Pokémon du Pokédex de Kanto.", ''),
  ('116', 'Sabelette', 'Sol', NULL, '117', NULL, "Sabelette est un Pokémon de type Sol. Il creuse des tunnels pour se cacher et attaquer. Il est le cent-seizième Pokémon du Pokédex de Kanto.", ''),
  ('117', 'Sablaireau', 'Sol', NULL, '116', NULL, "Sablaireau est la forme évoluée de Sabelette. Il a des griffes acérées et est un excellent creuseur de tunnels. Il est le cent-dix-septième Pokémon du Pokédex de Kanto.", ''),
  ('118', 'Nidoran♀', 'Poison', NULL, '31', '119', "Nidoran♀ est un Pokémon de type Poison. Il possède une corne empoisonnée. Il est le cent-dix-huitième Pokémon du Pokédex de Kanto.", ''),
  ('119', 'Nidorina', 'Poison', NULL, '118', '120', "Nidorina est la forme évoluée de Nidoran♀. Elle possède une corne plus développée et est plus puissante. Elle est le cent-dix-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('120', 'Nidoqueen', 'Poison', 'Sol', '118', '119', "Nidoqueen est la forme évoluée de Nidorina. Elle est de type Poison et Sol. Elle est le cent-vingtième Pokémon du Pokédex de Kanto.", ''),
  ('121', 'Staross', 'Eau', 'Psy', '120', '121', "Staross est la forme évoluée de Staross. Il possède de longs bras et est capable de manipuler les objets avec ses pouvoirs psychiques. Il est le cent-vingt-et-unième Pokémon du Pokédex de Kanto.", ''),
  ('122', 'M. Mime', 'Psy', 'Fée', '123', NULL, "M. Mime est un Pokémon de type Psy et Fée. Il est capable de créer des barrières invisibles. Il est le cent-vingt-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('123', 'Insécateur', 'Insecte', 'Vol', '123', NULL, "Insécateur est la forme évoluée de Insécte. Il a des lames tranchantes sur ses pattes et peut voler rapidement. Il est le cent-vingt-troisième Pokémon du Pokédex de Kanto.", ''),
  ('124', 'Lippoutou', 'Glace', 'Psy', '238', NULL, "Lippoutou est une évolution spécifique de Lippouti lorsqu'il est échangé. Il est de type Glace et Psy. Il est le cent-vingt-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('125', 'Élektek', 'Électrik', NULL, '239', NULL, "Élektek est une évolution spécifique de Électabuzz lorsqu'il est échangé. Il est de type Électrik. Il est le cent-vingt-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('126', 'Magmar', 'Feu', NULL, '240', NULL, "Magmar est une évolution spécifique de Magby lorsqu'il est échangé. Il est de type Feu. Il est le cent-vingt-sixième Pokémon du Pokédex de Kanto.", ''),
  ('127', 'Scarabrute', 'Insecte', NULL, '214', NULL, "Scarabrute est la forme évoluée de Scarabruyère. Il est de type Insecte. Il est le cent-vingt-septième Pokémon du Pokédex de Kanto.", ''),
  ('128', 'Tauros', 'Normal', NULL, NULL, NULL, "Tauros est un Pokémon de type Normal. Il est connu pour sa force et sa nature fougueuse. Il est le cent-vingt-huitième Pokémon du Pokédex de Kanto.", ''),
  ('129', 'Magicarpe', 'Eau', NULL, '130', NULL, "Magicarpe est un Pokémon de type Eau. Il est faible mais peut évoluer en un puissant Léviator. Il est le cent-vingt-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('130', 'Léviator', 'Eau', 'Vol', '129', NULL, "Léviator est la forme évoluée de Magicarpe. Il est de type Eau et Vol. Il est le cent-trentième Pokémon du Pokédex de Kanto.", ''),
  ('131', 'Lokhlass', 'Eau', 'Glace', '120', NULL, "Lokhlass est un Pokémon aquatique géant. Il peut nager dans les eaux glaciales et est doté d'une corne solide. Il est le cent-trente et unième Pokémon du Pokédex de Kanto.", ''),
  ('132', 'Métamorph', 'Normal', NULL, NULL, NULL, "Métamorph est un Pokémon unique capable de prendre la forme de n'importe quel autre Pokémon. Il est le cent-trente-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('133', 'Évoli', 'Normal', NULL, '134', '135', "Évoli est un Pokémon aux multiples évolutions. Il peut évoluer en différentes formes en fonction des conditions environnementales. Il est le cent-trente-troisième Pokémon du Pokédex de Kanto.", ''),
  ('134', 'Aquali', 'Eau', NULL, '133', NULL, "Aquali est l'une des évolutions d'Évoli. Il a une fourrure douce et peut contrôler l'eau à volonté. Il est le cent-trente-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('135', 'Voltali', 'Électrik', NULL, '133', NULL, "Voltali est l'une des évolutions d'Évoli. Il peut générer de l'électricité et est agile dans les combats. Il est le cent-trente-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('136', 'Pyroli', 'Feu', NULL, '133', NULL, "Pyroli est l'une des évolutions d'Évoli. Il a une fourrure enflammée et peut contrôler le feu. Il est le cent-trente-sixième Pokémon du Pokédex de Kanto.", ''),
  ('137', 'Porygon', 'Normal', NULL, NULL, NULL, "Porygon est un Pokémon créé artificiellement par des programmes informatiques. Il est le cent-trente-septième Pokémon du Pokédex de Kanto.", ''),
  ('138', 'Amonita', 'Roche', 'Eau', '139', NULL, "Amonita est un Pokémon fossile de l'ère préhistorique. Il est doté d'une coquille en spirale. Il est le cent-trente-huitième Pokémon du Pokédex de Kanto.", ''),
  ('139', 'Amonistar', 'Roche', 'Eau', '138', NULL, "Amonistar est la forme évoluée d'Amonita. Il a une coquille plus grande et des membres plus développés. Il est le cent-trente-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('140', 'Kabuto', 'Roche', 'Eau', '141', NULL, "Kabuto est un autre Pokémon fossile de l'ère préhistorique. Il a une carapace en forme de demi-lune. Il est le cent-quantième Pokémon du Pokédex de Kanto.", ''),
  ('141', 'Kabutops', 'Roche', 'Eau', '140', NULL, "Kabutops est la forme évoluée de Kabuto. Il a des lames tranchantes sur ses pattes et est un prédateur agile. Il est le cent-quarante et unième Pokémon du Pokédex de Kanto.", ''),
  ('142', 'Ptéra', 'Roche', 'Vol', '142', NULL, "Ptéra est un Pokémon fossile volant de grande envergure. Il est capable de planer sur de longues distances. Il est le cent-quarante-deuxième Pokémon du Pokédex de Kanto.", ''),
  ('143', 'Ronflex', 'Normal', NULL, NULL, NULL, "Ronflex est un Pokémon paresseux qui passe la plupart de son temps à dormir. Il est le cent-quarante-troisième Pokémon du Pokédex de Kanto.", ''),
  ('144', 'Artikodin', 'Glace', 'Vol', NULL, NULL, "Artikodin est un Pokémon légendaire de type Glace et Vol. Il règne sur les mers gelées et est très rare. Il est le cent-quarante-quatrième Pokémon du Pokédex de Kanto.", ''),
  ('145', 'Électhor', 'Électrik', 'Vol', NULL, NULL, "Électhor est un Pokémon légendaire de type Électrik et Vol. Il est capable de générer des éclairs puissants. Il est le cent-quarante-cinquième Pokémon du Pokédex de Kanto.", ''),
  ('146', 'Sulfura', 'Feu', 'Vol', NULL, NULL, "Sulfura est un Pokémon légendaire de type Feu et Vol. Il habite dans les montagnes en émettant de la chaleur intense. Il est le cent-quarante-sixième Pokémon du Pokédex de Kanto.", ''),
  ('147', 'Minidraco', 'Dragon', NULL, '148', NULL, "Minidraco est un Pokémon de type Dragon. Il est petit mais devient plus puissant en évoluant. Il est le cent-quarante-septième Pokémon du Pokédex de Kanto.", ''),
  ('148', 'Draco', 'Dragon', NULL, '149', NULL, "Draco est la forme évoluée de Minidraco. Il devient plus grand et plus puissant. Il est le cent-quarante-huitième Pokémon du Pokédex de Kanto.", ''),
  ('149', 'Dracolosse', 'Dragon', 'Vol', '147', '148', "Dracolosse est un Pokémon dragon volant majestueux. Il est le cent-quarante-neuvième Pokémon du Pokédex de Kanto.", ''),
  ('150', 'Mewtwo', 'Psy', NULL, NULL, NULL, "Mewtwo est un Pokémon légendaire de type Psy. Il possède une puissance psychique extraordinaire. Il est le cent-cinquantième Pokémon du Pokédex de Kanto.", ''),
  ('151', 'Mew', 'Psy', NULL, NULL, NULL, "Mew est un Pokémon légendaire aux capacités psychiques. Il est dit posséder l'ensemble des gènes de tous les Pokémon, faisant de lui l'ancêtre de tous. Il est le cent-cinquante et unième Pokémon du Pokédex de Kanto.", '');