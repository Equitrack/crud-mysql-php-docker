<?php
    $servername = "192.168.45.128:33060";
    $username = "root";
    $password = "antonioCastellanos";
    $dbname = "web";

    if(isset($_POST['create'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO alumnos (nombre, apellido, edad) VALUES ('$nombre', '$apellido', '$edad')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>