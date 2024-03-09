<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if (isset($_POST['actualizar'])) {
    $idServicio = $_POST['id_servicio'];
    $descripcion = $_POST['descripcion_servicio']; 
    $departamento = $_POST['departamento_servicio']; 
    $precio = $_POST['precio_servicio'];
    $fechaCreacion = $_POST['fecha_creacion_servicio']; 

    if (empty($descripcion) || empty($departamento) || empty($precio) || empty($fechaCreacion)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Verificamos si se envió una nueva imagen
    if ($_FILES['imagen_servicio']['size'] > 0) {
        $imagenServicio = $_FILES['imagen_servicio']['name'];
        $imagenTemp = $_FILES['imagen_servicio']['tmp_name'];
        $rutaImagen = "/student042/dwes/html/imagenes/$imagenServicio";
        move_uploaded_file($imagenTemp, $_SERVER['DOCUMENT_ROOT'] . $rutaImagen);
    } else {
        // Si no se envió una nueva imagen, mantenemos la imagen existente
        $q_select_imagen = $pdo->prepare('SELECT imagen_servicio FROM servicios_hotel WHERE id_servicio = ?');
        $q_select_imagen->execute([$idServicio]);
        $imagen = $q_select_imagen->fetchColumn();
        $rutaImagen = $imagen ? $imagen : '';
    }

    $q_update = $pdo->prepare('UPDATE servicios_hotel SET descripción = ?, departamento = ?, imagen_servicio = ?, precio = ?, fecha_creacion_servicio = ? WHERE id_servicio = ?');
    $q_update->execute([$descripcion, $departamento, $rutaImagen, $precio, $fechaCreacion, $idServicio]);

    if ($q_update->rowCount() > 0) {
        echo "Servicio actualizado exitosamente.";
        header("Location:/student042/dwes/Servicios/operaciones.php");
        exit; // Aseguramos que el script se detenga después de redirigir
    } else {
        echo "No se encontró ningún servicio con el ID proporcionado o no se realizaron cambios.";
    }
}
?>
