
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

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
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_delete_call.php" method="POST">

    <h2>Formulario suprimir Usuario</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputUsuario" style ="color: #040212">Id Usuario</label>
          <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
      </div>
    </div>
  </form>
</div>

<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

if (isset($_POST['suprimir'])) {
  $idcomentario = $_POST['id_comentario'];

  if (empty($idcomentario)) {
      echo "El campo ID comentario es obligatorio.";
      exit;
  }

  // Realiza la eliminación del comentario
  $q_delete = $pdo->prepare('DELETE FROM comentarios_clientes WHERE id_comentario = ?');
  $q_delete->execute([$idcomentario]);

  // Verifica si se eliminó algún registro
  if ($q_delete->rowCount() > 0) {
      echo "comentario eliminado con éxito.";
  } else {
      echo "No se encontró ningún comentario con el ID proporcionado o no se realizó la eliminación.";
  }
}


?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
