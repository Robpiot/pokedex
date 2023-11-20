<?php 
require "../helpers/request.php";
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<script defer src="../jsscripts/search.js"></script>


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
    <table>
        <tr>
            <th>Pokemon</th>
            <th>ID</th>
            <th>Type 1</th>
            <th>Type 2</th>
            <th>Fav</th>
        </tr>
        <?php foreach ($data as $pokemon): ?>
        <tr>
            <td><a href='../views/show.php?name=<?php echo $pokemon["pkmName"]?>'><?php echo $pokemon["pkmName"]?></a></td>
            <td><?php echo $pokemon["id"]?></td>
            <td><?php echo $pokemon["type1"]?></td>
            <td><?php echo $pokemon["type2"]?></td>
            <td><input type="submit" value="Favorite"></td>
            <td><input type="submit" value="edit"></td>
        </tr>
        <?php endforeach; ?> 
    </table>   
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>