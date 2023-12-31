<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php

// Obtén el ID de la reserva desde la URL
$idReserva = isset($_GET['id']);

// Consulta la información de la reserva seleccionada
$q_select = $pdo->prepare('SELECT * FROM reservas_hotel WHERE id_reserva = ?');
$q_select->execute([$idReserva]);
$reserva = $q_select->fetch(PDO::FETCH_ASSOC);

// Verifica si la reserva existe
if(!$reserva) {
    echo "Reserva no encontrada.";
    exit;
}
?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormreserva" action="/student042/dwes/Reservas/action/db_reserva_update_call.php" method="POST">
        <h2 >Formulario actualizar reserva</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id reserva</label>
              <input type="number" class="form-control" name="id_reserva" placeholder="Id reserva">
            </div>
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
              <input id="startDate" name="fecha_Entrada" class="form-control" type="date" />
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
            <a href="/student042/dwes/Reservas/action/db_reserva_update_call.php?id=<?php echo $reserva['id_reserva']; ?>" class="btn btn-warning btn-sm">Actualizar</a>
          </div>
        </div>
      </form>
  </div>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>