<?php

$verbos = ["Tomar", "Animar", "Aplaudir", "Comprimir", "Coser", "Correr"];


$sufijos = [

    "ar" =>  ["o", "as", "a", "amos", "áis", "an"],
    "er" => ["o", "es", "e", "emos", "éis", "en"],
    "ir" => ["o", "es", "e", "imos", "ís", "en"]
];

function elergirVerbo($verbos)
{
    $numVerbos = count($verbos);
    $verbo = rand(0, $numVerbos);
    return $verbos[$verbo];
}




function conjugar($verbo, $sufijos)
{

    $tamano = strlen($verbo);
    $raiz = substr($verbo, 0, $tamano - 2);
    $terminacion = substr($verbo, -2);
    $conjugaciones = [];
    foreach ($sufijos[$terminacion] as $sufijo) {
        $conjugaciones[] = $raiz . $sufijo;
    }

    return $conjugaciones;
}

$verbo = elergirVerbo($verbos);
$conjugacion = conjugar($verbo, $sufijos);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6 Verbos </title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>


    <h2 style="text-align: center;">Verbos Regulares</h2>

    <table>
        <tr>
            <th>Conjugación</th>
        </tr>

        <?php

        foreach ($conjugacion as $c) {

            echo "<tr>";
            echo "<td>" . $c . "</td>";

            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>