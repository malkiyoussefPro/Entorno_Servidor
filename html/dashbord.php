
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/student042/dwes/css/dashbord.css">

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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Usuarios/action/db_usuario_insert_call.php">Añadir Usuario </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/action/db_usuario_update_call.php">Modificar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/action/db_usuario_delete_call.php">Borrar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/action/db_usuario_select_call.php">Buscar Usuario</a></li>
          </ul>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Personal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Personal/action/db_personal_insert_call.php">Añadir Personal </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/action/db_personal_update_call.php">Modificar Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/action/db_personal_delete_call.php">Borrar Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Personal/action/db_personal_select_call.php">Buscar Personal</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Clientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Clientes/action/db_cliente_insert_call.php">Añadir Cliente </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/action/db_cliente_update_call.php">Modificar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/action/db_cliente_delete_call.php">Borrar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Clientes/action/db_cliente_select_call.php">Buscar Cliente</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Habitaciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/action/db_habitacion_insert_call.php">Añadir Habitacion </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/action/db_habitacion_update_call.php">Modificar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/action/db_habitacion_delete_call.php">Borrar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Habitaciones/action/db_habitacion_select_call.php">Buscar Habitacion</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Reservas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Reservas/action/db_reserva_insert_call.php">Añadir Reserva </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/action/db_reserva_update_call.php">Modificar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/action/db_reserva_delete_call.php">Borrar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Reservas/action/db_reserva_select_call.php">Buscar Reserva</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Belleza
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Belleza/action/db_belleza_insert_call.php">Añadir Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/action/db_belleza_update_call.php">Modificar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/action/db_belleza_delete_call.php">Borrar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Belleza/action/db_belleza_select_call.php">Buscar Belleza</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Eventos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Eventos/action/db_evento_insert_call.php">Añadir Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/action/db_evento_update_call.php">Modificar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/action/db_evento_delete_call.php">Borrar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Eventos/action/db_evento_select_call.php">Buscar Evento</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Restaurante
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Restaurante/action/db_restaurante_insert_call.php">Añadir Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/action/db_restaurante_update_call.php">Modificar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/action/db_restaurante_delete_call.php">Borrar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Restaurante/action/db_restaurante_select_call.php">Buscar Restaurante</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Servicios/action/db_servicio_insert_call.php">Añadir Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/action/db_servicio_update_call.php">Modificar Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/action/db_servicio_delete_call.php">Borrar Servicio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Servicios/action/db_servicio_select_call.php">Buscar Servicio</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Facturas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Facturas/action/db_factura_insert_call.php">Añadir Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/action/db_factura_update_call.php">Modificar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/action/db_factura_delete_call.php">Borrar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/action/db_factura_select_call.php">Buscar Factura</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<center><h1>DASHBORD HOTEL OASIS</h1></center>
  <div>

   <a href="/student042/dwes/index.php" class="btn border-dark"> Visitar Pagina Web </a> 
   
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





