
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

if (isset($_POST['suprimir'])) {
  $idcliente = $_POST['id_cliente'];

  if (empty($idcliente)) {
      echo "El campo ID Servicio es obligatorio.";
      exit;
  }

  // Realiza la eliminación del servicio
  $q_delete = $pdo->prepare('DELETE FROM clientes WHERE id_cliente = ?');
  $q_delete->execute([$idcliente]);

  // Verifica si se eliminó algún registro
  if ($q_delete->rowCount() > 0) {
      echo "cliente eliminado con éxito.";
  } else {
      echo "No se encontró ningún cliente con el ID proporcionado o no se realizó la eliminación.";
  }
}

?>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
