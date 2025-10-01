<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    
</head>

<h2>Dada una cadena formada por una fecha. Valida si es correcta.</h2>
<body>
   <?php
  
    function validarFecha($fecha) {
        
        $partes = explode('-', $fecha);
        
        // descomponer la fecha en 3 partes 
        if (count($partes) != 3) {
            return "Formato incorrecto. Usa: dd-mm-aaaa";
        }
        
        $dia = $partes[0];
        $mes = $partes[1];
        $año = $partes[2];
        
      
        if (checkdate($mes, $dia, $año)) {
            return "La fecha $fecha es CORRECTA";
        } else {
            return " La fecha $fecha es INCORRECTA";
        }
    }
    
  
    echo validarFecha("25-12-2023") . "<br>";
    echo validarFecha("31-02-2023") . "<br>";
    echo validarFecha("15-13-2023") . "<br>";
    echo validarFecha("01-01-2024") . "<br>";

   
   ?>
</body>
</html>