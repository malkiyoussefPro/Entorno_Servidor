<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/header.php');

?>

  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario insertar habitacion</h2>
    <form class="myFormHabitacion" action="" method="POST">
      <div class="container">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity" style="color: #040212">Ciudad</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Mao, Islas Baleares">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState" style="color: #040212">País</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>España</option>
              <option>Marruecos</option>
            </select>
          </div>
         
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" class="btn btn-primary mt-2" style="background-color: #f98c3d; border-color: #f98c3d; color: #040212; font-weight: bold;">Insertar</button>
        </div>
      </div>
    </form>

  </div>

  <?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/footer.php');

?>