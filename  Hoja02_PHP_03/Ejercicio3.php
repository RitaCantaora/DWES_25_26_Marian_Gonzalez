<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico3</title>
</head>

<body>
    <?php


    // fecha 
    $fecha = "2024-02-29";

    // Separar el año, mes y día
    list($anio, $mes, $dia) = explode("-", $fecha);

    // Comprobar fecha 
    if (checkdate($mes, $dia, $anio)) {
        echo "La fecha $fecha es correcta.";
    } else {
        echo "La fecha $fecha no es correcta.";
    }


    ?>
</body>

</html>