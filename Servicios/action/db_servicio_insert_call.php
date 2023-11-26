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
    font-weight: bold;
  }

  .myFormServicio{
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
      font-weight: bold;
      margin-top: 15px;
    }
    #btn:hover{
      background-color: goldenrod;
  }
</style>

  <div class="container mt-5">
    <center>
      <form class="myFormServicio" action="" method="POST">
      <h2>Formulario insertar Servicio</h2>
      <div class="container mt-2 ms-2" >
        <div class="form-row" >
        <div class="form-group col-md-6 ">
            <label for="inputServicio">Id Servicio</label>
            <input type="number" class="form-control" name="id_Servicio" placeholder="Id Servicio">
          </div>
        </div>
        <div>
          <button type="submit" name="insertar" id="btn" class="btn mt-2 mb-3">Insertar</button>
        </div>
      </div>
      </form>
    </center>
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
