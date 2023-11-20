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
            $name=$_GET['name'];

            $stmt2 = $pdo->prepare("SELECT * FROM pokedex INNER JOIN STATS ON pkm_id=id WHERE pkmName=:pkmName");
            $stmt2->bindParam(':pkmName', $name);
            $stmt2->execute();
            $SelectedPkmData=$stmt2->fetch(PDO::FETCH_ASSOC);
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
    } 

    
} elseif (isset($_POST['login'])) {
    $isSuccess = 0;

    $userName = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username= :userName";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':userName', $userName);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $storedPassword = $result["password"];
        $userEnteredPassword = $_POST["password"];

        if (hash_equals($storedPassword, hash('sha512', $userEnteredPassword))) {
            $isSuccess = 1;
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_name'] = $result['username'];
        }
    }

    if ($isSuccess == 0) {
        header("location:login.php");
        echo "<div>error wrong password</div>";
    } else {
        header("location:../views/index.php");
    }
}
?>
