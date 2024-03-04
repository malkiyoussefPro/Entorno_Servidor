
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
    
?>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<center><h1>MANUAL INSTALACIONES</h1></center>

<table class="table" style="margin: 15px auto; padding: 15px auto">
  <thead class="table-warning">
  <tr>
      
      <th scope="col">PROGRAMA</th>
      <th scope="col">VERSION</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
    
  </thead>
  <tbody>
  <tr>
      <td>1- XAAMP</td>
      <td>3.3.0</td>
      <td><p>XAMPP es una distribución de Apache totalmente gratuita y fácil de instalar que contiene MySQL, PHP y Perl. 
        El paquete de código abierto XAMPP ha sido diseñado para ser increíblemente fácil de instalar y usar.</p></td>
    </tr>
    <tr>
      <td>2- PHP</td>
      <td>PHP 8</td>
      <td><p>PHP es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear páginas web, favoreciendo la conexión entre los servidores y la interfaz de usuario.
         Entre los factores que hicieron que PHP se volviera tan popular, se destaca el hecho de que es de código abierto</p></td>
    </tr>
    <tr>
      <td>3- phpMyAdmin</td>
      <td> 5.2.1</td>
      <td><p>PhpMyAdmin es una aplicación web que sirve para administrar bases de datos MySQL de forma sencilla y con una interfaz amistosa. 
        Se trata de un software muy popular basado en PHP.</p></td>
    </tr>
    <tr>
      <td>4- FileZilla</td>
      <td>3.66.1</td>
      <td><p>Se trata de una herramienta pensada para aprovechar los protocolos FTP, lo que permite la descarga y el envío de archivos a 
        gran velocidad a través de un servidor dedicado o compartido.</p></td>
    </tr>
  </tbody>
</table>


<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

