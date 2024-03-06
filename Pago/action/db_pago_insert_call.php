<?php

// Verificar si se ha enviado el formulario de pago
if (isset($_POST['pagar'])) {
    // Obtener los datos del formulario de pago
    $id_habitacion = isset($_GET['id_habitacion']) ? $_GET['id_habitacion'] : '';

    $nombreTitular = $_POST['nombre_titular'];
    $numeroTarjeta = $_POST['numero_tarjeta'];
    $tipoPago = $_POST['tipo_pago'];
    $fechaCaducidad = $_POST['fecha_caducidad'];
    $cantidadPagar = $_POST['cantidad_pagar'];

    // Obtener las fechas de entrada y salida
    $fechaEntrada = $_COOKIE['fecha_entrada']; // Obtener la fecha de entrada de la cookie, asegúrate de que esté disponible
    $fechaSalida = $_COOKIE['fecha_salida']; // Obtener la fecha de salida de la cookie, asegúrate de que esté disponible

    try {
        // Iniciar una transacción
        $pdo->beginTransaction();

        // Generar un número de reserva único (aquí asumimos que estás utilizando algún algoritmo para generar un número único)
        $numeroReserva = uniqid();

        // Insertar el pago primero para obtener su ID
        $insertPago = $pdo->prepare("
            INSERT INTO pagos (nombre_titular, fechaEmision_pago, tipo_pago, cantidad_pagar) 
            VALUES (:nombre_titular, NOW(), :tipo_pago, :cantidad_pagar)
        ");
        $insertPago->bindParam(':nombre_titular', $nombreTitular);
        $insertPago->bindParam(':tipo_pago', $tipoPago);
        $insertPago->bindParam(':cantidad_pagar', $cantidadPagar);
        $insertPago->execute();

        // Obtener el ID del pago insertado
        $id_pago = $pdo->lastInsertId();

        // Insertar la reserva con el ID de pago obtenido
        $insertReserva = $pdo->prepare("
            INSERT INTO reservas (nombre_usuario, id_habitacion, fecha_entrada, fecha_salida, fecha_reserva, id_pago, numero_reserva, check_in, check_out) 
            VALUES (:nombre_usuario, :id_habitacion, :fecha_entrada, :fecha_salida, NOW(), :id_pago, :numero_reserva, 'Pendiente', 0)
        ");
        $insertReserva->bindParam(':nombre_usuario', $user_name);
        $insertReserva->bindParam(':id_habitacion', $id_habitacion);
        $insertReserva->bindParam(':fecha_entrada', $fechaEntrada);
        $insertReserva->bindParam(':fecha_salida', $fechaSalida);
        $insertReserva->bindParam(':id_pago', $id_pago);
        $insertReserva->bindParam(':numero_reserva', $numeroReserva);
        $insertReserva->execute();

        // Confirmar la transacción
        $pdo->commit();

        // Redirigir a una página de éxito o mostrar un mensaje de éxito
        echo '<div class="alert alert-success" role="alert">Reserva y pago realizados con éxito. Número de reserva: '.$numeroReserva.'</div>';
    } catch (PDOException $e) {
        // Revertir la transacción en caso de error
        $pdo->rollBack();
        // Manejo de excepciones de la base de datos
        echo '<div class="alert alert-danger" role="alert">Error al realizar la reserva y el pago: ' . $e->getMessage() . '</div>';
    }
}

?>