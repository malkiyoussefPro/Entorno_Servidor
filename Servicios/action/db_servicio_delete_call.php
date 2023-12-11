
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

if (isset($_POST['suprimir'])) {
  $idServicio = $_POST['id_Servicio'];

  if (empty($idServicio)) {
      echo "El campo ID Servicio es obligatorio.";
      exit;
  }

  // Realiza la eliminación del servicio
  $q_delete = $pdo->prepare('DELETE FROM servicios WHERE id_servicio = ?');
  $q_delete->execute([$idServicio]);

  // Verifica si se eliminó algún registro
  if ($q_delete->rowCount() > 0) {
      echo "Servicio eliminado con éxito.";
  } else {
      echo "No se encontró ningún servicio con el ID proporcionado o no se realizó la eliminación.";
  }
}


?>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
