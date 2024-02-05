
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormSevicio" action="/student042/dwes/Sevicios/action/ajax_db_servicio_select.php" method="POST">
        <h2>Buscar Sevicio</h2>
        <div class="container mt-2 ms-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSevicio">Nombre Sevicio</label>
                    <input type="text" name="nombre_Sevicio" class="form-control" id="inputSevicio" placeholder="nombre Sevicio">
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
