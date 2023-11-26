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
    height: 480px;
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
    <form class="myFormServicio" action="/student042/dwes/Servicios/action/db_servicio_insert_call.php" method="POST">
      <h2>Formulario actualizar Servicio</h2>
      <div class="container mt-2 ms-2" >
        <div class="form-row" >
          <div class="form-group col-md-6 ">
              <label for="inputServicio">Description</label>
              <input type="text" class="form-control" name="id_Servicio" placeholder="Id Servicio">
          </div>
          <div class="form-group col-md-4">
              <label for="inputHabitacion" style="color: #040212">Departamento</label>
              <select name="departamento_Servicio" id="inputHabitacion" class="form-control">
                <option selected>Seleccionar...</option>
                <option>Restaurante</option>
                <option>Belleza</option>
                <option>Eventos</option>
                </option>
              </select>
            </div>
          <div class="mb-3">
          <label for="formFile" class="form-label">Imagen Habitación</label>
          <input class="form-control" name="imagen_Servicio" type="file" id="formFile">
          </div>
          <div class="form-group col-md-6 ">
              <label for="inputServicio">Precio</label>
              <input type="number" class="form-control" name="precio_Servicio" placeholder="Id Servicio">
          </div>
        </div>
        <div>
          <button type="submit" name="actualizar" id="btn" class="btn mt-2 mb-3">Actualizar</button>
        </div>
      </div>
    </form>
    </center>
</div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>