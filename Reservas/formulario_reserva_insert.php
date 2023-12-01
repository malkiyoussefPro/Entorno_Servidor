<?php

  session_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Reserva</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Id Habitacion</th>
      <th scope="col">Fecha Entrada</th>
      <th scope="col">Fecha Salida</th>
      <th scope="col">Fecha Reserva</th>
      <th scope="col">Id Pago</th>
      <th scope="col">Numero Reserva</th>
      <th scope="col">Operaciones</th>
      <th scope="col " class= d-flex justify-content-center>Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>      
        <a href="action/db_reserva_insert_call.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="action/db_reserva_select_call.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="action/db_reserva_update_call.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="action/db_reserva_delete_call.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
  </tbody>
</table>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>