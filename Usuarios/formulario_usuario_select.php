
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

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
    <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_select_call.php" method="POST">
        <h2>Formulario buscar Usuario</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsuario">Id Usuario</label>
                    <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario" value="<?php echo $usuario['id_usuario']; ?>">
                </div>
            </div>
            <div class="d-flex justify-content-center m-2">
                <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
            </div>
        </div>
    </form>
</div>
    
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
