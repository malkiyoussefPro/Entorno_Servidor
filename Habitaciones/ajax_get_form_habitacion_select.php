
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormHabitacion" action="/student042/dwes/Habitacions/action/ajax_db_factura_select.php" method="POST">
        <h2>Buscar Habitacion</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputHabitacion">Id Habitacion</label>
                    <input type="number" name="id_Habitacion" class="form-control" id="inputHabitacion" placeholder="Id Habitacion">
                </div>
            </div>
            <div class="d-flex justify-content-center m-2">
                <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
            </div>
        </div>
    </form>
</div>
    
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
