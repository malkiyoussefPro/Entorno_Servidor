<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
      <form class="myFormHabitacion" action="" method="POST">
        <h2 >Formulario suprimir Habitacion</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputHabitacion">Id Habitacion</label>
              <input type="number" class="form-control" name="id_Habitacion" placeholder="Id Habitacion">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="suprimir" id="btn" class="btn  mt-2 mb-3">Suprimir</button>
          </div>
        </div>
      </form> 
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>