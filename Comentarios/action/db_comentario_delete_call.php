
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
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
