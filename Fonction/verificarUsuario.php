<?php

// Función para verificar si el usuario está autenticado y existe en la tabla de usuarios
function verificarUsuario($pdo) {
    // Iniciar la sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Verificar si el nombre de usuario no está definido en la sesión
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

    // Devolver el nombre de usuario
    return $user_id;
}

?>
