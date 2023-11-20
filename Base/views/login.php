<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 
session_start();
require "../helpers/request.php";
$title = "Login";
require_once __DIR__ . '/partials/header.php';
?>

<div class="logindiv">
  <h2>My Account</h2>
  <form method="POST" action="login.php">
    <label for="username">Username <span class="aste">*</span></label>
    <input type="text" id="username" name="username" placeholder="eg. OndineDu38" required>

    <label for="password">Password <span class="aste">*</span></label>
    <input type="password" id="password" name="password" placeholder="My password" required>

    <button type="submit">Connexion</button>
  </form>
</div>
<?php
require_once __DIR__ . '/partials/footer.php';
?>