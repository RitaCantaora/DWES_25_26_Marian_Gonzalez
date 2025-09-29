<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<h2>
Crea un fichero PHP que muestre por pantalla el mensaje “Conversor de grados Celsius a 
Fahrenheit”. 
A continuación, define dos variables $grados y $resultado y asígnale un valor a cada una. 
En la variable resultado convierte $grados la fórmula F = (C * 9/5) + 32. 
Muestra por pantalla el tipo que se le asigna a cada variable utilizando la función gettype().
Por último, usa la función var_dump() para mostrar la información de cada variable.
    
</h2>

    <?php

    echo "<strong>Conversor de grados Celsius a Fahrenhei</strong>t<br>";

    //variable de grados 
    $grados=25;

    //formula para el resultado
    $resultado = ($grados * 9/5) + 32;

echo "$grados celsius equivalen a $resultado fahrenheit. <br><br>" ;

  //  variable usando gettype()
   
    echo "Variable de grados : " . gettype($grados) . "<br>";
    echo "Variable de resultado : " . gettype($resultado) . "<br><br>";

    //  var_dump()
   
    echo "Variable de grados  : ";
    var_dump($grados);
    echo "<br>Variable de resultado : ";
    var_dump($resultado);

?>

</body>
</html>
