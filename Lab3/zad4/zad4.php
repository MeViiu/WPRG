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
function transposeArray($arr) {
  $rows = count($arr);
  $cols = count($arr[0]);
  
  // stworzenie pustej transponowanej tablicy
  $transposedArr = array();
  for ($i = 0; $i < $cols; $i++) {
    $transposedArr[$i] = array();
  }
  
  // wypełnienie transponowanej tablicy wartościami z oryginalnej tablicy
  for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
      $transposedArr[$j][$i] = $arr[$i][$j];
    }
  }
  
  return $transposedArr;
}

// przykładowa tablica
$myArray = array(
  array(1.0, 2.0, 3.0),
  array(4.0, 5.0, 6.0)
);

// wywołanie funkcji i wyświetlenie wyniku
echo "1 2 3 <br>";
echo "4 5 6 <br>";
echo "<br>";
$transposedArray = transposeArray($myArray);
foreach ($transposedArray as $row) {
  echo implode(" ", $row) . "<br>";
}
?>

</body>
</html>