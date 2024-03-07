
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">
<form action="/student042/dwes/html/rooms.php" method="POST">

    
<div class="row d-flex justify-content-start m-2" style="background:white; border-radius:5px">
        <p style="text-align:center; font-size:24px">Habitaciones Simple</p>
        <div class="col-3">
        <div class="card">
          <img src="imagenes/Deluxe_Koutoubia_S.jpg" class="card-img-top" alt="...">
          <div class="card-body"  style="margin-top: 5px;">
            <h4 class="card-title">Habitación clasica simple</h4>
            <p class="card-text">Huespedes 2 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">Habitacón Rason</li>
            <li class="list-group-item">Tarifa/Noche: <span style="font-weight: bold;">a partir 779 €</span></li>
            <div class="card-body" style="text-align :center">
              <a href="#" class="card-link"></a>
              <button id="btn">Reservar</button>
            </div> 
          </ul>
        </div>
      </div>
      <div class="col" id="image">
        <img src="imagenes/Deluxe_Agdal_Room_S.jpg" class="img-thumbnail" alt="..." width="500px">
      </div>
      <div class="col" id="text_habitacion">
          <h5>Habitacion Simple</h5>
          <hr>
        <h6>Huespedes 2 </h6>
        <hr>
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
            <hr>
        <h6> Descrpción de la habitación</h6>
          <hr>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 28-40 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
          </p>
        </div>
      
    </div>
    
    
    <div class="row d-flex justify-content-start m-2" style="background:white; border-radius:5px">
    <p style="text-align:center; font-size:24px">Habitaciones doble</p>
      <div class="col-3">
        <div class="card">
          <img src="imagenes/36_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Habitación doble</h4>
            <p class="card-text">Huespedes 4 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">Habitacón True</li>
            
            <li class="list-group-item">Tarifa/Noche: <span style="font-weight: bold;">a partir 879 €</span></li>
          </ul>
        </div>
      </div>
      <div class="col" id="image">
        <img src="imagenes/36_S.jpg" class="img-thumbnail" alt="..." width="500px">
        <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
          </div> 
        </div>
        <div class="col" id="text_habitacion">
        <hr>
        <h6>Huespedes 4 </h6>
        <hr>
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
          <hr>
        
        <h6> Descrpción de la habitación</h6>
          <hr>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 28-40 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
          </p>
        </div>
      
    </div>

    <div class="row d-flex justify-content-start m-2" style="background:white; border-radius:5px">
    <p style="text-align:center; font-size:24px">Habitaciones lujo</p>
      <div class="col-3">
        <div class="card">
          <img src="imagenes/33_S.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Habitación de lujo</h4>
            <p class="card-text">Huespedes 6 personas</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">Suite Royal</li>
            <li class="list-group-item">Tarifa/Noche: <span style="font-weight: bold;">a partir 1019 €</span></li>
          </ul>
        </div>
      </div>
        <div class="col" id="image">
          <img src="imagenes/33_S.jpg" class="img-thumbnail" alt="..." width="500px">
          <div class="card-body" style="margin-left: 30px;">
            <a href="#" class="card-link"></a>
            <button id="btn">Reservar</button>
          </div> 
        </div>
        <div class="col" id="text_habitacion">
          <hr>
        <h6>Huespedes 6 </h6>
        <hr>
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
        <hr>
        
        <h6> Descrpción de la habitación</h6>
          <hr>
          <p>  Habitaciones Clásicas en las plantas bajas, con vistas sobre la entrada principal.
            Espaciosas, 28-40 m2, con una gran cama simple. Cuartos de baño en mármol,
            con luz regulable al antojo del cliente y una espectacular ducha de estilo marroquí.
          </p>
        </div>
      
    </div>

  </div>
  
</form>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

