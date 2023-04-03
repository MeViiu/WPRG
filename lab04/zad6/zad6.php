<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad6</title>
</head>
<body>

<?php

function isSubset($arr1, $arr2) {
  // wykorzystanie funkcji array_diff() do sprawdzenia czy istnieją elementy w $arr1, 
  // które nie występują w $arr2, a następnie zwrócenie wartości logicznej negacji tego wyniku
  return !array_diff($arr1, $arr2);
}

// Przykład użycia
echo "Tablica1: 1,3"."<br>";
echo "Tablica2: 1,2,3,4,5"."<br>";
$arr1 = array(1, 3);
$arr2 = array(1, 2, 3, 4, 5);
if (isSubset($arr1, $arr2)) {
  echo "Pierwsza tablica jest podzbiorem drugiej tablicy";
} else {
  echo "Pierwsza tablica nie jest podzbiorem drugiej tablicy";
}

echo "<br><br>";

echo "Tablica1: 1,6"."<br>";
echo "Tablica2: 1,2,3,4,5"."<br>";
$arr1 = array(1, 6);
$arr2 = array(1, 2, 3, 4, 5);
if (isSubset($arr1, $arr2)) {
  echo "Pierwsza tablica jest podzbiorem drugiej tablicy"."<br>";
} else {
  echo "Pierwsza tablica nie jest podzbiorem drugiej tablicy";
}

?>

</body>
</html>