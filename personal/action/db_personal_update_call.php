<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

try {
    // Verificar si se ha enviado el formulario de actualización
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha proporcionado un ID de personal
        if (isset($_POST['id_personal'])) {
            // Obtener los datos del formulario
            $id_personal = $_POST['id_personal'];
            $nombre_personal = isset($_POST['nombre_personal']) ? $_POST['nombre_personal'] : '';
            $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
            $puesto_personal = isset($_POST['puesto_personal']) ? $_POST['puesto_personal'] : '';
            $domicilio_personal = isset($_POST['domicilio_personal']) ? $_POST['domicilio_personal'] : '';
            $telefono_personal = isset($_POST['telefono_personal']) ? $_POST['telefono_personal'] : '';
            $email_personal = isset($_POST['email_personal']) ? $_POST['email_personal'] : '';
            $fecha_integracion = isset($_POST['fecha_integracion']) ? $_POST['fecha_integracion'] : '';
            $affiliacion_ss = isset($_POST['affiliacion_personal']) ? $_POST['affiliacion_personal'] : '';
            $fecha_despedida = isset($_POST['fecha_Despedida']) ? $_POST['fecha_Despedida'] : '';

            // Procesar la imagen personal si se ha subido
            if (isset($_FILES['imagen_personal']) && $_FILES['imagen_personal']['size'] > 0) {
                $imagenPersonal = $_FILES['imagen_personal']['name'];
                $imagenTemp = $_FILES['imagen_personal']['tmp_name'];
                $rutaImagen = "/student042/dwes/html/imagenes/$imagenPersonal";
                $moverImagen = move_uploaded_file($imagenTemp, $_SERVER['DOCUMENT_ROOT'] . $rutaImagen);

                // Verificar si la imagen se ha movido correctamente
                if (!$moverImagen) {
                    throw new Exception("Error al mover la imagen personal.");
                }
            } else {
                // Si no se envió una nueva imagen, mantenemos la imagen existente
                $q_select_imagen_personal = $pdo->prepare('SELECT imagen_personal FROM datos_personal WHERE id_personal = ?');
                $q_select_imagen_personal->execute([$id_personal]);
                $imagen_personal = $q_select_imagen_personal->fetchColumn();
                $rutaImagen = $imagen_personal ? $imagen_personal : '';
            }

            // Verificamos si se envió un nuevo currículum
            if (isset($_FILES['curriculum']) && $_FILES['curriculum']['size'] > 0) {
                $curriculum = $_FILES['curriculum']['name'];
                $temporalCurriculum = $_FILES['curriculum']['tmp_name'];
                $rutaCurriculum = "/student042/dwes/html/curriculum/$curriculum";
                $moverCurriculum = move_uploaded_file($temporalCurriculum, $_SERVER['DOCUMENT_ROOT'] . $rutaCurriculum);

                // Verificar si el currículum se ha movido correctamente
                if (!$moverCurriculum) {
                    throw new Exception("Error al mover el currículum.");
                }
            } else {
                // Si no se envió un nuevo currículum, mantenemos el currículum existente
                $q_select_curriculum = $pdo->prepare('SELECT curriculum FROM datos_personal WHERE id_personal = ?');
                $q_select_curriculum->execute([$id_personal]);
                $curriculum_existente = $q_select_curriculum->fetchColumn();
                $rutaCurriculum = $curriculum_existente ? $curriculum_existente : '';
            }

            // Preparar la consulta SQL para actualizar los datos del personal
            $query = "UPDATE datos_personal SET nombre_personal=?, fecha_nacimiento=?, puesto_personal=?, domicilio_personal=?, telefono_personal=?, email_personal=?, fecha_integracion=?, affiliacion_ss=?, imagen_personal=?, curriculum=?, fecha_despedida=? WHERE id_personal=?";

            // Preparar la declaración
            $stmt = $pdo->prepare($query);

            // Ejecutar la declaración
            $stmt->execute([$nombre_personal, $fecha_nacimiento, $puesto_personal, $domicilio_personal, $telefono_personal, $email_personal, $fecha_integracion, $affiliacion_ss, $rutaImagen, $rutaCurriculum, $fecha_despedida, $id_personal]);

            // Verificar si la actualización fue exitosa
            if ($stmt->rowCount() > 0) {
                echo "Los datos del personal se han actualizado correctamente.";
                header("Location:/student042/dwes/Personal/operaciones.php");
            } else {
                throw new Exception("Error al actualizar los datos del personal.");
            }
        } else {
            throw new Exception("ID de personal no proporcionado.");
        }
    } else {
        throw new Exception("No se ha enviado el formulario de actualización.");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
