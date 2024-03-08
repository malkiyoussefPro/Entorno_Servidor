
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">
<?php

  if(isset($_POST['suprimir'])){
      $idUsuario = $_POST['id_Usuario'];

      // Verifica si el campo id_Usuario no está vacío
      if(!empty($idUsuario)){
          // Prepara la sentencia SQL para eliminar el usuario con el ID proporcionado
          $q_delete = $pdo->prepare('DELETE FROM usuario WHERE id_usuario = ?');
          $q_delete->execute([$idUsuario]);

          // Verifica si se eliminó algún registro
          if($q_delete->rowCount() > 0){
              ?>
              <div class="alert alert-success" role="alert">
                  Usuario eliminado exitosamente.
              </div>
              <?php
          } else {
              ?>
              <div class="alert alert-warning" role="alert">
                  No se encontró ningún usuario con el ID proporcionado.
              </div>
              <?php
          }
      } else {
          ?>
          <div class="alert alert-danger" role="alert">
              Por favor, proporciona un ID de Usuario válido.
          </div>
          <?php
      }
  }

  ?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>