
<?php
          
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>


<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

  <div class="d-flex justify-content-center">

  <form method="post" action="/student042/dwes/Pago//student042/dwes/Pago/clientes.php.php">
    <div id="container-formulario-pago" class="container-formulario-pago">
   

        <!--formulario de pago -->
        <h3>Confirmación pago</h3>
        <div class="form-group">
            <label for="nombre_titular">Nombre del Titular:</label>
            <input type="text" id="nombre_titular" name="nombre_titular" required class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" class="form-control" placeholder="0000 0000 0000 0000" maxlength="19">
        </div>
        <div class="form-group">
            <label for="fecha_caducidad">Fecha de Vencimiento:</label>
            <input type="text" id="fecha_caducidad" name="fecha_caducidad" placeholder="MM/AA" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo_pago">Tipo de tarjeta:</label>
            <input type="text" id="tipo_pago" name="tipo_pago" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="cantidad_pagar">Cantidad a Pagar:</label>
            <input type="text" id="cantidad_pagar" name="cantidad_pagar" required class="form-control" value="<?php if (isset($total)) echo $total; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn-pagar" id="pagar" name="pagar">Pagar</button>
        </div>
    </div>
</form>



    <script src="/javascript/pago.js"></script>
      
  </div>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>