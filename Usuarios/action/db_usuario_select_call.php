<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

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
</table>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  
?>
