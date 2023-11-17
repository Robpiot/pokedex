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
        // Assuming you are using PDO for database access
        $sql = "SELECT * FROM pokedex INNER JOIN stats on pkm_id=id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Fetch the data as an associative array
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Handle the case where the query fails
        echo "Error: " . $e->getMessage();
    }
}
