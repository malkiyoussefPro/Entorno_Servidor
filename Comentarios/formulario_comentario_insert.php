<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    // Si el usuario es un admin, mostrar el select normalmente
    $disabled = '';
} else {
    // Si el usuario no es un admin, deshabilitar el select
    $disabled = 'disabled';
}
?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<div class="d-flex justify-content-center">
    <form class="myFormComentario" action="/student042/dwes/Comentarios/action/db_comentario_insert_call.php" method="POST">
        <h2>Formulario insertar Comentario</h2>
        <div class="container">
            <div class="form-group col-md-4">
                <label for="inputState">Estado Comentario</label>
                <select id="inputState" class="form-control" name="estado_comentario" <?php echo $disabled; ?>>
                    <option selected>Seleccionar...</option>
                    <option>Pendiente</option>
                    <option>Revisado</option>
                    <option>Bloqueado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputFecha">Fecha creación comentario</label>
                <input type="date" name="fecha_creacion_comentario" class="form-control" id="inputFecha" placeholder="fecha">
            </div>
            <div class="form-group">
                <label for="inputComentario">Comentarios</label>
                <input type="text" name="comentarios" class="form-control" id="inputComentario" placeholder="comentario">
            </div>
            <div class="form-group col-md-4">
                <label for="inputScore">Score</label>
                <select id="inputScore" class="form-control" name="score">
                    <option selected>Seleccionar...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
    </form>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
