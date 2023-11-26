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
    height: 910px;
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

    <form class="myFormpersonal" action="" method="POST">
      <h2>Formulario insertar personal</h2>
      <div class="container">
        
        <div class="form-group">
          <label for="inputpersonal">Nombre personal</label>
          <input type="text" name="nombre_personal" class="form-control" id="inputpersonal" placeholder="nombre">
        </div>

        <div class="form-group">
          <label for="inputFecha">Fecha nacimiento</label>
          <input type="date" name="fecha_personal" class="form-control" id="inputFecha" placeholder="fecha">
        </div>

        <div class="form-group">
          <label for="inputTelefono">telefono</label>
          <input type="text" name="telefono_personal" class="form-control" id="inputTelefono" placeholder="fecha">
        </div>


        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email_personal" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="form-group">
          <label for="inputAddress">Dirección</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip">Código Postal</label>
            <input type="text" name="codigoPostal_personal" class="form-control" id="inputZip" placeholder="Código Postal">
          </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Ciudad</label>
            <input type="text" name="ciudad_personal" class="form-control" id="inputCity" placeholder="Mao, Islas Baleares">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">País</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Marruecos</option>
              <option>España</option>
              <option>Irak</option>
              <option>Palestina</option>
              <option>Arabia Saudia</option>
              <option>Senegal</option>
              <option>Andonesia</option>
              <option>Malisia</option>
            </select>
          </div>
       
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
    
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>