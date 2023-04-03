<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozwiązanie</title>
</head>
<body>
    
<?php

$liczba1 = $_POST["liczba1"];
$liczba2 = $_POST["liczba2"];
$działanie = $_POST["kalkulator"];

if ($działanie == "+"){
    $wynik = $liczba1+$liczba2;
}

if ($działanie == "-"){
    $wynik = $liczba1-$liczba2;
}

if ($działanie == "*"){
    $wynik = $liczba1*$liczba2;
}

if ($działanie == "/"){
    $wynik = $liczba1/$liczba2;
}

echo $wynik;


?>
</br>
<a href="zad2.php">Powrót</a>
</body>
</html>