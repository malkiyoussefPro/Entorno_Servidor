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

  <form class="myFormservicio " action="/student042/dwes/Servicios/action/db_servicio_select_call.php" method="POST">

        <h2>Formulario Buscar Servicio</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
          <div class="form-group col-md-6 ">
              <label for="inputServicio">Id Servicio</label>
              <input type="number" class="form-control" name="id_Servicio" placeholder="Id Servicio">
            </div>
          </div>
          <div>
            <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
          </div>
        </div>
    </form>
 
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
