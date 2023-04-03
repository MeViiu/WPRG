<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
<?php

$array = array("firstName"=>"Nikodem",
"lastName"=>"Ścibiorski",
"age"=> "21");
ksort($array);
foreach($array as $key => $val){
    echo "Klucz $key, przyjmuje wartość $val"."<br>";
}



?>
</body>
</html>