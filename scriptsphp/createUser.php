<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

require './connect.php';




// Get the data from the form
try {
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $hashed_password = hash('sha512', $password);
    
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();
    
        header('Location: signin.php');
    }
} catch (PDOException $e) {
    die('Erreur de requête : ' . $e->getMessage());
}