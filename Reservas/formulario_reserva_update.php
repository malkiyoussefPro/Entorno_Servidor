<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">


<body>
    <center>
        <h1>Check-In de Reserva</h1>
        <form action="" method="POST">
            <label for="id_reserva">ID de Reserva:</label>
            <input type="text" id="id_reserva" name="id_reserva" required><br><br>
            
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required><br><br>
            
            <label for="id_habitacion">ID de Habitación:</label>
            <input type="text" id="id_habitacion" name="id_habitacion" required><br><br>
            
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="datetime-local" id="fecha_entrada" name="fecha_entrada" required><br><br>
            
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="datetime-local" id="fecha_salida" name="fecha_salida" required><br><br>
            
            <label for="check_in">Estado del Check-In:</label>
            <select name="check_in" id="check_in">
                <option value="Completado">Completado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Error">Error</option>
            </select><br><br>
 
            <a href="/student042/dwes/Reservas/action/db_reserva_checkin.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" name="checkin" id="btn_formulario" class="btn btn-warning btn-sm  m-1"> Check In</a>  

        </form>
    </center>



<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>