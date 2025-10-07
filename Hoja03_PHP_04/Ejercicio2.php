<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<h2>Realiza una página ejercicio2.php que contenga un formulario con dos cuadros de texto para
    ingresar el rango de números (inicio y fin) y un botón.Al pulsar el botón "Generar Tabla", la propia página recibirá los números ingresados y mostrará una
    tabla HTML que muestra las tablas de multiplicar para todos los números en el rango especificado.</h2>

<body>

    <h1>Generar Tabla de Multiplicar</h1>

    <form action="" method="POST">
        <label for="numero">Numero de Inicio:</label><br>
        <input type="number" id="inicio" name="inicio"><br>

        <label for="numero">Numero de fin:</label><br>
        <input type="number" id="fin" name="fin"><br>

        <input type="submit" name="enviar" value="Generar Tabla">
    </form>

    <?php

    if (isset($_POST['enviar'])) {
        $inicio = $_POST['inicio'];
        $fin = $_POST['fin'];

        echo "<h3>Tablas de multiplicar del $inicio al $fin</h3>";

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Número</th><th>Operación</th><th>Resultado</th></tr>";


        for ($i = $inicio; $i <= $fin; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<tr>
                            <td>$i</td>
                            <td>$i * $j</td>
                            <td>$resultado</td>
                          </tr>";
            }
        }

        echo "</table>";
    }


    ?>


</body>

</html>