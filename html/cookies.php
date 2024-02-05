<?php
    setcookie('nom', 'Youssef malki', time()+3600);

    if(isset($_COOKIE ['nom'])){

        $nom = $_COOKIE ['nom'];
        echo "Bonjour: ".$nom;
    }else{
        echo "Cookies non défini";
    }

?>