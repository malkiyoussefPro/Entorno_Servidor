<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
      <form class="myFormEvento" action="/student042/dwes/Eventos/action/db_evento_delete_call.php" method="POST">
        <h2 >Formulario suprimir Evento</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputEvento">Id evento</label>
              <input type="number" class="form-control" name="id_Evento" placeholder="Id Evento">
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
