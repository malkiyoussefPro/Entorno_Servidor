
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

  ?>


<link rel="stylesheet" href="/student042/dwes/css/comentarios.css">
<div class="d-flex justify-content-center">

  <form class="myFormUsuario"  method="POST">

      <h2>Formulario Insertar Comentarios</h2>
        <div class="container">

        <div>
          <label for="inputUsuario">Id Cliente</label>
          <input type="number" name="id_cliente" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>
        <div>
          <label for="inputUsuario">Numero Reserva</label>
          <input type="number" name="numero_reserva" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Comentarios</label>
            <select id="inputState" class="form-control" name="comentarios">
              <option selected>Seleccionar...</option>
              <option>Muy contento, lo recomendo</option>
              <option>Satisfecho </option>
              <option>Experiencia normal</option>
              <option>Menos satisfecho</option>
              <option>Mala experiencia</option>
            </select>
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
          <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar Comentario</button>
        </div>
        </form>
</div>
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

if(isset($_POST['insertar'])){

  $id_cliente = $_POST['id_cliente'];
  $numero_reserva = $_POST['numero_reserva'];
  $comentarios = $_POST['comentarios'];
  $score = $_POST['score'];

  if( !empty($id_cliente) && !empty($numero_reserva) && !empty($comentarios) && !empty($score)){
   
      $q_insert = $pdo -> prepare('INSERT INTO comentarios_clientes VALUES (null, ?, ?, ?, ?)');
      $q_insert -> execute([ $id_cliente, $numero_reserva, $comentarios,$score]);
      ?>
      <div class="alert alert-success" role="alert">
         comentario añadido con excito!
      </div>
    <?php
      header('Location:/student042/dwes/html/dashboard.php');
    }
    
  }else{
    ?>
     <div class="alert alert-danger" role="alert">
           Todos los campos son obligatorios !
      </div>
    <?php
}
   

?>



<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>