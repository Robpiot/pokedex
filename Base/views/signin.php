<?php require '../connect.php';
$title = "Sign up";
require_once __DIR__ . '/partials/header.php';

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
<div class="registerdiv">
  <h2>Register</h2>
  <form method="POST" action="signin.php">
    <label for="username">Username<span class="aste">*</span></label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email<span class="aste">*</span></label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password<span class="aste">*</span></label>
    <input type="password" id="password" name="password" required>

    <label for="send"></label>
    <input type="submit" id="send" name="send" value="Register">

  </form>
</div>
<?php
require_once __DIR__ . '/partials/footer.php';
?>