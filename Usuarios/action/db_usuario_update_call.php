<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

if (isset($_GET['id_usuario'])) {
    $idUsuario = $_GET['id_usuario'];

    $q_select = $pdo->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
    $q_select->execute([$idUsuario]);
    $usuario = $q_select->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        echo "Usuario no encontrado.";
        exit;
    }
} else {
    echo "ID de usuario no proporcionado.";
    exit;
}

if (isset($_POST['actualizar'])) {
    $nombreUsuario = $_POST['nombre_Usuario'];
    $emailUsuario = $_POST['email_Usuario'];
    $contraseña = $_POST['contraseña'];
    $roleUsuario = $_POST['role_usuario'];
    $fechaCreacion = $_POST['fecha_creacion'];

    if (empty($nombreUsuario) || empty($emailUsuario) || empty($roleUsuario) || empty($fechaCreacion)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    $q_update = $pdo->prepare('UPDATE usuario SET nombre_usuario = ?, email_usuario = ?, contraseña_usuario = ?, role_usuario = ?, fecha_creacion_cuenta = ? WHERE id_usuario = ?');
    $q_update->execute([$nombreUsuario, $emailUsuario, $contraseña, $roleUsuario, $fechaCreacion, $idUsuario]);

    if ($q_update->rowCount() > 0) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "No se encontró ningún usuario con el ID proporcionado o no se realizaron cambios.";
    }
}

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
