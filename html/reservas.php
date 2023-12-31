
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">
<form action="" method="">
    <div class="container-fluid bg-gray">
        <div class="row d-flex justify-content-start m-2">
        <p>Habitaciones Simple</p>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Koutoubia_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Habitación clasica simple</h5>
            <p class="card-text">Huespedes 2 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Habitacón Rason</li>
            <a href=""><li class="list-group-item">Detalle de la habitación</li></a>
            <li class="list-group-item">Tarifa/Noche: 779 €</li>
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
        <h5>Habitacion Simple</h5>
        <h6>Huespedes 2 </h6>
        <div>
            <ul>
                <li>Caja fuerte</li>
                <li>Aire acondicionado</li>
                <li>Acceso a Internet</li>
                <li>Televisión con mando a distancia</li>
                <li>Secador de pelo</li>
                <li>Espejo de maquillaje iluminado</li>
            </ul>
        </div>
        <h6> Habitaciones Clasicas</h6>
          <hr>
          <h5>Descrpción de la habitación</h5>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 28-40 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
            </p>
        </div>
        </div>
    </div>
    <div class="row d-flex justify-content-start m-2">
        <p>Habitaciones Doble</p>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Habitación doble</h5>
            <p class="card-text">Huespedes 4 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Habitacón Rason</li>
            <a href=""><li class="list-group-item">Detalle de la habitación</li></a>
            <li class="list-group-item">Tarifa/Noche: 979 €</li>
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
        <p>Habitacion doble</p>
        <h6>Huespedes 4 </h6>
        <div>
            <ul>
                <li>Caja fuerte</li>
                <li>Aire acondicionado</li>
                <li>Acceso a Internet</li>
                <li>Televisión con mando a distancia</li>
                <li>Secador de pelo</li>
                <li>Espejo de maquillaje iluminado</li>
            </ul>
        </div>
        <h6> Habitaciones Clasicas</h6>
          <hr>
          <h5>Descrpción de la habitación</h5>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 48-60 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
            </p>
        </div>
        </div>
    </div>
    <div class="row d-flex justify-content-start m-2">
        <p>Habitaciones Lujo</p>
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Habitación de lujo</h5>
            <p class="card-text">Huespedes 6 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary">Habitacón Rason</li>
            <a href=""><li class="list-group-item">Detalle de la habitación</li></a>
            <li class="list-group-item">Tarifa/Noche: 1279 €</li>
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
        <h5>Habitacion de lujo</h5>
        <h6>Huespedes 6 </h6>
        <div>
            <ul>
                <li>Caja fuerte</li>
                <li>Aire acondicionado</li>
                <li>Acceso a Internet</li>
                <li>Televisión con mando a distancia</li>
                <li>Secador de pelo</li>
                <li>Espejo de maquillaje iluminado</li>
            </ul>
        </div>
        <h6> Habitaciones de lujo</h6>
          <hr>
          <h5>Descrpción de la habitación</h5>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 58-70 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
            </p>
        </div>
        </div>
    </div>

  </div>
  
</form>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

