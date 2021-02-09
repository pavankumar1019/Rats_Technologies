<?php
$servername = "localhost";
$username = "u815129216_dev";
$password = "Rats1851";
$dbname = "u815129216_dev";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

