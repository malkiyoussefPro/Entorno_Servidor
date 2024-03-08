<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

// Obtener el ID del servicio de la URL o del formulario POST
$idServicio = isset($_GET['id_servicio']) ? $_GET['id_servicio'] : (isset($_POST['id_servicio']) ? $_POST['id_servicio'] : null);

if (!$idServicio) {
    echo "ID de servicio no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM servicios_hotel WHERE id_servicio = ?');
$q_select->execute([$idServicio]);
$servicio = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$servicio) {
    echo "Servicio no encontrado.";
    exit;
}
?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormservicio" action="/student042/dwes/Servicios/action/db_servicio_delete_call.php" method="POST">
        <h2>Formulario suprimir Servicio</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputServicio">Id Servicio</label>
                    <input type="number" class="form-control" name="id_servicio" placeholder="Id Servicio" value="<?php echo $idServicio; ?>">
                </div>
            </div>
            <div>
                <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
