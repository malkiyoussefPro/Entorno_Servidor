<<<<<<< HEAD

<?php

=======
<?php
            
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<<<<<<< HEAD
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_select_call.php" method="POST">
        <h2>Formulario buscar Usuario</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsuario">Id Usuario</label>
                    <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario">
                </div>
            </div>
            <div class="d-flex justify-content-center m-2">
                <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
            </div>
        </div>
    </form>
</div>
    
=======


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormcomentario " action="/student042/dwes/Comentarios/action/db_comentario_select_call.php" method="POST">

        <h2>Formulario Buscar Comentario</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
          <div class="form-group col-md-6 ">
              <label for="inputcomentario">Id Comentario</label>
              <input type="number" class="form-control" name="id_comentario" placeholder="Id comentario">
            </div>
          </div>
          <div>
            <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
          </div>
        </div>
    </form>
 
  </div>

>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
