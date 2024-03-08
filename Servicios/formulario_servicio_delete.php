<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

$idservicio = isset($_GET['id_servicio']) ? $_GET['id_servicio'] : null; // Obtener el id_servicio de la URL

if (!$idservicio) {
    echo "ID de servicio no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM servicios_hotel WHERE id_servicio = ?');
$q_select->execute([$idservicio]);
$servicio = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$servicio) {
    echo "servicio no encontrado.";
    exit;
}
?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormservicio" action="/student042/dwes/servicios/action/db_servicio_delete_call.php" method="POST" onsubmit="return confirmarEliminar();">
        <h2>Formulario suprimir servicio</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputservicio" style="color: #040212">Id servicio</label>
                    <input type="number" name="id_servicio" class="form-control" id="inputservicio" placeholder="Id servicio" value="<?php echo $servicio['id_servicio']; ?>">
                </div>
            </div>
            <div class="d-flex justify-content-center m-2">
                <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
                <!-- Botón para cancelar y redirigir a operaciones.php -->
                <button type="button" onclick="cancelarEliminacion();" class="btn btn-danger mt-2 mb-3">Cancelar</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>

<script>
    // Función para mostrar una ventana de confirmación antes de enviar el formulario de eliminación
    function confirmarEliminar() {
        return confirm("¿Estás seguro de que deseas eliminar este servicio?");
    }

    // Función para redirigir a operaciones.php si se cancela la eliminación
    function cancelarEliminacion() {
        window.location.href = "/student042/dwes/servicios/operaciones.php";
    }
</script>
