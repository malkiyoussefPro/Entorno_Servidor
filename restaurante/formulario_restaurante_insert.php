<?php

  session_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormservicio " action="/student042/dwes/Restaurante/action/db_restaurante_insert_call.php" method="POST">

      <h2>Formulario insertar servicio </h2>
      <div class="container">
        
        <div class="form-group">
          <label for="inputservicio ">Id servicio </label>
          <input type="text" name="id_servicio " class="form-control" id="inputservicio " placeholder="nombre">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen servicio</label>
        <input class="form-control" type="file" id="formFile" name="imagen_servicio">
        </div>
  
        <div class="form-group">
          <label for="inputFecha">Fecha creación servicio</label>
          <input type="date" name="fecha_creacion_servicio" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        <div class="form-group">
          <label for="inputservicio ">precio </label>
          <input type="number" name="precio_servicio " class="form-control" id="inputservicio " placeholder="precio">
        </div>
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
    
  </div>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>