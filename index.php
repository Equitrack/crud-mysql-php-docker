<?php include("src/header.php")?>

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
            <?php include("src/read.php")?>
        </tbody>
    </table>
    </div>
</div>

<?php include("src/modal.php")?>
<?php include("src/footer.php")?>
