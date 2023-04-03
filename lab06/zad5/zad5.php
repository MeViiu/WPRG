<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
<h2>Dodaj nową osobę:</h2>
<form action="zad5.php" method="post">
	ID: <input type="text" name="id"><br>
	Imię: <input type="text" name="imie"><br>
	Nazwisko: <input type="text" name="nazwisko"><br>
	<input type="submit" value="Dodaj osobę">
</form>

<hr>

<h2>Wyszukaj osobę:</h2>
<form action="zad5.php" method="get">
	ID: <input type="text" name="id"><br>
	<input type="submit" value="Szukaj">
</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$id = $_POST['id'];
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];

	// sprawdzenie czy osoba o podanym ID istnieje już w pliku
	$lines = file('baza.csv');
	foreach ($lines as $line) {
		$data = explode(';', $line);
		if($data[0] == $id) {
			echo "Osoba o podanym ID już istnieje w bazie.";
			exit;
		}
	}

	// dodanie osoby do pliku
	$file = fopen('baza.csv', 'a');
	fwrite($file, $id . ';' . $nazwisko . ';' . $imie . "\n");
	fclose($file);

	echo "Osoba dodana do bazy.";
}
?>
<!-- kod szukaj.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == "GET") {
	$id = $_GET['id'];

	// szukanie osoby w pliku
	$lines = file('baza.csv');
	foreach ($lines as $line) {
		$data = explode(';', $line);
		if($data[0] == $id) {
			echo "Imię: " . $data[2] . "<br>";
			echo "Nazwisko: " . $data[1];
			exit;
		}
	}

	echo "Osoba o podanym ID nie istnieje w bazie.";
}
?>