<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

 ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<?php

   if (isset($_POST['insertar'])){
    $nombre = $_POST['nombre_personal'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $puesto = $_POST['puesto_personal'];
    $domicilio = $_POST['domicilio_personal'];
    $telefono = $_POST['telefono_personal'];
    $email = $_POST['email_personal'];
    $fecha_integracion = $_POST['fecha_integracion'];
    $affiliación = $_POST['affiliación_personal'];
    $imagen_Personal = $_POST['imagen_Personal'];
    $curriculum = $_POST['curriculum'];
    $fecha_despedida = $_POST['fecha_Despedida'];
   
   if( !empty($nombre) && !empty( $fecha_nacimiento) && !empty($puesto) && !empty($domicilio) && !empty($telefono)
    && !empty($email) && !empty($fecha_integracion) && !empty($affiliación)&& !empty($imagen_Personal) && !empty($curriculum)){
      $q_insert = $pdo -> prepare('INSERT INTO  personal_hotel VALUES 
      (null, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
     
      $q_insert -> execute([ $nombre, $fecha_nacimiento, $puesto, $domicilio, $telefono,
       $email,$fecha_integracion, $affiliación, $imagen_Personal, $curriculum, $fecha_despedida]);

      ?>
      <div class="alert alert-success" role="alert">
         Personal añadido de una  excitoso!
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

?>




<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>