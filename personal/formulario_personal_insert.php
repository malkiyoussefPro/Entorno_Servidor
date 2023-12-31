
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

<form class="myFormpersonal" action="/student042/dwes/Personal/action/db_personal_insert_call.php" method="POST" enctype="multipart/form-data">
      <h2>Formulario insertar personal</h2>
      <div class="container"> 
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
            <input class="form-control" type="file" id="formFile1" name="imagen_Personal">
          </div>
          <div class="form-row">
            <label for="formFile" class="form-label">Curriculum</label>
            <input class="form-control" type="file" id="formFile2" name="curriculum">
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

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

