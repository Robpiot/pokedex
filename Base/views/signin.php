<?php require '../connect.php';
require_once __DIR__.'/partials/header.php';
// Get the data from the form
try {
  if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = hash('sha512', $password);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->execute();
  }
} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
}

?>


  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signin.php">Register</a></li>
    </ul>
  </nav>
  <form method="POST" action="signin.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="send"></label>
    <input type="submit" id="send" name="send" value="Register">

  </form>
  <?php 
require_once __DIR__.'/partials/footer.php';
?>