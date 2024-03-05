
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<style>
button{
    margin: 15px;
}
</style>

<center><h1>MANUAL TECNICO</h1>

<h3 style="color: orangered; margin: 15px">PARTE ADMIN</h3></center>
<hr>
<div class="dropdown">
  <button class="btn btn-warning btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Usuario
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Usuario</a></li>
    <li><a class="dropdown-item" href="#">Modificar Usuario</a></li>
    <li><a class="dropdown-item" href="#">Borrar Usuario</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Personal
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Personal</a></li>
    <li><a class="dropdown-item" href="#">Modificar Personal</a></li>
    <li><a class="dropdown-item" href="#">Borrar Personal</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Cliente
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Cliente</a></li>
    <li><a class="dropdown-item" href="#">Modificar Cliente</a></li>
    <li><a class="dropdown-item" href="#">Borrar Cliente</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Habitacion
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Habitacion</a></li>
    <li><a class="dropdown-item" href="#">Modificar Habitacion</a></li>
    <li><a class="dropdown-item" href="#">Borrar Habitacion</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Reserva
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Reserva</a></li>
    <li><a class="dropdown-item" href="#">Modificar Reserva</a></li>
    <li><a class="dropdown-item" href="#">Borrar Reserva</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Servicios
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Servicios</a></li>
    <li><a class="dropdown-item" href="#">Modificar Servicios</a></li>
    <li><a class="dropdown-item" href="#">Borrar Servicios</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Comentarios
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Comentarios</a></li>
    <li><a class="dropdown-item" href="#">Modificar Comentarios</a></li>
    <li><a class="dropdown-item" href="#">Borrar Comentarios</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Facturas
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Agregar Facturas</a></li>
    <li><a class="dropdown-item" href="#">Modificar Facturas</a></li>
    <li><a class="dropdown-item" href="#">Borrar Facturas</a></li>
  </ul>
</div>

<hr>
<center><h3 style="color: orangered; margin: 15px">PARTE USUARIO</h3></center>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Inicio
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Inicio</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Habitacion
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Habitacion</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Restaurante
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Restaurante</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Belleza
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Belleza</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Evento
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Evento</a></li>
  </ul>
</div>
<hr>
<div class="dropdown">
  <button class="btn btn-dark btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Login
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Login</a></li>
    <li><a class="dropdown-item" href="#">Log Out</a></li>

  </ul>
</div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

