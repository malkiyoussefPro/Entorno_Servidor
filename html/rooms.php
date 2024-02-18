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
                FROM habitaciones
                WHERE tipo_habitacion = :tipo
                AND disponibilidad_habitacion = 'disponible'
                AND estado_habitacion = 'Esta lista'
                AND id_habitacion NOT IN (
                    SELECT id_habitacion
                    FROM reservas_hotel
                    WHERE ('$startDate' BETWEEN fecha_entrada AND fecha_salida)
                    OR ('$endDate' BETWEEN fecha_entrada AND fecha_salida)
                )
            ");
            $q_select->bindParam(':tipo', $tipoHabitacion);
            $q_select->execute();

            // Fetch all data
            $habitaciones_disponibles = $q_select->fetchAll(PDO::FETCH_ASSOC);
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
                <a href="#" class="btn btn-warning reservar-btn" data-id="<?php echo $habitacion['id_habitacion']; ?>">Reservar</a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
