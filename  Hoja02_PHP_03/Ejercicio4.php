<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico4</title>
</head>

<body>
    <h2> Haz un script que calcule el número de días transcurridos desde hoy a una fecha dada.</h2>
    <?php


    $fecha1 = "2024-06-15";
    $fecha2 = "2024-09-22";

    // Separar fecha
    list($anio1, $mes1, $dia1) = explode("-", $fecha1);
    list($anio2, $mes2, $dia2) = explode("-", $fecha2);

    // Validar fechas
    if (checkdate($mes1, $dia1, $anio1) && checkdate($mes2, $dia2, $anio2)) {


        $f1 = new DateTime($fecha1);
        $f2 = new DateTime($fecha2);

        // Calcular 
        $diferencia = $f1->diff($f2);

        echo "La diferencia entre $fecha1 y $fecha2 es de " . $diferencia->format("%a días.");
    }


    ?>
</body>

</html>