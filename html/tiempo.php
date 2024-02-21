<?php

  // Configurar la clave de la API de AccuWeather
  $apiKey = '1MgMMLa5Fh16714aQTiAbJUZyHePskPt';

  // ID de la ubicación  Marrakech, Marruecos
  $locationKey = '154487'; 

  // URL de la API de AccuWeather para obtener el pronóstico actual
 // $url = 'https://dataservice.accuweather.com/currentconditions/v1/'.$locationKey.'?apikey='.$apiKey.'&language=es&details=true';
  $url = 'https://dataservice.accuweather.com/currentconditions/v1/'.$locationKey.'?apikey='.$apiKey.'&language=es&details=true';

$currentconditions_file = $url;
$currentconditions_json = file_get_contents($currentconditions_file);
$currentconditions = json_decode($currentconditions_json, true);
print_r($currentconditions) ;echo' <br> ' . '<br>';
echo  $currentconditions_json;

?>