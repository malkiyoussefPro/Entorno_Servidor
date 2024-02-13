<<<<<<< HEAD
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php
          
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>


<<<<<<< HEAD
<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">

  <form class="myFormUsuario" action="/student042/dwes/Usuarios/action/db_usuario_update_call.php" method="POST">

    <h2>Formulario actualizar Usuario</h2>
    <div class="container">

      <div class="form-group">
        <label for="inputUsuario">id Usuario</label>
        <input type="text" name="id_usuario" class="form-control" id="inputUsuario" placeholder="id Usuario" value="<?php echo $usuario['id_usuario']; ?>" readonly>

      </div>
        
      <div class="form-group">
        <label for="inputUsuario">Nombre Usuario</label>
        <input type="text" name="nombre_Usuario" class="form-control" id="inputUsuario" placeholder="nombre" value="<?php echo $usuario['nombre_usuario']; ?>">
      </div>
      
      <div class="form-group">
        <label for="inputEmail4">Email Usuario</label>
        <input type="email" name="email_Usuario" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $usuario['email_usuario']; ?>">
      </div>
       
      <div class="form-group">
        <label for="inputAddress">Contraseña</label>
        <input type="password" name="contraseña" class="form-control" id="inputAddress" placeholder="Contraseña" value="">
      </div>
      
      <div class="form-group col-md-4">
        <label for="inputState">Role Usuario</label>
        <select id="inputState" class="form-control" name="role_usuario">
          <option <?php echo $usuario['role_usuario'] == 'Cliente' ? 'selected' : ''; ?>>Cliente</option>
          <option <?php echo $usuario['role_usuario'] == 'Personal' ? 'selected' : ''; ?>>Personal</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="inputFecha">Fecha creacion cuenta</label>
        <input type="date" name="fecha_creacion" class="form-control" id="inputFecha" placeholder="fecha" value="<?php echo $usuario['fecha_creacion']; ?>">
      </div>

    </div>
    
    <div class="d-flex justify-content-center">
      <button type="submit" name="actualizar" id="btn" class="btn mt-2">Actualizar</button>
    </div>

  </form>
  
</div>
    
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">
<div class="d-flex justify-content-center">

  <form class="myFormUsuario" action="/student042/dwes/Comentarios/action/db_comentario_insert_call.php" method="POST">

      <h2>Formulario Modificar Comentarios</h2>
      <div class="container">

        <div class="form-group col-md-4">
            <label for="inputState">Estado comentario</label>
            <select id="inputState" class="form-control" name="estado_comentario">
              <option selected>Seleccionar...</option>
              <option>Pendiente</option>
              <option>Revisado</option>
              <option>Bloquedo</option>
              
            </select>
        </div>
        <div>
          <label for="inputUsuario">Nombre Cliente</label>
          <input type="text" name="nombre_cliente" class="form-control" id="inputUsuario" placeholder="nombre">
        </div>

        <div class="form-group">
          <label for="inputFecha">Fecha creacion cuenta</label>
          <input type="date" name="fecha_Creacion" class="form-control" id="inputFecha" placeholder="fecha">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Comentarios</label>
            <select id="inputState" class="form-control" name="comentarios">
              <option selected>Seleccionar...</option>
              <option>Muy contento, lo recomendo</option>
              <option>Satisfecho </option>
              <option>Experiencia normal</option>
              <option>Menos satisfecho</option>
              <option>Mala experiencia</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Score</label>
            <select id="inputState" class="form-control" name="score">
              <option selected>Seleccionar...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" name="modificar" id="btn" class="btn mt-2">Modificar Comentario</button>
        </div>
        </form>
</div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

