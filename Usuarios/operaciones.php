<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
 <center>
 <div class="form-group">
      <label for="inputpersonal">Buscar Usuario</label>
      <input type="text" name="nombre_usuario" class="form-control" id="inputUsuario" placeholder="Buscar">
  </div>
 </center>
<h1 style="margin: 5px ; padding: 5px; text-align: center">Información Usuarios</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Email usuario</th>
      <th scope="col">Contraseña usuario</th>
      <th scope="col">Role Usuario</th>
      <th scope="col">Fecha creación cuenta</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Obtén los usuarios de la base de datos y muestra la información en la tabla
    $q_select_all = $pdo->query('SELECT * FROM usuario');

    while ($usuario = $q_select_all->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <tr>
        <td><?php echo $usuario['id_usuario']; ?></td>
        <td><?php echo $usuario['nombre_usuario']; ?></td>
        <td><?php echo $usuario['email_usuario']; ?></td>
        <td><?php echo $usuario['contrasena_usuario']; ?></td>
        <td><?php echo $usuario['role_usuario']; ?></td>
        <td><?php echo $usuario['fecha_creacion_cuenta']; ?></td>
        <td>     
          <a href="/student042/dwes/Usuarios/formulario_usuario_insert.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
        </td>
        <td>      
          <a href="/student042/dwes/Usuarios/formulario_usuario_select.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
        </td>
        <td>      
          <a href="/student042/dwes/Usuarios/formulario_usuario_update.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
        </td>
        <td>      
          <a href="/student042/dwes/Usuarios/formulario_usuario_delete.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
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
