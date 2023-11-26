<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
  
?>


  <div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario buscar Servicio</h2>
  <form class="myFormServicio" action="/student042/dwes/Servicios/action/db_servicio_select_call.php" method="POST">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
      <div class="form-group col-md-6 ">
          <label for="inputServicio">Id Servicio</label>
          <input type="number" class="form-control" name="id_Servicio" placeholder="Id Servicio">
        </div>
      </div>
      <div>
        <button type="submit" name="buscar" class="btn mt-2 mb-3">Buscar</button>
      </div>
    </div>
  </form>
</div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
