<?php

// Conexión a la base de datos
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_POST['nombre_personal'])){
    $nombre_personal = $_POST['nombre_personal'];

    $sql = "SELECT * FROM datos_personal WHERE nombre_personal LIKE '%$nombre_personal%'";
    $result = $pdo->query($sql);

    if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo "Nombre del personal: " . $row["nombre_personal"]. "<br>";
            
        }
    } else {
        echo "No se encontraron personals con ese nombre.";
    }
} else {
    echo "No se proporcionó un nombre del personal.";
}

// Cerrar conexión
$pdo = null;

?>
