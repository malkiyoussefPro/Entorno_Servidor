<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');


// Obtener el ID del usuario de la sesión
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Verificar si se ha enviado el formulario de disponibilidad
if (isset($_POST['disponibilidad'])) {
    // Obtener las fechas proporcionadas por el usuario
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Obtener el número de personas proporcionado por el usuario
    $nombrePersona = $_POST['nombre_persona'];

 
    // Verificar el número de personas y ajustar el tipo de habitación según corresponda
    if ($nombrePersona >= 1 && $nombrePersona <= 2) {
      $tipoHabitacion = 'single';
  } elseif ($nombrePersona >= 3 && $nombrePersona <= 4) {
      $tipoHabitacion = 'double';
  } elseif ($nombrePersona >= 5 && $nombrePersona <= 6) {
      $tipoHabitacion = 'suite';
  } else {
      // Mostrar un mensaje de error si el número de personas es mayor que 6
      echo '<div class="alert alert-danger" role="alert">El número máximo de personas es 6.</div>';
      exit(); // Detener la ejecución del script
  }

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

    if ($habitaciones_disponibles) {
        echo 'Hay ' . count($habitaciones_disponibles) . ' habitaciones disponibles';

        // Mostrar la información de las habitaciones disponibles
        foreach ($habitaciones_disponibles as $habitacion) {
            echo '<div class="habitacion">';
            echo '<h2>Tipo: ' . $habitacion['tipo_habitacion'] . '</h2>';
            echo '<p>Precio: ' . $habitacion['precio_habitacion'] . '</p>';
            // Verifica si la ruta de la imagen está vacía antes de mostrarla
            if (!empty($habitacion['imagen_habitacion'])) {
                echo '<img src="' . $habitacion['imagen_habitacion'] . '" alt="Imagen de la habitación">';
            } else {
                echo '<p>Imagen no disponible</p>';
            }
            echo '<p>Vista de la habitación: ' . $habitacion['ubicacion_habitacion'] . '</p>';
            echo '</div>';
        }
    } else {
        echo 'No hay habitaciones disponibles en las fechas y para el número de personas proporcionadas';
    }
}
?>




<link rel="stylesheet" href="/student042/dwes/css/header.css">

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
                    <label for="inputNombrePersona">Nombre de persona</label>
                    <input type="number" name="nombre_persona" class="form-control" id="inputNombrePersona" placeholder="Nombre persona">
                </div>
                <div class="card-body col-2">
                    <button type="submit" class="btn btn-warning" id="disponibilidad" name="disponibilidad">Ver disponibilidad</button>
                </div>
            </div>
        </form>
        <div class="card-body">
            <a href="#" type="button" class="btn btn-warning" name="reservar" id="reservar">Reservar</a>
        </div>
    </div>
</div>
