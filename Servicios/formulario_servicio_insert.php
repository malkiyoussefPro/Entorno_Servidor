<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');


?>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description Servicio</th>
      <th scope="col">Departamento Servicio</th>
      <th scope="col">Imagen Servicio</th>
      <th scope="col">Precio Servicio</th>
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
    
      <td>      
        <a href="action/db_servicio_insert_call.php" name="insertar" id="btn" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="action/db_servicio_select_call.php" name="buscar" id="btn" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="action/db_servicio_update_call.php" name="actulizar" id="btn" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="action/db_servicio_delete_call.php" name="suprimir" id="btn" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
  </tbody>
</table>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>