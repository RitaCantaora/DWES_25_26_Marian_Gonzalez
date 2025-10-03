<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table class= "table table-dark table-striped ">
    <?php
foreach ($_SERVER as $clave => $valor) {

    echo "<tr><td> $clave .</tr></td>".  "<tr><td> $valor .</tr></td>";

}

?>
    </p>
</body>
</html>