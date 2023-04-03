<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
<form action="zad3.php" method="get">
    <input type="text" name="wyraz">
    <input type="submit" value="Sprawdź">
</form>

<?php
$wyraz = $_GET["wyraz"];

function check_first_last_vowel($string) {
  $regex = '/^([aeiouy]).*\1$/i';
  
  $match = preg_match($regex, $string);
  
  return $match ? true : false;
}

if (check_first_last_vowel($wyraz)){
  echo "Wyraz zawiera taką samą samą samogłośkę";
}else{
  echo "Wyraz nie zawiera takich samych samogłosek";
}
?>
</body>
</html>