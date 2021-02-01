<!DOCTYPE html>
<html lang="es">
<!--Header-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programacion Web | Antonio</title>
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<!--BODY-->
<body>
<!--NAV-->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="../index.php" class="navbar-brand">Programacion web </a>
    </div>
</nav>

<div class="container p-5">

    <div class="row">
        <div class="col"> 
            <h3>Registro de <b>alumnos</b></h3>
        </div>

        <div class="col"> 
            <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#addModal"> Agregar alumno </button>
        </div>
    </div>

    <br>

    <div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th class="col-md-2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table content -->
            <?php include("read.php")?>
        </tbody>
    </table>
    </div>
</div>

<?php include("modal.php")?>
<?php
    include ("mysqlConection.php");

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM alumnos WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {?>

        <!-- HTML -->


        <!--edit Modal-->
        <div class="modal" tabindex="-1" id="editModal">
        <div class="modal-dialog">
        <div class="modal-content">
        <!--FORMULARIO-->
        <form action="update.php" method="POST">
            <div class="form-group">
            <div class="modal-header">
            <h5 class="modal-title">Actualizar alumno</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            </div>

            <div class="form-group">
            <div class="modal-body">     
            <label>Nombre</label>
            <input name="nombre" type="text" class="form-control"  required value="<?php echo $row['nombre']?>">
            </div>

            <div class="modal-body">     
            <label>Apellido</label>
            <input name="apellido" type="text" class="form-control" required value="<?php echo $row['apellido']?>">
            </div>

            <div class="modal-body">   
            <label>Edad</label>
            <input name="edad" type="number" class="form-control" required value="<?php echo $row['edad']?>">
            </div>

            <input type = "hidden" name = "id" value = "<?php echo $row['id']?>"/>

            </div>

            <div class="modal-footer">
            <a class="btn btn-secondary" href="../index.php" role="button">Cancelar</a>
            <button name="update" type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
        </div>
        </div>
        </div>
            
        <?php }
        } else {
        echo "0 results";
        }
        $conn->close();
    }
?>
<!--Scripts-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script >
    (function(){
    $(function(){
        $('#editModal').modal()
    });
    }());
</script>
</body>
</html>
