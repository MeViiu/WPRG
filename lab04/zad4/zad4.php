<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
<?php

$array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$k = 5;
asort($array);
$resul = array_unique($array);
$min = array_slice($resul, 0, $k);
foreach ($min as $key => $val) {
    echo "$val ";
}
echo"<br>";
arsort($array);
$resul = array_unique($array);

$min = array_slice($resul, 0, $k);
foreach ($max as $key => $val) {
    echo "$val ";
}
?>
</body>
</html>