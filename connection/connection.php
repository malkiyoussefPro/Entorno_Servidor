<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$nombreDB = 'hotel_42';

// Connección de la base de datos
$connect = mysqli_connect($host, $user, $pass, $nombreDB);

//Verificacion de la base de datos
if (!$connect) {
    echo "Error connecting";
} 
// Consulta de la table clientes en la base de datos
 $sql = 'SELECT * FROM clientes';

 $resltado = mysqli_query($connect, $sql);

 $clientes = mysqli_fetch_all($resltado, MYSQLI_ASSOC);

 print_r($clientes);


?>

