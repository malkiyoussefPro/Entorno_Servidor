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
            <th scope="col" class="d-flex justify-content-center">Operaciones</th>
        </tr>
    </thead>
    <tbody>

    <?php

    if (isset($_POST['buscar'])) {
        $id_Servicio = $_POST['id_Servicio'];

        // Realiza la consulta para obtener la información del id_Servicio
        $q_select = $pdo->prepare('SELECT * FROM servicios WHERE id_servicio = ?');
        $q_select->execute([$id_Servicio]);
        $servicio = $q_select->fetch(PDO::FETCH_ASSOC);

        if ($servicio) {
          // Muestra la información del servicio en una fila de la tabla
          echo "<tr>";
          echo "<td>" . $servicio['id_servicio'] . "</td>";
          echo "<td>" . $servicio['departamento'] . "</td>";
          echo "<td>" . $servicio['descripción'] . "</td>";
          echo "<td>" . $servicio['imagen_servicio'] . "</td>";
          echo "<td>" . $servicio['precio'] . "</td>";
          echo "<td>" . $servicio['fecha_creacion_servicio'] . "</td>";
          echo "<td>";

            ?>
            <a href="formulario_servicio_insert_call.php" name="insertar" class="btn btn-success btn-sm m-1"> Insertar </a>
            <a href="formulario_servicio_select_call.php" name="buscar" class="btn btn-primary btn-sm m-1"> Buscar</a>
            <a href="formulario_servicio_update_call.php" name="actualizar" class="btn btn-warning btn-sm m-1"> Actualizar</a>
            <a href="formulario_servicio_delete_call.php" name="suprimir" class="btn btn-danger btn-sm m-1"> Suprimir </a>
            <?php
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
