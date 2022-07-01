<?php

$servername = $_SERVER['SERVER_NAME'];
$username = $_SERVER['DB_USER'];
$password = $_SERVER['DB_PASS'];
$dbName = $_SERVER['DB_NAME'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<p class='database-status'>Database is working fine!</p>";

?>