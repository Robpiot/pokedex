<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$title = "Login";
require_once __DIR__ . '/partials/header.php';
?>

<div class="logindiv">
  <form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="eg. OndineDu38" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="My password" required>

    <button type="submit">Log in</button>
  </form>
</div>
<?php
require_once __DIR__ . '/partials/footer.php';
?>