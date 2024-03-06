<?php
function verificarDisponibilidad($pdo) {
    // Inicializar el mensaje de error
    $error_message = '';

    // Inicializar el array de habitaciones disponibles
    $habitaciones_disponibles = array();

    // Verificar si se ha enviado el formulario de disponibilidad
    if (isset($_POST['disponibilidad'])) {
        // Obtener las fechas proporcionadas por el usuario
        $startDate = isset($_POST['startDate']) ? $_POST['startDate'] : '';
        $endDate = isset($_POST['endDate']) ? $_POST['endDate'] : '';
        $tipoHabitacion = isset($_POST['tipo_habitacion']) ? $_POST['tipo_habitacion'] : '';

        // Verificar si algún campo está vacío
        if (empty($startDate) || empty($endDate) || empty($tipoHabitacion)) {
            // Establecer el mensaje de error
            $error_message = '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
        } else {
            // Verificar si la fecha de llegada es anterior a la fecha actual o igual a la fecha actual
            if (strtotime($startDate) < strtotime(date('Y-m-d'))) {
                // Establecer el mensaje de error
                $error_message = '<div class="alert alert-danger" role="alert">La fecha de llegada debe ser igual o posterior a la fecha actual.</div>';
            } elseif ($startDate > $endDate) {
                // Verificar si la fecha de llegada es superior a la fecha de salida
                // Establecer el mensaje de error
                $error_message = '<div class="alert alert-danger" role="alert">La fecha de llegada no puede ser posterior a la fecha de salida.</div>';
            } else {
                // Si no hay errores, proceder con la búsqueda de habitaciones disponibles
                try {
                    // Consulta SQL para seleccionar las habitaciones disponibles según el tipo y las fechas proporcionadas
                    $q_select = $pdo->prepare("
                    SELECT *
                    FROM habitaciones_hotel
                    WHERE tipo_habitacion = :tipo
                    AND disponibilidad_habitacion = 'disponible'
                    AND estado_habitacion = 'Esta lista'
                    AND id_habitacion NOT IN (
                        SELECT id_habitacion
                        FROM reservas
                        WHERE (:startDate BETWEEN fecha_entrada AND fecha_salida)
                        OR (:endDate BETWEEN fecha_entrada AND fecha_salida)
                        )
                        ");
                        $q_select->bindParam(':tipo', $tipoHabitacion);
                        $q_select->bindParam(':startDate', $startDate);
                        $q_select->bindParam(':endDate', $endDate);
                        $q_select->execute();

                        // Fetch all data
                        $habitaciones_disponibles = $q_select->fetchAll(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        // Manejo de excepciones de la base de datos
                        $error_message = '<div class="alert alert-danger" role="alert">Error en la consulta SQL: ' . $e->getMessage() . '</div>';
                    }
                }
            }
        }

        // Devolver un array con el mensaje de error y las habitaciones disponibles
        return array(
            'error_message' => $error_message,
            'habitaciones_disponibles' => $habitaciones_disponibles
        );
    }
?>
