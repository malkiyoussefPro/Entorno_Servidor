<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario actualizar cliente</h2>
    <form class="myFormCliente" action="" method="POST">
      <div class="container">
        
        <div class="form-group">
          <label for="inputCliente" style="color: #040212">Nombre cliente</label>
          <input type="text" class="form-control" id="inputCliente" placeholder="nombre">
        </div>

        <div class="form-group">
          <label for="inputFecha" style="color: #040212">Fecha nacimiento</label>
          <input type="date" class="form-control" id="inputFecha" placeholder="fecha">
        </div>

        <div class="form-group">
          <label for="inputTelefono" style="color: #040212">telefono</label>
          <input type="text" class="form-control" id="inputTelefono" placeholder="fecha">
        </div>


        <div class="form-group">
          <label for="inputEmail4" style="color: #040212">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="form-group">
          <label for="inputAddress" style="color: #040212">Dirección</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip" style="color: #040212">Código Postal</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Código Postal">
          </div>

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
              <option>Irak</option>
              <option>Palestina</option>
              <option>Arabia Saudia</option>
              <option>Senegal</option>
              <option>Andonesia</option>
              <option>Malisia</option>
            </select>
          </div>
       
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" class="btn btn-primary mt-2" style="background-color: #000000; border-color: #feffe2; color: #505050; font-weight: bold;">Actualizar</button>
        </div>
      </div>
    </form>

  </div>

  <?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>