

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKIIWhc+CA0W9tWSdR48t9tc5t9U5E+UkVAO+gC4J5rIKBq/KOJs1F2" crossorigin="anonymous">

    <title>Dashbord Hotel </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel Oasis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../clientes/formulario_clientes_insert.php">Añadir Usuario </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../clientes/formulario_clientes_update.php">Modificar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../clientes/formulario_clientes_delete.php">Borrar Usuario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../clientes/formulario_clientes_select.php">Buscar Usuario</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Habitaciones
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../habitaciones/formulario_habitaciones_insert.php">Añadir Habitacion </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../habitaciones/formulario_habitaciones_update.php">Modificar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../habitaciones/formulario_habitaciones_delete.php">Borrar Habitacion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../habitaciones/formulario_habitaciones_select.php">Buscar Habitacion</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reservas
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../reservas/formulario_reservas_insert.php">Añadir Reserva </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../reservas/formulario_reservas_update.php">Modificar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../reservas/formulario_reservas_delete.php">Borrar Reserva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../reservas/formulario_reservas_select.php">Buscar Reserva</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Belleza
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Añadir Belleza </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Modificar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Borrar Belleza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Buscar Belleza</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Eventos
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Añadir Evento </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Modificar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Borrar Evento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Buscar Evento</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Restaurante
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Añadir Restaurante </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Modificar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Borrar Restaurante</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Buscar Restaurante</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center><h1>DASHBORD HOTEL OASIS</h1></center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>