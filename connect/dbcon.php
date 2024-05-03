<?php
$servername = "localhost";
$username = "root"; // default username for MySQL in XAMPP
$password = ""; // default password is empty in XAMPP
$database = "ecmvph_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>