<?php 
require "../helpers/request.php";
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex - Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../jsscripts/changeIcon.js"></script>

<main>
    
    <h1>Pokedex - Homepage</h1>
    <p class="userName">Hello  <strong><?php echo ['name'] ?></p></strong>
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
                
                <button type="submit" id='GFG' class="favIcon" value="favorite" ><i class="fa-solid fa-heart" style="color: #000000;"></i></button>
            
        </div> 
        <?php endforeach; ?> 
      

    </div>
   
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>