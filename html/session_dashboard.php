

<?php

  session_start();
  
?>
<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

  include ($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/error.php');

?>
<link rel="stylesheet" href="/student042/dwes/css/iniciar_session.css">

  <div class="d-flex justify-content-center m-5">
    
    <form action="/student042/dwes/connection/db_login.php" method="POST">
       
    <h2>Iniciar Sesion</h2>
    <div class="container m-2" >
          <div class="form-row" >
            <div class="form-group m-2">
              <label for="inputEmail4">Email</label>
              <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group m-2">
              <label for="inputPassword4" >Password</label>
              <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
          </div>
          <div>
            <button type="submit" name="iniciar" class="btn m-2">Iniciar Sesion </button> 
              <span>
                  <a href="/student042/dwes/Personal/action/db_personal_insert_call.php">Registrarse Aqui</a>
              </span>
          </div>
        </div>
      </form>
  </div>

  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
    
  ?>

