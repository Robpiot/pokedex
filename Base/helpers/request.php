<?php
require '../connect.php';

if (!function_exists('url')) {

    // Define a new 'url' function that takes a string parameter and returns the parsed URL
    function url(string $request)
    {
        // Use the 'parse_url' function to parse the provided URL and return the result
        return parse_url($request);
    }
}

// Initialize an empty array to store the parsed query parameters
$result = [];

// Get the current request URL and parse it using the 'url' function
$url = url($_SERVER['REQUEST_URI']);

// Get the request method (e.g., GET, POST) from the server environment
$method = $_SERVER['REQUEST_METHOD'];



// Assuming you have a database connection, you can now fetch data from the 'pokedex' table
if ($method === 'GET') {
    try {
        // Fetch all pokemons
        $sql = "SELECT * FROM pokedex inner JOIN stats on pkm_id=id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Fetch the data as an associative array
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_GET['name'])) {
            $name = $_GET['name'];

            $stmt2 = $pdo->prepare("SELECT * FROM pokedex INNER JOIN STATS ON pkm_id=id WHERE pkmName=:pkmName");
            $stmt2->bindParam(':pkmName', $name);
            $stmt2->execute();
            $SelectedPkmData = $stmt2->fetch(PDO::FETCH_ASSOC);
        }

        // Get the evolution1 data to display it
        if (!empty($SelectedPkmData['evolution1'])) {
            $stmtEvolution1 = $pdo->prepare("SELECT * FROM pokedex WHERE id = :evolution1");
            $stmtEvolution1->bindParam(':evolution1', $SelectedPkmData['evolution1']);
            $stmtEvolution1->execute();
            $evolution1Data = $stmtEvolution1->fetch(PDO::FETCH_ASSOC);
        }

        // Get the evolution2 data to display it
        if (!empty($SelectedPkmData['evolution2'])) {
            $stmtEvolution2 = $pdo->prepare("SELECT * FROM pokedex WHERE id = :evolution2");
            $stmtEvolution2->bindParam(':evolution2', $SelectedPkmData['evolution2']);
            $stmtEvolution2->execute();
            $evolution2Data = $stmtEvolution2->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        // Handle the case where the query fails
        echo "Error: " . $e->getMessage();
    } {
    }
} elseif ($method === 'POST') {
    try {
        if (isset($_POST['editPokemonBtn'])) {
            $id = $_POST['pkmId'];
            $pkname = $_POST['pkmName'];
            $bio = $_POST['bio'];
            $evo1 = $_POST['evo1'];
            $evo2 = $_POST['evo2'];
            $type1 = $_POST['type1'];
            $type2 = $_POST['type2'];
            $hp = $_POST['hp'];
            $atk = $_POST['atk'];
            $def = $_POST['def'];
            $sAtk = $_POST['sAtk'];
            $sDef = $_POST['sDef'];
            $speed = $_POST['speed'];
            $img = $_POST['img'];

            $stmt = $pdo->prepare("UPDATE pokedex , stats SET pkmName=:pkname, bio=:bio, evolution1=:evo1, evolution2=:evo2, type1=:type1, type2=:type2, hp=:hp, atk=:atk, def=:def, atk_spe=:sAtk, def_spe=:sDef, speed=:speed, img=:img WHERE id=:id");

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':pkname', $pkname);
            $stmt->bindParam(':bio', $bio);
            $stmt->bindParam(':evo1', $evo1);
            $stmt->bindParam(':evo2', $evo2);
            $stmt->bindParam(':type1', $type1);
            $stmt->bindParam(':type2', $type2);
            $stmt->bindParam(':hp', $hp);
            $stmt->bindParam(':atk', $atk);
            $stmt->bindParam(':def', $def);
            $stmt->bindParam(':sAtk', $sAtk);
            $stmt->bindParam(':sDef', $sDef);
            $stmt->bindParam(':speed', $speed);
            $stmt->bindParam(':img', $img);
            $stmt->execute();

            header('Location: editpkm.php');
        }
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
};
