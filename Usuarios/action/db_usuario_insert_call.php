<?php

  ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

    if(isset($_POST['insertar'])){

      $nombre = $_POST['nombre_Usuario'];
      $email = $_POST['email_Usuario'];
      $contraseña = $_POST['contraseña'];
      $role = $_POST['role_usuario'];
      $fecha = $_POST['fecha_creacion'];
      if(!empty($nombre) && !empty($email) && !empty($contraseña) && !empty($role) && !empty($fecha)){

        $q_insert = $pdo -> prepare('INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?)');
          $q_insert -> execute([$nombre, $email, $contraseña, $role, $fecha]);
          ?>
          <div class="alert alert-success" role="alert">
             Usuario añadido de una  excitoso!
          </div>
        <?php
          header('Location:/student042/dwes/html/dashboard.php');
      }else{
        ?>
         <div class="alert alert-danger" role="alert">
               Todos los campos son obligatorios !
          </div>
        <?php
    }
       }

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
            <select id="inputState" class="form-control" name="role_usuario">
              <option selected>Seleccionar...</option>
              <option>Cliente</option>
              <option>Personal</option>
              <option>Invitado</option>
            </select>
          </div>
          <div class="form-group">
          <label for="inputFecha">Fecha creacion cuenta</label>
          <input type="date" name="fecha_creacion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
    
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>