<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">Email usuario</th>
            <th scope="col">Contraseña usuario</th>
            <th scope="col">Role Usuario</th>
            <th scope="col">Fecha creación cuenta</th>
            <th scope="col">Operaciones</th>

            <th scope="col">Estado comentario</th>
            <th scope="col">Id Cliente</th>
            <th scope="col">Numero reserva</th>
            <th scope="col">Fecha Creación comentario</th>
            <th scope="col">Comentario</th>
            <th scope="col">Comentario</th>
            <th scope="col" class="d-flex justify-content-center">Operaciones</th>

        </tr>
    </thead>
    <tbody>

        <?php

        if(isset($_POST['buscar'])){
            $idUsuario = $_POST['id_Usuario'];

            // Realiza la consulta para obtener la información del usuario
            $q_select = $pdo->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
            $q_select->execute([$idUsuario]);
            $usuario = $q_select->fetch(PDO::FETCH_ASSOC);

            if($usuario){
                // Muestra la información del usuario en una tabla
                echo "<tr>";
                echo "<td>" . $usuario['id_usuario'] . "</td>";
                echo "<td>" . $usuario['nombre_usuario'] . "</td>";
                echo "<td>" . $usuario['email_usuario'] . "</td>";
                echo "<td>" . $usuario['contraseña_usuario'] . "</td>"; // Corregir el nombre del campo de contraseña
                echo "<td>" . $usuario['role_usuario'] . "</td>";
                echo "<td>" . $usuario['fecha_creacion_cuenta'] . "</td>";
                echo "<td>";
                ?>
                <a href="/student042/dwes/Usuarios/formulario_usuario_insert.php" name="insertar" class="btn btn-success btn-sm m-1"> Insertar </a>
                <a href="/student042/dwes/Usuarios/formulario_usuario_select.php" name="buscar" class="btn btn-primary btn-sm m-1"> Buscar</a>
                <a href="/student042/dwes/Usuarios/formulario_usuario_update.php" name="actualizar" class="btn btn-warning btn-sm m-1"> Actualizar</a>
                <a href="/student042/dwes/Usuarios/formulario_usuario_delete.php" name="suprimir" class="btn btn-danger btn-sm m-1"> Suprimir </a>
                <?php
                echo "</td>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='7'>Usuario no encontrado.</td></tr>";
            }
        }

        ?>

    </tbody>

    <?php

    if (isset($_POST['buscar'])) {
        $id_comentario = $_POST['id_comentario'];

        // Realiza la consulta para obtener la información del id_comentario
        $q_select = $pdo->prepare('SELECT * FROM comentarios_clientes WHERE id_comentario = ?');
        $q_select->execute([$id_comentario]);
        $comentario = $q_select->fetch(PDO::FETCH_ASSOC);

        if ($comentario) {
          // Muestra la información del comentario en una fila de la tabla
          echo "<tr>";
          echo "<td>" . $comentario['id_comentario'] . "</td>";
          echo "<td>" . $comentario['estado_comentario'] . "</td>";
          echo "<td>" . $comentario['id_cliente'] . "</td>";
          echo "<td>" . $comentario['numero_reserva'] . "</td>";
          echo "<td>" . $comentario['fecha_creacion_comentario'] . "</td>";
          echo "<td>" . $comentario['comentarios'] . "</td>";
          echo "<td>" . $comentario['score'] . "</td>";
          echo "<td>";

            ?>
            <a href="formulario_comentario_insert_call.php" name="insertar" class="btn btn-success btn-sm m-1"> Insertar </a>
            <a href="formulario_comentario_select_call.php" name="buscar" class="btn btn-primary btn-sm m-1"> Buscar</a>
            <a href="formulario_comentario_update_call.php" name="actualizar" class="btn btn-warning btn-sm m-1"> Actualizar</a>
            <a href="formulario_comentario_delete_call.php" name="suprimir" class="btn btn-danger btn-sm m-1"> Suprimir </a>
            <?php
            echo "</td>";
            echo "</tr>";
        } else {
            echo "<tr><td colspan='7'>ID de comentario no encontrado.</td></tr>";
        }
    }

    ?>

  </tbody>

</table>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  
?>
