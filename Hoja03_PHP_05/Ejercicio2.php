<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<h2> Copia el código del ejercicio anterior y para cada película encontrada muestra también su 
imagen. Se deberá mostrar también el número de películas encontradas  .</h2>

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

   "2001: Una odisea del espacio" => "imagenes/2001_odisea_del_espacio.jpg",
    "El padrino" => "imagenes/El_padrino.jpg",
    "El apartamento" => "imagenes/El_apartamento.jpg",
    "En busca del arca perdida" => "imagenes/arca_perdida.jpg",
    "Los siete samuráis" => "imagenes/Los_siete_samurais.jpg",
    "El verdugo" => "imagenes/El_verdugo.jpg",
    "Los 400 golpes" => "imagenes/Los_400_golpes.jpg",
    "Ser o no ser" => "imagenes/ser_o_no_ser.jpg",
    "Cuentos de Tokio" => "imagenes/cuentos_tokio.jpg",
    "Pulp Fiction" => "imagenes/pulp_fiction.jpg"
];


$busqueda = [];
$titulo= $_POST["titulo"];

if (isset($_POST['buscar'])){



    foreach ($peliculas as $pelicula =>$imagen) {
        if (str_contains(strtolower($pelicula), strtolower($titulo))) {
           $busqueda[$pelicula] = $imagen;
        }
    }
   echo "<h3>Resultados:</h3><ul>";

        echo "<h3>Se han encontrado " . count($busqueda) . " película(s):</h3>";
        echo "<ul>";
      foreach ($busqueda as $resultado => $imagen) {
        
                  echo "<li>
                    <strong>$resultado</strong><br>
                    <img src='$imagen' alt='$resultado' width='150'>
                  </li>";
        }
        
        echo "</ul>";
    }
?>

</body>
</html>
?>

</body>

</html>