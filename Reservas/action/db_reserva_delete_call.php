
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>


<?php


if(isset($_POST['suprimir'])){
    $idReserva = isset($_POST['id_reserva']) ? intval($_POST['id_reserva']) : 0;

    // Validación: Asegúrate de que el ID de la reserva sea un número entero positivo
    if($idReserva <= 0){
        echo "El ID de reserva proporcionado no es válido.";
        exit;
    }

    // Realiza la eliminación en la base de datos
    $q_delete = $pdo->prepare('DELETE FROM reservas WHERE id_reserva = ?');
    $q_delete->execute([$idReserva]);

    // Verifica si se eliminó algún registro
    if($q_delete->rowCount() > 0){
        echo "Reserva eliminada exitosamente.";
    } else {
        echo "No se encontró ninguna reserva con el ID proporcionado.";
    }
} else {
    echo "Acceso no autorizado.";
}

?>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
