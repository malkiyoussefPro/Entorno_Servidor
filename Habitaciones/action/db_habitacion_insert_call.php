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

  <h1>Hola desde formulario insertar formulario</h1>
  <div class="container mt-5">
    <h2 style="color: #000000; text-align: center; margin-top: 25px;">Formulario insertar habitacion</h2>
    <form class="myFormHabitacion" action="" method="POST">
      <div class="container">

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Tipo Habitacion</label>
            <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Single</option>
              <option>Double</option>
              <option>Suite</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Disponibilidad habitacion</label>
            <select name="disponibilidad_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>disponible</option>
              <option>ocupada</option>
              <option>bloquada</option>
              
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Estado habitacion</label>
            <select name="estado_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>En proceso de limpieza</option>
              <option>En proceso de mantenimiento</option>
              <option>Esta lista</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputHabitacion" style="color: #040212">Ubicacion Habitacion</label>
            <select name="vista_habitacion" id="inputHabitacion" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vista mar</option>
              <option>Vista pisina</option>
              <option>Vista jardin</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="inputZip" style="color: #040212">precio</label>
            <input type="number" name="precio_habitacion" class="form-control" id="inputZip" placeholder="precio habitacion">
          </div>
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Imagen Habitación</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <div style="display: flex; justify-content: center;">
          <button type="submit" name="insertar" class="btn btn-primary m-2">Insertar</button>
        </div>
      </div>
    </form>

  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>