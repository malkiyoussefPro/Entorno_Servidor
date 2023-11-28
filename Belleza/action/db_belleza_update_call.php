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
    font-size: 15px;
    margin: 5px;
    padding: 5px;
  }
 
  form{
    border: 2px solid #040212;
    border-radius: 10px;
    width: 500px;
    height: auto;
    background-color: lightgrey;
    margin: 15px;
    padding: 15px;
  }
  .form-control{
    width: auto;
    margin: 5px;
    padding: 5px;
    border: 1px solid #040212;
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
      <form class="myFormBelleza" action="" method="POST">
        <h2 >Formulario actualizar Belleza</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputBelleza">Id Belleza</label>
              <input type="number" class="form-control" name="id_Belleza" placeholder="Id Belleza">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="actualizar" id="btn" class="btn  mt-2 mb-3">Actualizar</button>
          </div>
        </div>
      </form>
      
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

