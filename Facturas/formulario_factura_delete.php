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

  .myFormfactura{
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
      <form class="myFormfactura" action="/student042/dwes/Facturas/action/db_factura_delete_call.php" method="POST">
        <h2 >Formulario suprimir factura</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputfactura">Id factura</label>
              <input type="number" class="form-control" name="id_factura" placeholder="Id factura">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="suprimir" id="btn" class="btn  mt-2 mb-3">Suprimir</button>
          </div>
        </div>
      </form>
      
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>