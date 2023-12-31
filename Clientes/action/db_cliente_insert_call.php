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



<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>