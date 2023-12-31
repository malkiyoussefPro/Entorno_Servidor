
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php
  if(isset($_POST['iniciar'])){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    if(!empty($nombre) && !empty($password)){

      $q_select = $pdo -> prepare('SELECT * FROM usuario
                                 where nombre_usuario = ? AND contraseña_usuario = ?');
      $q_select -> execute([$nombre,$password]);
      $var = $q_select -> fetch();

       session_start();
        $_SESSION['name'] = $nombre;
        $_SESSION['password'] = $password;
        $_SESSION['role_usuario'] = $var['role_usuario'];

       if($var['role_usuario']=='admin'){
          header('Location:/student042/dwes/html/dashboard.php');
       }else{
        header('Location:/student042/dwes/index.php');
        
       }
           
      ?>
      
    <?php

        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                    Todos los campos son obligatorios !
            </div>
            <?php
            }
        }
  
?>