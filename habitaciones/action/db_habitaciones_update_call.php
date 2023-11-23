<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');
  //universal

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');

?>

  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario insertar habitacion</h2>
    <form class="myFormHabitacion" action="" method="POST">
      <div class="container">

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Tipo Habitacion</label>
            <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Single</option>
              <option>Double</option>
              <option>Suite</option>
              
              </option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Disponibilidad habitacion</label>
            <select name="disponibilidad_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              <option>bloquada</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Estado habitacion</label>
            <select name="estado_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Ubicacion Habitacion</label>
            <select name="vista_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vista mar</option>
              <option>Vista jardin</option>
              <option>Vista piina</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="inputZip" style="color: #040212">precio</label>
            <input type="number" name="precio_habitacion" class="form-control" id="inputZip" placeholder="precio habitacion">
          </div>
         
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" name="actualizar" class="btn btn-primary m-2">actualizar</button>
        </div>
      </div>
    </form>

  </div>

  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');

  ?>