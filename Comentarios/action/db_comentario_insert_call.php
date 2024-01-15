<?php
ob_start();
?>

<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>


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
