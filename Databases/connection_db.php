<?php


$host = 'localhost';
$dbname = 'hotel_42';
$user = 'root';
$pass = '';


$pdo = new PDO('mysql:host = localhost; dbname = hotel_42', 'root', '');


if (!$pdo) {
    echo "Error connecting";
} else{
    echo "Connection exists in database";
}

if (!$pdo) {
    echo "Error connecting";
} else{
    echo "Connection exists in database";
}



// Connección de la base de datos
//$connect = mysqli_connect($host, $user, $pass, $nombreDB);
<<<<<<< HEAD
//$pdo = new PDO('mysql:host = localhost; dbname = hotel_42', 'root', '');
//$pdo = new PDO('mysql:host=remotehost.es;dbname=dwesdatabase', 'dwess1234', 'test1234.');
=======
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503

/*
try {
    
    $pdo = new PDO('mysql:host=localhost; dbname=hotel_42', 'root', '');
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

<<<<<<< HEAD

=======
*/
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
?>

