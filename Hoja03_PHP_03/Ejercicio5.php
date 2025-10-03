<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<h2> Crear un array llamado estudiantes que contenta el nombre de varios estudiantes y sus
    respectivas calificaciones en varias asignaturas.
    • Crear una función llamada promedioEstudiante que calcule el promedio de notas de un
    estudiante específico.
    • Crear una función llamada mejorEstudiante que devuelva el nombre del estudiante con el
    promedio más alto.
    • Crear una función llamada mostrarNotas que imprima el nombre de cada estudiante y sus
    notas en una tabla HTML</h2>

<body>
    <?php
    
    $estudiantes = [
        [
            "Juan" => ["DWES" => 3, "DWC =>5", "FOL" => 1],
            "Pepe" => ["DWES" => 5, "DWC" =>2, "FOL" => 6],
            "Ana" => ["DWES" => 5, "DWC" => 2, "FOL" => 6],

        ]
    ];
    function promedioFacil(array $estudiantes,string $nombre )
    {

        $suma = 0;
        foreach ($estudiantes[$nombre] as $nota) {

            $suma += $nota;
        }
        return $suma / count($estudiantes[$nombre]);
    }



    function mejorEstudiante(array $estudiantes)
    {

        $mejorEstudiante = "";
        $mejorPromedio = 0;

        foreach ($estudiantes as $nombre=>$notas) {
            $promedio = promedioFacil($estudiantes, $nombre);
            if ($promedio > $mejorPromedio) {
                $mejorPromedio = $promedio;
                $mejorEstudiante = $nombre;
            }
        }
        return  $mejorEstudiante;
    }


        $promedio = promedioFacil($estudiantes , "Juan");
        echo "Promedio de " . $estudiantes[$nombre] . ": " . $promedio . "<br>";
    

       echo "El mejor estudiante es: " . mejorEstudiante($estudiantes);  


function mostrarNotas(array $estudiantes) {
    echo "<table border='1'>";
    echo "<tr><th>Alumno</th><th>DWES</th><th>DWC</th><th>FOL</th></tr>";
    
    foreach ($estudiantes as $nombre => $notas) {
        echo "<tr>";
        echo "<td>$nombre</td>";
        foreach ($notas as $nota) {
            echo "<td>$nota</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

/*

$claves = array_keys($estudiantes); // ["Juan","Pepe","Ana"]
for ($i = 0; $i < count($claves); $i++) {
    $nombre = $claves[$i];
    $notas  = $estudiantes[$nombre];
    echo "$i -> $nombre\n";
}


*/


    $estudiantes[[
            "nombre" => "Juan",
            "modulo" => ["DWES" => 3, "DWC =>5", "FOL" => 1],
            "nombre" => "Pepe",
            "modulo" => ["DWES" => 5, "DWC =>2", "FOL" => 6],
            "nombre" => "Ana",
            "modulo" => ["DWES" => 5, "DWC =>2", "FOL" => 6],

        ]];

    function promedio($estudiantes)
    {


        foreach ($estudiantes as $estudiante => $notas) {

            if (in_array($estudiante, $notas)) {
            }
        }
    }
    ?>
</body>

</html>