<?php
$title = "Edit Pokemon";
require_once __DIR__ . '/partials/header.php'; ?>

<form method="POST" action="index.php">
  <label for="pkmName">Pokemon Name:</label>
  <input type="text" id="pkmName" name="pkmName" required>

  <label for="id">Pokemon ID:</label>
  <input type="number" id="id" name="id" required>

  <label for="type1">Pokemon Type:</label>
  <input type="text" id="type1" name="type1" required>

  <label for="type2"> Pokemon Type 2:</label>
  <input type="text" id="type2" name="type2">

  <label for="bio">Pokemon Bio:</label>
  <textarea id="bio" name="bio" required></textarea>

  <label for="evolution1">First Evolution id:</label>
  <input type="number" id="evolution1" name="evolution1">

  <label for="evolution2">Second Evolution id:</label>
  <input type="number" id="evolution2" name="evolution2">

  <label for="img">Pokemon Image:</label>
  <input type="text" id="img" name="img">

  <label for="send"></label>
  <input type="submit" id="send" name="send" value="Register">
</form>

<?php
$title = "Edit Pokemon";
require_once __DIR__ . '/partials/header.php';

require '../helpers/request.php';

$jsonType = file_get_contents('../type.json');
$types = json_decode($jsonType, true);

echo '<form method="POST">
<select name="pkmId">';
foreach ($data as $pokemon) {
  echo '<option value="' . $pokemon['id'] . '">' . $pokemon['pkmName'] . '</option>';
}
echo '</select>
<input type="submit" name="selectPokemonBtn" value="Select Pokémon">
</form>';

// Si un Pokémon a été sélectionné
if (isset($_POST['selectPokemonBtn'])) {

  $selectedPokemonId = $_POST['pkmId'];

  $sql2 = "SELECT * FROM pokedex INNER JOIN stats on pkm_id=id WHERE id = ?";
  $stmt = $pdo->prepare($sql2);
  $stmt->execute([$selectedPokemonId]);
  $selectedPokemon = $stmt->fetch(PDO::FETCH_ASSOC);

  echo '<form method="POST">
  <div> <img src="' . $selectedPokemon['img'] . '" alt="' . $selectedPokemon['pkmName'] . '"/> 
  <label for="pkmId">Pokemon Id :</label>
  <input type="number" name="pkmId" value="' . $selectedPokemon['id'] . '"> 
  <label for="pkmName">Pokemon Name :</label>
  <input type="text" name="pkmName" value="' . $selectedPokemon['pkmName'] . '">
  <label for="bio">Pokemon Bio :</label>
  <textarea name="bio">' . $selectedPokemon['bio'] . '</textarea>
  <label for="evo1">First Evolution :</label>
  <input type="number" name="evo1" value="' . $selectedPokemon['evolution1'] . '">
  <label for="evo2">Second Evolution :</label>
  <input type="number" name="evo2" value="' . $selectedPokemon['evolution2'] . '">
  <label for="type1">Pokemon Type 1:</label>
  <select name="type1">';
  foreach ($types as $type) {
    echo '<option value="' . $type['name'] . '">' . $type['name'] . '</option>';
  }
  echo '</select>
  <label for="type2">Pokemon Type 2:</label>
  <select name="type2">';
  foreach ($types as $type) {
    echo '<option value="' . $type['name'] . '">' . $type['name'] . '</option>';
  }
  echo '</select> 
  <label for="hp">HP :</label>
  <input type="number" name="hp" value="' . $selectedPokemon['hp'] . '">
  <label for="atk">Attack :</label>
  <input type="number" name="atk" value="' . $selectedPokemon['atk'] . '">
  <label for="def">Defense :</label>
  <input type="number" name="def" value="' . $selectedPokemon['def'] . '">
  <label for="sAtk">Special Attack :</label>
  <input type="number" name="sAtk" value="' . $selectedPokemon['atk_spe'] . '">
  <label for="sDef">Special Defense :</label>
  <input type="number" name="sDef" value="' . $selectedPokemon['def_spe'] . '">
  <label for="speed">Speed :</label>
  <input type="number" name="speed" value="' . $selectedPokemon['speed'] . '">
  <label for="img">Image :</label>
  <input type="text" name="img" value="' . $selectedPokemon['img'] . '">
  <label for="editPokemonBtn"></label>
  <input type="submit" name="editPokemonBtn" value="Edit the pokémon">
  
  </div>
  </form>';
}

require '../scriptsphp/addPokemon.php';
require_once __DIR__ . '/partials/footer.php';
