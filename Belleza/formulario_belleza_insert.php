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
      <form class="myFormBelleza" action="/student042/dwes/Belleza/action/db_belleza_delete_call.php" method="POST">
        <h2 >Formulario insertar Belleza</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputBelleza">Id Belleza</label>
              <input type="number" class="form-control" name="id_Belleza" placeholder="Id Belleza">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn_formulario" class="btn  mt-2 mb-3">Insertar</button>
          </div>
        </div>
      </form>
      
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


?>