<?php

/*
$host = 'localhost';
$user = 'root';
$pass = '';
$nombreDB = 'hotel_42';

*/
// Connección de la base de datos
//$connect = mysqli_connect($host, $user, $pass, $nombreDB);
$pdo = new PDO('mysql:host = localhost; dbname = hotel_42', 'root', '');
//Verificacion de la base de datos
/*
if (!$pdo) {
    echo "Error connecting";
} else{
    echo "Connection exists in database";
}
*/
?>

