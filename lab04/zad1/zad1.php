<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
<?php

$array = array(4, 8, 1, 5, 3);
$suma = array_sum($array);

$result = $suma/sizeof($array);

echo "<span>Średnia tablicy:</span><br>";
echo $result;


?>
</body>
</html>