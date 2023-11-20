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
        <div class="card">
        <figure><img src="<?php echo $pokemon["img"]?>" alt="<?php echo $pokemon["pkmName"]?>" class = 'pokeImg'></figure>
            <h2><a href='../views/show.php?name=<?php echo $pokemon["pkmName"]?>' class = 'pokeName'><?php echo $pokemon["pkmName"]?></a></h2>
            <h3 class = 'pokeId'><?php echo $pokemon["id"]?></h3>
            <div class="pokeStats">
                <p class='pokeType1'><?php echo $pokemon["type1"]?></p>
                <p class='pokeType2'><?php echo $pokemon["type2"]?></p>
                </div>
                <div class="buttons">
                <button class="favoriteBtn"><input type="submit" value="Favorite"></button>
             <button><input type="submit" value="edit" class = "pokeSubmit"></button>

                </div>
            
        </div> 
        <?php endforeach; ?> 
      

    </div>
   
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>