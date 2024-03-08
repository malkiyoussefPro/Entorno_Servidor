<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

if (isset($_POST['suprimir'])) {
    $idServicio = $_POST['id_servicio'];

    if (empty($idServicio)) {
        echo "El campo ID Servicio es obligatorio.";
        exit;
    }
    // Realiza la eliminación del servicio
    $q_delete = $pdo->prepare('DELETE FROM servicios_hotel WHERE id_servicio = ?');
    $q_delete->execute([$idServicio]);

    // Verifica si se eliminó algún registro
    if ($q_delete->rowCount() > 0) {
        echo "Servicio eliminado con éxito.";
    } else {
        echo "No se encontró ningún servicio con el ID proporcionado o no se realizó la eliminación.";
    }
}

// Redirige a dashboard.php
header('Location: /student042/dwes/html/dashboard.php');
exit;
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>