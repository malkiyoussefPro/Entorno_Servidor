<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<?php

if (isset($_POST['suprimir'])) {
  $idHabitacion = $_POST['id_habitacion'];

  if (empty($idHabitacion)) {
      echo "El campo ID Habitacion es obligatorio.";
      exit;
  }

  // Realiza la eliminación del servicio
  $q_delete = $pdo->prepare('DELETE FROM habitaciones WHERE id_habitacion = ?');
  $q_delete->execute([$idHabitacion]);

  // Verifica si se eliminó algún registro
  if ($q_delete->rowCount() > 0) {
      echo "Habitacion eliminado con éxito.";
  } else {
      echo "No se encontró ningún habitacion con el ID proporcionado o no se realizó la eliminación.";
  }
}

?>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
