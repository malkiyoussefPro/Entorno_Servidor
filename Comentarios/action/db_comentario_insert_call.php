<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION['name'])) {
    // Obtener el nombre del cliente desde la sesión
    $nombre_Cliente = $_SESSION['name'];
} else {
    // Manejar el caso en el que el nombre del cliente no está disponible en la sesión
    exit("Error: Nombre del cliente no disponible en la sesión.");
}

if(isset($_POST['insertar'])){
    // Estado del comentario siempre será "Pendiente"
    $estado_Comentario = 'Pendiente';
    // Obtener la fecha del formulario
    $fecha = isset($_POST['fecha_creacion_comentario']) ? $_POST['fecha_creacion_comentario'] : null;
    // Obtener el comentario del formulario
    $comentario = isset($_POST['comentarios']) ? $_POST['comentarios'] : null;
    // Obtener el score del formulario
    $score = isset($_POST['score']) ? $_POST['score'] : null;

    // Verificar que los campos obligatorios no estén vacíos
    if(!empty($fecha) && !empty($comentario) && !empty($score)){
        // Consulta preparada para insertar el comentario en la base de datos
        $q_insert = $pdo->prepare('INSERT INTO comentario_clientes (nombre_cliente, estado_comentario, fecha_creacion_comentario, comentarios, score) VALUES (?, ?, ?, ?, ?)');
        
        // Verificar si la preparación de la consulta fue exitosa
        if($q_insert) {
            // Ejecutar la consulta con los valores proporcionados
            $q_insert->execute([$nombre_Cliente, $estado_Comentario, $fecha, $comentario, $score]);
            
            // Verificar si la ejecución de la consulta fue exitosa
            if($q_insert->rowCount() > 0) {
                ?>
                <div class="alert alert-success" role="alert">
                    ¡Comentario añadido con éxito!
                
                </div>
                <?php
                
            } else {
                // Error en la ejecución de la consulta
                echo "Error: No se pudo insertar el comentario en la base de datos.";
            }
        } else {
            // Error en la preparación de la consulta
            echo "Error: No se pudo preparar la consulta para insertar el comentario.";
        }
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            ¡Todos los campos son obligatorios!
        </div>
        <?php
    }
}
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
