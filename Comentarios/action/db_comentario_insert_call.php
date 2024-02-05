<<<<<<< HEAD

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
=======
<?php
ob_start();
?>

>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<<<<<<< HEAD
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
=======


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php

    if(isset($_POST['insertar'])){

      $estado_comentario = $_POST['estado_comentario'];
      $id_cliente = $_POST['id_cliente'];
      $numero_reserva = $_POST['numero_reserva'];
      $fecha_creacion_comentario = $_POST['fecha_creacion'];
      $comentarios = $_POST['comentarios'];
      $score = $_POST['score'];

      if(!empty($estado_comentario) && !empty($id_cliente) && !empty($numero_reserva) && !empty($fecha_creacion_comentario) && !empty($comentarios) && !empty($score)){
       
          $q_insert = $pdo -> prepare('INSERT INTO comentarios_clientes VALUES (null, ?, ?, ?, ?, ?)');
          $q_insert -> execute([$estado_comentario, $id_cliente, $numero_reserva, $fecha_creacion_comentario, $comentarios,$score]);
          ?>
          <div class="alert alert-success" role="alert">
             comentario añadido con excito!
          </div>
        <?php
          header('Location:/student042/dwes/html/dashboard.php');
        }
        
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
      }else{
        ?>
         <div class="alert alert-danger" role="alert">
               Todos los campos son obligatorios !
          </div>
        <?php
    }
<<<<<<< HEAD
       }
=======
       
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503
