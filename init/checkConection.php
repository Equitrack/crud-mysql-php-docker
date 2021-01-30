<?php
$servername = "192.168.45.128:33060";
$username = "root";
$password = "antonioCastellanos";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";
?>
