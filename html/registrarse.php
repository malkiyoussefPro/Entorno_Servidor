
<?php

  session_start();
  
?>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

    include'error.php';

?>
<style>

  h2{
    color: #040212;
     text-align: center;
      margin-top: 25px;
  }
  label{
    color: #040212;
    font-size: 18px;
    font-weight: bold;
  }

  form{
    margin-top: 5px;
    border: 2px solid white;
    border-radius: 5px;
    width: 550px;
    height: 450px;
    background-color: wheat;
  }
  input{
    width: 90px;
  }
  .btn{
     background-color: #000000;
      border-color: white;
      color: white; 
      font-weight: bold;
    }
    .btn:hover{
      background-color: goldenrod;
  }
 

</style>
    <center>
      <form action="" method="POST">
        <div class="container mt-5">
        
          <h2>FORMULARIO DE REGISTRO</h2>
          
            <div class="container">
              <div class="form-group m-2">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group m-2">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
              <div class="form-group m-2">
                <label for="confirmacion" >confirmaión Password</label>
                <input type="password" name="confirmation" class="form-control" id="confirmacion" placeholder="confirmaión Password">
              </div>
              <div>
                <button type="submit" class="btn  mt-2">Registrarse</button>
              </div>
            </div>
        </div>
      </form>
    </center>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
