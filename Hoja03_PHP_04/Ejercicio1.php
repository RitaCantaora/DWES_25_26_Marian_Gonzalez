<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<h2> 1.- Realiza una página web ejercicio1.php que contenga un formulario con un cuadro de texto y un
    botón. Al introducir un número en el cuadro de texto y hacer clic en el botón, se debe mostrar una
    tabla HTML que muestre los cuadrados de los números desde 1 hasta el número introducido.</h2>

<body>

    <h1>Cuadrado de Números</h1>

    <form action="" method="POST">
        <label for="numero">Introduzca un número entero:</label><br>
        <input type="number" id="numero" name="numero"><br>
        <input type="submit" name="enviar" value="enviar">
    </form>

    <?php

    if (isset($_POST['enviar'])) {
        $numero = (int)$_POST['numero'];

        echo "<h3>Tabla de cuadrados del 1 al $numero</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Número</th><th>Cuadrado</th></tr>";

        for ($i = 1; $i <= $numero; $i++) {
            $cuadrado = $i * $i;

            echo "<tr>
                <td>$i</td>
                <td>$cuadrado</td>
                </tr>";
        }
        echo "</table>";
    }

    ?>