<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<h2>Implementa una función restar que reste dos números que se le pasen como parámetro y
    devuelva el resultado.
    Crea otra función mostrar que reciba una cadena de texto y un entero. Simplemente hará un echo
    con la concatenación de ambos parámetros.
    Después llama a la función restar y el valor devuelto será el segundo parámetro de la llamada del
    método mostrar.</h2>

<body>
    <?php
    function restar($num1, $num2)
    {
        return $num1 - $num2;
    }



    function mostrar($cadena, $entero)
    {
        return $cadena . $entero;
    }

    $resultado = restar(10, 5);
    echo mostrar("El resultado de la resta es: ", $resultado);


    ?>

</body>

</html>