<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<h2>Visualizar una pirámide de asteriscos dada su altura. Usa bucles para generar y visualizar una
    pirámide de asteriscos, por ejemplo con una altura de 5:</h2>

<body>
    <?php

    $altura = 5;
    echo "<br>";
    for ($i = 1; $i <= $altura; $i++) {
        for ($j = $i; $j < $altura; $j++) {
            echo "&nbsp ";
        }

        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }

        echo "<br>";
    }

    ?>
</body>

</html>