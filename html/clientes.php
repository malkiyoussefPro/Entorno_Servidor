

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<link rel="stylesheet" href="/student042/dwes/css/iniciar_session.css">

  <div class="container mt-5">
    <center>
    <div class="d-flex justify-content-center">

<form class="myFormCliente" action="/student042/dwes/Clientes/action/db_cliente_insert_call.php" method="POST">

      <h2>Formulario insertar cliente</h2>
      <div class="container">
        <label for="inputCliente">Civilidad cliente</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" value="Sr." id="civilidadSr" name="civilidadChecked">
          <label class="form-check-label" for="civilidadSr">Sr.</label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" value="Sra." id="civilidadSra" name="civilidadChecked">
          <label class="form-check-label" for="civilidadSra">Sra.</label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" value="Srta." id="civilidadSrta" name="civilidadChecked">
          <label class="form-check-label" for="civilidadSrta">Srta.</label>
      </div>

        <div class="form-group">
          <label for="inputCliente">Nombre cliente</label>
          <input type="text" name="nombre_cliente" class="form-control" id="inputCliente" placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputCliente">Dni cliente</label>
          <input type="text" name="dni_cliente" class="form-control" id="inputCliente" placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputFecha">Fecha nacimiento</label>
          <input type="date" name="fecha_cliente" class="form-control" id="inputFecha" placeholder="fecha">
        </div>

        <div class="form-group">
          <label for="inputTelefono">telefono</label>
          <input type="text" name="telefono_cliente" class="form-control" id="inputTelefono" placeholder="telefono">
        </div>


        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email_cliente" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="form-group">
          <label for="inputAddress">Dirección</label>
          <input type="text" name="direccion_cliente" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip">Código Postal</label>
            <input type="text" name="codigoPostal_cliente" class="form-control" id="inputZip" placeholder="Código Postal">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Ciudad</label>
            <input type="text" name="ciudad_cliente" class="form-control" id="inputCity" placeholder="Mao, Islas Baleares">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">País</label>
            <select name="pais_cliente" id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Marruecos</option>
              <option>España</option>
              <option>Irak</option>
              <option>Palestina</option>
              <option>Arabia Saudia</option>
              <option>Senegal</option>
              <option>Andonesia</option>
              <option>Malisia</option>
            </select>
          </div>
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name = "insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
    
  </div>
    </center>
  </div>


  <?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

  ?>

