<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');

?>

<style>

h2{
      color: #000000;
       text-align: center; 
       margin-top: 25px;
    }

    label{
    color: #040212;
    font-size: 18px;
    margin: 5px;
    padding: 5px;
  }

  .myFormRestaurante{
    border: 2px solid wheat;
    border-radius: 5px;
    width: 500px;
    height: 250px;
    background-color: wheat;
    margin-bottom: 15px;
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
      <form class="myFormRestaurante" action="" method="POST">
        <h2 >Formulario buscar Restaurante</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputRestaurante">Id Restaurante</label>
              <input type="number" class="form-control" name="id_Restaurante" placeholder="Id Restaurante">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="buscar" id="btn" class="btn  mt-2 mb-3">Buscar</button>
          </div>
        </div>
      </form>
      
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
