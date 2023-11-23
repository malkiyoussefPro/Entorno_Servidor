<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');

?>

<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
  
?>

  <div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario Buscar personal</h2>
  <form class="myFormpersonal" action="" method="POST">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputpersonal" style ="color: #040212">Id personal</label>
          <input type="number" name="id_personal" class="form-control" id="inputpersonal" placeholder="Id personal">
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <button type="submit" name="buscar" class="btn btn-primary mt-2 mb-3" style="background-color: #000000; border-color: #feffe2; justify-content: center;color: #505050 ; font-weight: bold;">Buscar</button>
      </div>
    </div>
  </form>
</div>

  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>