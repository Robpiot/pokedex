<?php
require '/var/www/html/pokedex/connect.php';
$stmt = $pdo->prepare('SELECT * FROM pokedex');
$stmt->execute();
$pkm = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($pkm as $pokemon) {
  echo '<div>';
  echo '<p>' . $pokemon['pkmName'] . '</p>';
  echo '<p>' . $pokemon['type1'] . '</p>';
  echo '<p>' . $pokemon['type2'] . '</p>';
  echo '<p>' . $pokemon['evolution1'] . '</p>';
  echo '<p>' . $pokemon['evolution2'] . '</p>';
  echo '<p>' . $pokemon['bio'] . '</p>';
  echo '<img src="' . $pokemon['img'] . '" alt="' . $pokemon['pkmName'] . '">';
}
