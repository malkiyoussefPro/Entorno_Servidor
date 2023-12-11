<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
$q_select = $pdo->prepare('SELECT * FROM habitaciones');
$q_select->execute();
$habitaciones = $q_select->fetchAll(PDO::FETCH_ASSOC);
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
        <?php foreach ($habitaciones as $habitacion): ?>
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
    <?php endforeach; ?>
    </tbody>
</table>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


