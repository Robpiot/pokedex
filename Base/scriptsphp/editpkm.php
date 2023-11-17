<?php
require '../helpers/request.php';


foreach ($pkm as $pokemon) {
  echo '<div> <img src="' . $pokemon['img'] . '" alt="' . $pokemon['pkmName'] . '"/> 
  <input type="number" value="' . $pokemon['id'] . '"> 
  <textarea>' . $pokemon['bio'] . '</textarea> 
  </div>';
}
