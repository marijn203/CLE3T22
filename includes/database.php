<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "cle3";

// Create a connection
$db = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$db) {
    // If connection fails, output an error message and stop execution
    die("Error: " . mysqli_connect_error());
}
?>
