<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

  <div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario suprimir Habitacion</h2>
  <form class="myFormHabitacion" action="" method="POST">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputHabitacin" style ="color: #040212">Id Habitacion</label>
          <input type="email" class="form-control" id="inputHabitacin" placeholder="id habitacion">
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <button type="submit" class="btn btn-primary mt-2 mb-3" style="background-color: #000000; border-color: #feffe2; justify-content: center;color: #505050 ; font-weight: bold;">Suprimir</button>
      </div>
    </div>
  </form>
</div>

  <?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>