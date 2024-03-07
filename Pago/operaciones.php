<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<h1 style="margin: 5px ; padding: 5px; text-align: center">Información pago</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">	id Pago</th>
            <th scope="col">Nombre del pagador</th>
            <th scope="col">fecha emission pago</th>
            <th scope="col">tipo tarjeta</th>
            <th scope="col">cantidad</th>
            <th scope="col" class="d-flex justify-content-center">Operaciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    // Obtén los usuarios de la base de datos y muestra la información en la tabla
    $q_select_all = $pdo->query('SELECT * FROM pagos');

    while ($pago = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
            <td><?php  echo $pago['id_pago']; ?> </td>
            <td><?php  echo $pago['nombre_titular']; ?> </td>
            <td><?php  echo $pago['fechaEmision_pago']; ?> </td>
            <td><?php  echo $pago['tipo_pago']; ?> </td>
            <td><?php  echo $pago['cantidad_pagar']; ?> </td>
            
            <td>     
            <a href="formulario_pago_insert.php?id_pago=<?php echo $pago['id_pago']; ?>" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
          </td>
          <td>      
            <a href="formulario_pago_select.php?id_pago=<?php echo $pago['id_pago']; ?>" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
          </td>
          <td>      
            <a href="formulario_pago_update.php?id_pago=<?php echo $pago['id_pago']; ?>" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
          </td>
          <td>      
            <a href="formulario_pago_delete.php?id_pago=<?php echo $pago['id_pago']; ?>" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
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
