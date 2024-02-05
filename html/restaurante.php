
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<?php
 $q_select = $pdo -> prepare('SELECT * FROM servicios where id_servicio =14');
  $q_select ->execute();
  if ($q_select->rowCount() > 0) {

    while ($row = $q_select->fetch(PDO::FETCH_ASSOC)) {

      $ruta_imagen = $row["imagen_servicio"];
   
    }
  } 
    else {
        echo "No se encontraron resultados";
    }
  
?>

<form action="" method="POST">

    
<div class="row d-flex justify-content-start m-2" style="background:#f5e1ce; border-radius:5px">
        <p style="text-align:center; font-size:24px">Desayuno</p>
        <div class="col-3">
        <div class="card">
        

          <img src="<?php echo $ruta_imagen; ?>" alt="Imagen">

          <div class="card-body"  style="margin-top: 5px;">
            <h4 class="card-title">Desayuno simple</h4>
            <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">desayno Folcloriko</li>
            <li class="list-group-item">Tarifa/presona: <span style="font-weight: bold;">59 €</span></li>
            <div class="card-body" style="text-align :center">
              <a href="#" class="card-link"></a>
              <button id="btn">Reservar</button>
            </div> 
          </ul>
        </div>
      </div>
      <div class="col" id="image">
        <img src="<?php echo $ruta_imagen; ?>" class="img-thumbnail" alt="..." width="500px">
      </div>
      <div class="col" id="text_habitacion">
          <h5>Desayuno Simple</h5>
        <hr>
        <div>
          <ul>
            <li>Cafe con Leche</li>
            <li>Espresso</li>
            <li>Croassant</li>
            <li>Pan integral Artisanal</li>
            <li>Miel pura de neustros campos</li>
            <li>Aceite de Oliva Extra virgen</li>
            <li>Aceite de Oliva Extra virgen</li>
            <li>huevos de nuestros campos</li>
          </ul>
        </div>
            <hr>
        <h6> Descrpción del desayuno</h6>
          <hr>
          <p> Vivir una desayuno de  estilo marroquí con ambiante mezclada de los tradicinales folkloricos.
          </p>
        </div>
      
    </div>

  </div>
  
</form>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

