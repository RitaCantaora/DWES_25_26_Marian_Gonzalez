<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<h2> Generar números de Armstrong entre 100 y 999: Un número es de Armstrong si la suma de los 
cubos de sus dígitos es igual al número. Por ejemplo, 153 es un número de Armstrong</h2>
<body>
   <?php
   
   
    for ($i = 100; $i <= 999; $i++) {

        $unidad = $i % 10;
        $decena = ($i / 10) % 10;
        $centena = ($i / 100) % 10;


        $suma = pow($centena, 3) + pow($decena, 3) + pow($unidad, 3);

        if ($suma == $i) {
            echo $i . " es un número de Armstrong.\n";
        }
    }
   ?>
</body>
</html>