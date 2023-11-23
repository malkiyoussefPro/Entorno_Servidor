<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');
  //universal

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
?>

  <div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario insertar Evento</h2>
  <form class="myFormCliente" action="" method="POST">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputBelleza" style ="color: #040212">Id evento</label>
          <input type="number" class="form-control" name="id_evento" placeholder="Id belleza">
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <button type="submit" name="insertar" class="btn btn-primary mt-2 mb-3" style="background-color: #000000; border-color: #feffe2; justify-content: center;color: #505050 ; font-weight: bold;">Insertar</button>
      </div>
    </div>
  </form>
</div>

  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  ?>