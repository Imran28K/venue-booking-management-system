<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // default in XAMPP
$password = "";     // default no password
$dbname = "database_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>