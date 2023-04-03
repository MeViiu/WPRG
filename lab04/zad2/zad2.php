<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
<span>Wprowadz wartość:</span><br>
    <form action="zad2.php" method="get">
<input type="number" value="1" name="liczba">
<input type="submit" value="Rysuj">
    </form>
<?php
$n = $_GET["liczba"];

foreach (range(0, $n, 4) as $number) {
    echo $number." ";
}

?>
</body>
</html>