<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormCliente" action="/student042/dwes/Clientes/action/db_cliente_select_call.php" method="POST">


    <h2>Formulario buscar cliente</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputCliente">Id cliente</label>
          <input type="number" name="id_cliente" class="form-control" id="inputCliente" placeholder="Id cliente">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
      </div>
    </div>
  </form>
</div>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

