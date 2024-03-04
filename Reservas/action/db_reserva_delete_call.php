<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

// Verificar si se envió el formulario
if(isset($_POST['suprimir'])){
    $idReserva = isset($_POST['id_reserva']) ? intval($_POST['id_reserva']) : 0;

    // Validar el ID de reserva
    if($idReserva <= 0){
        echo "El ID de reserva proporcionado no es válido.";
        exit;
    }

    // Realizar la eliminación en la base de datos
    $q_delete = $pdo->prepare('DELETE FROM reservas WHERE id_reserva = ?');
    $q_delete->execute([$idReserva]);

    // Verificar si se eliminó algún registro
    if($q_delete->rowCount() > 0){
        echo "Reserva eliminada exitosamente.";
        header('Location:/student042/dwes/Reservas/formulario_reserva_delete.php');
        exit; // Asegurar que el script no continúe ejecutándose después de la redirección
    } else {
        echo "No se encontró ninguna reserva con el ID proporcionado.";
    }
} else {
    echo "Acceso no autorizado.";
}

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
