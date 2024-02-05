
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

    if(isset($_POST['insertar'])){
     
      $nombre_Cliente = $_SESSION['nombre_Cliente'];
      $estado_Comentario = $_POST['estado_comentario'];
      $fecha = $_POST['fecha_creacion_comentario'];
      $comentario = $_POST['comentarios'];
      $score = $_POST['score'];
      if(!empty($nombre_Cliente) && !empty($estado_Comentario) && !empty($fecha) && !empty($comentario) && !empty($score)){

        $q_insert = $pdo -> prepare('INSERT INTO comentarios_clientes VALUES (null, ?, ?, ?, ?, ?)');

          $q_insert -> execute([ $nombre_Cliente, $estado_Comentario, $fecha, $comentario, $score]);
          ?>
          <div class="alert alert-success" role="alert">
             Comentario añadido con  excitoso!
          </div>
        <?php
          header('Location:/student042/dwes/html/dashboard.php');
      }else{
        ?>
         <div class="alert alert-danger" role="alert">
               Todos los campos son obligatorios !
          </div>
        <?php
    }
       }

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>