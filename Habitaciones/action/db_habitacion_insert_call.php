<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

if (isset($_POST['insertar'])){
  $tipo = $_POST['tipo_habitacion'];
  $disponibilidad = $_POST['disponibilidad_habitacion'];
  $estado = $_POST['estado_habitacion'];
  $vista = $_POST['ubicacion_habitacion'];
  $precio = $_POST['precio_habitacion'];
  $imagen = $_FILES['imagen_habitacion']['name'];
  $temporal = $_FILES['imagen_habitacion']['tmp_name'];
  $carpeta = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/imagenes';
  $ruta = $carpeta . '/' . $imagen;
  move_uploaded_file($temporal, $carpeta.'/'.$imagen);

  if (!empty($tipo) && !empty($disponibilidad) && !empty($estado) && !empty($vista) && !empty($precio)) {
    $q_insert = $pdo->prepare('INSERT INTO habitaciones_hotel VALUES (null,?,?,?,?,?,?)');
    if ($q_insert->execute([$tipo, $disponibilidad, $estado, $vista, $precio, $ruta])) {
      echo '<div class="alert alert-success" role="alert">Habitación añadida exitosamente!</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error al insertar la habitación.</div>';
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios!</div>';
  }
}
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>