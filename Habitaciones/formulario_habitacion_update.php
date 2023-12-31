<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">
<div class="d-flex justify-content-center">
<form class="myFormHabitacion" action="/student042/dwes/Habitaciones/action/db_habitacion_update_call.php" method="POST">


    
<h2>Formulario actualizar habitacion</h2>
    
      <div class="container">

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputHabitacion">Tipo Habitacion</label>
            <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Single</option>
              <option>Double</option>
              <option>Suite</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputHabitacion">Disponibilidad habitacion</label>
            <select name="disponibilidad_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              <option>bloquada</option>
              
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion">Estado habitacion</label>
            <select name="estado_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              <option>Esta lista</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion">Ubicacion Habitacion</label>
            <select name="vista_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vista mar</option>
              <option>Vista pisina</option>
              <option>Vista jardin</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="inputZip">precio</label>
            <input type="number" name="precio_habitacion" class="form-control" id="inputZip" placeholder="precio habitacion">
          </div>
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen Habitación</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" name="actualizar" id="btn" class="btn  m-2">Actualizar</button>
        </div>
      </div>
    </form>
  </div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


