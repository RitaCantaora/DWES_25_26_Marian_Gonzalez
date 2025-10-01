<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<h2>Generar los primeros 10 números de la serie de números triangulares: Los números triangulares 
son aquellos que se forman al sumar los números naturales consecutivos: 1, 3 (suma de 1 y de 2), 6 
(suma de 1, 2 y 3), 10 (suma de 1, 2, 3 y 4), 15 (suma de 1, 2, 3, 4, 5)..</h2>
<body>
   <?php
   
   $suma=0;

for ($i=1; $i <=10; $i++) { 

$suma += $i;

echo "Numero Trinagular $i: $suma</br>";

}
   ?>
</body>
</html>