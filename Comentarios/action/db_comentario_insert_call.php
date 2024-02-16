<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_POST['insertar'])){
    // Verificar si la clave 'nombre_Cliente' está definida en $_SESSION
    $nombre_Cliente = isset($_SESSION['nombre_Cliente']) ? $_SESSION['nombre_Cliente'] : null;
    // Verificar si la clave 'estado_comentario' está definida en $_POST
    $estado_Comentario = isset($_POST['estado_comentario']) ? $_POST['estado_comentario'] : null;
    // Obtener el valor de 'fecha_creacion_comentario' de $_POST
    $fecha = $_POST['fecha_creacion_comentario'];
    // Obtener el valor de 'comentarios' de $_POST
    $comentario = $_POST['comentarios'];
    // Obtener el valor de 'score' de $_POST
    $score = $_POST['score'];

    if(!empty($nombre_Cliente) && !empty($estado_Comentario) && !empty($fecha) && !empty($comentario) && !empty($score)){
        $q_insert = $pdo->prepare('INSERT INTO comentarios_clientes (nombre_cliente, estado_comentario, fecha_creacion_comentario, comentarios, score) VALUES (?, ?, ?, ?, ?)');
        $q_insert->execute([$nombre_Cliente, $estado_Comentario, $fecha, $comentario, $score]);
        ?>
        <div class="alert alert-success" role="alert">
            ¡Comentario añadido con éxito!
        </div>
        <?php
        header('Location:/student042/dwes/html/dashboard.php');
        exit();
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            ¡Todos los campos son obligatorios!
        </div>
        <?php
    }
}
?>
