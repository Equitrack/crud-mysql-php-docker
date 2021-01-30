<?php
    $servername = "192.168.45.128:33060";
    $username = "root";
    $password = "antonioCastellanos";
    $dbname = "web";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // sql to delete a record
        $sql = "DELETE FROM alumnos WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }
?> 