<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

 ob_start();
  
?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

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
    

    $imagen = $_FILES['imagen_Personal']['name'];
    $temporalImagen = $_FILES['imagen_Personal']['tmp_name'];
    $carpetaImagen = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/imagenes';
    $rutaImagen = '/student042/dwes/html/imagenes' . '/' . $imagen;
    $moverImagen = move_uploaded_file($temporalImagen, $carpetaImagen.'/'.$imagen);

    $curriculum = $_FILES['curriculum']['name'];
    $temporalCurriculum = $_FILES['curriculum']['tmp_name'];
    $carpetaCurriculum = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/curriculum';
    $rutaCurriculum = '/student042/dwes/html/curriculum' . '/' . $curriculum;
    $moverCurriculum = move_uploaded_file($temporalCurriculum, $carpetaCurriculum.'/'.$curriculum);


    $fecha_despedida = $_POST['fecha_Despedida'];
   
   if( !empty($nombre) && !empty( $fecha_nacimiento) && !empty($puesto) && !empty($domicilio) && !empty($telefono)
    && !empty($email) && !empty($fecha_integracion) && !empty($affiliación)&& !empty($imagen) && !empty($curriculum)){
      $q_insert = $pdo -> prepare('INSERT INTO  datos_personal VALUES 
      (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
     
      $q_insert -> execute([ $nombre, $fecha_nacimiento, $puesto, $domicilio, $telefono,
       $email,$fecha_integracion, $affiliación, $rutaImagen, $rutaCurriculum, $fecha_despedida]);

      ?>
      <div class="alert alert-success" role="alert">
         Personal añadido de una  excitoso!
      </div>
    <?php
      header('Location:/student042/dwes/Personal/formulario_personal_insert.php');
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

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>