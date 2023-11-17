<?php
require './connect.php';

try {
    if (isset($_POST['send'])) {
        $name = $_POST['pkmName'];
        $id = $_POST['id'];
        $type1 = $_POST['type1'];
        $type2 = $_POST['type2'] ?? null; // If type2 is not set or is null, it will be set to null
        $bio = $_POST['bio'];
        $evolution1 = !empty($_POST['evolution1']) ? $_POST['evolution1'] : NULL; 
$evolution2 = !empty($_POST['evolution2']) ? $_POST['evolution2'] : NULL;
        $img = $_POST['img'] ?? null;

        $stmt = $pdo->prepare("INSERT INTO pokedex (pkmName, id, type1, type2, bio, evolution1, evolution2, img) VALUES (:pkmName, :id, :type1, :type2, :bio, :evolution1, :evolution2, :img)");
        $stmt->bindParam(':pkmName', $name);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':type1', $type1);
        $stmt->bindParam(':type2', $type2);
        $stmt->bindParam(':bio', $bio);
        $stmt->bindParam(':evolution1', $evolution1);
        $stmt->bindParam(':evolution2', $evolution2);
        $stmt->bindParam(':img', $img);
        $stmt->execute();
    }
} catch (Exception $e) {
    // In case of error, display a message and stop everything
    die('Error : ' . $e->getMessage());
}
