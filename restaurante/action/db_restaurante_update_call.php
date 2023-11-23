<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');
  //universal

?>
<?php
            
    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
?>

  <div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario actualizar restaurante</h2>
  <form class="myFormCliente" action="" method="POST">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
      <div class="form-group col-md-6 ">
          <label for="inputRestaurante" style ="color: #040212">Id restaurante</label>
          <input type="number" name="actualizar" class="form-control" name="id_restaurante" placeholder="Id restaurante">
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <button type="submit" name="actualizar" class="btn btn-primary mt-2 mb-3" style="background-color: #000000; border-color: #feffe2; justify-content: center;color: #505050 ; font-weight: bold;">Actualizar</button>
      </div>
    </div>
  </form>
</div>

  <?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');


?>
