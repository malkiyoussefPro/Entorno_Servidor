<?php

 ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php
if ($pdo){
  $nombreDB = 'hotel_42';
  $pdo->exec("USE $nombreDB");
   if (isset($_POST['insertar'])){
    $id_usuario = $_POST['id_usuario'];
    $civilidad = $_POST['civilidad_cliente'];
    $nombre = $_POST['nombre_cliente'];
    $dni = $_POST['dni_cliente'];
    $fecha = $_POST['fecha_cliente'];
    $telefono = $_POST['telefono_cliente'];
    $email = $_POST['email_cliente'];
    $direccion = $_POST['direccion_cliente'];
    $codigoPostal = $_POST['codigoPostal_cliente'];
    $ciudad = $_POST['ciudad_cliente'];
    $pais = $_POST['pais_cliente'];
   
   if(!empty($id_usuario) && !empty( $civilidad) && !empty($nombre) && !empty($dni) && !empty($fecha) && !empty($telefono)
    && !empty($email) && !empty($direccion) && !empty($codigoPostal) && !empty($ciudad) && !empty($pais)){
      $q_insert = $pdo -> prepare('INSERT INTO  clientes VALUES 
      (null, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
     
      $q_insert -> execute([$id_usuario, $civilidad, $nombre, $dni, $fecha, $telefono, $email, $direccion, $codigoPostal, $ciudad, $pais]);

      ?>
      <div class="alert alert-success" role="alert">
         Cliente añadido de una  excitoso!
      </div>
    <?php
      header('Location:/student042/dwes/html/dashboard.php');
  }else{
    ?>
     <div class="alert alert-danger" role="alert">
           Todos los campos son obligatorios !
      </div>
    <?php
}
   }
}else{
  echo ' Error en el estabelicimiento a la base de datos';
 }
?>



<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

    <form class="myFormCliente" action="" method="POST">
      <h2>Formulario insertar cliente</h2>
      <div class="container">
      <div class="form-group">
          <label  for="inputCliente" >Id Usuario</label>
          <input  name="id_usuario" class="form-control" id="inputCliente" placeholder="id usuario">
        </div>
        <div class="form-group">
          <label for="inputCliente">Civilidad cliente</label>
          <select id="inputState" name="civilidad_cliente" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Srta</option>
              <option>Sra</option>
              <option>Sr</option>
            </select>
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

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>