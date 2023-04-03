<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
<form action="zad4.php" method="get">
    <input type="text" name="email">
    <input type="submit" value="Sprawdź">
</form>

<?php
$email = $_GET["email"];
function isValidEmail($email) {
  // Wyrażenie regularne dla sprawdzania poprawności adresu e-mail
  $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

  // Sprawdzenie czy adres e-mail pasuje do wzorca
  return preg_match($pattern, $email);
}
if (isValidEmail($email)) {
  echo "Adres e-mail jest poprawny";
} else {
  echo "Adres e-mail jest niepoprawny";
}

?>
</body>
</html>