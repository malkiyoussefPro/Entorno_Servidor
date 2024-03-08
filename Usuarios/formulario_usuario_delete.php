<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

$idUsuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : null; // Obtener el id_usuario de la URL

if (!$idUsuario) {
    echo "ID de usuario no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
$q_select->execute([$idUsuario]);
$usuario = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}
?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_delete_call.php" method="POST" onsubmit="return confirmarEliminar();">
        <h2>Formulario suprimir Usuario</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsuario" style="color: #040212">Id Usuario</label>
                    <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario" value="<?php echo $usuario['id_usuario']; ?>">
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
        return confirm("¿Estás seguro de que deseas eliminar este usuario?");
    }

    // Función para redirigir a operaciones.php si se cancela la eliminación
    function cancelarEliminacion() {
        window.location.href = "/student042/dwes/Usuarios/operaciones.php";
    }
</script>
