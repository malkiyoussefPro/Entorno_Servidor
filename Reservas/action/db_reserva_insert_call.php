<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');


// Verificar si se ha enviado el formulario de reserva
if (isset($_POST['insertar'])) {
    // Obtener los datos del formulario
    $id_cliente = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; // Obtener el ID del cliente de la sesión
    $id_habitacion = isset($_COOKIE['id_habitacion']) ? $_COOKIE['id_habitacion'] : null; // Obtener el ID de la habitación de las cookies
    // Obtener las fechas de entrada y salida desde las cookies
    $fecha_entrada = isset($_COOKIE['fecha_entrada']) ? $_COOKIE['fecha_entrada'] : '';
    $fecha_salida = isset($_COOKIE['fecha_salida']) ? $_COOKIE['fecha_salida'] : '';
    $tipo_pago = isset($_POST['tipo_pago']) ? $_POST['tipo_pago'] : null;

    // Verificar que los campos obligatorios no estén vacíos
    if (!empty($id_cliente) && !empty($id_habitacion) && !empty($fecha_entrada) && !empty($fecha_salida) && !empty($tipo_pago)) {
        // Preparar la consulta SQL para insertar la reserva en la base de datos
        $q_insert = $pdo->prepare('INSERT INTO reservas_hotel (id_cliente, id_habitacion, fecha_entrada, fecha_salida, tipo_pago) VALUES (?, ?, ?, ?, ?)');
        
        // Verificar si la preparación de la consulta fue exitosa
        if ($q_insert) {
            // Ejecutar la consulta con los valores proporcionados
            $q_insert->execute([$id_cliente, $id_habitacion, $fecha_entrada, $fecha_salida, $tipo_pago]);
            
            // Verificar si la ejecución de la consulta fue exitosa
            if ($q_insert->rowCount() > 0) {
                echo "La reserva se ha insertado correctamente.";
            } else {
                echo "Error: No se pudo insertar la reserva en la base de datos.";
            }
        } else {
            echo "Error: No se pudo preparar la consulta para insertar la reserva.";
        }
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}
?>


<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
