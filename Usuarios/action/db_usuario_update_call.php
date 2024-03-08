<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');


// Obtener el ID del servicio de la URL
$id_servicio = isset($_GET['id_servicio']) ? $_GET['id_servicio'] : null;

if (!$id_servicio) {
    echo "ID de servicio no proporcionado.";
    exit;
}

// Realizar la consulta para obtener la información del servicio
$q_select = $pdo->prepare('SELECT * FROM servicios_hotel WHERE id_servicio = ?');
$q_select->execute([$id_servicio]);
$servicio = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$servicio) {
    echo "Servicio no encontrado.";
    exit;
}



if (isset($_POST['actualizar'])) {
    $idUsuario = $_POST['id_usuario'];
    $nombreUsuario = $_POST['nombre_usuario']; 
    $emailUsuario = $_POST['email_usuario']; 
    $contraseña = $_POST['contraseña_usuario'];
    $roleUsuario = $_POST['role_usuario']; 
    $fechaCreacion = $_POST['fecha_creacion']; 

    if (empty($nombreUsuario) || empty($emailUsuario) || empty($roleUsuario) || empty($fechaCreacion)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    $q_update = $pdo->prepare('UPDATE usuario SET nombre_usuario = ?, email_usuario = ?, contrasena_usuario = ?, role_usuario = ?, fecha_creacion_cuenta = ? WHERE id_usuario = ?');
    $q_update->execute([$nombreUsuario, $emailUsuario, $contraseña, $roleUsuario, $fechaCreacion, $idUsuario]);

    if ($q_update->rowCount() > 0) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "No se encontró ningún usuario con el ID proporcionado o no se realizaron cambios.";
    }
}

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
