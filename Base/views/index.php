<?php 
require "../helpers/request.php";
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>
<!-- 
<script defer src="../jsscripts/search.js"></script> -->


<nav>
    <ul>
     
      <li><a href="login.php">Home</a></li>
      <li><a href="signin.php">Register</a></li>
      <li><a href="index.php">Pokedex</a></li>
      <li><a href="editpkm.php">Edit Pokemons</a></li>

    </ul>
  </nav>

<main>
    <input type="search" id="search">
    <h1>Pokedex - Homepage</h1>
    <p>Hello  <strong><?php echo ['name'] ?></p></strong>
    <div class="container">
    <table>
        
        <?php foreach ($data as $pokemon): ?>
        <tr class="card">
        <td><img src="<?php echo $pokemon["img"]?>" alt="<?php echo $pokemon["pkmName"]?>" class = 'pokeImg'></td>
            <td><a href='../views/show.php?name=<?php echo $pokemon["pkmName"]?>' class = 'pokeName'><?php echo $pokemon["pkmName"]?></a></td>
            <td class = 'pokeId'><?php echo $pokemon["id"]?></td>
            <div class="pokeStats">
            <td class='pokeType1'><?php echo $pokemon["type1"]?></td>
            <td class='pokeType2'><?php echo $pokemon["type2"]?></td>
        </div>
            <td class="favoriteBtn"><input type="submit" value="Favorite"></td>
            <td class='pokeSubmit'><input type="submit" value="edit"></td>
        </tr> 
        <?php endforeach; ?> 
    </table>   

    </div>
   
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>