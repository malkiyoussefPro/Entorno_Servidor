
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormcomentario" action="/student042/dwes/Comentario/action/db_comentario_delete_call.php" method="POST">

        <h2>Formulario suprimir Comentario</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
          <div class="form-group col-md-6 ">
              <label for="inputcomentario">Id Comentario</label>
              <input type="number" class="form-control" name="id_comentario" placeholder="Id comentario">
            </div>
          </div>
          <div>
            <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
          </div>
        </div>
    </form>
 
  </div>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>