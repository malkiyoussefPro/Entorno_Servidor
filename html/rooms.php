
<?php
            
  if(require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php')){
    echo 'connecter';
  }else{
    echo 'no connecter';
  }
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php

/*
   // Realiza la consulta para obtener la información del id_Servicio
        $q_select = $pdo->prepare('SELECT * FROM servicios WHERE id_servicio = ?');
        $q_select->execute([$id_Servicio]);
        $servicio = $q_select->fetch(PDO::FETCH_ASSOC);
*/

if (isset($_POST['disponibilidad'])) {
  $fecha_inicio = $_POST['startDate'];
  $fecha_final = $_POST['endDate'];
  $personas = $_POST['nombre_persona'];

  if (!empty($fecha_inicio) && !empty($fecha_final) && !empty($personas)) {
      // Consulta para verificar la disponibilidad de habitaciones
      $q_select = $pdo->prepare("SELECT COUNT(*) as count_disponibles
          FROM habitaciones 
          WHERE disponibilidad_habitacion = 'disponible' 
          AND estado_habitacion = 'Esta lista'
          AND (capacidad_habitacion - :numero_personas) >= 0
          AND id_habitacion NOT IN 
          (SELECT id_habitacion FROM reservas 
          WHERE (fecha_entrada BETWEEN :fecha_inicio AND :fecha_final) 
          OR (fecha_salida BETWEEN :fecha_inicio AND :fecha_final))");

      // Bind parameters
      $q_select->bindParam(':fecha_inicio', $fecha_inicio, PDO::PARAM_STR);
      $q_select->bindParam(':fecha_final', $fecha_final, PDO::PARAM_STR);
      $q_select->bindParam(':numero_personas', $personas, PDO::PARAM_INT);

      $q_select->execute();

      // Fetch data
      $result = $q_select->fetch(PDO::FETCH_ASSOC);

      if ($result['count_disponibles'] > 0) {
          echo 'Hay habitaciones disponibles';
      } else {
          echo 'No hay habitaciones disponibles';
      }
  }
}



?>

<link rel="stylesheet" href="/student042/dwes/css/header.css">


<div class="container m-5" style="border: 2px solid black; background : white ;border-radius: 10px;">
 
 <div class="row d-flex justify-content-around m-2">
   <h1 style="text-align: center;">Reservas</h1>
      <div class="row">
      <div class="col-4">
     <label for="startDate">Llegada</label>
       <input id="startDate"  class="form-control" type="date" name="startDate" />
     </div>
     <div class="col-4">
     <label for="endDate">Salida</label>
       <input id="endDate" class="form-control" type="date" name="endDate" />
     </div>
     <div class="col-2">
          <label for="inputNombrePersona">nombre de persona</label>
         
          <input type="number" name="nombre_persona" class="form-control" id="inputNombrePersona" placeholder="nombre persona">
      </div>
      
      <div class="card-body col-2">
            <button type="submit" class="btn btn-warning" id="disponibilidad " name="disponibilidad">Ver disponibilidad</button>

          </div>
    
      <div class="card-body">
          <a href="#" type="button" class="btn btn-warning" name="reservar" id="reservar">Reservar</a>  
        </div>
     
      </div>
   </div>
 