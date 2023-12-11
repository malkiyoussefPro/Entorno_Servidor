
<?php

  //ob_start();
 
?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

 <?php

if(isset($_POST['insertar'])){

  $tipo = $_POST['tipo_habitacion'];
  $disponibilidad = $_POST['disponibilidad_habitacion'];
  $estado = $_POST['estado_habitacion'];
  $vista = $_POST['ubicacion_habitacion'];
  $precio = $_POST['precio_habitacion'];
  $imagen = $_POST['imagen_habitacion'];

  if(!empty($tipo) && !empty($disponibilidad) && !empty($estado) && !empty($vista) && !empty($precio)){
      $q_insert = $pdo->prepare('INSERT INTO habitaciones VALUES (null,?,?,?,?,?,?)');
      $q_insert->execute([$tipo, $disponibilidad, $estado, $vista, $precio, $imagen]);

      // Redireccionar después de realizar la operación
      header('Location:/student042/dwes/html/dashboard.php');
  } else {
      ?>
      <div class="alert alert-danger" role="alert">
          Todos los campos son obligatorios!
      </div>
      <?php
  }
}

?>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>




