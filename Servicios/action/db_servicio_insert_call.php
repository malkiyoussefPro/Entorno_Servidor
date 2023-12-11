<?php

  ob_start();
  
?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php

    if(isset($_POST['insertar'])){

      $departamento = $_POST['departamento'];
      $descripcion = $_POST['descripcion'];
      $imagenServicio = ['imagen'];
      $precio = $_POST['precio'];
      $fecha = $_POST['fecha_creacion'];
      if(!empty($departamento) && !empty($descripcion) && !empty($precio) && !empty($fecha)){

        $q_insert = $pdo -> prepare('INSERT INTO servicios VALUES (null, ?, ?, ?, ?, ?)');
          $q_insert -> execute([$departamento, $descripcion, $imagenServicio, $precio, $fecha]);
          ?>
          <div class="alert alert-success" role="alert">
             Servicio añadido con excito!
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












