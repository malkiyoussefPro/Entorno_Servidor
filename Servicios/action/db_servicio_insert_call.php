
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php

    if(isset($_POST['insertar'])){

      $departamento = $_POST['departamento'];
      $descripcion = $_POST['descripcion'];
      $imagen = $_FILES['imagen']['name'];
      $temporal = $_FILES['imagen']['tmp_name'];
      $carpeta = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/imagenes';
      $ruta = '/student042/dwes/html/imagenes' . '/' . $imagen;
      $mover = move_uploaded_file($temporal, $carpeta.'/'.$imagen);
      $precio = $_POST['precio'];
      $fecha = $_POST['fecha_creacion'];

      if(!empty($departamento) && !empty($descripcion) && !empty($precio) && !empty($fecha)){
        if($mover){
          $q_insert = $pdo -> prepare('INSERT INTO servicios_hotel VALUES (null, ?, ?, ?, ?, ?)');
          $q_insert -> execute([$departamento, $descripcion, $ruta, $precio, $fecha]);
          ?>
          <div class="alert alert-success" role="alert">
             Servicio añadido con excito!
          </div>
        <?php
          header('Location:/student042/dwes/html/dashboard.php');
        }else{
          echo 'Error en el cargamento de la imagen';
        }
        
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
