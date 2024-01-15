
<?php
          
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">
<div class="d-flex justify-content-center">

  <form class="myFormUsuario" action="/student042/dwes/Comentarios/action/db_comentario_insert_call.php" method="POST">

      <h2>Formulario Modificar Comentarios</h2>
      <div class="container">

        <div class="form-group col-md-4">
            <label for="inputState">Estado comentario</label>
            <select id="inputState" class="form-control" name="estado_comentario">
              <option selected>Seleccionar...</option>
              <option>Pendiente</option>
              <option>Revisado</option>
              <option>Bloquedo</option>
              
            </select>
        </div>
        <div>
          <label for="inputUsuario">Nombre Cliente</label>
          <input type="text" name="nombre_cliente" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>

        <div class="form-group">
          <label for="inputFecha">Fecha creacion cuenta</label>
          <input type="date" name="fecha_Creacion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Comentarios</label>
            <select id="inputState" class="form-control" name="comentarios">
              <option selected>Seleccionar...</option>
              <option>Muy contento, lo recomendo</option>
              <option>Satisfecho </option>
              <option>Experiencia normal</option>
              <option>Menos satisfecho</option>
              <option>Mala experiencia</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Score</label>
            <select id="inputState" class="form-control" name="score">
              <option selected>Seleccionar...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="modificar" id="btn" class="btn mt-2">Modificar Comentario</button>
        </div>
        </form>
</div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>