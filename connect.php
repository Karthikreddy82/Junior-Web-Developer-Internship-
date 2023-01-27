<?php
$email=$Post['email'];
$password=$post['password'];
$firstName = $post['firstName'];
$lastName=$post['lastName'];
$gender=$post['gender'];
$country = $post['country'];
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'testing');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert in to registration(email,password,firstname,lastname,gender,country");
    $stmt->bind_param("sssssi", $email, $password, $firstName, $lastName, $gender, $country);
    $stmt->execute();
    $stmt->close();
}
//close the connection
    $conn->close();
    ?>   

