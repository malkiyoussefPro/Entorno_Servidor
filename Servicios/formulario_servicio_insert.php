
<?php
          
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormservicio " action="/student042/dwes/Servicios/action/db_servicio_insert_call.php" method="POST" enctype="multipart/form-data">

      <h2>Formulario insertar servicio </h2>
      <div class="container">
      <div class="form-group col-md-4">
          <label for="inputState">Departamento servicio </label>
          <select id="inputState" class="form-control" name="departamento">
              <option selected>Seleccionar...</option>
              <option>Restaurante</option>
              <option>Evento</option>
              <option>Belleza</option>
          </select>
      </div>
        <div class="form-group">
          <label for="inputservicio ">Description servicio </label>
          <input type="text" name="descripcion" class="form-control" id="inputservicio " placeholder="nombre">
        </div>
          <div class="mb-3">
        <label for="formFile" class="form-label">Imagen servicio</label>
        <input class="form-control" type="file" id="formFile" name="imagen">
        </div>
          <div class="form-group">
          <label for="inputservicio ">precio </label>
          <input type="number" name="precio" class="form-control" id="inputservicio " placeholder="precio">
        </div>
        <div class="form-group">
          <label for="inputFecha">Fecha creación servicio</label>
          <input type="date" name="fecha_creacion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
    
  </div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>