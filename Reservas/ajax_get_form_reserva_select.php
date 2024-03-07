
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

// Verificar conexión
if ($pdo->connect_error) {
    die("Error de conexión: " . $pdo->connect_error);
}

// Obtener el número de reserva enviado por AJAX
if(isset($_POST['numero_reserva'])){
    $numero_reserva = $_POST['numero_reserva'];

    // Realizar la búsqueda en la base de datos
    // (Aquí deberías tener tu lógica de búsqueda específica)

    // Por ejemplo, una consulta SQL para buscar la reserva
    $sql = "SELECT * FROM reservas WHERE numero_reserva  = '$numero_reserva'";
    $result = $pdo->query($sql);

    // Procesar el resultado
    if ($result->num_rows > 0) {
        // Si se encontraron resultados, puedes mostrarlos
        while($row = $result->fetch_assoc()) {
            echo "Número de reserva: " . $row["numero_reserva"]. "<br>";
            // Aquí puedes mostrar más información de la reserva si lo deseas
        }
    } else {
        // Si no se encontraron resultados
        echo "No se encontraron reservas con ese número.";
    }
} else {
    // Si no se envió el número de reserva
    echo "No se proporcionó un número de reserva.";
}

// Cerrar conexión
$pdo->close();
?>



    
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
