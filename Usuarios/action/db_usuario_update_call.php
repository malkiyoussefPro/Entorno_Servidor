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

  <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_update_call.php" method="POST">

      <h2>Formulario actualizar Usuario</h2>
      <div class="container">
        
        <div class="form-group">
          <label for="inputUsuario">Nombre Usuario</label>
          <input type="text" name="nombre_Usuario" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email Usuario</label>
          <input type="email" name="email_Usuario" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
       
        <div class="form-group">
          <label for="inputAddress">Contraseña</label>
          <input type="password" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
          <div class="form-group col-md-4">
            <label for="inputState">Role Usuario</label>
            <select id="inputState" class="form-control" name="role_usuario">
              <option selected>Seleccionar...</option>
              <option>Cliente</option>
              <option>Personal</option>
            </select>
          </div>
          <div class="form-group">
          <label for="inputFecha">Fecha creacion cuenta</label>
          <input type="date" name="fecha_creacion" class="form-control" id="inputFecha" placeholder="fecha">
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