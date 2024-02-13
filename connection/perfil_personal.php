<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

if(isset($_POST['iniciar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    if(!empty($nombre) && !empty($email)){
        $q_select = $pdo->prepare('SELECT * FROM personal_hotel WHERE nombreCompleto_personal = ? AND email_personal = ?');
        $q_select->execute([$nombre, $email]);
        $var = $q_select->fetch();

        if($var){
            
            $_SESSION['name'] = $nombre;
            $_SESSION['email'] = $email;

            header('Location: /student042/dwes/html/dashboard.php');
            exit;
        } else {
            header('Location: /student042/dwes/html/dashboard.php');
            exit;
        }
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Todos los campos son obligatorios.
        </div>
        <?php
    }
}
?>
