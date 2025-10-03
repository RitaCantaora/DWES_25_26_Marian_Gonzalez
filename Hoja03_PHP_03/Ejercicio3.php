<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico3</title>
</head>
<h2>Realizar un programa en PHP que nos permita calcular la letra del NIF en base al DNI de una
    persona. Para calcular la letra dividiremos el DNI por 23 y dependiendo del resto asignaremos la
    letra correspondiente.</h2>

<body>
    <?php

    $letras =  ['A','B', 'C','D','E','F','G','H','I', 'J','K', 'L','M','N', 'Ñ',
    'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',  'W','X','Y', 'Z'
    ];

    $dni = 12345678;

    function buscarLetra($dni, $letras)
    {


        $buscar = $dni % 23;

        return $letras[$buscar];
    }

    $letraNif = buscarLetra($dni, $letras);

    echo "la letra del $dni es $letraNif"

    ?>
</body>

</html>