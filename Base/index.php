<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex</title>
  <link href="/public/scss/style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signin.php">Register</a></li>
      <li><form method='post' action="index.php"><input type="text" name="search" placeholder="Search..."></form></li>
    </ul>
  </nav>
  <h1>Welcome to my Pokedex!</h1>
  <p>Here's where I keep track of all my Pokemon.</p>




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
    <?php require './scriptsphp/addPokemon.php'; ?>
</form>
</body>
</html>