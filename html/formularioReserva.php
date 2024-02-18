<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
 
?>

<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

// Verificar si el cliente ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Redirigir al cliente a la página de inicio de sesión si no ha iniciado sesión
    header("Location: /student042/dwes/html/header.php");
    exit; // Detener la ejecución del script
}

// Obtener los datos del formulario de disponibilidad almacenados en cookies
$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : null;
$startDate = isset($_COOKIE['startDate']) ? $_COOKIE['startDate'] : '';
$endDate = isset($_COOKIE['endDate']) ? $_COOKIE['endDate'] : '';

?>
<form class="myFormreserva" action="/student042/dwes/Reservas/action/db_reserva_insert_call.php" method="POST">
    <h2>Formulario de Reserva</h2>
    <div class="container mt-2 ms-2">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="startDate">Fecha de Entrada</label>
                <input id="startDate" name="fecha_entrada" class="form-control" type="date" required />
            </div>
            <div class="form-group col-md-6">
                <label for="endDate">Fecha de Salida</label>
                <input id="endDate" name="fecha_salida" class="form-control" type="date" required />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPago">Método de Pago</label>
                <select name="tipo_pago" id="inputPago" class="form-control" required>
                    <option value="mastercard">Mastercard</option>
                    <option value="visa">Visa</option>
                    <option value="google_Pay">Google Pay</option>
                    <option value="apple_Pay">Apple Pay</option>
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn mt-2 mb-3">Reservar</button>
        </div>
    </div>
</form>
           
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>