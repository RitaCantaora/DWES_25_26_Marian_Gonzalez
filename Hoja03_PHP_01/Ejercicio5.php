<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<h2>Genera los números de Fibonacci: 0, 1,1, 2, 3, 5, 8, 13, …</h2>
<body>
   <?php
   
   
$numero = 10;


$a = 0;
$b = 1;


echo $a;

for ($i = 1; $i < $numero; $i++) {
    echo ', ' . $b;
    $aux = $b;     
    $b = $a + $b;   
    $a = $aux;    
}
   ?>
</body>
</html>