<?php

  ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

if (isset($_POST['insertar'])) {
    $id_Cliente = $_POST['id_cliente'];
    $id_habitacion = $_POST['id_habitacion'];
    $fecha_Entrada = $_POST['fecha_Entrada'];
    $fecha_Salida = $_POST['fecha_Salida'];
    $fecha_Reserva = $_POST['fecha_Reserva'];
    $id_pago = $_POST['id_pago'];
    $numero_reserva = $_POST['numero_reserva'];

    if (!empty($id_Cliente) && !empty($id_habitacion) &&
        !empty($fecha_Entrada) && !empty($fecha_Salida) && !empty($fecha_Reserva) && !empty($id_pago) && !empty($numero_reserva)) {

        $q_insert = $pdo->prepare('INSERT INTO reservas_hotel VALUES  (NULL, ?, ?, ?, ?, ?, ?, ?)');
        $q_insert->execute([$id_Cliente, $id_habitacion, $fecha_Entrada, $fecha_Salida, $fecha_Reserva, $id_pago, $numero_reserva]);

        ?>
        <div class="alert alert-success" role="alert">
            Reserva añadida con éxito.
        </div>
        <?php
         header('Location:/student042/dwes/html/dashboard.php');
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Todos los campos son obligatorios.
        </div>
        <?php
    }
}

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
