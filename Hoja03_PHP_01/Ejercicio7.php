<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<h2> Programa que pida un número entero y calcule la suma de sus dígitos. Por ejemplo, para el 
número 1234, la suma sería 1 + 2 + 3 + 4 = 10</h2>
<body>
   <?php
   
    $numero = 1234;
    $suma = 0;
    $original = $numero;

    while ($numero > 0) {

        $cadena = $numero % 10;
      
        $numero = $numero / 10;

        $suma += $cadena;
    }

    echo "La suma de los dígitos del número $original es $suma.";
   
   ?>
</body>
</html>