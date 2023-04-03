<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <span>Wprowadz słowa:</span><br>
    <form action="zad2.php" method="get">
<input type="text"  name="wyraz">
<input type="text"  name="wyra">
<input type="submit" value="Wypisuj">
    </form>
<?php
$word1 = $_GET["wyraz"];
$word2 = $_GET["wyra"];
function alternate_chars($word1, $word2) {
    $result = '';
    $len1 = strlen($word1);
    $len2 = strlen($word2);
    $min_len = min($len1, $len2);
    
    for ($i = 0; $i < $min_len; $i++) {
      $result .= $word1[$i] . $word2[$i];
    }
    
    if ($len1 > $len2) {
      $result .= substr($word1, $min_len);
    } else if ($len2 > $len1) {
      $result .= substr($word2, $min_len);
    }
    
    return $result;
  }

  echo alternate_chars($word1,$word2)

?>
</body>
</html>