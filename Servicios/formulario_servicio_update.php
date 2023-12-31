<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormservicio " action="/student042/dwes/Servicios/action/db_servicio_update_call.php" method="POST">

      <h2>Formulario actualizar servicio </h2>
      <div class="container">
        
        <div class="form-group">
          <label for="inputservicio ">Description servicio </label>
          <input type="text" name="nombre_servicio " class="form-control" id="inputservicio " placeholder="nombre">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen servicio</label>
        <input class="form-control" type="file" id="formFile" name="imagen_servicio">
        </div>
          <div class="form-group col-md-4">
            <label for="inputState">Departamento servicio </label>
            <select id="inputState" class="form-control" name="role_servicio ">
              <option selected>Seleccionar...</option>
              <option>Restaurante</option>
              <option>Evento</option>
              <option>Belleza</option>
            </select>
          </div>
          <div class="form-group">
          <label for="inputservicio ">precio </label>
          <input type="number" name="precio_servicio " class="form-control" id="inputservicio " placeholder="precio">
        </div>
        <div class="form-group">
          <label for="inputFecha">Fecha creación servicio</label>
          <input type="date" name="fecha_creacion_servicio" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="actualizar" id="btn" class="btn mt-2">Actualizar</button>
        </div>
      </div>
    </form>
    
  </div>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>