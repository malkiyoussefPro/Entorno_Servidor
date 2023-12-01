<?php

session_start();
session_unset();
session_destroy();

header('Location:/student042/dwes/html/dashboard.php');

?>