<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
// Verificar si se ha enviado el formulario de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario de reserva
    $nombre_cliente = htmlspecialchars($_POST['nombre_cliente']);
    $email_cliente = htmlspecialchars($_POST['email_cliente']);
    $telefono_cliente = htmlspecialchars($_POST['telefono_cliente']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $fecha_llegada = htmlspecialchars($_POST['fecha_llegada']);
    $hora_reserva = htmlspecialchars($_POST['hora_reserva']);

    try {
        // Iniciar transacción para garantizar la integridad de los datos
        $pdo->beginTransaction();

        // Consultar el precio del servicio seleccionado
        $stmt_precio = $pdo->prepare("SELECT precio FROM servicios_hotel WHERE departamento = 'Restaurante' AND descripción = ?");
        $stmt_precio->execute([$servicio]);
        $precio_servicio = $stmt_precio->fetchColumn();

        // Generar código único para la reserva
        $codigo_reserva = uniqid('RES-');

        // Insertar el pago en la tabla `pagos`
        $stmt_pago = $pdo->prepare("INSERT INTO pagos (nombre_titular, fechaEmision_pago, tipo_pago, cantidad_pagar) VALUES (?, NOW(), 'Visa', ?)");
        $stmt_pago->execute([$nombre_cliente, $precio_servicio]);

        // Obtener el ID del pago recién insertado
        $id_pago = $pdo->lastInsertId();

        // Insertar la reserva en la tabla `reservas_servicios`
        $stmt_reserva = $pdo->prepare("INSERT INTO reservas_servicios (nombre_cliente, email_cliente, telefono_cliente, departamento, servicio, hora_reserva, codigo_reserva, id_servicio, id_pago) VALUES (?, ?, ?, 'restaurante', ?, ?, ?, ?, ?)");
        $stmt_reserva->execute([$nombre_cliente, $email_cliente, $telefono_cliente, $servicio, $hora_reserva, $codigo_reserva, 2, $id_pago]);

        // Confirmar la transacción
        $pdo->commit();

        // Mostrar confirmación de reserva
        ?>
        <div id="confirmacion-pago" style="display: block;">
            <h2>¡Reserva realizada con éxito!</h2>
            <p>Su reserva ha sido confirmada. A continuación, se muestra la información de su reserva:</p>
            <ul>
                <li><strong>Nombre del titular:</strong> <?php echo $nombre_cliente; ?></li>
                <li><strong>Email:</strong> <?php echo $email_cliente; ?></li>
                <li><strong>Teléfono:</strong> <?php echo $telefono_cliente; ?></li>
                <li><strong>Servicio:</strong> <?php echo $servicio; ?></li>
                <li><strong>Fecha de llegada:</strong> <?php echo $fecha_llegada; ?></li>
                <li><strong>Hora de reserva:</strong> <?php echo $hora_reserva; ?></li>
                
            </ul>
            <!-- Enlace para descargar PDF u otras acciones -->
            <p><a href="/student042/dwes/Restaurante/generar_pdf.php" id="descargar-pdf">Descargar PDF</a></p>
        </div>
        <?php
    } catch (PDOException $e) {
        // Cancelar la transacción en caso de error
        $pdo->rollBack();
        // Manejar errores de la base de datos
        echo "Error al realizar la reserva: " . $e->getMessage();
    }
}
?>
