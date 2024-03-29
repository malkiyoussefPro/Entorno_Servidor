<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if (isset($_POST['iniciar'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $password = htmlspecialchars($_POST['password']);

    if (!empty($nombre) && !empty($password)) {
        $q_select = $pdo->prepare('SELECT * FROM usuario WHERE nombre_usuario = ? AND contrasena_usuario = ?');
        $q_select->execute([$nombre, $password]);
        $var = $q_select->fetch();

        if ($var) {
            $_SESSION['name'] = $nombre;
            $_SESSION['password'] = $password;
            $_SESSION['role_usuario'] = $var['role_usuario'];

            if ($var['role_usuario'] == 'admin') {
                header('Location:/student042/dwes/html/dashboard.php');
                exit();
            } else {
                header('Location:/student042/dwes/index.php');
                exit();
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    }
}
?>
