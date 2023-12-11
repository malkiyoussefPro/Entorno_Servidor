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
      <th scope="col">Civilidad</th>
      <th scope="col">Nombre cliente</th>
      <th scope="col">Dni</th>
      <th scope="col">Id usuario</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Domicilio </th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Pais</th>
      <th scope="col ">Operaciones</th>
    </tr>
  </thead>

  <?php
      if (isset($_POST['buscar'])) {
        $id_cliente = $_POST['id_cliente'];

      // Realizar la consulta para obtener la información del cliente
      $q_select = $pdo->prepare('SELECT * FROM clientes WHERE id_cliente = ?');
      $q_select->execute([$id_cliente]);
      $cliente = $q_select->fetch(PDO::FETCH_ASSOC);

      if ($cliente) {
            ?>
            <tr>
                <td><?php echo $cliente['id_cliente']; ?></td>
                <td><?php echo $cliente['civilidad']; ?></td>
                <td><?php echo $cliente['nombre_cliente']; ?></td>
                <td><?php echo $cliente['dni_cliente']; ?></td>
                <td><?php echo $cliente['fechNacimiento_cliente']; ?></td>
                <td><?php echo $cliente['tel_cliente']; ?></td>
                <td><?php echo $cliente['email_cliente']; ?></td>
                <td><?php echo $cliente['email_cliente']; ?></td>
                <td><?php echo $cliente['direccion_cliente']; ?></td>
                <td><?php echo $cliente['cp_cliente']; ?></td>
                <td><?php echo $cliente['ciudad_cliente']; ?></td>
                <td><?php echo $cliente['pais_cliente']; ?></td>
                <td>
                    <a href="/student042/dwes/Clientes/formulario_cliente_insert.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>
                </td>
                <td>
                    <a href="/student042/dwes/Clientes/formulario_cliente_select.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>
                </td>
                <td>
                    <a href="/student042/dwes/Clientes/formulario_cliente_update.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>
                </td>
                <td>
                    <a href="/student042/dwes/Clientes/formulario_cliente_delete.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>
                </td>
            </tr>
            <?php
        } else {
            ?>
            <tr>
                <td colspan="13">
                    <div class="alert alert-danger" role="alert">
                        No se encontró cliente con el ID <?php echo $id_cliente; ?>.
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