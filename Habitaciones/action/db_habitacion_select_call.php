<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo Habitación</th>
            <th scope="col">Disponibilidad Habitación</th>
            <th scope="col">Estado Habitación</th>
            <th scope="col">Ubicación Habitación</th>
            <th scope="col">Precio Habitación</th>
            <th scope="col">Imagen Habitación</th>
            <th scope="col" class="d-flex justify-content-center">Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
              if (isset($_POST['buscar'])) {
                $id_habitacion = $_POST['id_habitacion'];
        
              // Realizar la consulta para obtener la información del habitacion
              $q_select = $pdo->prepare('SELECT * FROM habitaciones WHERE id_habitacion = ?');
              $q_select->execute([$id_habitacion]);
              $habitacion = $q_select->fetch(PDO::FETCH_ASSOC);
        
              if ($habitacion) {
                ?>
            <tr>
                <td><?php echo $habitacion['id_habitacion']; ?></td>
                <td><?php echo $habitacion['tipo_habitacion']; ?></td>
                <td><?php echo $habitacion['disponibilidad_habitacion']; ?></td>
                <td><?php echo $habitacion['estado_habitacion']; ?></td>
                <td><?php echo $habitacion['ubicacion_habitacion']; ?></td>
                <td><?php echo $habitacion['precio_habitacion']; ?></td>
                <td><?php echo $habitacion['imagen_habitacion']; ?></td>
      <td>     
        <a href="/student042/dwes/Habitaciones/formulario_habitacion_insert.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="/student042/dwes/Habitaciones/formulario_habitacion_select.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="/student042/dwes/Habitaciones/formulario_habitacion_update.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="/student042/dwes/Habitaciones/formulario_habitacion_delete.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
    <?php
  } else {
      ?>
      <tr>
          <td colspan="13">
              <div class="alert alert-danger" role="alert">
                  No se encontró habitacion con el ID <?php echo $id_habitacion; ?>.
              </div>
          </td>
      </tr>
      <?php
  }
}
?>
</tbody>
</table>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


