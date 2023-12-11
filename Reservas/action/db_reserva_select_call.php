<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Reserva</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Id Habitacion</th>
      <th scope="col">Fecha Entrada</th>
      <th scope="col">Fecha Salida</th>
      <th scope="col">Fecha Reserva</th>
      <th scope="col">Id Pago</th>
      <th scope="col">Numero Reserva</th>
      <th scope="col" class="d-flex justify-content-center">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php

    if(isset($_POST['buscar'])){
        $idReserva = isset($_POST['id_reserva']) ? intval($_POST['id_reserva']) : 0;

        // Validación: Asegúrate de que el ID de la reserva sea un número entero positivo
        if($idReserva <= 0){
            echo "<tr><td colspan='8'>El ID de reserva proporcionado no es válido.</td></tr>";
        } else {
            // Realiza la consulta en la base de datos
            $q_select = $pdo->prepare('SELECT * FROM reservas_hotel WHERE id_reserva = ?');
            $q_select->execute([$idReserva]);

            // Obtiene los resultados de la consulta
            $reserva = $q_select->fetch(PDO::FETCH_ASSOC);

            // Verifica si se encontró la reserva
            if($reserva){
                // Muestra la información del reserva en una tabla
                echo "<tr>";
                echo "<td>" . $reserva['id_reserva'] . "</td>";
                echo "<td>" . $reserva['id_cliente'] . "</td>";
                echo "<td>" . $reserva['id_habitacion'] . "</td>";
                echo "<td>" . $reserva['fecha_entrada'] . "</td>";
                echo "<td>" . $reserva['fecha_salida'] . "</td>";
                echo "<td>" . $reserva['fecha_reserva'] . "</td>";
                echo "<td>" . $reserva['id_pago'] . "</td>";
                echo "<td>" . $reserva['numero_reserva'] . "</td>";
                echo "<td class='d-flex justify-content-center'>";
                ?>
                <a href="formulario_reserva_insert_call.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm m-1"> Insertar </a>
                <a href="formulario_reserva_select_call.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>
                <a href="formulario_reserva_update_call.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>
                <a href="formulario_reserva_delete_call.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm m-1"> Suprimir </a>
                <?php
                echo "</td>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='8'>Reserva no encontrada.</td></tr>";
            }
        }
    }

    ?>
  </tbody>
</table>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
