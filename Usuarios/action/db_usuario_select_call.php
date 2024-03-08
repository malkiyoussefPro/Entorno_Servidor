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
                echo "<td>" . $usuario['contrasena_usuario'] . "</td>"; 
                echo "<td>" . $usuario['role_usuario'] . "</td>";
                echo "<td>" . $usuario['fecha_creacion_cuenta'] . "</td>";
                echo "<td>";
                ?>
                <a href="/student042/dwes/Usuarios/operaciones.php" name="insertar" class="btn btn-info btn-sm m-1"> Operaciones </a>

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

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
  
?>
