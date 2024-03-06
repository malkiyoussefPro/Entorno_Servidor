
<!-- Campo de entrada oculto -->
<input type="hidden" id="id_habitacion" name="id_habitacion">

<!-- Menú desplegable oculto -->
<select name="tipo_habitacion" id="inputTipoHabitacion" class="form-control" onchange="actualizarIdHabitacion()" style="display: none;">
    <?php foreach ($habitaciones_disponibles as $habitacion) : ?>
        <option value="<?php echo $habitacion['id_habitacion']; ?>"><?php echo $habitacion['tipo_habitacion']; ?></option>
    <?php endforeach; ?>
</select>


<script>
    function actualizarIdHabitacion() {
        var idHabitacion = document.getElementById("inputTipoHabitacion").value;
        document.getElementById("id_habitacion").value = idHabitacion;
        actualizarPrecioTotal();
    }

    function actualizarPrecioTotal() {
        var idHabitacion = document.getElementById("id_habitacion").value;
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/student042/dwes/Fonction/calcularrserva.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById("cantidad_pagar").value = xhr.responseText;
            }
        };
        xhr.send("id_habitacion=" + idHabitacion + "&startDate=" + startDate + "&endDate=" + endDate);
    }
</script>

