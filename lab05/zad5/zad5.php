<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
<form action="zad5.php" method="get">
    <input type="text" name="napis">
    <input type="submit" value="Sprawdź">
</form>

<?php
$napis = $_GET["napis"];

function zawiera_samogloske($napis) {
  $wyrazenie_regularne = '/\b[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]+\b/i'; // wyrażenie regularne wyszukujące słowa bez samogłosek
  preg_match($wyrazenie_regularne, $napis, $wynik);
  return !$wynik; // zwracanie wartości logicznej negacji wyniku wyszukiwania
}
if (zawiera_samogloske($napis)) {
  echo "Napis zawiera tylko słowa z samogłoskami.";
} else {
  echo "Napis zawiera przynajmniej jedno słowo bez samogłosek.";
}


?>
</body>
</html>