<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
?>

<div class="container">
  <h2>Añadir Habitación</h2>
  <form method="post" enctype="multipart/form-data">
  <div class="form-group col-md-4">
      <label for="inputHabitacion">Tipo Habitacion</label>
      <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
        <option value="Single">Single</option>
        <option value="Double">doble</option>
        <option value="Suite">Suite</option>
      </select>
    </div>
          <div class="form-group col-md-4">
            <label for="inputHabitacion">Disponibilidad habitacion</label>
            <select name="disponibilidad_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              <option>bloquada</option>
              
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputHabitacion">Estado habitacion</label>
            <select name="estado_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              <option>Esta lista</option>
            </select>
          </div>
    
      <div class="form-group col-md-4">
        <label for="ubicacion_habitacion">Ubicación</label>
        <select name="ubicacion_habitacion" class="form-control">
          <option selected>Seleccionar...</option>
          <option>Vista mar</option>
          <option>Vista piscina</option>
          <option>Vista jardín</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Precio</label>
        <input type="number" min="779" max="1279" name="precio_habitacion" class="form-control" id="inputZip" placeholder="Precio habitación">
      </div>
    
    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen Habitación</label>
      <input class="form-control" type="file" id="formFile" name="imagen_habitacion">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" name="insertar" id="btn" class="btn m-2">Insertar</button>
    </div>
  </form>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

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
    $q_insert = $pdo->prepare('INSERT INTO habitaciones VALUES (null,?,?,?,?,?,?)');
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


