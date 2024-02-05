
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">

<?php

try{
  $q_select = $pdo -> prepare('SELECT * FROM servicios where id_servicio =15');
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

<form action="" method="POST">

    
<div class="row d-flex justify-content-start m-2" style="background:#f5e1ce; border-radius:5px">
        <p style="text-align:center; font-size:24px">Spa</p>
        <div class="col-3">
        <div class="card">
        

          <img src="<?php echo $ruta_imagen; ?>" alt="Imagen">

          <div class="card-body"  style="margin-top: 5px;">
            <h4 class="card-title">Spa simple</h4>
            <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="border-radius: 5px;">Spa Rason</li>
            <li class="list-group-item">Tarifa/Hora: <span style="font-weight: bold;">79 €</span></li>
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
          <h5>Span Simple</h5>
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

