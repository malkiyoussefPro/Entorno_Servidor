<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

// Verifica si se envió el formulario con el ID del comentario a eliminar
if(isset($_POST['suprimir'])) {
    $id_comentario = $_POST['id_comentario'];

    // Prepara la consulta para eliminar el comentario
    $q_delete = $pdo->prepare('DELETE FROM comentarios_clientes WHERE id_comentario = ?');
    $q_delete->execute([$id_comentario]);

    // Verifica si se eliminó correctamente el comentario
    if($q_delete->rowCount() > 0) {
        // Redirecciona de vuelta al formulario de suprimir comentario
        header("Location: /student042/dwes/html/dashboard.php");
        exit();
    } else {
        echo "Error al eliminar el comentario.";
    }
} else {
    // Si no se proporcionó el ID del comentario, muestra un mensaje de error
    echo "ID de comentario no proporcionado.";
}
?>
