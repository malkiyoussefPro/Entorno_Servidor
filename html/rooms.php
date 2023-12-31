
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">


<div class="container m-5" style="border: 2px solid black; background : white ;border-radius: 10px;">
 
 <div class="row d-flex justify-content-around m-2">
   <h1 style="text-align: center;">Reservas</h1>
      <div class="row">
      <div class="col-4">
     <label for="startDate">Llegada</label>
       <input id="startDate"  class="form-control" type="date" />
     </div>
     <div class="col-4">
     <label for="startDate">Salida</label>
       <input id="startDate" class="form-control" type="date" />
     </div>
     <div class="col-2">
          <label for="inputNombrePersona">nombre de persona</label>
         
          <input type="number" name="nombre_persona" class="form-control" id="inputNombrePersona" placeholder="nombre persona">
      </div>
      
      <div class="card-body col-2">
            <a type="button" class="btn btn-warning" id="disponibilidad " name="disponibilidad">Ver disponibilidad</a>
      </div>
    
      <div class="card-body">
          <a href="#" type="button" class="btn btn-warning" name="reservar" id="reservar">Reservar</a>  
        </div>
     
      </div>
   </div>
 