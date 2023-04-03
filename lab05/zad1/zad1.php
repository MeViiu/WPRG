<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
<form action="zad1.php" method="get">
    <input type="text" name="wyraz">
    <input type="submit" value="Sprawdź">
</form>

<?php
$wyraz = $_GET["wyraz"];
function is_hexadecimal($str) {
    return preg_match('/^[0-9a-fA-F]+$/', $str);
  }
  if (is_hexadecimal($wyraz)) {
    echo "Podany napis zawiera jedynie znaki szesnastkowe.";
  } else {
    echo "Podany napis zawiera znaki spoza systemu szesnastkowego.";
  }


?>
</body>
</html>