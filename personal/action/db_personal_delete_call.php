<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormpersonal" action="" method="POST">

    <h2>Formulario suprimir personal</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputpersonal">Id personal</label>
          <input type="number" name="id_personal" class="form-control" id="inputpersonal" placeholder="Id personal">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
      </div>
    </div>
  </form>
</div>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  
?>
