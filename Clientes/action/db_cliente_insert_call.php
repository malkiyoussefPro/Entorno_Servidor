<?php

 ob_start();
  
?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php
if (isset($_POST['insertar'])) {
  // Verifica si el checkbox de civilidad está marcado
  $civilidad = isset($_POST['civilidadChecked']) ? $_POST['civilidadChecked'] : null;
  $nombre = $_POST['nombre_cliente'];
  $dni = $_POST['dni_cliente'];
  $fecha = $_POST['fecha_cliente'];
  $telefono = $_POST['telefono_cliente'];
  $email = $_POST['email_cliente'];
  $direccion = $_POST['direccion_cliente'];
  $codigoPostal = $_POST['codigoPostal_cliente'];
  $ciudad = $_POST['ciudad_cliente'];
  $pais = $_POST['pais_cliente'];

  if (!empty($nombre) && !empty($dni) && !empty($fecha) && !empty($telefono)
      && !empty($email) && !empty($direccion) && !empty($codigoPostal) && !empty($ciudad) && !empty($pais)) {
      $q_insert = $pdo->prepare('INSERT INTO datos_clientes VALUES 
    (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

      $q_insert->execute([$civilidad, $nombre, $dni, $fecha, $telefono, $email, $direccion, $codigoPostal, $ciudad, $pais]);

      ?>
      <div class="alert alert-success" role="alert">
          ¡Cliente añadido exitosamente!
      </div>
      <?php
      header('Location:/student042/dwes/html/dashboard.php');
  } else {
      ?>
      <div class="alert alert-danger" role="alert">
          ¡Todos los campos son obligatorios!
      </div>
      <?php
  }
}

?>



<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>