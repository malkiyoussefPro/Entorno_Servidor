<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

// Verificamos si el usuario está autenticado
if (!isset($_SESSION['name'])) {
    // Si el usuario no está autenticado, redirigimos a la página de inicio de sesión
    header("Location: iniciarSesion.php");
    exit; // Asegura que el script no continúe ejecutándose después de la redirección
}

// Obtener el nombre del usuario de la sesión
$user_name = $_SESSION['name'];

// Consulta para verificar si el usuario está en la tabla de usuarios
$checkUserQuery = $pdo->prepare("SELECT COUNT(*) AS user_count FROM usuario WHERE nombre_usuario = :user_name");
$checkUserQuery->bindParam(':user_name', $user_name);
$checkUserQuery->execute();
$userExists = $checkUserQuery->fetch(PDO::FETCH_ASSOC)['user_count'];

if ($userExists == 0) {
    // Si el usuario no existe en la tabla de usuarios, imprimimos un mensaje de error y detenemos la ejecución del script
    echo '<div class="alert alert-danger" role="alert">Usuario no encontrado en la base de datos.</div>';
    exit; // Asegura que el script no continúe ejecutándose después de imprimir el mensaje
}

// Asignar el valor de $_SESSION['name'] a $user_id
$user_id = $_SESSION['name'];

// Definir una variable para almacenar el mensaje de error
$error_message = '';
$habitaciones_disponibles = array(); // Inicializa el array de habitaciones disponibles

// Verificar si se ha enviado el formulario de disponibilidad
if (isset($_POST['disponibilidad'])) {
    // Obtener las fechas proporcionadas por el usuario
    $startDate = isset($_POST['startDate']) ? $_POST['startDate'] : '';
    $endDate = isset($_POST['endDate']) ? $_POST['endDate'] : '';
    $tipoHabitacion = isset($_POST['tipo_habitacion']) ? $_POST['tipo_habitacion'] : '';

    // Verificar si algún campo está vacío
    if (empty($startDate) || empty($endDate) || empty($tipoHabitacion)) {
        // Establecer el mensaje de error
        $error_message = '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    } else {
        // Verificar si la fecha de llegada es anterior a la fecha actual o igual a la fecha actual
        if (strtotime($startDate) < strtotime(date('Y-m-d'))) {
            // Establecer el mensaje de error
            $error_message = '<div class="alert alert-danger" role="alert">La fecha de llegada debe ser igual o posterior a la fecha actual.</div>';
        } elseif ($startDate > $endDate) {
            // Verificar si la fecha de llegada es superior a la fecha de salida
            // Establecer el mensaje de error
            $error_message = '<div class="alert alert-danger" role="alert">La fecha de llegada no puede ser posterior a la fecha de salida.</div>';
        } else {
            // Si no hay errores, proceder con la búsqueda de habitaciones disponibles
            try {
                // Consulta SQL para seleccionar las habitaciones disponibles según el tipo y las fechas proporcionadas
                $q_select = $pdo->prepare("
                    SELECT *
                    FROM habitaciones_hotel
                    WHERE tipo_habitacion = :tipo
                    AND disponibilidad_habitacion = 'disponible'
                    AND estado_habitacion = 'Esta lista'
                    AND id_habitacion NOT IN (
                        SELECT id_habitacion
                        FROM reservas
                        WHERE (:startDate BETWEEN fecha_entrada AND fecha_salida)
                        OR (:endDate BETWEEN fecha_entrada AND fecha_salida)
                    )
                ");
                $q_select->bindParam(':tipo', $tipoHabitacion);
                $q_select->bindParam(':startDate', $startDate);
                $q_select->bindParam(':endDate', $endDate);
                $q_select->execute();

                // Fetch all data
                $habitaciones_disponibles = $q_select->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Manejo de excepciones de la base de datos
                echo '<div class="alert alert-danger" role="alert">Error en la consulta SQL: ' . $e->getMessage() . '</div>';
            }
        }
    }
}
?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<style>
    /* Estilos para el contenedor de las habitaciones */
    .habitacion {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 20px;
        background-color: #f9f9f9;
        width: 450px;
    }

    /* Estilos para el título del tipo de habitación */
    .habitacion h2 {
        margin-top: 0;
        font-size: 18px;
        color: #333;
    }

    /* Estilos para el precio de la habitación */
    .habitacion p {
        margin: 0;
        font-size: 16px;
        color: #666;
    }

    /* Estilos para la imagen de la habitación */
    .habitacion img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }

    /* Estilos para el texto cuando no hay imagen disponible */
    .habitacion p:empty {
        color: #999;
        font-style: italic;
    }

    /* Estilos para la vista de la habitación */
    .habitacion .vista {
        font-style: italic;
        color: #888;
    }

    .btn{
        margin: 15px auto;
        font-weight:18px;
    }

    /* Estilos para el formulario de pago */
    .container-formulario-pago {
        border: 2px solid #000;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        margin: 50px auto;
        max-width: 400px;
        display: none; /* Oculta el formulario de pago inicialmente */
    }

    .container-formulario-pago h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 18px;
        color: #666;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-control:focus {
        outline: none;
        border-color: #6c757d;
    }

    .btn-pagar {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        color: black;
        background-color: #ffc107;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bolder;
    }

    .btn-pagar:hover {
        background-color: #ffca2c;
    }

</style>

<?php echo $error_message; ?>
<div class="container m-5" style="border: 2px solid black; background : white ;border-radius: 10px;">
    <div class="row d-flex justify-content-around m-2">
        <h1 style="text-align: center;">Reservas</h1>
        <form method="post" action="">
            <div class="row">
                <div class="col-4">
                    <label for="startDate">Llegada</label>
                    <input id="startDate" class="form-control" type="date" name="startDate" />
                </div>
                <div class="col-4">
                    <label for="endDate">Salida</label>
                    <input id="endDate" class="form-control" type="date" name="endDate" />
                </div>
                <div class="col-2">
                    <label for="inputTipoHabitacion">Tipo de habitación</label>
                    <select name="tipo_habitacion" id="inputTipoHabitacion" class="form-control">
                        <option value="single">Single</option>
                        <option value="doble">Doble</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
                <div class="card-body col-2">
                    <button type="submit" class="btn btn-warning" id="disponibilidad" name="disponibilidad">Ver disponibilidad</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php if (!empty($habitaciones_disponibles)) : ?>
    <div class="row">
        <?php foreach ($habitaciones_disponibles as $habitacion) : ?>
            <div class="habitacion">
                <h2>Tipo: <?php echo $habitacion['tipo_habitacion']; ?></h2>
                <p>Precio: <?php echo $habitacion['precio_habitacion']; ?></p>
                <?php if (!empty($habitacion['imagen_habitacion'])) : ?>
                    <img src="<?php echo $habitacion['imagen_habitacion']; ?>" alt="Imagen de la habitación">
                <?php else : ?>
                    <p>Imagen no disponible</p>
                <?php endif; ?>
                <p>Vista de la habitación: <?php echo $habitacion['ubicacion_habitacion']; ?></p>
                <!-- Agrega el enlace para reservar y muestra el formulario de pago -->
                <a href="#" class="btn btn-warning reservar-btn" onclick="mostrarFormularioPago(<?php echo $habitacion['id_habitacion']; ?>)">Reservar</a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php
// Calcular el precio total de la reserva, incluido el IVA del 10%
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
}
?>
<?php

// Verificar si se ha enviado el formulario de pago
if (isset($_POST['pagar'])) {
    // Obtener los datos del formulario de pago
    $id_habitacion = isset($_POST['id_habitacion']) ? $_POST['id_habitacion'] : '';

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
            INSERT INTO reservas (id_usuario, id_habitacion, fecha_entrada, fecha_salida, fecha_reserva, id_pago, numero_reserva, check_in, check_out) 
            VALUES (:id_usuario, :id_habitacion, :fecha_entrada, :fecha_salida, NOW(), :id_pago, :numero_reserva, 'Pendiente', 0)
        ");
        $insertReserva->bindParam(':id_usuario', $user_id);
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
            <label for="tipo_pago">Tipo de tarjeta:</label>
            <input type="text" id="tipo_pago" name="tipo_pago" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="fecha_caducidad">Fecha de Vencimiento:</label>
            <input type="text" id="fecha_caducidad" name="fecha_caducidad" placeholder="MM/AA" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad_pagar">Cantidad a Pagar:</label>
            <input type="text" id="cantidad_pagar" name="cantidad_pagar" required class="form-control" value="<?php if (isset($total)) echo $total; ?>">
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

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
