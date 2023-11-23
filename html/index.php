
<?php
include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
?>
        <link rel="stylesheet" href="../css/header.css">
            <center>
            <h1>Bienvenidos al Hotel Oasis</h1>
            <div class="container">
                    
                         <form class="formHeader" method="post">
                            <a href="habitaciones.php"><div class="alert alert-light" role="alert">
                            Reservar su Estancia
                            </div></a>
                            <a href="restaurante.php">
                            <div class="alert alert-light" role="alert">
                            Reservar su Mesa
                            </div>
                            </a>
                            <a href="belleza.php">
                            <div class="alert alert-light" role="alert">
                            Reservar su Belleza
                            </div>
                            </a>
                           <a href="eventos.php">
                           <div class="alert alert-light" role="alert">
                            Reservar su Evento
                            </div>
                           </a>
                        </form>
                    </center>
            </div>
        
        <?php
            include('../connection/connection.php');
        ?>

<?php

    include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>