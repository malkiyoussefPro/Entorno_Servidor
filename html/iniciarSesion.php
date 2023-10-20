<?php

  include('header.php');

?>

<?php

$email = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($mysql, $_POST['email']);
    $password = mysqli_real_escape_string($mysql, $_POST['password']);

    if(empty($email)){
       array_push($errors, 'email vacia');
    }
 
     if(empty($password)){
        array_push($errors, 'contraseña vacia');
    }

    
        if(!count($errors)){
            // Imprime el email por consola
                echo $email;

           // Ejecuta la consulta SQL
                $usuario = $mysql -> query ("SELECT id_usuario, nombre_usuario, email_usuario, contraseña_usuario, role_usuario, fecha_creacion_cuenta FROM usuario WHERE email_usuario = '$email' limit 1");
          
            if($users -> num_rows){
                array_push($errors, " El email no existe");
            }else{
                $usuarioExiste = $usuario -> fetch_assoc();

                if (password_verify($password, $usuarioExiste['passwordUsers'])){
                    session_start();
                    $_SESSION['logg_in'] = true;
                    $_SESSION['nombre_usuario'] = $usuarioExiste['nameUsers'];
                    $_SESSION['role_usuario'] = $usuarioExiste['roleUsers'];
                    $_SESSION['success_msg'] = "Bienvenido ".$name;
                    header('Location: index.php');
                }
            }  
        }
    
    }
    ?>
   <?php

        include 'error.php';
    ?>


<div class="container mt-5">
  <h2 style="color: #000000; text-align: center; margin-top: 25px;">Iniciar Sesion</h2>
  <form class="myFormIniciarSesion">
    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputEmail4" style ="color: #040212">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputPassword4" style="color: #040212" >Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div style="display: flex; justify-content: center;">
        <button type="submit" class="btn btn-primary mt-2 mb-3" style="background-color: #000000; border-color: #feffe2; justify-content: center;color: #505050 ;  font-weight: bold;">Iniciar Sesion</button>
      </div>
    </div>
  </form>
</div>

<?php 

  include('footer.php'); 

?>

