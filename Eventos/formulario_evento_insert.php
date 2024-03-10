<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/iniciar_session.css">




<div class="container mt-5">
    <center>
    <div class="d-flex justify-content-center">

    <form class="myFormCliente" action="/student042/dwes/Eventos/action/db_evento_insert_call.php" method="POST">

    <h1>Reservar Servicio de Evento</h1>
      <div class="container">
        <div class="form-group">
        <label for="nombre_cliente">Nombre:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        </div>
        <div class="form-group">
        <label for="email_cliente">Email:</label>
            <input type="email" id="email_cliente" name="email_cliente" required>
        </div>
        <div class="form-group">
        <label for="telefono_cliente">Teléfono:</label>
            <input type="tel" id="telefono_cliente" name="telefono_cliente" required>
        </div>

        
        <div class="col-2">
        <label for="servicio">Servicio:</label>
            <select name="servicio" id="servicio" class="form-control">
            <option value="boda">boda</option>
            <option value="sala conferencia">sala conferencia</option>
            <option value="excursion">excursion</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="fecha_llegada">Fecha de Llegada:</label>
          <input type="date" id="fecha_llegada" name="fecha_llegada" required>
        </div>


        <div class="form-group">
        <label for="hora_reserva">Hora de Reserva:</label>
            <input type="time" id="hora_reserva" name="hora_reserva" required>
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" name = "reservar" id="btn" class="btn mt-2">Reservar</button>
        </div>
      </div>
    </form>
    
  </div>
    </center>
  </div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

