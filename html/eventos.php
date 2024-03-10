
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<?php

try{
  $q_select = $pdo -> prepare('SELECT * FROM servicios_hotel where id_servicio =4');
  $q_select ->execute();
  if ($q_select->rowCount() > 0) {

    while ($row = $q_select->fetch(PDO::FETCH_ASSOC)) {

      $ruta_imagen = $row["imagen_servicio"];
   
    }
  } 
    else {
        echo "No se encontraron resultados";
    }
  } catch (PDOException $e) {
    echo "Error en la consulta SQL: " . $e->getMessage();
}
  
?>

<form action="/student042/dwes/Eventos/formulario_evento_insert.php" method="POST">



    
<div class="row d-flex justify-content-start m-2" style="background:#f5e1ce; border-radius:5px">
        <p style="text-align:center; font-size:24px">Eventos</p>
        <div class="col-3">
        <div class="card">
        

          <img src="<?php echo $ruta_imagen; ?>" alt="Imagen">

          <div class="card-body"  style="margin-top: 5px;">
            <h4 class="card-title">Excursion</h4>
            <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">Excursion</li>
            <li class="list-group-item">Tarifa: <span style="font-weight: bold;">179 €</span></li>
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
          <h5>Excursión</h5>
        <hr>
        <div>
          <ul>
            <li>Desayuno tradicional </li>
            <li>Transporte ida y vuelta con Aire acondicionado</li>
            <li>Transporte con Acceso a Internet</li>
              <li>Comida</li>
              <li>Cuesta del sol con camellos</li>
              <li>Cena</li>
              <li>Animación folklorika</li>
              <li>Dormir en campanas</li>
          </ul>
        </div>
            <hr>
        <h6> Excursión en camellos en el desierto</h6>
          <hr>
        <p>
            Disfruta de una aventura única explorando el
          vasto desierto a lomos de un camello. Descubre paisajes impresionantes mientras 
          te sumerges en la tranquilidad y la majestuosidad del desierto. Nuestros guías expertos 
          te llevarán a través de dunas doradas y oasis ocultos, brindándote una experiencia inolvidable 
          en contacto con la naturaleza. Vive la emoción de contemplar el atardecer sobre 
          las infinitas arenas del desierto y déjate maravillar por el cielo estrellado durante la noche. 
          Una experiencia que te conectará con la esencia y la belleza del desierto.
        </p>

        </div>
      
    </div>

  </div>
  
</form>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

