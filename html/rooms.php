
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">


<div class="container m-5" style="border: 2px solid black; background : white ;border-radius: 10px;">
 
 <div class="row d-flex justify-content-around m-2">
   <h1 style="text-align: center;">Reservas</h1>
     <div class="col">
     <label for="startDate">Llegada</label>
       <input id="startDate"  class="form-control" type="date" />
     </div>
     <div class="col">
     <label for="startDate">Salida</label>
       <input id="startDate" class="form-control" type="date" />
     </div>
     <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
      </div>
   </div>
 