<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
<span>Wprowadz wartość:</span><br>
    <form action="zad5.php" method="get">
<input type="number" value="1" name="liczba">
<input type="submit" value="Licz">
    </form>
<?php
$n = $_GET["liczba"];
function checkNumber($n) {
  $digits = str_split((string)$n);
  $sum = 0;
  foreach ($digits as $digit) {
    $sum += pow($digit, count($digits));
  }
  if ($sum == $n) {
    echo "Liczba: $n, jest równa: $sum = ";
    foreach ($digits as $digit) {
      echo "$digit^".count($digits)." + ";
    }
    echo "0 = $n.";
  } else {
    echo "Liczba: $n, jest nie równa: ";
    foreach ($digits as $digit) {
      echo "$digit^".count($digits)." + ";
    }
    echo "0 = $sum.";
  }
}

// przykłady użycia
checkNumber($n);

?>

</body>
</html>