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
            // Realiza la consulta para obtener todas los servicios
          $q_select_all = $pdo->prepare('SELECT * FROM datos_clientes');
          $q_select_all->execute();

          // Obtiene los resultados de la consulta
          $clientes = $q_select_all->fetchAll(PDO::FETCH_ASSOC);

          // Muestra las reservas en una tabla
          foreach ($clientes as $cliente) {
            ?>
            <tr>
                <td><?php echo $cliente['id_cliente']; ?></td>
                <td><?php echo $cliente['civilidad']; ?></td>
                <td><?php echo $cliente['nombre_cliente']; ?></td>
                <td><?php echo $cliente['dni_cliente']; ?></td>
                <td><?php echo $cliente['fechNacimiento_cliente']; ?></td>
                <td><?php echo $cliente['tel_cliente']; ?></td>
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
        }
       ?>
    </tbody>
</table>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>