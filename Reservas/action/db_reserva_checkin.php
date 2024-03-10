<?php
// Verifica si se ha enviado el formulario de check-in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se ha recibido el ID de la reserva
    if (isset($_POST['id_reserva'])) {
        // Captura el ID de la reserva desde el formulario
        $id_reserva = $_POST['id_reserva'];

        // Realiza la consulta para actualizar el estado de check-in
        $q_update_checkin = $pdo->prepare('UPDATE reservas SET check_in = :check_in WHERE id_reserva = :id_reserva');
        
        // Parámetros de la consulta
        $check_in_estado = 'Completado';
        $q_update_checkin->bindParam(':check_in', $check_in_estado);
        $q_update_checkin->bindParam(':id_reserva', $id_reserva);

        // Ejecuta la consulta de actualización
        if ($q_update_checkin->execute()) {
            echo "Check-in realizado con éxito para la reserva con ID: " . $id_reserva;
        } else {
            echo "Error al realizar el check-in para la reserva con ID: " . $id_reserva;
        }
    } else {
        echo "Error: No se ha proporcionado el ID de la reserva.";
    }
} else {
    echo "Error: No se ha enviado el formulario de check-in.";
}
?>
