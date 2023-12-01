<?php

 ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php
if ($pdo){
  $nombreDB = 'hotel_42';
  $pdo->exec("USE $nombreDB");
   if (isset($_POST['insertar'])){
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre_personal'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $puesto = $_POST['puesto_personal'];
    $domicilio = $_POST['domicilio_personal'];
    $telefono = $_POST['telefono_personal'];
    $email = $_POST['email_personal'];
    $fecha_integracion = $_POST['fecha_integracion'];
    $affiliación = $_POST['affiliación_personal'];
    $imagen_Personal = $_POST['imagen_Personal'];
    $curriculum = $_POST['curriculum'];
    $fecha_despedida = $_POST['fecha_Despedida'];
   
   if(!empty($id_usuario) && !empty($nombre) && !empty( $fecha_nacimiento) && !empty($puesto) && !empty($domicilio) && !empty($telefono)
    && !empty($email) && !empty($fecha_integracion) && !empty($affiliación)&& !empty($imagen_Personal) && !empty($curriculum)){
      $q_insert = $pdo -> prepare('INSERT INTO  personal_hotel VALUES 
      (null, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
     
      $q_insert -> execute([$id_usuario, $nombre, $fecha_nacimiento, $puesto, $domicilio, $telefono,
       $email,$fecha_integracion, $affiliación, $imagen_Personal, $curriculum, $fecha_despedida]);

      ?>
      <div class="alert alert-success" role="alert">
         Cliente añadido de una  excitoso!
      </div>
    <?php
      header('Location:/student042/dwes/html/dashboard.php');
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


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

    <form class="myFormpersonal" action="" method="POST">
      <h2>Formulario insertar personal</h2>
      <div class="container">
      <div class="form-group">
          <label for="inputpersonal">id Usuario</label>
          <input type="text" name="id_usuario" class="form-control" id="inputpersonal" placeholder="nombre">
        </div>
        
        <div class="form-group">
          <label for="inputpersonal">Nombre personal</label>
          <input type="text" name="nombre_personal" class="form-control" id="inputpersonal" placeholder="nombre">
        </div>

        <div class="form-group">
          <label for="inputFecha">Fecha nacimiento</label>
          <input type="date" name="fecha_nacimiento" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        <div class="form-group">
            <label for="inputState">Puesto</label>
            <select id="inputState" name="puesto_personal" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Director</option>
              <option>Admin</option>
              <option>Responsable R-Humano </option>
              <option>Administrativo/a</option>
              <option>Responsable Belleza</option>
              <option>Masagista</option>
              <option>Responsable Evento</option>
              <option>Responsable Restaurante</option>
              <option>Entrenador</option>
              <option>Animador</option>
              <option>Cocinero</option>
              <option>Barista</option>
              <option>Pastelero</option>
              <option>Ayudante cocinero</option>
              <option>Ayudante pastelero</option>
              <option>Camarero/a</option>
              <option>Responsable Mantenimiento</option>
              <option>Tecnico mantenimiento</option>
              <option>Ayudante mantenimiento</option>
              <option>Gobernanta</option>
              <option>Camarero/a de Piso</option>
              <option>Responsable Recepción</option>
              <option>Recepcionista</option>
              <option>Ayudante Recepción</option>

            </select>
          </div>
        <div class="form-group">
          <label for="inputAddress">Domicilio</label>
          <input type="text" name="domicilio_personal" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputTelefono">telefono</label>
          <input type="text" name="telefono_personal" class="form-control" id="inputTelefono" placeholder="telefono">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email_personal" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="inputFecha">Fecha Integracion</label>
          <input type="date" name="fecha_integracion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        
          <div class="form-group ">
            <label for="inputCity">Affiliación SS</label>
            <input type="text" name="affiliación_personal" class="form-control" id="inputCity" placeholder="Mao, Islas Baleares">
          </div>
          <div class="form-row">
            <label for="formFile" class="form-label">Imagen Personal</label>
            <input class="form-control" type="file" id="formFile" name="imagen_Personal">
          </div>
          <div class="form-row">
            <label for="formFile" class="form-label">Curriculum</label>
            <input class="form-control" type="file" id="formFile" name="curriculum">
          </div>
          <div class="form-group ">
            <label for="inputFecha">Fecha Despedida</label>
            <input type="date" name="fecha_Despedida" class="form-control" id="inputFecha" placeholder="fecha">
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="insertar" id="btn" class="btn mt-2">Insertar</button>
        </div>
      </div>
    </form>
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>