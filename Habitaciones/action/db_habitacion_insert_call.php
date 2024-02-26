<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');


if (isset($_POST['insertar'])){
  $tipo = $_POST['tipo_habitacion'];
  $disponibilidad = $_POST['disponibilidad_habitacion'];
  $estado = $_POST['estado_habitacion'];
  $vista = $_POST['ubicacion_habitacion'];
  $precio = $_POST['precio_habitacion'];

  // Verificar si se ha subido una imagen
  if (isset($_FILES['imagen_habitacion'])) {
    $imagen = $_FILES['imagen_habitacion']['name'];
    $temporalImagen = $_FILES['imagen_habitacion']['tmp_name'];
    $carpetaImagen = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/imagenes';
    $rutaImagen = '/student042/dwes/html/imagenes' . '/' . $imagen;
    $moverImagen = move_uploaded_file($temporalImagen, $carpetaImagen.'/'.$imagen);

    if (!$moverImagen) {
      echo '<div class="alert alert-danger" role="alert">Error al subir la imagen.</div>';
      exit; // Detener la ejecución del script
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">Por favor, seleccione una imagen para la habitación.</div>';
    exit; // Detener la ejecución del script
  }

  if (!empty($tipo) && !empty($disponibilidad) && !empty($estado) && !empty($vista) && !empty($precio)) {
    $q_insert = $pdo->prepare('INSERT INTO habitaciones_hotel VALUES (null,?,?,?,?,?,?)');
    if ($q_insert->execute([$tipo, $disponibilidad, $estado, $vista, $precio, $rutaImagen])) {
      echo '<div class="alert alert-success" role="alert">Habitación añadida exitosamente!</div>';
      header('Location:/student042/dwes/Habitaciones/formulario_habitacion_insert.php');
    } else {
      echo '<div class="alert alert-danger" role="alert">Error al insertar la habitación.</div>';
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios!</div>';
  }
}
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
