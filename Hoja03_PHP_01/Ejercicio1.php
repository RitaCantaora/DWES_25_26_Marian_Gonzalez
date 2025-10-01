<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>
    <h2>Utiliza un bucle que creas oportuno para sumar los números naturales impares entre 1 y 50 y
        muestra el resultado de la suma</h2>
    <?php


    $suma = 0;
    for ($i = 1; $i < 50; $i += 2) {

        $suma += $i;
    }

    echo "La suma de los números impares entre 1 y 50 es: " . $suma;

    ?>
</body>

</html>