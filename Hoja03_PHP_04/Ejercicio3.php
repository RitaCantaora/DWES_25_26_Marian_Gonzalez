<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<h2> 3.- Realizar una página web que contenga un formulario con dos cuadros de texto y un botón con el
 siguiente esquema:
 Al pulsar sobre el botón “Enviar datos”, cargará la página ejercicio3_datos.php que recibirá los
 números enteros introducidos en el formulario como parámetros y mostrará una lista de pares de
 números así: desde el menor hasta el mayor el primer número del par, y desde el mayor hasta el
 menor el segundo número del par.
 Por ejemplo, si se introdujo en los cuadros de texto del formulario el número menor 2 y el número
 mayor 8, al pulsar el botón Enviar datos, la página php que carga mostrará:
 Donde “Volver” será un enlace a la página iniciado.</h2>
<body>

    <h1>Lista de Números Pares</h1>

    <form action="" method="POST">
        <label for="inicio">Introduzca un número entero menor:</label><br>
        <input type="number" id="inicio" name="inicio"><br>

        <label for="fin">Introduzca un número entero mayor:</label><br>
        <input type="number" id="fin" name="fin"><br>
        
        <input type="submit" name="enviar" value="Enviar Datos">
    </form>
  
    <?php

    if (isset($_POST['enviar'])) {
        $inicio = $_POST['inicio'];
        $fin = $_POST['fin'];

      

        echo "<h3>Lista de pares de números de $inicio y $fin</h3>";

       
     
            for ($i=$inicio; $i <= $fin; $i++) { 
              for ($i = $inicio ; $i <= $fin ; $i++) {
                  for(  $j = $fin ;$j >= $inicio; $j--) {

                 }; 

            echo "($i,$j) ";

          
        }
    }


        echo "<br><br><a href='Ejercicio3.php'>Volver</a>";
    }        
    ?>

</body>
</html>
