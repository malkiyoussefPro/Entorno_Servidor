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
      <th scope="col">ID</th>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Email usuario</th>
      <th scope="col">Contraseña usuario</th>
      <th scope="col">Role Usuario</th>
      <th scope="col">Fecha creación cuenta</th>
      <th scope="col ">Operaciones</th>
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
      <td>      
        <a href="action/db_usuario_insert_call.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="action/db_usuario_select_call.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="action/db_usuario_update_call.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="action/db_usuario_delete_call.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
  </tbody>
</table>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>