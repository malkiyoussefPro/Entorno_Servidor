<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');

?>

<style>
  h2{
    color: #040212;
     text-align: center;
     
  }
  label{
    color: #040212;
    font-size: 18px;
    margin: 5px;
    padding: 5px;
  }

  form{
    border: 2px solid wheat;
    border-radius: 10px;
    width: 500px;
    height: 250px;
    background-color: wheat;
    margin: 15px;
    padding: 15px;
  }
  .form-control{
    width: 350px;
    margin: 5px;
    padding: 5px;
  }
  #btn{
     background-color: #000000;
      border-color: white;
      color: white; 
      
    }
    #btn:hover{
      background-color: gray;
      color: #000000;
  
  }
</style>
<div class="d-flex justify-content-center">
    <form class="myFormUsuario" action="" method="POST">

    <h2>Formulario buscar Usuario</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputUsuario">Id Usuario</label>
          <input type="number" name="id_Usuario" class="form-control" id="inputUsuario" placeholder="Id Usuario">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
      </div>
    </div>
  </form>
</div>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  
?>