
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">
<form action="" method="">
    <div class="container-fluid bg-gray">
        <div class="row d-flex justify-content-start m-2">
        <h3>Desayuno </h3>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Koutoubia_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Desayuno simple</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Desayuno Rason</li>
            <a href=""><li class="list-group-item">Detalle de la Desayuno</li></a>
            <li class="list-group-item">Tarifa/persona: 59 €</li>
          </ul>
        </div>
        </div>
        <div class="col" id="image">
        <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="img-thumbnail" alt="..." width="500px">
        <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
          </div> 
        </div>
        <div class="col" id="text_habitacion">

        <div class="modal-body">
        <h5>Desayuno Simple</h5>
        <div>
            <ul>
                <li>Un Zumo</li>
                <li>huevos fritos</li>
                <li>pan artisanal</li>
                <li>cafe ou té</li>
                <li>croissan</li>
                <li>Miel y mantequilla </li>
            </ul>
        </div>
        <h6> Desayuno simple</h6>
          <hr>
          <h5>Descrpción del desayuno</h5>
          <p> Un desayuno simple al borde de la piscina con un ambiente que te da un  buena experiencia
            </p>
        </div>
        </div>
    </div>

    <div class="row d-flex justify-content-start m-2">
        <h3>Comida</h3>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Koutoubia_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Comida simple</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Comida Rason</li>
            <a href=""><li class="list-group-item">Detalle del Comida</li></a>
            <li class="list-group-item">Tarifa/persona: 69 €</li>
          </ul>
        </div>
        </div>
        <div class="col" id="image">
        <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="img-thumbnail" alt="..." width="500px">
        <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
          </div> 
        </div>
        <div class="col" id="text_habitacion">

        <div class="modal-body">
        <h5>Comida Simple</h5>
        <div>
            <ul>
                <li>Un Zumo</li>
                <li>huevos fritos</li>
                <li>pan artisanal</li>
                <li>cafe ou té</li>
                <li>croissan</li>
                <li>Miel y mantequilla </li>
            </ul>
        </div>
        <h6> Comida simple</h6>
          <hr>
          <h5>Descrpción de la comida</h5>
          <p> Un Comida simple al borde de la piscina con un ambiente que te da un  buena experiencia
            </p>
        </div>
        </div>
    </div>
    
    <div class="row d-flex justify-content-start m-2">
        <h3>Cena</h3>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Koutoubia_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cena simple</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Cena Rason</li>
            <a href=""><li class="list-group-item">Detalle de la Cena</li></a>
            <li class="list-group-item">Tarifa/persona: 79 €</li>
          </ul>
        </div>
        </div>
        <div class="col" id="image">
        <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="img-thumbnail" alt="..." width="500px">
        <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
          </div> 
        </div>
        <div class="col" id="text_habitacion">

        <div class="modal-body">
        <h5>Cena Simple</h5>
        <div>
            <ul>
                <li>Un Zumo</li>
                <li>huevos fritos</li>
                <li>pan artisanal</li>
                <li>cafe ou té</li>
                <li>croissan</li>
                <li>Miel y mantequilla </li>
            </ul>
        </div>
        <h6> Cena simple</h6>
          <hr>
          <h5>Descrpción de la cena</h5>
          <p> Un Cena simple al borde de la piscina con un ambiente que te da un  buena experiencia
            </p>
        </div>
        </div>
    </div>

  </div>
  
</form>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

