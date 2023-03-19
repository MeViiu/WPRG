<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <span>Wprowadz wartość:</span><br>
    <form action="zad1.php" method="get">
<input type="number" value="1" name="liczba">
<input type="submit" value="Rysuj">
    </form>
<?php
$n = $_GET["liczba"];
// trójkąt rosnący
for ($i = 0; $i < $n; $i++) {
    echo str_repeat(' ', $n-$i-1) . str_repeat('*', $i+1) . "<br>";
}
echo "<br>";
// trójkąt malejący
for ($i = $n-1; $i >= 0; $i--) {
    echo str_repeat(' ', $n-$i-1) . str_repeat('*', $i+1) . "<br>";
}
echo "<br>";


?>
</body>
</html>