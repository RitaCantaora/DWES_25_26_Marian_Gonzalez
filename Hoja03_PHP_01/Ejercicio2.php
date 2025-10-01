<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <h2>Programa que indique si un número es perfecto. Un número es perfecto cuando la suma de sus
        divisores es igual al número. Ejemplo: 6 es un número perfecto porque sus divisores son 1, 2 y 3, y
        1 + 2 + 3 = 6.</h2>
    <?php


    $numero = 6;
    $divisor = 0;

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i ==  0) {
            $divisor += $i;
        }

        if ($divisor == $numero) {
        }
    }
    if ($divisor == $numero) {
        echo "$numero es un numero prefecto ";
    } else {

        echo " $numero no es un numero perfecto ";
    }

    ?>
</body>

</html>