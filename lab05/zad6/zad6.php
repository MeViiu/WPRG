<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad6</title>
</head>
<body>
<form action="zad6.php" method="get">
    <input type="text" name="ipAddress">
    <input type="submit" value="Sprawdź">
</form>

<?php
$ipAddress = $_GET["ipAddress"];

function removeLeadingZerosFromIp($ipAddress) {
  $pattern = '/\b0+(\d+)/'; // szukaj wiodących zer przed liczbą
  $replacement = '${1}'; // zastąp liczbą bez zer

  $newIpAddress = preg_replace($pattern, $replacement, $ipAddress);

  return $newIpAddress;
}
$newIpAddress = removeLeadingZerosFromIp($ipAddress);
echo $newIpAddress;
?>
</body>
</html>