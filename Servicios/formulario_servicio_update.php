<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

$idServicio = isset($_GET['id_servicio']) ? $_GET['id_servicio'] : null; // Obtener el id_servicio de la URL

if (!$idServicio) {
    echo "ID de servicio no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM servicios_hotel WHERE id_servicio = ?');
$q_select->execute([$idServicio]);
$servicio = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$servicio) {
    echo "Servicio no encontrado.";
    exit;
}

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormservicio" action="/student042/dwes/Servicios/action/db_servicio_update_call.php" method="POST" enctype="multipart/form-data">

    <h2>Formulario actualizar servicio</h2>
    <div class="container">
      
      <input type="hidden" name="id_servicio" value="<?php echo $servicio['id_servicio']; ?>">
      
      <div class="form-group col-md-4">
        <label for="inputState">Departamento servicio</label>
        <select id="inputState" class="form-control" name="departamento_servicio">
          <option <?php echo $servicio['departamento'] == 'Restaurante' ? 'selected' : ''; ?>>Restaurante</option>
          <option <?php echo $servicio['departamento'] == 'Evento' ? 'selected' : ''; ?>>Evento</option>
          <option <?php echo $servicio['departamento'] == 'Belleza' ? 'selected' : ''; ?>>Belleza</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="inputservicio">Descripción servicio</label>
        <input type="text" name="descripcion_servicio" class="form-control" id="inputservicio" placeholder="Descripción" value="<?php echo $servicio['descripción']; ?>">
      </div>
      
      <div class="mb-3">
    <label for="formFile" class="form-label">Imagen servicio</label>
          <input class="form-control" type="file" id="formFile" name="imagen_servicio">
          <img src="<?php echo $servicio['imagen_servicio']; ?>" alt="Imagen servicio actual" width="200">
    </div>

      
      <div class="form-group">
        <label for="inputservicio">Precio</label>
        <input type="number" name="precio_servicio" class="form-control" id="inputservicio" placeholder="Precio" value="<?php echo $servicio['precio']; ?>">
      </div>
      
      <div class="form-group">
        <label for="inputFecha">Fecha creación servicio</label>
        <input type="date" name="fecha_creacion_servicio" class="form-control" id="inputFecha" placeholder="Fecha" value="<?php echo $servicio['fecha_creacion_servicio']; ?>">
      </div>
      
    </div>
    
    <div class="d-flex justify-content-center">
      <button type="submit" name="actualizar" id="btn" class="btn mt-2">Actualizar</button>
    </div>

  </form>
  
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
