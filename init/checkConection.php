<?php
$servername = "ipMysqlContainer:3306";
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
