
<?php

  session_start();
  
?>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>
        <link rel="stylesheet" href="/student042/dwes/css/header.css">
       
        <div class="d-flex justify-content-center m-5">
            
            <form class="formHeader" method="POST">
                <a href="/student042/dwes/html/habitaciones.php">
                    <div class="alert alert-light" role="alert">
                        Reservar su Estancia
                    </div>
                </a>
                <a href="/student042/dwes/html/restaurante.php">
                    <div class="alert alert-light" role="alert">
                        Reservar su Mesa
                    </div>
                </a>
                            
                <a href="/student042/dwes/html/belleza.php">
                    <div class="alert alert-light" role="alert">
                        Reservar su Belleza
                    </div>
                </a>
                <a href="/student042/dwes/html/eventos.php">
                    <div class="alert alert-light" role="alert">
                        Reservar su Evento
                    </div>
                </a>
            </form>
        </div>
            
        <?php

        include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

        ?>