<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');


?>
<h1 style="margin: 5px ; padding: 5px; text-align: center">Información Servicio</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Departamento Servicio</th>
            <th scope="col">Descripción Servicio</th>
            <th scope="col">Imagen Servicio</th>
            <th scope="col">Precio Servicio</th>
            <th scope="col">Fecha Creación Servicio</th>
            <th scope="col" class="d-flex justify-content-center">Operaciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    // Obtén los usuarios de la base de datos y muestra la información en la tabla
    $q_select_all = $pdo->query('SELECT * FROM servicios_hotel');

    while ($servicio = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>  
    <td><?php echo htmlspecialchars($servicio['id_servicio']); ?></td>
            <td><?php echo htmlspecialchars($servicio['departamento']); ?></td>
            <td><?php echo htmlspecialchars($servicio['descripción']); ?></td>
            <td><?php echo htmlspecialchars($servicio['imagen_servicio']); ?></td>
            <td><?php echo htmlspecialchars($servicio['precio']); ?></td>
            <td><?php echo htmlspecialchars($servicio['fecha_creacion_servicio']); ?></td>
            <td>     
            <a href="formulario_servicio_insert.php?id_servicio=<?php echo $servicio['id_servicio']; ?>" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
          </td>
          <td>           
            <a href="formulario_servicio_select.php?id_servicio=<?php echo $servicio['id_servicio']; ?>" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
         </td>
          <td>      
            <a href="formulario_servicio_update.php?id_servicio=<?php echo $servicio['id_servicio']; ?>" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
          </td>
          <td>      
            <a href="formulario_servicio_delete.php?id_servicio=<?php echo $servicio['id_servicio']; ?>" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
          </td>
          </tr>
          <?php
            }
           ?>
        </tbody>
    </table>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
