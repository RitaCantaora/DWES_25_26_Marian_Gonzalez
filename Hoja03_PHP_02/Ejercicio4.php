<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<h2> Dado un número de tarjeta de crédito en formato 1234-5678-9012-3456:
    • Mostrar el número de la tarjeta sin los guiones.
    • Mostrar los primeros cuatro dígitos que identifican la entidad emisora.
    • Mostrar los últimos cuatro dígitos que corresponden a los de la cuenta del cliente.
    • Verificar si el número de la tarjeta es válido utilizando el algoritmo de Luhn (algoritmo que
    se usa para validar números de tarjetas de crédito)
    Realiza el programa dividiendo la funcionalidad en varios métodos</h2>

<body>
    <?php


    $tarjeta = "1234-5678-9012-3456";
    echo "<h3>Tarjeta: $tarjeta</h3>";

    function quitarGuiones($tarjeta)
    {
        return str_replace('-', '', $tarjeta);
    }


    function obtenerEntidad($tarjeta)
    {
        $NumDelante = $tarjeta;
        return substr($NumDelante, 0, 4);
    }


    function obtenerCuenta($tarjeta)
    {
        $NumDetras = $tarjeta;
        return substr($NumDetras, -4);
    }



    echo "1. Sin guiones: " . quitarGuiones($tarjeta) . "<br><br>";
    echo "2. Entidad emisora: " . obtenerEntidad($tarjeta) . "<br><br>";
    echo "3. Cuenta del cliente: " . obtenerCuenta($tarjeta) . "<br><br>";


    ?>
</body>

</html>