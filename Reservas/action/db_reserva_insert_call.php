<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

// Función para obtener el ID del cliente
function obtenerIdCliente($pdo) {
    try {
        if (isset($_SESSION['name'])) {
            $nombre_usuario = $_SESSION['name'];

            $q_id_cliente = $pdo->prepare('SELECT id_usuario FROM usuario WHERE nombre_usuario = ?');
            $q_id_cliente->execute([$nombre_usuario]);
            $result = $q_id_cliente->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result['id_usuario'];
            } else {
                // Si el nombre de usuario no existe en la tabla de clientes, puedes devolver un valor por defecto o manejar el error de alguna otra forma
                return null;
            }
        } else {
            // Si $_SESSION['nombre_usuario'] no está definido, puedes devolver un valor por defecto o manejar el error de alguna otra forma
            return null;
        }
    } catch (PDOException $e) {
        // Manejar el error de la consulta SQL
        echo "Error al ejecutar la consulta SQL: " . $e->getMessage();
        return null;
    }
}


// Verificar si la sesión 'nombre_usuario' está configurada
if(isset($_SESSION['name'])) {
    $nombreUsuario = $_SESSION['name'];

    // Obtener el ID del cliente
    $id_cliente = obtenerIdCliente($pdo, $nombreUsuario);

    // Verificar si el ID del cliente está disponible
    if ($id_cliente) {
        // Establecer la cookie id_usuario
        setcookie('id_usuario', $id_cliente, time() + (86400 * 30), "/"); // 86400 = 1 día
    } else {
        echo "Error: No se pudo obtener el ID del cliente.";
    }

    // Mostrar el ID del cliente asociado al nombre de usuario
    if($id_cliente) {
        echo "El ID del cliente asociado al nombre de usuario $nombreUsuario es: $id_cliente";
    } else {
        echo "No se encontró un cliente asociado al nombre de usuario $nombreUsuario";
    }
} else {
    echo "La sesión 'nombre_usuario' no está configurada correctamente";
}

// Obtener los datos de las cookies si están disponibles
if(isset($_COOKIE['id_usuario'])) {
    $id_cliente = $_COOKIE['id_usuario'];
    $id_habitacion = isset($_COOKIE['id_habitacion']) ? $_COOKIE['id_habitacion'] : null;
    $fecha_entrada = isset($_COOKIE['fecha_entrada']) ? $_COOKIE['fecha_entrada'] : null;
    $fecha_salida = isset($_COOKIE['fecha_salida']) ? $_COOKIE['fecha_salida'] : null;

    // Mostrar los datos de las cookies
    echo "ID del cliente: " . $id_cliente . "<br>";
    echo "ID de la habitación: " . $id_habitacion . "<br>";
    echo "Fecha de entrada: " . $fecha_entrada . "<br>";
    echo "Fecha de salida: " . $fecha_salida . "<br>";

    // Si los datos de las cookies son válidos, procesar la reserva
    if ($id_cliente && $id_habitacion && $fecha_entrada && $fecha_salida) {
        // Generar el ID de pago
        $id_pago = generarIdPago($pdo);

        // Generar el número de reserva
        $numero_reserva = uniqid();

        // Insertar la reserva en la base de datos
        $q_insert = $pdo->prepare('INSERT INTO reservas_hotel (id_cliente, id_habitacion, fecha_entrada, fecha_salida, fecha_reserva, id_pago, numero_reserva) VALUES (?, ?, ?, ?, ?, ?, ?)');
        
        if ($q_insert) {
            $q_insert->execute([$id_cliente, $id_habitacion, $fecha_entrada, $fecha_salida, date('Y-m-d'), $id_pago, $numero_reserva]);
            if ($q_insert->rowCount() > 0) {
                echo "La reserva se ha insertado correctamente.";
            } else {
                echo "Error: No se pudo insertar la reserva en la base de datos.";
            }
        } else {
            echo "Error: No se pudo preparar la consulta para insertar la reserva.";
        }
    } else {
        echo "Error: Algunos datos de reserva son inválidos.";
    }
} else {
    echo "Error: Las cookies necesarias no están configuradas.";
}

// Función para generar un ID de pago único
function generarIdPago($pdo) {
    $id_pago = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 12);

    $q_check_id_pago = $pdo->prepare('SELECT COUNT(*) AS total FROM reservas_hotel WHERE id_pago = ?');
    $q_check_id_pago->execute([$id_pago]);
    $result = $q_check_id_pago->fetch(PDO::FETCH_ASSOC);

    if ($result['total'] > 0) {
        return generarIdPago($pdo);
    }

    return $id_pago;
}

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
