<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

// JSON proporcionado
$url = $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/current_Condition.json';
$json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/current_Condition.json');

// Decodificar el JSON
$data = json_decode($json_data, true);

$fecha = date('Ymd');

$copy =copy($url, $_SERVER['DOCUMENT_ROOT'].'/student042/dwes/apis/accuweather_'.$fecha.'.json');


// Insertar los datos en la tabla WeatherData
foreach ($data as $item) {
    $stmt = $pdo->prepare("INSERT INTO WeatherData (LocalObservationDateTime, WeatherText, WeatherIcon, HasPrecipitation, IsDayTime, Temperature_Value, RealFeelTemperature_Value, RelativeHumidity, Wind_Speed_Value) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindValue(1, $item['LocalObservationDateTime']);
    $stmt->bindValue(2, $item['WeatherText']);
    $stmt->bindValue(3, $item['WeatherIcon']);
    $stmt->bindValue(4, $item['HasPrecipitation']);
    $stmt->bindValue(5, $item['IsDayTime']);
    $stmt->bindValue(6, $item['Temperature']['Metric']['Value']);
    $stmt->bindValue(7, $item['RealFeelTemperature']['Metric']['Value']);
    $stmt->bindValue(8, $item['RelativeHumidity']);
    $stmt->bindValue(9, $item['Wind']['Speed']['Metric']['Value']);
    $stmt->execute();
    
}

//echo "Datos insertados correctamente.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Meteorológicos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Datos Meteorológicos</h2>

<table>
    <tr>
        <th>Velocidad del viento (km/h)</th>
        <th>Texto del clima</th>
        <th>¿Es de día?</th>
        <th>Temperatura (°C)</th>
        <th>Sensación térmica (°C)</th>
        <th>Humedad relativa (%)</th>
    </tr>
    <?php foreach ($data as $item): ?>
    <tr>
        <td><?php echo $item['Wind']['Speed']['Metric']['Value']; ?></td>
        <td><?php echo $item['WeatherText']; ?></td>
        <td><?php echo $item['IsDayTime'] ? 'Sí' : 'No'; ?></td>
        <td><?php echo $item['Temperature']['Metric']['Value']; ?></td>
        <td><?php echo $item['RealFeelTemperature']['Metric']['Value']; ?></td>
        <td><?php echo $item['RelativeHumidity']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

