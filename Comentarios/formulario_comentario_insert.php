
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">


<div class="d-flex justify-content-center">

  <form class="myFormComentario" action="/student042/dwes/Comentarios/action/db_comentario_insert_call.php" method="POST">

      <h2>Formulario insertar Comentario</h2>
      <div class="container">
           
            <div class="form-group col-md-4">
                <label for="inputState">Estado Comentario</label>
                <select id="inputState" class="form-control" name="estado_comentario">
                  <option selected>Seleccionar...</option>
                  <option>Pendiente</option>
                  <option>Revisado</option>
                  <option>Bloqueado</option>
                </select>
            </div>
            <div class="form-group">
              <label for="inputFecha">Fecha creacion comentario</label>
              <input type="date" name="fecha_creacion_comentario" class="form-control" id="inputFecha" placeholder="fecha">
            </div>
            <div class="form-group">
              <label for="inputComentario">Comentarios</label>
              <input type="text" name="comentarios" class="form-control" id="inputComentario" placeholder="comentario">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Score</label>
                <select id="inputState" class="form-control" name="score">
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
      </div>
    </form>

    <script>
    function mostrarEstrellas() {
        var score = document.getElementById("inputState").value;
        var estrellasContainer = document.getElementById("estrellasContainer");

        // Limpiar contenedor
        estrellasContainer.innerHTML = "";

        // Mostrar estrellas según la puntuación
        for (var i = 0; i < score; i++) {
            var estrella = document.createElement("span");
            estrella.innerHTML = "&#9733;"; // Código de estrella en HTML
            estrella.className = "star";
            estrellasContainer.appendChild(estrella);
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        mostrarEstrellas();
    });
</script>
    
  </div>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>