<?php 
  
  $_SESSION['login'] = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKIIWhc+CA0W9tWSdR48t9tc5t9U5E+UkVAO+gC4J5rIKBq/KOJs1F2" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/header.css">
  <title>Header Hotel</title>
</head>


<body>

  <header>
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
              <a class="nav-link " aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="habitaciones.php" >Habitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="restaurante.php">Restaurante</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="belleza.php">Belleza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventos.php">Evento</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="iniciarSesion.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php ">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
 
