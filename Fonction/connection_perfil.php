<?php
function iniciarSesion($nombre, $password, $pdo) {
    if (!empty($nombre) && !empty($password)) {
        $q_select = $pdo->prepare('SELECT * FROM usuario
                                  WHERE nombre_usuario = ? AND contrasena_usuario = ?');
        $q_select->execute([$nombre, $password]);
        $var = $q_select->fetch();

        session_start();
        $_SESSION['name'] = $nombre;
        $_SESSION['password'] = $password;
        $_SESSION['role_usuario'] = $var['role_usuario'];

        if ($var['role_usuario'] == 'admin') {
            header('Location: /student042/dwes/html/dashboard.php');
        } else {
            header('Location: /student042/dwes/index.php');
        }
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Todos los campos son obligatorios!
        </div>
        <?php
    }
}

// Verificar si se ha enviado el formulario
if (isset($_POST['iniciar'])) {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    iniciarSesion($nombre, $password, $pdo);
}
?>
