<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>


<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormHabitacion" action="/student042/dwes/Habitaciones/action/db_habitacion_insert_call.php" method="POST" enctype="multipart/form-data">
    <h2>Formulario insertar habitacion</h2>
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputHabitacion">Tipo Habitacion</label>
                <select name="tipo_habitacion" id="inputHabitacion" class="form-control">
                    <option selected>Seleccionar...</option>
                    <option>Single</option>
                    <option>Doble</option>
                    <option>Suite</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputDisponibilidad">Disponibilidad habitacion</label>
                <select name="disponibilidad_habitacion" id="inputDisponibilidad" class="form-control">
                    <option selected>Seleccionar...</option>
                    <option>Disponible</option>
                    <option>Ocupada</option>
                    <option>Bloqueada</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEstado">Estado habitacion</label>
                <select name="estado_habitacion" id="inputEstado" class="form-control">
                    <option selected>Seleccionar...</option>
                    <option>En proceso de limpieza</option>
                    <option>En proceso de mantenimiento</option>
                    <option>Esta lista</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputUbicacion">Ubicacion Habitacion</label>
                <select name="ubicacion_habitacion" id="inputUbicacion" class="form-control">
                    <option selected>Seleccionar...</option>
                    <option>Vista mar</option>
                    <option>Vista piscina</option>
                    <option>Vista jardin</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputPrecio">Precio</label>
                <input type="number" min="779" max="1279" name="precio_habitacion" class="form-control" id="inputPrecio" placeholder="Precio habitacion">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Imagen Habitación</label>
                <input class="form-control" type="file" id="formFile" name="imagen_habitacion">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn m-2">Insertar</button>
        </div>
    </div>
</form>
</div>


<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>


