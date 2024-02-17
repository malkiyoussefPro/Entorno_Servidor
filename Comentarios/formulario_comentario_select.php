


<?php
            

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormComentario" action="/student042/dwes/Comentarios/action/db_comentario_select_call.php" method="POST">
        <h2>Formulario buscar Comentario</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputComentario">Id Comentario</label>
                    <input type="number" name="id_Comentario" class="form-control" id="inputComentario" placeholder="Id Comentario">
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



