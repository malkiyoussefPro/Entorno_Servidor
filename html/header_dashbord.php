

<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
  
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
          <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_insert.php">Añadir Usuario </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_update.php">Modificar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_delete.php">Borrar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_usuario_select.php">Buscar Usuario</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Personal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_personal_insert.php">Añadir personal </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_personal_update.php">Modificar personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_personal_delete.php">Borrar personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Usuarios/formulario_personal_select.php">Buscar personal</a></li>
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
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Facturas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_facturas_insert.php">Añadir Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_facturas_update.php">Modificar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_facturas_delete.php">Borrar Factura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/student042/dwes/Facturas/formulario_facturas_select.php">Buscar Factura</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<center><h1>DASHBORD HOTEL OASIS</h1></center>
  <div class="card-body">

   <a  href="/student042/dwes/index.php" class="btn border-dark"> Visitar Pagina Web </a> 
   
  </div>


  <?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>