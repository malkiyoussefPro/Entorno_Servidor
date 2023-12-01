<?php

  ob_start();
  
?>
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  if (isset($_POST['insertar'])){

  $id_Cliente = $_POST['id_cliente'];
  $id_habitacion = $_POST['id_habitacion'];
  $fecha_Entrada = $_POST['fecha_Entrada'];
  $fecha_Salida = $_POST['fecha_Salida'];
  $fecha_Reserva = $_POST['fecha_Reserva'];
  $id_pago = $_POST['id_pago'];
  $numero_reserva = $_POST['numero_reserva'];

  if(!empty($id_Cliente) && !empty($id_habitacion) && 
   !empty($fecha_Entrada) && !empty($fecha_Salida)&& !empty($fecha_Reserva) && !empty($id_pago) && !empty($numero_reserva)){


    $q_insert = $pdo -> prpare('INSERT INTO reservas_hotel VALUES  (NULL, ?, ?, ?, ?, ?, ?, ?)');
    $q_insert -> execute([$id_Cliente, $id_habitacion, $fecha_Entrada, $fecha_Salida, $fecha_Reserva, $id_pago, $numero_reserva ]);

  }


  }

?>



<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
      <form class="myFormreserva" action="" method="POST">
        <h2 >Formulario insertar reserva</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id cliente</label>
              <input type="number" class="form-control" name="id_cliente" placeholder="Id cliente">
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id habitacion</label>
              <input type="number" class="form-control" name="id_habitacion" placeholder="Id habitacion">
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Entrada</label>
              <input id="startDate" name="fecha_Entrada" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Salida</label>
              <input id="startDate" name="fecha_Salida" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Reserva</label>
              <input id="startDate" name="fecha_Reserva" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id pago</label>
              <input type="number" class="form-control" name="id_pago" placeholder="Id habitacion">
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Numero reserva</label>
              <input type="number" class="form-control" name="numero_reserva" placeholder="Id habitacion">
            </div>

          </div>

          <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn  mt-2 mb-3">Insertar</button>
          </div>
        </div>
      </form>
  </div>


<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
