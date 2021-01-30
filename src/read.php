<?php
    $servername = "192.168.45.128:33060";
    $username = "root";
    $password = "antonioCastellanos";
    $dbname = "web";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM alumnos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>" . $row['id'] ."</th>";
            echo "<td>" . $row['nombre'] ."</td>";
            echo "<td>" . $row['apellido'] ."</td>";
            echo "<td>" . $row['edad'] ."</td>";
            echo "<td>";
            echo '<a class="btn-sm btn btn-warning" href="src/read_id.php?id=' . $row['id'] . '" role="button">Editar</a> &nbsp;';
            echo '<a class="btn-sm btn btn-danger" href="src/delete.php?id=' . $row['id'] . '" role="button">Eliminar</a>';
            echo "</td>";
            echo "</tr>";
        }
    $conn->close();
    }
?>
