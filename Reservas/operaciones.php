<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
?>

<center>
    <div class="form-group">
        <label for="inputpersonal">Buscar Reserva</label>
        <input type="text" name="numero_reserva" class="form-control" id="inputReserva" placeholder="Buscar">
    </div>

    <div id="resultadoBusqueda"></div>
</center>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID Reserva</th>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">ID Habitacion</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Fecha Salida</th>
            <th scope="col">Fecha Reserva</th>
            <th scope="col">ID Pago</th>
            <th scope="col">Numero Reserva</th>
            <th scope="col">Id Servicio</th>
            <th scope="col">Check In</th>
            <th scope="col">Checkout</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // Realiza la consulta para obtener todas las reservas
        $q_select_all = $pdo->prepare('SELECT * FROM reservas');
        $q_select_all->execute();

        // Obtiene los resultados de la consulta
        $reservas = $q_select_all->fetchAll(PDO::FETCH_ASSOC);

        // Muestra las reservas en una tabla
        foreach ($reservas as $reserva) {
          ?>
          <tr>
              <td><?php echo $reserva['id_reserva']; ?></td>
              <td><?php echo $reserva['nombre_usuario']; ?></td>
              <td><?php echo $reserva['id_habitacion']; ?></td>
              <td><?php echo $reserva['fecha_entrada']; ?></td>
              <td><?php echo $reserva['fecha_salida']; ?></td>
              <td><?php echo $reserva['fecha_reserva']; ?></td>
              <td><?php echo $reserva['id_pago']; ?></td>
              <td><?php echo $reserva['numero_reserva']; ?></td>
              <td><?php echo $reserva['id_servicio']; ?></td>
              <td><?php echo $reserva['check_in']; ?></td>
              <td><?php echo $reserva['check_out']; ?></td>
              <td>
                  <?php if ($reserva['check_in'] == 'Completado') : ?>
                      <a href="/student042/dwes/Restaurante/formulario_restaurante_insert.php" class="btn btn-primary btn-sm">Restaurante</a>
                      <a href="/student042/dwes/Eventos/formulario_evento_insert.php" class="btn btn-primary btn-sm">Evento</a>
                      <a href="/student042/dwes/Belleza/formulario_belleza_insert.php" class="btn btn-primary btn-sm">Belleza</a>
                  <?php endif; ?>
                  <a href="/student042/dwes/Reservas/formulario_reserva_update.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="checkin" id="btn_formulario" class="btn btn-success btn-sm  m-1">Check In</a>
                  <a href="/student042/dwes/Reservas/formulario_reserva_update.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="checkin" id="btn_formulario" class="btn btn-warning btn-sm  m-1">Check Out</a>
              </td>
          </tr>
          <?php
        }
       ?>
    </tbody>
</table>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
