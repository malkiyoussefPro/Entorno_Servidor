<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<<<<<<< HEAD

<h1 style="margin: 5px ; padding: 5px; text-align: center">Información comentarios</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Estado comentario</th>
      <th scope="col">Id cliente</th>
      <th scope="col">Numero reserva</th>
      <th scope="col">Fecha creación comentario</th>
      <th scope="col">comentarios</th>
      <th scope="col">score</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Obtén los comentarios de la base de datos y muestra la información en la tabla
    $q_select_all = $pdo->query('SELECT * FROM comentarios_clientes');

    while ($comentario = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <tr>
        <td><?php echo $comentario['id_comentario']; ?></td>
        <td><?php echo $comentario['estado_comentario']; ?></td>
        <td><?php echo $comentario['id_cliente']; ?></td>
        <td><?php echo $comentario['numero_reserva']; ?></td>
        <td><?php echo $comentario['fecha_creacion_comentario']; ?></td>
        <td><?php echo $comentario['comentarios']; ?></td>
        <td><?php echo $comentario['score']; ?></td>
        <td>     
          <a href="/student042/dwes/comentarios/formulario_comentario_insert.php?id_comentario=<?php echo $comentario['id_comentario']; ?>" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
        </td>
        <td>      
          <a href="/student042/dwes/comentarios/formulario_comentario_select.php?id_comentario=<?php echo $comentario['id_comentario']; ?>" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
        </td>
        <td>      
          <a href="/student042/dwes/comentarios/formulario_comentario_update.php?id_comentario=<?php echo $comentario['id_comentario']; ?>" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
        </td>
        <td>      
          <a href="/student042/dwes/comentarios/formulario_comentario_delete.php?id_comentario=<?php echo $comentario['id_comentario']; ?>" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    
=======
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
    $q_select_all = $pdo->query('SELECT * FROM servicios');

    while ($servicio = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
            <td><?php  echo $servicio['id_servicio']; ?> </td>
            <td><?php  echo $servicio['departamento']; ?> </td>
            <td><?php  echo $servicio['descripción']; ?> </td>
            <td><?php  echo $servicio['imagen_servicio']; ?> </td>
            <td><?php  echo $servicio['precio']; ?> </td>
            <td><?php  echo $servicio['fecha_creacion_servicio']; ?> </td>
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

>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
