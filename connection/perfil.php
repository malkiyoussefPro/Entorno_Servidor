
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php
 
 session_start();

?>

<?php


<<<<<<< HEAD
      $q_select = $pdo -> prepare('SELECT * FROM usuario
                                 where nombre_usuario = ? AND contrasena_usuario = ?');
      $q_select -> execute([$nombre,$password]);
      $var = $q_select -> fetch();
=======
if (isset($_POST['iniciar'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $password = htmlspecialchars($_POST['password']);
>>>>>>> 9fb999558590860b0dd24bbebc0605497cb7a503

    if (!empty($nombre) && !empty($password)) {
        $q_select = $pdo->prepare('SELECT * FROM usuario WHERE nombre_usuario = ? AND contrasena_usuario = ?');
        $q_select->execute([$nombre, $password]);
        $var = $q_select->fetch();

            $_SESSION['name'] = $nombre;
            $_SESSION['password'] = $password;
            $_SESSION['role_usuario'] = $var['role_usuario'];

            if ($var['role_usuario'] == 'admin') {
                header('Location:/student042/dwes/html/dashboard.php');
               
            } else {
                header('Location:/student042/dwes/index.php');
                
            }
     
    } else {
        echo '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    }
}

?>