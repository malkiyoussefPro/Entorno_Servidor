<?php
include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
?>
  <link rel="stylesheet" href="../css/reservas.css">


  <div class="container">
 
  <div class="row d-flex justify-content-around m-2">
    <h1>Reservas</h1>
      <div class="col">
      <label for="startDate">Llegada</label>
        <input id="startDate" class="form-control" type="date" />
      </div>
      <div class="col">
      <label for="startDate">Salida</label>
        <input id="startDate" class="form-control" type="date" />
      </div>
      <div class="col">

      <a  href="index.php" class="btn border-dark"> Reservar </a> 

      </div>
    </div>
  </div>



  <?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
    
  ?>
