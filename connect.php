<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
try {
  // On se connecte à MySQL
  $pdo = new PDO('mysql:host=localhost;dbname=poketrash;charset=utf8', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne 4

} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
}
ini_set("display_errors", 1);




try {
    $reponse = $pdo->query('SELECT * FROM users');
    $db = $reponse->fetchAll();
    $user = $pdo ->query('SELECT username FROM users');
    



} catch (PDOException $e) {
    die('Erreur de requête : ' . $e->getMessage());
}