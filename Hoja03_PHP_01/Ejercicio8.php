<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<h2> Usa un bucle para contar cuántos números entre 1 y 100 son divisibles por 3 y por 5, y muestra 
el resultado.</h2>
<body>
   <?php
   
     $contador = 0;

    for ($i = 1; $i <= 100; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0) {

            $contador++;
        }

     
    }

    echo "Los nùmeros divisebles entre 3 y 5 son: $contador";

   ?>
</body>
</html>