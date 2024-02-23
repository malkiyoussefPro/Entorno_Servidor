<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<h1 style="margin: 5px ; padding: 5px; text-align: center">Información comentarios</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre cliente</th>
      <th scope="col">Estado comentario</th>
      <th scope="col">Fecha creación comentario</th>
      <th scope="col">comentarios</th>
      <th scope="col">score</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Obtén los comentarios de la base de datos y muestra la información en la tabla
    $q_select_all = $pdo->query('SELECT * FROM comentario_clientes');

    while ($comentario = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <tr>
        <td><?php echo $comentario['id_comentario']; ?></td>
        <td><?php echo $comentario['nombre_cliente']; ?></td>
        <td><?php echo $comentario['estado_comentario']; ?></td>
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
   