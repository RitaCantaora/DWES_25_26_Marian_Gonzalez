<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<h2> Haz un programa que realice la fusión de dos arrays de 20 números ordenados. Implementa las
    funciones:
    • cargar: recibirá un parámetro $numeroElementos y devolverá un array con números
    aleatorios
    • ordenar: recibirá el array como parámetro y lo ordenará
    • intersección: recibe dos arrays ordenados y devuelve un array con los elementos comunes a
    ambos.</h2>

<body>
    <?php

    function cargar(int $numeroElementos): array
    {
        $array = [];
        for ($i = 0; $i < $numeroElementos; $i++) {

            $array[] = rand(1, 100);
        }

        return $array;
    }



    function ordenar($array)
    {

        sort($array);

        return $array;
    }

    function intersect($array1, $array2)
    {

        $resultado = [];

        foreach ($array1 as $valor) {

            if (in_array($valor, $array2)) {
                {
                    $resultado[] = $valor;
                }
            }
         
        }
           return $resultado;
    }



    $array1 = ordenar(cargar(20));
    $array2 = ordenar(cargar(20));


    echo "<br> Array 1 de 20 elementos oredenados :\n";
    print_r($array1);

    echo "<br> Array 2 de 20 elementos oredenados:\n";
    print_r($array2);

    echo " <br> Intersección:\n";
    print_r(intersect($array1, $array2));
    echo "<br>"

    ?>
</body>

</html>