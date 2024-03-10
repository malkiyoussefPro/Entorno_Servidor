
<style>
  .confirmation-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.confirmation-heading {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.confirmation-info {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

.confirmation-info ul {
    list-style-type: none;
    padding: 0;
}

.confirmation-info li {
    margin-bottom: 10px;
}

.confirmation-info li strong {
    font-weight: bold;
}

.confirmation-info li span {
    font-weight: normal;
    color: #888;
}

   /* Estilos para el botón */
   .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff; /* Color de fondo del botón */
        color: #fff; /* Color del texto del botón */
        text-decoration: none; /* Eliminar subrayado del texto */
        border: none; /* Eliminar borde del botón */
        border-radius: 5px; /* Añadir esquinas redondeadas */
        cursor: pointer; /* Cambiar el cursor al pasar por encima */
    }

    /* Estilos para el botón al pasar el ratón por encima */
    .button:hover {
        background-color: #0056b3; /* Cambiar color de fondo al pasar por encima */
        color: #333;
    }

</style>

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
        $stmt_precio = $pdo->prepare("SELECT precio FROM servicios_hotel WHERE departamento = 'Evento' AND descripción = ?");
        $stmt_precio->execute([$servicio]);
        $precio_servicio = $stmt_precio->fetchColumn();

        // Generar código único para la reserva
        $codigo_reserva = uniqid('EVE-');

        // Insertar el pago en la tabla `pagos`
        $stmt_pago = $pdo->prepare("INSERT INTO pagos (nombre_titular, fechaEmision_pago, tipo_pago, cantidad_pagar) VALUES (?, NOW(), 'Visa', ?)");
        $stmt_pago->execute([$nombre_cliente, $precio_servicio]);

        // Obtener el ID del pago recién insertado
        $id_pago = $pdo->lastInsertId();

        // Insertar la reserva en la tabla `reservas_servicios`
        $stmt_reserva = $pdo->prepare("INSERT INTO reservas_servicios (nombre_cliente, email_cliente, telefono_cliente, departamento, servicio, hora_reserva, codigo_reserva, id_servicio, id_pago) VALUES (?, ?, ?, 'evento', ?, ?, ?, ?, ?)");
        $stmt_reserva->execute([$nombre_cliente, $email_cliente, $telefono_cliente, $servicio, $hora_reserva, $codigo_reserva, 2, $id_pago]);

        // Confirmar la transacción
        $pdo->commit();

        // Mostrar confirmación de reserva
        ?>
       
            <?php
            
            require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

            require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

            ?>
                <div class="confirmation-container">
                    <h2 class="confirmation-heading">¡Reserva realizada con éxito!</h2>
                    <p class="confirmation-info">Su reserva ha sido confirmada. A continuación, se muestra la información de su reserva:</p>
                <ul class="confirmation-info">
                    <li><strong>Nombre del titular:</strong> <?php echo $nombre_cliente; ?></li>
                    <li><strong>Email:</strong> <?php echo $email_cliente; ?></li>
                    <li><strong>Teléfono:</strong> <?php echo $telefono_cliente; ?></li>
                    <li><strong>Servicio:</strong> <?php echo $servicio; ?></li>
                    <li><strong>Fecha de llegada:</strong> <?php echo $fecha_llegada; ?></li>
                    <li><strong>Hora de reserva:</strong> <?php echo $hora_reserva; ?></li>
                </ul>
           
            <!-- Enlace para volver a la pagina inicial -->
            <a href="/student042/dwes/index.php" class="button">Página Inicial</a>

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

<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
