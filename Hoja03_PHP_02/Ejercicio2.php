<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<h2> Dado un número, definir un conjunto de funciones para hacer una serie de comprobaciones
    como: una que determine si el número es primo, otra que calcule su factorial y otra que verifique si
    es par o impar. Luego, llama a todas las funciones y muestra los resultados en el código principal.</h2>

<body>
    <?php
    $numero = 7;

    function esPrimo($numero)
    {
        if ($numero < 2) return false;

        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) { 
                return false;
            }
        }
        return true;
    }


    function calcularFactorial($numero)
    {
        if ($numero == 0 || $numero == 1) {
            return 1;
        }

        $resultado = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $resultado = $resultado * $i;
        }
        return $resultado;
    }


    function esPar($numero)
    {
        if ($numero % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }



    echo "Para el número: " . $numero . "<br>";
    echo "1. " . esPrimo($numero) ? "$numero es primo" :"$numero no es primo". "<br>";
    echo "2. Factorial: " . calcularFactorial($numero) . "<br>";
    echo "3. " . esPar($numero) ? " $num es par " : "$num no es par"."<br>";

    ?>
</body>

</html>