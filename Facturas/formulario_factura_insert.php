<?php

  session_start();
  
?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>


<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormfactura" action="/student042/dwes/Facturas/action/db_factura_insert_call.php" method="POST">

        <h2 >Formulario insertar factura</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputfactura">Id factura</label>
              <input type="number" class="form-control" name="id_factura" placeholder="Id factura">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn  mt-2 mb-3">Insertar</button>
          </div>
        </div>
      </form>
      
  </div>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

