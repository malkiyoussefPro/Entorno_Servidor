
<?php 
  session_start();
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="/student042/dwes/css/header.css">
  <title>Header Hotel</title>
  <style>
  /* Estilos comunes para los iconos */
  .weather-icon {
    width: 100px; 
    height: 100px; 
    background-size: cover;
    display: inline-block;
  }
  .container-tiempo{
    font-size: 18px;
    background-color: rgb(164, 144, 55);
    width: 300px;
    height: 230px;
    margin: 15px auto;
    padding: 15px;
    color: black;
    border-radius: 15px;
  }
</style>
</head>

<body>
   
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000000;">

      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/student042/dwes/html/imagenes/logo Hotel.jpg" alt="" width="70" height="52">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/student042/dwes/index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/html/habitaciones.php" >Habitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/html/restaurante.php">Restaurante</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/html/belleza.php">Belleza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/html/eventos.php">Evento</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['name'])) { ?>
              <!-- cuando el usuario ha iniciado sesión, se muestra mensaje de bienvenida y deshabilita enlace de inicio de sesión -->
              <div style="color: orange;">
                <?php echo 'Bienvenido: ' . $_SESSION['name']; ?>
              </div>
            <?php } else { ?>
              <!-- cuando el usuario no ha iniciado sesión, se muestra enlace de inicio de sesión -->
              <li class="nav-item">
                <a class="nav-link" href="/student042/dwes/html/iniciarSesion.php">Login</a>
              </li>
            <?php } ?>

            <?php if(isset($_SESSION['name'])) { ?>
              <!-- cuando el usuario ha iniciado sesión, se muestra enlace de cierre de sesión -->
              <li class="nav-item">
                <a class="nav-link" href="/student042/dwes/connection/db_deconnection_index.php">Log Out</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="col">
    <div class="container-tiempo">
      <h6 style="text-align: center;">Tiempo actual en Marrakech</h6>
      <div id="weather-info">
                    <!-- Aquí se mostrarán los datos del tiempo -->
                </div>
                <!-- Div para mostrar el icono del tiempo -->
                <div id="weather-icon" class="weather-icon"></div>
            </div>
    </div>

 
