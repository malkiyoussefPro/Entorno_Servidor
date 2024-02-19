
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<?php
 $q_select = $pdo -> prepare('SELECT * FROM servicios_hotel where id_servicio =5');
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
          <li>Cuscús con cordero y pasas</li>
          <li>Tajine de pollo con limón y aceitunas</li>
          <li>Hummus con pan de pita casero</li>
          <li>Briwat de almendra y miel</li>
          <li>Ensalada marroquí de zanahoria rallada con comino y cilantro</li>
          <li>Té de menta fresca con pastas marroquíes</li>
        </ul>

        </div>
        <h6>Restaurante Marroquí Tradicional</h6>
        <hr>
        <p>
          Sumérgete en una experiencia culinaria auténtica en nuestro Restaurante Marroquí Tradicional. 
          Déjate llevar por los sabores exóticos y los aromas tentadores mientras exploras nuestra carta
           inspirada en la rica tradición culinaria de Marruecos. Desde tagines fragantes hasta couscous
            elaborados, cada plato está cuidadosamente preparado para ofrecerte una experiencia 
            gastronómica única. Disfruta de la hospitalidad marroquí mientras te sumerges en un ambiente
             encantador y acogedor, diseñado para transportarte a las calles de Marrakech. Ven y descubre 
             el sabor de Marruecos en cada bocado, mientras creas recuerdos inolvidables con amigos 
             y seres queridos.
        </p>

        </div>
      
    </div>

  </div>
  
</form>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

