<?php
// Incluir el archivo de conexión a la base de datos
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

        // Redirigir a una página de confirmación o mostrar un mensaje de éxito
        header("Location: /student042/dwes/html/restaurante.php");
        exit(); // Finalizar el script para evitar ejecuciones adicionales
    } catch (PDOException $e) {
        // Cancelar la transacción en caso de error
        $pdo->rollBack();
        // Manejar errores de la base de datos
        echo "Error al realizar la reserva: " . $e->getMessage();
    }
}
?>


<form method="post" action="">
    <div id="container-formulario-pago" class="container-formulario-pago">
    <input type="hidden" name="id_habitacion" value="<?php echo isset($_COOKIE['id_habitacion']) ? $_COOKIE['id_habitacion'] : ''; ?>">

        <!--formulario de pago -->
        <div class="form-group">
            <label for="nombre_titular">Nombre del Titular:</label>
            <input type="text" id="nombre_titular" name="nombre_titular" required class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" class="form-control" placeholder="0000 0000 0000 0000" maxlength="19">
        </div>
        <div class="form-group">
            <label for="fecha_caducidad">Fecha de Vencimiento:</label>
            <input type="text" id="fecha_caducidad" name="fecha_caducidad" placeholder="MM/AA" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo_pago">Tipo de tarjeta:</label>
            <input type="text" id="tipo_pago" name="tipo_pago" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="cantidad_pagar">Cantidad a Pagar:</label>
            <input type="text" id="cantidad_pagar" name="cantidad_pagar" required class="form-control" value="<?php if (isset($totalFormateado)) echo $totalFormateado; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn-pagar" id="pagar" name="pagar">Pagar</button>
        </div>
    </div>
</form>



<script>
    // Función para mostrar el formulario de pago
    function mostrarFormularioPago(id_habitacion) {
        var formularioPago = document.getElementById('container-formulario-pago');
        formularioPago.style.display = 'block';
        // Guardar el ID de la habitación seleccionada en una cookie
        document.cookie = "id_habitacion=" + id_habitacion + "; path=/";
    }

    function detectCardType(cardNumber) {
        // Define las expresiones regulares para cada tipo de tarjeta
        var visaRegex = /^4[0-9]{12}(?:[0-9]{3})?$/;
        var mastercardRegex = /^5[1-5][0-9]{14}$/;
        var amexRegex = /^3[47][0-9]{13}$/;
        var discoverRegex = /^6(?:011|5[0-9]{2})[0-9]{12}$/;

        // Comprueba si el número de tarjeta coincide con alguna de las expresiones regulares y actualiza el campo de tipo de tarjeta
        if (visaRegex.test(cardNumber)) {
            document.getElementById('tipo_pago').value = 'Visa';
        } else if (mastercardRegex.test(cardNumber)) {
            document.getElementById('tipo_pago').value = 'Mastercard';
        } else if (amexRegex.test(cardNumber)) {
            document.getElementById('tipo_pago').value = 'American Express';
        } else if (discoverRegex.test(cardNumber)) {
            document.getElementById('tipo_pago').value = 'Discover';
        } else {
            document.getElementById('tipo_pago').value = 'Tipo de tarjeta desconocido';
        }
    }

    // Función para formatear automáticamente el número de tarjeta mientras el usuario lo ingresa
    document.getElementById('numero_tarjeta').addEventListener('input', function(event) {
        var cardNumber = event.target.value.replace(/\D/g, ''); // Elimina todos los caracteres que no sean dígitos
        var formattedCardNumber = '';
        
        for (var i = 0; i < cardNumber.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedCardNumber += ' '; // Inserta un espacio cada 4 dígitos
            }
            formattedCardNumber += cardNumber.charAt(i);
        }
        
        event.target.value = formattedCardNumber.trim().slice(0, 19); // Limita la longitud a 19 caracteres (16 dígitos + 3 espacios)
        detectCardType(cardNumber); // Detecta el tipo de tarjeta
    });

    document.getElementById('fecha_caducidad').addEventListener('blur', function() {
        var fechaInput = this.value;
        var fechaArray = fechaInput.split('/');
        var mes = parseInt(fechaArray[0], 10);
        var anio = parseInt(fechaArray[1], 10);
        
        var fechaActual = new Date();
        var mesActual = fechaActual.getMonth() + 1; // Se suma 1 porque los meses en JavaScript van de 0 a 11
        var anioActual = fechaActual.getFullYear() % 100; // Obtiene los dos últimos dígitos del año actual
    
        if (mes < 1 || mes > 12 || anio < anioActual || (anio === anioActual && mes < mesActual)) {
            alert('La fecha de vencimiento ingresada no es válida!!!! .');
            this.value = ''; // Limpiar el campo
            this.focus(); // Colocar el foco en el campo nuevamente
        }
    });

    document.getElementById('fecha_caducidad').addEventListener('input', function() {
        var fechaInput = this.value;
        var fechaArray = fechaInput.split('/');
    
        // Si se ha ingresado el mes y es válido
        if (fechaArray.length === 1 && /^[0-9]{1,2}$/.test(fechaInput)) {
            // Si el mes es válido (entre 1 y 12)
            var mes = parseInt(fechaInput, 10);
            if (mes >= 1 && mes <= 12) {
                this.value = fechaInput + '/';
            }
        }
    });
</script>
