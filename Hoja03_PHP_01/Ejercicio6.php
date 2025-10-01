<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<h2> Genera una serie geométrica que comienza en 1 y se multiplica por 2 en cada paso: 1, 2, 4, 8, 16,
    32..</h2>

<body>
    <?php

    $numero = 1;

    for ($i = 1; $i <= 10; $i++) {

        $numero *= 2;

        echo " $numero </br>";
    }

    ?>
</body>

</html>