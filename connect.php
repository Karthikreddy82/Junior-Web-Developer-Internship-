<?php
// Connect to the database
$host = "hostname";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a SELECT query
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Fetch the resulting rows as an array
$products = $result->fetch_all(MYSQLI_ASSOC);

// Iterate through the array and print each product
foreach ($products as $product) {
    echo $product['name'] . ": " . $product['price'] . "<br>";
}

// Close the connection
$conn->close();
?>

