<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Puesto</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha Integracion</th>
            <th scope="col">Aff_SS</th>
            <th scope="col">Imagen</th>
            <th scope="col">Curriculum</th>
            <th scope="col">Fecha Despedida</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
      if (isset($_POST['buscar'])) {
        $id_personal = $_POST['id_personal'];

      // Realizar la consulta para obtener la información del personal
      $q_select = $pdo->prepare('SELECT * FROM datos_personal WHERE id_personal = ?');
      $q_select->execute([$id_personal]);
      $personal = $q_select->fetch(PDO::FETCH_ASSOC);

      if ($personal) {
            ?>
            <tr>
                <td><?php echo $personal['id_personal']; ?></td>
                <td><?php echo $personal['nombre_personal']; ?></td>
                <td><?php echo $personal['fecha_nacimiento']; ?></td>
                <td><?php echo $personal['puesto_personal']; ?></td>
                <td><?php echo $personal['domicilio_personal']; ?></td>
                <td><?php echo $personal['telefono_personal']; ?></td>
                <td><?php echo $personal['email_personal']; ?></td>
                <td><?php echo $personal['fecha_integracion']; ?></td>
                <td><?php echo $personal['affiliacion_ss']; ?></td>
                <td><?php echo $personal['imagen_personal']; ?></td>
                <td><?php echo $personal['curriculum']; ?></td>
                <td><?php echo $personal['fecha_despedida']; ?></td>
                <td>
                    <a href="/student042/dwes/Personal/operaciones.php" name="insertar" id="btn_formulario" class="btn btn-dark btn-sm  m-1"> Operaciones </a>
                </td>
                
          
            </tr>
            <?php
        } else {
            ?>
            <tr>
                <td colspan="13">
                    <div class="alert alert-danger" role="alert">
                        No se encontró personal con el ID <?php echo $id_personal; ?>.
                    </div>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>