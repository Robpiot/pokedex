<?php require_once __DIR__ . '/partials/header.php'; ?>
<?php
require '../helpers/request.php';

$jsonType = file_get_contents('../type.json');
$types = json_decode($jsonType, true);

foreach ($data as $pokemon) {
  echo '<form method="POST">
  <div> <img src="' . $pokemon['img'] . '" alt="' . $pokemon['pkmName'] . '"/> 
  <label for="pkmId">Pokemon Id :</label>
  <input type="number" name="pkmId" value="' . $pokemon['id'] . '"> 
  <label for="pkmName">Pokemon Name :</label>
  <input type="text" name="pkmName" value="' . $pokemon['pkmName'] . '">
  <label for="bio">Pokemon Bio :</label>
  <textarea name="bio">' . $pokemon['bio'] . '</textarea>
  <label for="evo1">1er évolution ID :</label>
  <input type="number" name="evo1" value="' . $pokemon['evolution1'] . '">
  <label for="evo2">2eme évolution ID :</label>
  <input type="number" name="evo2" value="' . $pokemon['evolution2'] . '">
  <label for="type1">Type 1 :</label>
  <select name="type1">';
  foreach ($types as $type) {
    echo '<option value="' . $type['name'] . '"';
    if ($type['name'] == $pokemon['type1']) {
      echo ' selected';
    }
    echo '>' . $type['name'] . '</option>';
  }
  echo '</select>
  <label for="type2">Type 2 :</label>
  <select name="type2">';
  foreach ($types as $type) {
    echo '<option value="' . $type['name'] . '"';
    if ($type['name'] == $pokemon['type2']) {
      echo ' selected';
    }
    echo '>' . $type['name'] . '</option>';
  }
  echo '</select>
  <label for="hp">HP :</label>
  <input type="number" name="hp" value="' . $pokemon['hp'] . '">
  <label for="atk">Attack :</label>
  <input type="number" name="atk" value="' . $pokemon['atk'] . '">
  <label for="def">Defense :</label>
  <input type="number" name="def" value="' . $pokemon['def'] . '">
  <label for="sAtk">Special Attack :</label>
  <input type="number" name="sAtk" value="' . $pokemon['atk_spe'] . '">
  <label for="sDef">Special Defense :</label>
  <input type="number" name="sDef" value="' . $pokemon['def_spe'] . '">
  <label for="speed">Speed :</label>
  <input type="number" name="speed" value="' . $pokemon['speed'] . '">
  <label for="img">Image URL :</label>
  <input type="text" name="img" value="' . $pokemon['img'] . '">
  <label for="editbtn"></label>
  <input type="submit" name="editbtn" value="Edit the pokémon">
  </div>
  </form>';
};

try {
  if (isset($_POST['editbtn'])) {
    $id = $_POST['pkmId'];
    $pkname = $_POST['pkmName'];
    $bio = $_POST['bio'];
    $evo1 = $_POST['evo1'];
    $evo2 = $_POST['evo2'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $hp = $_POST['hp'];
    $atk = $_POST['atk'];
    $def = $_POST['def'];
    $sAtk = $_POST['sAtk'];
    $sDef = $_POST['sDef'];
    $speed = $_POST['speed'];
    $img = $_POST['img'];

    $stmt = $pdo->prepare("UPDATE pokedex , stats SET pkmName=:pkname, bio=:bio, evolution1=:evo1, evolution2=:evo2, type1=:type1, type2=:type2, hp=:hp, atk=:atk, def=:def, atk_spe=:sAtk, def_spe=:sDef, speed=:speed, img=:img WHERE id=:id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':pkname', $pkname);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':evo1', $evo1);
    $stmt->bindParam(':evo2', $evo2);
    $stmt->bindParam(':type1', $type1);
    $stmt->bindParam(':type2', $type2);
    $stmt->bindParam(':hp', $hp);
    $stmt->bindParam(':atk', $atk);
    $stmt->bindParam(':def', $def);
    $stmt->bindParam(':sAtk', $sAtk);
    $stmt->bindParam(':sDef', $sDef);
    $stmt->bindParam(':speed', $speed);
    $stmt->bindParam(':img', $img);
    $stmt->execute();

    header('Location: editpkm.php');
  }
} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
};
?>
<?php require_once __DIR__ . '/partials/footer.php';?>