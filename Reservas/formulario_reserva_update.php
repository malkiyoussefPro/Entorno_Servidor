<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

  
// Obtener el ID del reserva de la URL
$id_reserva = isset($_GET['id_reserva']) ? $_GET['id_reserva'] : null;

if (!$id_reserva) {
    echo "ID de reserva no proporcionado.";
    exit;
}

// Realizar la consulta para obtener la información del reserva
$q_select = $pdo->prepare('SELECT * FROM reservas WHERE id_reserva = ?');
$q_select->execute([$id_reserva]);
$reserva = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$reserva) {
    echo "reserva no encontrado.";
    exit;
}


?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">


<body>
    <center>
        <h1>Check-In de Reserva</h1>
        <form action="/student042/dwes/Reservas/action/db_reserva_checkin.php" method="POST">
        <label for="id_reserva">ID de Reserva:</label>
    <input type="text" id="id_reserva" name="id_reserva" value="<?php echo $reserva['id_reserva']; ?>" required><br><br>
            
    <label for="nombre_usuario">Nombre de Usuario:</label>
    <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?php echo $reserva['nombre_usuario']; ?>" required><br><br>
            
    <label for="id_habitacion">ID de Habitación:</label>
    <input type="text" id="id_habitacion" name="id_habitacion" value="<?php echo $reserva['id_habitacion']; ?>" required><br><br>
            
    <label for="fecha_entrada">Fecha de Entrada:</label>
    <input type="datetime-local" id="fecha_entrada" name="fecha_entrada" value="<?php echo $reserva['fecha_entrada']; ?>" required><br><br>
            
    <label for="fecha_salida">Fecha de Salida:</label>
    <input type="datetime-local" id="fecha_salida" name="fecha_salida" value="<?php echo $reserva['fecha_salida']; ?>" required><br><br>
            
    <label for="check_in">Estado del Check-In:</label>
    <select name="check_in" id="check_in">
        <option value="Completado" <?php if($reserva['check_in'] == 'Completado') echo 'selected'; ?>>Completado</option>
        <option value="Pendiente" <?php if($reserva['check_in'] == 'Pendiente') echo 'selected'; ?>>Pendiente</option>
        <option value="Cancelado" <?php if($reserva['check_in'] == 'Cancelado') echo 'selected'; ?>>Cancelado</option>
        <option value="Error" <?php if($reserva['check_in'] == 'Error') echo 'selected'; ?>>Error</option>
    </select><br><br>

    <div class="d-flex justify-content-center">
        <button type="submit" name="actualizar" id="btn" class="btn  mt-2 mb-3">Actualizar</button>
    </div>
        </form>
    </center>



<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>