
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_insert_call.php" method="POST">

      <h2>Formulario insertar Usuario</h2>
      <div class="container">

        <div class="form-group">
          <label for="inputUsuario">Nombre Usuario</label>
          <input type="text" name="nombre_Usuario" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email Usuario</label>
          <input type="email" name="email_Usuario" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="form-group">
          <label for="inputAddress">Contraseña</label>
          <input type="password" name="contraseña" class="form-control" id="inputAddress" placeholder="1k*_-.">
        </div>
          <div class="form-group col-md-4">
            <label for="inputState">Role Usuario</label>
            <select id="inputState" class="form-control" name="role_Usuario">
              <option selected>Seleccionar...</option>
              <option>Cliente</option>
              <option>Personal</option>
              <option>Invitado</option>
              <option>admin</option>
            </select>
          </div>
          <div class="form-group">
          <label for="inputFecha">Fecha creacion cuenta</label>
          <input type="date" name="fecha_Creacion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </div>
  </form>
  
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>