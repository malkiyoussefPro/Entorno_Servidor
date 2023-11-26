<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');


?>
<?php
 
if ($pdo){
  $nombreDB = 'hotel_42';
  $pdo->exec("USE $nombreDB");
  
if(isset($_POST['insertar'])){
  echo'salam';
  $tipo = $_POST['tipo_habitacion'];
  $disponibilidad = $_POST['disponibilidad_habitacion'];
  $estado = $_POST['estado_habitacion'];
  $vista = $_POST['vista_habitacion'];
  $precio = $_POST['precio_habitacion'];
  $imagen = "/student042/dwes/html/tu/imagenes.jpg";

  if(!empty($tipo) && !empty($disponibilidad) && !empty($estado) && !empty($vista) && !empty($precio)){
    $q_insert = $pdo -> prepare('INSERT INTO habitaciones VALUES
    (null,?,?,?,?,?,?)');
    $q_insert -> execute([$tipo, $disponibilidad, $estado, $vista, $precio,$imagen]);

    ?>
      <div class="alert alert-success" role="alert">
         Añadido de  una habitacion excitoso!
      </div>
    <?php
      header('Location:/student042/dwes/Habitaciones/formulario_habitacion_insert.php');
  }else{
    ?>
     <div class="alert alert-danger" role="alert">
           Todos los campos son obligatorios !
      </div>
    <?php
}
}



 }else{
  echo ' Error en el estabelicimiento a la base de datos';
 }

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

  .myFormHabitacion{
    border: 2px solid wheat;
    border-radius: 5px;
    width: 600px;
    height: 700px;
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
<form class="myFormHabitacion" action="/student042/dwes/Habitacions/action/db_habitacion_insert_call.php" method="POST">
     
<h2>Formulario insertar habitacion</h2>
    
      <div class="container">

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputHabitacion">Tipo Habitacion</label>
            <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Single</option>
              <option>Double</option>
              <option>Suite</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputHabitacion">Disponibilidad habitacion</label>
            <select name="disponibilidad_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              <option>bloquada</option>
              
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion">Estado habitacion</label>
            <select name="estado_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              <option>Esta lista</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion">Ubicacion Habitacion</label>
            <select name="vista_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vista mar</option>
              <option>Vista pisina</option>
              <option>Vista jardin</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="inputZip">precio</label>
            <input type="number" name="precio_habitacion" class="form-control" id="inputZip" placeholder="precio habitacion">
          </div>
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen Habitación</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" name="insertar" id="btn" class="btn  m-2">Insertar</button>
        </div>
      </div>
    </form>

  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>