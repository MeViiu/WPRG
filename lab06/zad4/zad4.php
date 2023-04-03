<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
    
<h1>Przesyłanie rozwiązania</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		<label>Imię:</label>
		<input type="text" name="firstName" required><br>
		<label>Nazwisko:</label>
		<input type="text" name="lastName" required><br>
		<label>Numer albumu:</label>
		<input type="text" name="albumNumber" required><br>
		<label>Wybierz plik:</label>
		<input type="file" name="file" required><br>
		<input type="submit" value="Prześlij">
	</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$albumNumber = $_POST['albumNumber'];

	// tworzenie nazwy folderu
	$folderName = $lastName . substr($firstName, 0, 1) . $albumNumber;

	// tworzenie folderu
	if (!file_exists($folderName)) {
		mkdir($folderName);
	}

	// przenoszenie pliku
	$targetDir = $folderName . '/';
	$targetFile = $targetDir . basename($_FILES['file']['name']);
	if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
		echo 'Plik został przesłany.';
	} else {
		echo 'Wystąpił problem podczas przesyłania pliku.';
	}
}
?>


</body>
</html>