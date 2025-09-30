<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>
    <h2>Haz un script que reste un número de días a la fecha</h2>

    <?php

    $diasARestar = 5;
    $fechaActual = new DateTime();

    $fechaActual->modify("-$diasARestar days");

    $fechaResultado = $fechaActual->format("d-m-Y");

    echo "La fecha actual menos $diasARestar días es: $fechaResultado";
    
    ?>
</body>

</html>