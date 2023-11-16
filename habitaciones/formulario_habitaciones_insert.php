<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header_dashbord.php');

?>

  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario insertar habitacion</h2>
    <form class="myFormHabitacion" action="" method="POST">
      <div class="container">

        <div class="form-row">


        <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Tipo Habitacion</label>
            <select id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Single</option>
              <option>Double</option>
              <option>Suite</option>
              
              </option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Disponibilidad habitacion</label>
            <select id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Estado habitacion</label>
            <select id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Ubicacion Habitacion</label>
            <select id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vista mar</option>
              <option>Vista jardin</option>
              <option>Vista parking</option>
              <option>Vista picina</option>
              </option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="inputZip" style="color: #040212">precio</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Código Postal">
          </div>
         
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" class="btn btn-primary mt-2" style="background-color: #000000; border-color: #f98c3d; color: #505050; font-weight: bold;">Insertar</button>
        </div>
      </div>
    </form>

  </div>

  <?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>