
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

if (isset($_POST['suprimir'])) {
  $idPersonal = $_POST['id_personal'];

  if (empty($idPersonal)) {
      echo "El campo ID Servicio es obligatorio.";
      exit;
  }

  // Realiza la eliminación del servicio
  $q_delete = $pdo->prepare('DELETE FROM datos_personal WHERE id_personal = ?');
  $q_delete->execute([$idPersonal]);

  // Verifica si se eliminó algún registro
  if ($q_delete->rowCount() > 0) {
      echo "Personal eliminado con éxito.";
  } else {
      echo "No se encontró ningún personal con el ID proporcionado o no se realizó la eliminación.";
  }
}

?>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
