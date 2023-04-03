<!DOCTYPE html>
<html>
<head>
	<title>Trójkąty skierowane we wszystkie strony</title>
</head>
<body>
	<form method="post">
		<label for="n">Podaj liczbę n:</label>
		<input type="number" id="n" name="n">
		<button type="submit">Generuj trójkąty</button>
	</form>

	<?php
		function generate_triangles($n) {
			for ($i = 1; $i <= $n; $i++) {
				for ($j = 1; $j <= $i; $j++) {
					echo "*";
				}
				echo "<br>";
			}
			for ($i = $n; $i >= 1; $i--) {
				for ($j = 1; $j <= $i; $j++) {
					echo "*";
				}
				echo "<br>";
			}
			for ($i = 1; $i <= $n; $i++) {
				for ($j = 1; $j <= $n; $j++) {
					if ($j <= $i) {
						echo "*";
					} else {
						echo "&nbsp;";
					}
				}
				echo "<br>";
			}
			for ($i = 1; $i <= $n; $i++) {
				for ($j = $n; $j >= 1; $j--) {
					if ($j <= $i) {
						echo "*";
					} else {
						echo "&nbsp;";
					}
				}
				echo "<br>";
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$n = $_POST["n"];
			generate_triangles($n);
		}
	?>
</body>
</html>