<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
<form action="zad2.php" method="get">
    <input type="text" name="wyraz">
    <input type="submit" value="Sprawdź">
</form>

<?php
$wyraz = $_GET["wyraz"];
function zawiera_dwukrotnie_samogloske($napis) {
  return preg_match('/[aeiouy]{2}/i', $napis) === 1;
}
if (zawiera_dwukrotnie_samogloske($wyraz)) {
  echo 'Słowo zawiera dwie samogłoski obok siebie!';
} else {
  echo 'Słowo nie zawiera dwóch samogłosek obok siebie.';
}


?>
</body>
</html>