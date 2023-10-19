
<?php

  include('header.php');

?>

<?php

$email = $name = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($mysql, $_POST['email']);
    $name = mysqli_real_escape_string($mysql, $_POST['name']);
    $password = mysqli_real_escape_string($mysql, $_POST['password']);
    $confirmation_password = mysqli_real_escape_string($mysql, $_POST['confirmacion']);
    if(empty($email)){
       array_push($errors, 'email esta vacio');
    }
    if(empty($name)){
        array_push($errors, 'nombre esta vacio');
     }
     if(empty($password)){
        array_push($errors, 'contraseña esta vacio');
    }
    if(empty($confirmation_password)){
        array_push($errors, 'confirmación email esta vacia');
    }
    
     if($password != $confirmation_password){
         array_push($errors, 'las contraseñas no coinceden');
    }
    
    if(!count($errors)){
      $usuario = $mysql -> query ("SELECT id_usuario  email_usuario FROM usuario WHERE email_usuario = '$email' limit 1");

        if($usuario -> num_rows){
            array_push($errors, " El email existe");
        }  
    }
    if(!count($errors)){
       
            $password = password_hash($password, PASSWORD_DEFAULT);// para guardar en formato hashcode
            $insertUsers = $mysql -> query ("INSERT INTO usuario
            (nombre_usuario, email_usuario, contraseña_usuario) 
            VALUES('$name', '$email', '$password')");
            

            $_SESSION['logg_in'] = true;
            $_SESSION['user_id'] = $mysql -> id_usuario ;
            $_SESSION['user_name'] = $name;
            $_SESSION['success_msg'] = "Gracias por registrarte ".$name;
            header('Location: index.php');
        }
    
    }
    ?>
    <?php

    include'error.php';

    ?>
  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">FORMULARIO DE REGISTRO</h2>
    <form class="myForm">
      <div class="container">
        <div class="form-group">
          <label for="inputEmail4" style="color: #040212">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="inputPassword4" style="color: #040212">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confirmacion" style="color: #040212">confirmaión Password</label>
          <input type="confirmaión_Password" class="form-control" id="confirmacion" placeholder="confirmaión Password">
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" class="btn btn-primary mt-2" style="background-color: #000000; border-color: #f98c3d; color: #505050; font-weight: bold;">Registrarse</button>
        </div>
      </div>
    </form>
  </div>

  <?php

  include('footer.php');

?>
