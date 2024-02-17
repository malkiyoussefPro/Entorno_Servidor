


<?php
       
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

    <title>Dashbord Hotel </title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel Oasis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/student042/dwes/Usuarios/ajax_get_form_usuario_select.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_insert.php">Añadir Usuario </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_update.php">Modificar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_delete.php">Borrar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_select.php">Buscar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/operaciones.php">Operaciones </a></li>
          </ul>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Personal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Personal/formulario_personal_insert.php">Añadir Personal </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/formulario_personal_update.php">Modificar Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/formulario_personal_delete.php">Borrar Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/formulario_personal_select.php">Buscar Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/operaciones.php">Operaciones </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Clientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Clientes/formulario_cliente_insert.php">Añadir Cliente </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/formulario_cliente_update.php">Modificar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/formulario_cliente_delete.php">Borrar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/formulario_cliente_select.php">Buscar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/operaciones.php">Operaciones </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Habitaciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/formulario_habitacion_insert.php">Añadir Habitacion </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/formulario_habitacion_update.php">Modificar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/formulario_habitacion_delete.php">Borrar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/formulario_habitacion_select.php">Buscar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/operaciones.php">Operaciones </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Reservas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Reservas/formulario_reserva_insert.php">Añadir Reserva </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/formulario_reserva_update.php">Modificar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/formulario_reserva_delete.php">Borrar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/formulario_reserva_select.php">Buscar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/operaciones.php">Operaciones </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Belleza
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Belleza/formulario_belleza_insert.php">Añadir Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/formulario_belleza_update.php">Modificar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/formulario_belleza_delete.php">Borrar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/formulario_belleza_select.php">Buscar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/operaciones.php">Operaciones </a></li>         
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Eventos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Eventos/formulario_evento_insert.php">Añadir Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/formulario_evento_update.php">Modificar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/formulario_evento_delete.php">Borrar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/formulario_evento_select.php">Buscar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Restaurante
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Restaurante/formulario_restaurante_insert.php">Añadir Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/formulario_restaurante_update.php">Modificar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/formulario_restaurante_delete.php">Borrar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/formulario_restaurante_select.php">Buscar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Servicios/formulario_servicio_insert.php">Añadir Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/formulario_servicio_update.php">Modificar Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/formulario_servicio_delete.php">Borrar Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/formulario_servicio_select.php">Buscar Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Comentarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_insert.php">Añadir Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_update.php">Modificar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_delete.php">Borrar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_select.php">Buscar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Facturas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_factura_insert.php">Añadir Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_factura_update.php">Modificar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_factura_delete.php">Borrar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_factura_select.php">Buscar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Comentarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_insert.php">Añadir Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_update.php">Modificar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_delete.php">Borrar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/formulario_comentario_select.php">Buscar Comentario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Comentarios/operaciones.php">Operaciones </a></li> 
          </ul>
        </li>
        <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['name'])) { ?>
              <!-- cuando el usuario ha iniciado sesión, se muestra mensaje de bienvenida y deshabilita enlace de inicio de sesión -->
              <div style="color: orange;">
                <?php echo 'Bienvenido: ' . $_SESSION['name']; ?>
              </div>
            <?php } else { ?>
              <!-- cuando el usuario no ha iniciado sesión, se muestra enlace de inicio de sesión -->
              <li class="nav-item">
                <a class="nav-link" href="/student042/dwes/html/session_dashboard.php">Login</a>
              </li>
            <?php } ?>

            <?php if(isset($_SESSION['name'])) { ?>
              <!-- cuando el usuario ha iniciado sesión, se muestra enlace de cierre de sesión -->
              <li class="nav-item">
                <a class="nav-link" href="/student042/dwes/connection/db_deconnection_dashboard.php">Log Out</a>
              </li>
            <?php } ?>
          </ul>
      </ul>
    </div>
  </div>
</nav>
</header>

<center><h1>DASHBOARD HOTEL OASIS</h1></center>
  <div>

   <a href="/student042/dwes/index.php" class="btn border-dark"  style="margin: 10px; padding:10px"> Visitar Pagina Web </a> 
   
  </div>
  <div id="resultados">

  </div>
  
  <input type="submit" value="Buscar"  style="margin: 10px; padding:10px" class="btn border-dark">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





