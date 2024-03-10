<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

$idUsuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : null; // Obtener el id_usuario de la URL

if (!$idUsuario) {
    echo "ID de usuario no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
$q_select->execute([$idUsuario]);
$usuario = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}
?>

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
        <input type="text" name="nombre_usuario" class="form-control" id="inputUsuario" placeholder="nombre" value="<?php echo $usuario['nombre_usuario']; ?>">
      </div>
      
      <div class="form-group">
        <label for="inputEmail4">Email Usuario</label>
        <input type="email" name="email_usuario" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $usuario['email_usuario']; ?>">
      </div>
       
      <div class="form-group">
        <label for="inputAddress">Contraseña</label>
        <input type="text" name="contraseña_usuario" class="form-control" id="inputAddress" placeholder="Contraseña" value="<?php echo $usuario['contrasena_usuario']; ?>">
      </div>

      
      <div class="form-group col-md-4">
        <label for="inputState">Role Usuario</label>
        <select id="inputState" class="form-control" name="role_usuario">
          <option <?php echo $usuario['role_usuario'] == 'Cliente' ? 'selected' : ''; ?>>Cliente</option>
          <option <?php echo $usuario['role_usuario'] == 'Personal' ? 'selected' : ''; ?>>Personal</option>
          <option <?php echo $usuario['role_usuario'] == 'Invitado' ? 'selected' : ''; ?>>Invitado</option>
          <option <?php echo $usuario['role_usuario'] == 'admin' ? 'selected' : ''; ?>>admin</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="inputFecha">Fecha creacion cuenta</label>
        <input type="date" name="fecha_creacion" class="form-control" id="inputFecha" placeholder="fecha" value="<?php echo $usuario['fecha_creacion_cuenta']; ?>">
      </div>
    </div>
    
    <div class="d-flex justify-content-center">
      <button type="submit" name="actualizar" id="btn" class="btn mt-2">Actualizar</button>
    </div>
    <div class="d-flex justify-content-center">
       <a href="/student042/dwes/Servicios/operaciones.php" type="button" class="btn btn-dark mt-2">Cancelar</a>
    </div>

    </form>
    
  </div>
    
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
