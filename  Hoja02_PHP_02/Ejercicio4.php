<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <h2>Realizar un programa que desglose una cantidad de euros en billetes de 10 y 5 y monedas de 1 
euro utilizando únicamente sumas, restas, multiplicaciones, divisiones y el operador de resto (%)</h2> 

<?php

$cantidad = 50;
$billetes10 = $cantidad/10;
$resto10 = $cantidad%10;

$billetes5 = $cantidad/5;
$resto5 = $cantidad%5;

$monedas = $cantidad/1;
$restoMonedas = $cantidad%1;

echo "Cantidad total: $cantidad euros<br>";
echo "Billetes de 10 euros: $billetes10<br>";
echo "Billetes de 5 euros: $billetes5<br>";
echo "Monedas de 1 euro: $monedas<br>";
?>
</body>
</html>