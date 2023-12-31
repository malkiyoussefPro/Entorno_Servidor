
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
    $tipo = $_POST['tipo_habitacion'];
    $disponibilidad = $_POST['disponibilidad_habitacion'];
    $estado = $_POST['estado_habitacion'];
    $vista = $_POST['ubicacion_habitacion'];
    $precio = $_POST['precio_habitacion'];
    $imagen = $_FILES['imagen_habitacion']['name'];
    $temporal = $_FILES['imagen_habitacion']['tmp_name'];
    $carpeta  = '/student042/dwes/html/imagenes';
    $ruta = $carpeta . '/' . $imagen;

    move_uploaded_file($temporal, $carpeta.'/'.$imagen);

    if (!empty($tipo) && !empty($disponibilidad) && !empty($estado) && !empty($vista) && !empty($precio)) {
    
     $q_insert = $pdo->prepare('INSERT INTO habitaciones VALUES (null,?,?,?,?,?,?)');
     $q_insert->execute([$tipo, $disponibilidad, $estado, $vista, $precio, $ruta]);

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

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>








