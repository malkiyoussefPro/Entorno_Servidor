<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_POST['registrarse'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['password'];
    $role = isset($_POST['role']) && !empty($_POST['role']) ? $_POST['role'] : 'cliente';
    $fecha = date('Y-m-d');

    if(!empty($nombre) && !empty($email) && !empty($contraseña)){

        $q_insert = $pdo->prepare('INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?)');
        $q_insert->execute([$nombre, $email, $contraseña, $role, $fecha]);

        ?>
        <div class="alert alert-success" role="alert">
            Usuario añadido de manera exitosa!
        </div>
        <?php

        header('Location:/student042/dwes/index.php');
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Todos los campos son obligatorios !
        </div>
        <?php
    }
}

?>

<!-- Resto de tu código HTML -->

  <link rel="stylesheet" href="/student042/dwes/css/iniciar_session.css">
    <div class="d-flex justify-content-center">
     <form action="" method="POST">
        
          <h2>FORMULARIO DE REGISTRO</h2>
          
            <div class="container">
            <div class="form-group m-2">
                <label for="inputNombre" >Nombre </label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre completo">
              </div>
              <div class="form-group m-2">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group m-2">
                <label for="inputRole">Role</label>
                <input disabled type="text" name="role" class="form-control" id="inputRole" placeholder="role" value="cliente">
              </div>

              <div class="form-group m-2">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
           
              <div class="d-flex justify-content-center">
                <button type="submit" name="registrarse" class="btn  mt-2">Registrarse</button>
              </div>
            </div>
          </form>
    </div>
  


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
