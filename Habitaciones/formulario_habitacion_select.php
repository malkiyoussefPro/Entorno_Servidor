<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormHabitacion" action="/student042/dwes/Habitaciones/action/db_habitacion_select_call.php" method="POST">
        <h2 >Formulario buscar Habitacion</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputHabitacion">Id Habitacion</label>
              <input type="number" class="form-control" name="id_habitacion" placeholder="Id Habitacion">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="buscar" id="btn" class="btn  mt-2 mb-3">Buscar</button>
          </div>
        </div>
      </form> 
  </div>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


