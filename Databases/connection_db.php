<?php

/*
$host = 'localhost';
$user = 'root';
$pass = '';



if (!$pdo) {
    echo "Error connecting";
} else{
    echo "Connection exists in database";
}


*/
// Connección de la base de datos
//$connect = mysqli_connect($host, $user, $pass, $nombreDB);
//$pdo = new PDO('mysql:host = localhost; dbname = hotel_42', 'root', '');

try {
    $pdo = new PDO('mysql:host=localhost;dbname=hotel_42', 'root', '');
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>

