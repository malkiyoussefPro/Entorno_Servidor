<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

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
      $q_select = $pdo->prepare('SELECT * FROM personal_hotel WHERE id_personal = ?');
      $q_select->execute([$id_personal]);
      $personal = $q_select->fetch(PDO::FETCH_ASSOC);

      if ($personal) {
            ?>
            <tr>
                <td><?php echo $personal['id_personal']; ?></td>
                <td><?php echo $personal['nombreCompleto_personal']; ?></td>
                <td><?php echo $personal['fechaNacimiento_personal']; ?></td>
                <td><?php echo $personal['puesto_personal']; ?></td>
                <td><?php echo $personal['domicilio_personal']; ?></td>
                <td><?php echo $personal['tel_personal']; ?></td>
                <td><?php echo $personal['email_personal']; ?></td>
                <td><?php echo $personal['fechaIntegracion_personal']; ?></td>
                <td><?php echo $personal['afiliacionSS_personal']; ?></td>
                <td><?php echo $personal['imagen_personal']; ?></td>
                <td><?php echo $personal['curriculum']; ?></td>
                <td><?php echo $personal['fecha_despedida']; ?></td>
                <td>
                    <a href="/student042/dwes/Personal/formulario_personal_insert.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>
                </td>
                <td>
                    <a href="/student042/dwes/Personal/formulario_personal_select.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>
                </td>
                <td>
                    <a href="/student042/dwes/Personal/formulario_personal_update.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>
                </td>
                <td>
                    <a href="/student042/dwes/Personal/formulario_personal_delete.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>
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

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>