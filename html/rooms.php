<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

// Obtener el ID del usuario de la sesión
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Definir una variable para almacenar el mensaje de error
$error_message = '';

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
                    WHERE ('$startDate' BETWEEN fecha_entrada AND fecha_salida)
                    OR ('$endDate' BETWEEN fecha_entrada AND fecha_salida)
                )
            ");
            $q_select->bindParam(':tipo', $tipoHabitacion);
            $q_select->execute();

            // Fetch all data
            $habitaciones_disponibles = $q_select->fetchAll(PDO::FETCH_ASSOC);

            // Guardar los datos en cookies si hay habitaciones disponibles
            if (!empty($habitaciones_disponibles)) {
                setcookie('id_cliente', $user_id, time() + (86400 * 30), "/"); // 86400 segundos = 1 día
                setcookie('id_habitacion', $habitaciones_disponibles[0]['id_habitacion'], time() + (86400 * 30), "/");
                setcookie('fecha_entrada', $startDate, time() + (86400 * 30), "/");
                setcookie('fecha_salida', $endDate, time() + (86400 * 30), "/");
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
       
                    <a href="/student042/dwes/Reservas/action/db_reserva_insert_call.php"><button type="submit" name="insertar" class="btn btn-warning reservar-btn">Reservar</button></a>
               
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>



<!-- Formulario de Pago -->
<div class="container-formulario-pago">
    <h2>Formulario de Pago</h2>
    <form method="post" action="/student042/dwes/Pago/db_pago_insert_call.php">
        <div class="form-group">
            <label for="nombre_titular">Nombre del Titular:</label>
            <input type="text" id="nombre_titular" name="nombre_titular" required class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" class="form-control" placeholder="0000 0000 0000 0000">
        </div>
        <div class="form-group">
            <label for="tipo_pago">Tipo de tarjeta:</label>
            <input type="text" id="tipo_pago" name="tipo_pago" class="form-control" oninput="detectCardType(this.value)">
        </div>
        <div class="form-group">
            <label for="fecha_caducidad">Fecha de Vencimiento:</label>
            <input type="text" id="fecha_caducidad" name="fecha_caducidad" placeholder="MM/AA" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad_pagar">Cantidad a Pagar:</label>
            <input type="text" id="cantidad_pagar" name="cantidad_pagar" required class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn-pagar" id="pagar" name="pagar">Pagar</button>
        </div>
    </form>
</div>

<script>
    
function detectCardType(cardNumber) {
    // Define las expresiones regulares para cada tipo de tarjeta
    var visaRegex = /^4[0-9]{0,}$/;
    var mastercardRegex = /^5[1-5][0-9]{0,}$/;
    var amexRegex = /^3[47][0-9]{0,}$/;
    var discoverRegex = /^6(?:011|5[0-9]{0,})[0-9]{0,}$/;

    // Comprueba si el número de tarjeta coincide con alguna de las expresiones regulares
    if (visaRegex.test(cardNumber)) {
        document.getElementById('card_type').innerHTML = 'Visa';
    } else if (mastercardRegex.test(cardNumber)) {
        document.getElementById('card_type').innerHTML = 'Mastercard';
    } else if (amexRegex.test(cardNumber)) {
        document.getElementById('card_type').innerHTML = 'American Express';
    } else if (discoverRegex.test(cardNumber)) {
        document.getElementById('card_type').innerHTML = 'Discover';
    } else {
        document.getElementById('card_type').innerHTML = 'Tipo de tarjeta desconocido';
    }
}
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
