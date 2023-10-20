<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Header Hotel</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000000;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./imagenes/logo Hotel.jpg" alt="" width="70" height="52">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php" style="color:#505050; font-weight :bold;">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="habitaciones.php " style="color:#505050; font-weight :bold;" >Habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservas.php" style="color:#505050; font-weight :bold;">Reservas</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="iniciarSesion.php" style="color:#505050; font-weight :bold;">Iniciar Sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrarse.php" style="color:#505050; font-weight :bold;">Registrarse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn " type="submit" style="color: #feffe2; background-color: #040212; font-weight: bold;">OK</button>
      </form>
    </div>
  </nav>
