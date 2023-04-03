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
function generateRandomArray($n) {
  $array = array();

  for ($i = 0; $i < $n; $i++) {
    array_push($array, rand());
  }

  return $array;
}

$numbers = generateRandomArray(10);

$min = $numbers[0];
$max = $numbers[0];

foreach ($numbers as $number) {
  if ($number < $min) {
    $min = $number;
  }
  if ($number > $max) {
    $max = $number;
  }
}

echo "Wygenerowana tablica: " . implode(", ", $numbers) . "<br>";
echo "Najmniejszy element: " . $min . "<br>";
echo "Największy element: " . $max . "<br>";

?>

</body>
</html>