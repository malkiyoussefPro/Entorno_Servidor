<?php

  ob_start();
  
?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

    if(isset($_POST['insertar'])){

      $nombre = $_POST['nombre_Usuario'];
      $email = $_POST['email_Usuario'];
      $contraseña = $_POST['contraseña'];
      $role = $_POST['role_Usuario'];
      $fecha = $_POST['fecha_Creacion'];
      if(!empty($nombre) && !empty($email) && !empty($contraseña) && !empty($role) && !empty($fecha)){

        $q_insert = $pdo -> prepare('INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?)');
          $q_insert -> execute([$nombre, $email, $contraseña, $role, $fecha]);
          ?>
          <div class="alert alert-success" role="alert">
             Usuario añadido con  excitoso!
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

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>