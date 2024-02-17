<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormComentario" action="/student042/dwes/Comentarios/action/db_comentario_update_call.php" method="POST">
        <h2>Formulario Actualizar Estado de Comentario</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputComentario">ID Comentario</label>
                    <input type="number" name="id_comentario" class="form-control" id="inputComentario" placeholder="ID Comentario">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEstado">Nuevo Estado</label>
                    <select class="form-control" name="nuevo_estado" id="inputEstado">
                        <option value="revisado">Revisado</option>
                        <option value="bloqueado">Bloqueado</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center m-2">
                <button type="submit" name="actualizar" id="btn" class="btn mt-2 mb-3">Actualizar Estado</button>
            </div>
        </div>
    </form>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
