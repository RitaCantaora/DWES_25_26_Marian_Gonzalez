<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>

<body>

    <h2> Haz un script que sume un número de horas a una fecha.</h2>
    <?php

    date_default_timezone_set('Europe/Madrid');

    $horasSumar = 2;
    $fechaActual = new DateTime();

    $fechaResultado = clone $fechaActual;
    $fechaResultado->modify("+{$horasSumar} hours");


    echo "Fecha actual: " . $fechaActual->format("d-m-Y H:i:s") . "<br>";
    echo "La fecha actual más $horasSumar horas es: " . $fechaResultado->format("d-m-Y H:i:s");

    ?>

</body>

</html>