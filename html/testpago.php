<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Fonction/verificarUsuario.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Fonction/calcularrserva.php');


// Llamar a la función para verificar al usuario y obtener el nombre de usuario
$user_id = verificarUsuario($pdo);

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


<link rel="stylesheet" href="/student042/dwes/css/room.css">

<?php echo $error_message; ?>
<div class="container m-5" style="border: 2px solid black; background : white ;border-radius: 10px;">
    <div class="row d-flex justify-content-around m-2">
        <h1 style="text-align: center;">Reservas</h1>
        <form method="post" action="">
            <div class="row">
            <div class="col-4">
                    <label for="startDate">Llegada</label>
                    <input id="startDate" class="form-control" type="date" name="startDate" value="<?php echo isset($startDate) ? htmlspecialchars($startDate) : ''; ?>" />
            </div>
            <div class="col-4">
                    <label for="endDate">Salida</label>
                    <input id="endDate" class="form-control" type="date" name="endDate" value="<?php echo isset($endDate) ? htmlspecialchars($endDate) : ''; ?>" />
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
// Obtener el ID de la habitación de la URL
if(isset($_GET['id_habitacion'])) {
    $id_habitacion = $_GET['id_habitacion'];
    
    // Establecer una cookie con el ID de la habitación
    setcookie('id_habitacion', $id_habitacion, time() + (86400 * 30), "/"); // Cookie válida por 30 días (86400 segundos * 30)
} else {
    // Si no se proporciona el ID de la habitación, se puede manejar de otra manera o ignorar
}
?>




<form method="post" action="/student042/dwes/Pago/db_pago_insert_callphp">
    <div id="container-formulario-pago" class="container-formulario-pago">
   

        <!--formulario de pago -->
        <h3>Confirmación pago</h3>
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
            <input type="text" id="cantidad_pagar" name="cantidad_pagar" required class="form-control" value="<?php 
            
            
// Llamar a la función para calcular el precio total de la reserva
$totalReserva = calcularPrecioTotalReserva($pdo);

// Verificar si se calculó el precio total de la reserva
if ($totalReserva !== null) {
    // Mostrar el precio total de la reserva
    echo $totalReserva;
} else {
    // Si no se pudieron calcular todos los detalles de la reserva, mostrar un mensaje de error
    echo "No se pudo calcular el precio total de la reserva.";
}
?>

            

            
            
            ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn-pagar" id="pagar" name="pagar">Pagar</button>
        </div>
    </div>
</form>



<script src="/student042/dwes/javascript/pago.js"></script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
