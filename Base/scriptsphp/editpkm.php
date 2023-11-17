

<?php
require '../helpers/request.php';

foreach ($pkm as $pokemon) {
  echo '<div> <img src="' . $pokemon['img'] . '" alt="' . $pokemon['pkmName'] . '"/> 
  <input type="number" value="' . $pokemon['id'] . '"> 
  <textarea name="bio">' . $pokemon['bio'] . '</textarea>
  <input type="number" value="' . $pokemon['evolution1'] . '">
  <input type="number" value="' . $pokemon['evolution2'] . '">
  </div>';
};
