<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

// Verificar si se envió el formulario con el ID del comentario y el nuevo estado
if(isset($_POST['actualizar']) && isset($_POST['id_comentario']) && isset($_POST['nuevo_estado'])) {
    $id_comentario = $_POST['id_comentario'];
    $nuevo_estado = $_POST['nuevo_estado'];

    // Prepara la consulta para actualizar el estado del comentario
    $q_update = $pdo->prepare('UPDATE comentarios_clientes SET estado_comentario = ? WHERE id_comentario = ?');
    $q_update->execute([$nuevo_estado, $id_comentario]);

    // Verifica si se actualizó correctamente el estado del comentario
    if($q_update->rowCount() > 0) {
        echo "Estado del comentario actualizado correctamente.";
    } else {
        echo "Error al actualizar el estado del comentario.";
    }
    header("location: /student042/dwes/html/dashboard.php");
} else {
    // Si no se proporcionaron todos los datos necesarios, muestra un mensaje de error
    echo "Por favor, proporcione el ID del comentario y el nuevo estado.";
}
?>
