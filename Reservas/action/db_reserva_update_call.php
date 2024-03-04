
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php


if(isset($_POST['actualizar'])){
    // Recupera los datos del formulario
    $idReserva = $_POST['id_reserva'];
    $idCliente = $_POST['id_cliente'];
    $idHabitacion = $_POST['id_habitacion'];
    $fechaEntrada = $_POST['fecha_entrada'];
    $fechaSalida = $_POST['fecha_salida'];
    $fechaReserva = $_POST['fecha_reserva'];
    $idPago = $_POST['id_pago'];
    $numeroReserva = $_POST['numero_reserva'];

    // Validaciones (puedes agregar más según tus necesidades)
    if(empty($idCliente) || empty($idHabitacion) || empty($fechaEntrada) || empty($fechaSalida) || empty($fechaReserva) || empty($idPago) || empty($numeroReserva)){
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Actualiza el registro en la base de datos
    $q_update = $pdo->prepare('UPDATE reservas SET nombre_usuario = ?, id_habitacion = ?, fecha_entrada = ?, fecha_salida = ?, fecha_reserva = ?, id_pago = ?, numero_reserva = ? WHERE id_reserva = ?');
    $q_update->execute([$idCliente, $idHabitacion, $fechaEntrada, $fechaSalida, $fechaReserva, $idPago, $numeroReserva, $idReserva]);

    // Verifica si se actualizó algún registro
    if($q_update->rowCount() > 0){
        echo "Reserva actualizada exitosamente.";
    } else {
        echo "No se encontró ninguna reserva con el ID proporcionado o no se realizaron cambios.";
    }
}

?>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
