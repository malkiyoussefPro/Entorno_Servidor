<<<<<<< HEAD
<?php

  ob_start();
  
?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
=======

>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<<<<<<< HEAD

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_delete_call.php" method="POST">

    <h2>Formulario suprimir Usuario</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputUsuario" style ="color: #040212">Id Usuario</label>
          <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
      </div>
    </div>
  </form>
</div>
=======
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormcomentario" action="/student042/dwes/Comentario/action/db_comentario_delete_call.php" method="POST">

        <h2>Formulario suprimir Comentario</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
          <div class="form-group col-md-6 ">
              <label for="inputcomentario">Id Comentario</label>
              <input type="number" class="form-control" name="id_comentario" placeholder="Id comentario">
            </div>
          </div>
          <div>
            <button type="submit" name="suprimir" id="btn" class="btn mt-2 mb-3">Suprimir</button>
          </div>
        </div>
    </form>
 
  </div>
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>