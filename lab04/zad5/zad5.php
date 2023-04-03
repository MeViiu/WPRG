<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>

<?php

function addHashBeforeElement($arr, $elem) {
  // Sprawdź, czy element znajduje się w tablicy
  $key = array_search($elem, $arr);

  // Jeśli element jest w tablicy, wstaw przed nim '#' i zwróć nową tablicę
  if ($key !== false) {
    array_splice($arr, $key, 0, "#");
  }

  return $arr;
}

// Przykładowe użycie
$tablica = array(1, 2, 3, 4, 5);
$elem = 3;
$nowa_tablica = addHashBeforeElement($tablica, $elem);
print_r($nowa_tablica);
?>

</body>
</html>