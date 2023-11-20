<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1); 
require "../helpers/request.php";

require_once __DIR__ . '/partials/header.php';
?>


<nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signin.php">Register</a></li>
    </ul>
  </nav>
  <form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Log in</button>
  </form>
  <?php 
require_once __DIR__.'/partials/footer.php';
?>