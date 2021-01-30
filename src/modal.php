<!--Add Modal-->
<div class="modal" tabindex="-1" id="addModal">
<div class="modal-dialog">
<div class="modal-content">
<!--FORMULARIO-->
  <form action="src/create.php" method="POST">
    <div class="form-group">
      <div class="modal-header">
      <h5 class="modal-title">Agregar alumno</h5>
      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>

    <div class="form-group">
      <div class="modal-body">     
      <label>Nombre</label>
      <input name="nombre" type="text" class="form-control" required>
      </div>

      <div class="modal-body">     
      <label>Apellido</label>
      <input name="apellido" type="text" class="form-control" required>
      </div>

      <div class="modal-body">   
      <label>Edad</label>
      <input name="edad" type="number" class="form-control" required>
      </div>
    </div>

    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button name="create" type="submit" class="btn btn-success">Agregar</button>
    </div>
  </form>
</div>
</div>
</div>