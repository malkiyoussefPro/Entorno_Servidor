<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');
?>

<?php 
  
  $_SESSION['login'] = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/student042/dwes/css/header.css">
  <title>Header Hotel</title>
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
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/html/iniciarSesion.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/student042/dwes/index.php ">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

 
