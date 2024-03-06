<?php
function calcularPrecioTotalReserva($pdo) {
    // Verificar si se han establecido las cookies necesarias
    if (!empty($_COOKIE['id_habitacion']) && !empty($_COOKIE['fecha_entrada']) && !empty($_COOKIE['fecha_salida'])) {
        // Obtener el precio de la habitación seleccionada de la base de datos
        $queryPrecio = $pdo->prepare("SELECT precio_habitacion FROM habitaciones_hotel WHERE id_habitacion = :id_habitacion");
        $queryPrecio->bindParam(':id_habitacion', $_COOKIE['id_habitacion']);
        $queryPrecio->execute();
        $precioHabitacion = $queryPrecio->fetchColumn();

        // Calcular la cantidad de días de la reserva
        $fechaEntrada = new DateTime($_COOKIE['fecha_entrada']);
        $fechaSalida = new DateTime($_COOKIE['fecha_salida']);
        $diferencia = $fechaEntrada->diff($fechaSalida);
        $diasReserva = $diferencia->days;

        // Calcular el subtotal (precio de la habitación por la cantidad de días)
        $subtotal = $precioHabitacion * $diasReserva;

        // Calcular el IVA del 10%
        $iva = $subtotal * 0.1;

        // Calcular el total (subtotal más IVA)
        $total = $subtotal + $iva;

        // Devolver el total formateado con dos decimales
        return number_format($total, 2);
    } else {
        // Si no se han establecido todas las cookies necesarias, retornar un valor nulo
        return null;
    }
}
?>

