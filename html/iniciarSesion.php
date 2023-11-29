
<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

  include ($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/error.php');

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
  span{
    margin-left: 5px;
    padding: 5px;
  }
  a{
    text-decoration: none;
    color:rgb(188, 163, 41);
    font-size: 18px;
    font-weight: bold;
  }
  form{
    border: 2px solid wheat;
    border-radius: 5px;
    width: 450px;
    height: 300px;
    background-color: wheat;
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


  <div class="container mt-5">
    <center>
    
    <form action="/student042/dwes/db_login.php" method="POST">
       
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
                  <a href="/student042/dwes/html/registrarse.php">Registrarse Aqui</a>
              </span>
          </div>
        </div>
      </form>
    </center>
  </div>

  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
    
  ?>

