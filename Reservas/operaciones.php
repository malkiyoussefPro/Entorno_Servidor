
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<center>
 <div class="form-group">
      <label for="inputpersonal">Buscar Reserva</label>
      <input type="text" name="nombre_reserva" class="form-control" id="inputReserva" placeholder="Buscar">
  </div>
 </center>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID Reserva</th>
            <th scope="col">ID Cliente</th>
            <th scope="col">ID Habitacion</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Fecha Salida</th>
            <th scope="col">Fecha Reserva</th>
            <th scope="col">ID Pago</th>
            <th scope="col">Numero Reserva</th>
            <th scope="col">operaciones</th>
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
      
          <td><?php  echo $reserva['id_reserva']; ?> </td>
          <td><?php  echo $reserva['nombre_usuario']; ?> </td>
          <td><?php  echo $reserva['id_habitacion']; ?> </td>
          <td><?php  echo $reserva['fecha_entrada']; ?> </td>
          <td><?php  echo $reserva['fecha_salida']; ?> </td>
          <td><?php  echo $reserva['fecha_reserva']; ?> </td>
          <td><?php  echo $reserva['id_pago']; ?> </td>
          <td><?php  echo $reserva['numero_reserva']; ?> </td>
                   
      <td>     
        <a href="formulario_reserva_insert.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="formulario_reserva_select.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="formulario_reserva_update.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="formulario_reserva_delete.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
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