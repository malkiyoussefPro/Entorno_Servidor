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

  <form class="myFormservicio " action="/student042/dwes/Servicios/action/db_servicio_insert_call.php" method="POST">

      <h2>Formulario insertar servicio </h2>
      <div class="container">
        
        <div class="form-group">
          <label for="inputservicio ">Description servicio </label>
          <input type="text" name="nombre_servicio " class="form-control" id="inputservicio " placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email servicio </label>
          <input type="email" name="email_servicio " class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen servicio</label>
        <input class="form-control" type="file" id="formFile" name="imagen_servicio">
        </div>
          <div class="form-group col-md-4">
            <label for="inputState">Departamento servicio </label>
            <select id="inputState" class="form-control" name="role_servicio ">
              <option selected>Seleccionar...</option>
              <option>Restaurante</option>
              <option>Evento</option>
              <option>Belleza</option>
            </select>
          </div>
        <div class="form-group">
          <label for="inputFecha">Fecha creación servicio</label>
          <input type="date" name="fecha_creacion_servicio" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        <div class="form-group">
          <label for="inputservicio ">precio </label>
          <input type="number" name="precio_servicio " class="form-control" id="inputservicio " placeholder="precio">
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