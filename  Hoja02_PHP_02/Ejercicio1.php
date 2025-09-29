<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    echo "Conversor de grados Celsius a Fahrenheit<br>";

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
