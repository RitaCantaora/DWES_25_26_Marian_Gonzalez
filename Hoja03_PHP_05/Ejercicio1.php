<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<h2>Realiza un array en el que introduzcas al menos 10 nombres de películas. Crea un formulario en
    el que haya una caja de texto que busque entre las películas disponibles. Utiliza únicamente una
    página php.</h2>

<body>

    <h1>Buscar una película</h1>

    <form action="" method="POST">
        <input type="text" name="titulo" placeholder="Introduce película..." required>
        <input type="submit" name="buscar" value="Buscar Pelicula">
    </form>

</body>

</html>

<?php

$peliculas = [

    "2001: Una odisea del espacio",
    "El padrino",
    "El apartamento",
    "En busca del arca perdida",
    "Los siete samuráis",
    "El verdugo",
    "Los 400 golpes",
    "Ser o no ser",
    "Cuentos de Tokio",
    "Pulp Fiction"
];

$busqueda = [];
$titulo= $_POST["titulo"];

if (isset($_POST['buscar'])){



    foreach ($peliculas as $pelicula) {
        if (str_contains(strtolower($pelicula), strtolower($titulo))) {
            $busqueda[] = $pelicula;
        }
    }
   echo "<h3>Resultados:</h3><ul>";

      foreach ($busqueda as $resultado) {
                echo "<li>$resultado</li>";
            }
            echo "</ul>";
}
?>

</body>

</html>