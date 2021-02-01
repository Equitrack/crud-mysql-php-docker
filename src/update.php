<?php
    include ("mysqlConection.php");

    if(isset($_POST['update'])){
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', edad='$edad' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {
        echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
?> 
