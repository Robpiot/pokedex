<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
<nav>
    <ul>
      <li><a href="../index.php">Home</a></li>
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
</body>
</html>