
<?php

  include('header.php');

?>

  <?php
 ?>
    <?php

    include'error.php';

    ?>
    <center>
      <form class="formRegister" action="" method="POST">
        <div class="container mt-5">
        
          <h2 style="color: #000000; text-align: center; margin-top: 25px;">FORMULARIO DE REGISTRO</h2>
          
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
                <button type="submit" class="btn btn-primary mt-2" style="background-color: #000000; border-color: #feffe2; color: #505050; font-weight: bold;">Registrarse</button>
              </div>
            </div>
        </div>
      </form>
    </center>
  <?php

  include('footer.php');

?>
