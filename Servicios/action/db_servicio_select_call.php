<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Departamento Servicio</th>
            <th scope="col">Descripción Servicio</th>
            <th scope="col">Imagen Servicio</th>
            <th scope="col">Precio Servicio</th>
            <th scope="col">Fecha Creación Servicio</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>

    <?php

    if (isset($_POST['buscar'])) {
        $id_Servicio = $_POST['id_servicio'];

        // Realiza la consulta para obtener la información del id_Servicio
        $q_select = $pdo->prepare('SELECT * FROM servicios_hotel WHERE id_servicio = ?');
        $q_select->execute([$id_Servicio]);
        $servicio = $q_select->fetch(PDO::FETCH_ASSOC);

        if ($servicio) {
            // Muestra la información del servicio en una fila de la tabla
            echo "<tr>";
            echo "<td>" . htmlspecialchars($servicio['id_servicio']) . "</td>";
            echo "<td>" . htmlspecialchars($servicio['departamento']) . "</td>";
            echo "<td>" . htmlspecialchars($servicio['descripción']) . "</td>";
            echo "<td>" . htmlspecialchars($servicio['imagen_servicio']) . "</td>";
            echo "<td>" . htmlspecialchars($servicio['precio']) . "</td>";
            echo "<td>" . htmlspecialchars($servicio['fecha_creacion_servicio']) . "</td>";
            echo "<td>";
            echo "<a href='/student042/dwes/Servicios/operaciones.php?id_servicio=" . $servicio['id_servicio'] . "' name='insertar' id='btn_formulario' class='btn btn-dark btn-sm m-1'>Operaciones</a>";  
  
            echo "</td>";
            echo "</tr>";
        } else {
            echo "<tr><td colspan='7'>ID de Servicio no encontrado.</td></tr>";
        }
    }

    ?>

  </tbody>
</table>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
