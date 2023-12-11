
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">


<div class="row d-flex justify-content-around m-2" style="background-color: wheat;">

 <div class="row">
 <div class="col" id="image">
 <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="img-thumbnail" alt="...">
 </div>
 <div class="col" id="text">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Nulla hic ratione perferendis odio nobis ipsa?</p>
 </div>
 <div class="col">

<a href="index.php" class="btn-primary  m-2"> Descubrir </a> 

</div>

</div>
</div>

<div class="container" style="border: 2px solid black; background : white">
 
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
     <div class="col">

     <a  href="index.php" class="btn-primary border-dark"> Reservar </a> 

     </div>
   </div>
 