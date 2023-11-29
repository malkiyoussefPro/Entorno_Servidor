<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Civilidad</th>
      <th scope="col">Nombre cliente</th>
      <th scope="col">Dni</th>
      <th scope="col">Id usuario</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Domicilio </th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Pais</th>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>      
        <a href="action/db_cliente_insert_call.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="action/db_cliente_select_call.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="action/db_cliente_update_call.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="action/db_cliente_delete_call.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
  </tbody>
</table>


<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

