<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<h2> Programa que introduce como dato una cantidad de dinero en euros, y calcula e imprime el
    mejor desglose de moneda (mínimo número de unidades monetarias de curso legal).
    Podemos tener un array con todas las cantidades de billetes y monedas</h2>

<body>
    <?php

    $cantidad = 1235;
    $euros = [50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1];

    function desgloseDinero($cantidad, $euros)
    {

        foreach ($euros as $euro) {

            if ($cantidad <= $euro) {
                $numeroEuros = $cantidad % $euro;
                $cantidadTotal = $numeroEuros*$euro;
                $array[$euros] = $cantidadTotal;
            }
        }
        return $array;
    }
    ?>
</body>

</html>