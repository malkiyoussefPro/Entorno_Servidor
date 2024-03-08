<?php

// Conexión a la base de datos
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_POST['nombre_usuario'])){
    $nombre_usuario = $_POST['nombre_usuario'];

    $sql = "SELECT * FROM usuario WHERE nombre_usuario LIKE '%$nombre_usuario%'";
    $result = $pdo->query($sql);

    if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo "Nombre del usuario: " . $row["nombre_usuario"]. "<br>";
            
        }
    } else {
        echo "No se encontraron usuarios con ese nombre.";
    }
} else {
    echo "No se proporcionó un nombre del usuario.";
}

// Cerrar conexión
$pdo = null;

?>
