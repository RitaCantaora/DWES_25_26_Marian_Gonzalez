<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<h2>Escribe un programa que genere todos los números primos entre 1 y 100 utilizando un bucle</h2>

<body>
    <?php

    echo "Números primos entre 1 y 100:<br>";

    for ($i = 2; $i <= 100; $i++) {
        // Contador 
        $divisores = 0;

        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $divisores++;
            }
        }

        // Un número es primo 2 divisores (1 y él mismo)
        if ($divisores == 2) {
            echo $i . " es primo<br>";
        }
    }

    ?>
</body>

</html>